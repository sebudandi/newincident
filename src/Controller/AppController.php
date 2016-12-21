<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public $_aclist;

    public function initialize() {

        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
       /**$this->loadComponent('Auth', [
            'authorize' => ['Controller'], // Added this line
            'loginRedirect' => [
                'controller' => 'Dashboard',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);*/
        $this->loadModel('Navigation');
        $this->loadModel('UserLevels');
       // $u_role = $this->Auth->user('role');
        $u_role=1;
        if (isset($u_role)) {
            //$this->set('user', $this->Auth->user());
            $display_menus = $this->BuildMenus($u_role);
            $this->_aclist = $this->AccessRights($u_role);
            $this->set(compact('display_menus'));
            
        }
    }

    public function isAuthorized($user) {
        // Default deny
        return false;
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event) {
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function beforeFilter(Event $event) {
        //$this->Auth->allow(['display']);
    }

    public function BuildMenus($u_role) {
        $allowed_rights = $this->UserLevels->find('all', array('conditions' => array('access_denotor' => $u_role)
                )
        );
        foreach ($allowed_rights as $value) {
            $menu_set = explode(',', $value['allowed_access']);
            $topmenus = $this->TopMenus($menu_set);
        }
        return $topmenus;
    }

    function TopMenus($menu_set) {
        foreach ($menu_set as $key => $value) {
            $topmenus = $this->Navigation->find('all', array(
                'conditions' => array(
                    'parent_option' => 0, 'on_menu'=>'Yes', 'id' => $value)
                    )
            );
            foreach ($topmenus as $key => $tmenu) {
                $submenus = $this->SubMenus($tmenu['id']);
                $menulist[$tmenu['id']]['Title'] = $tmenu['menu_title'];
                $menulist[$tmenu['id']]['CSS'] = $tmenu['css'];
                $menulist[$tmenu['id']]['Submenus'] = $submenus;
            }
        }
        return $menulist;
    }

    function SubMenus($id) {
        $submenulist = $this->Navigation->find('all', array('conditions' => array('parent_option' => $id, 'on_menu' => 'Yes')));
        foreach ($submenulist as $key => $value) {
            $submenus[$key]['Submenus'] = $value;
        }
        return $submenus;
    }

    function AccessRights($u_role) {
        $allowed_rights = $this->UserLevels->find('all', array('conditions' => array('access_denotor' => $u_role)
                )
        );
        foreach ($allowed_rights as $value) {
            $menu_set = explode(',', $value['allowed_access']);
            $aclist = $this->ACList($menu_set);
        }
        return $aclist;
    }

    function ACList($ml) {
        foreach ($ml as $key => $value) {
            $aclist = $this->Navigation->find('all', array('conditions' => array('id' => $value)
                    )
            );
            foreach ($aclist as $key => $tmenu) {
                $accesslist[$tmenu['id']] = $tmenu['load_page'];
            }
        }
        return $accesslist;
    }

}
