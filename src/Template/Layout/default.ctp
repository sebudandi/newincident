<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Search profiles';
?>


<!DOCTYPE html>
<html>
    <head>
      <?php echo $this->Html-> charset();?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>iNG | Imaginet Limited</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
    <?php
            //Bootstrap
            echo $this->Html->css('dgie/bootstrap/css/bootstrap.min');

            //Theme style
            echo $this->Html->css('dgie/dist/css/AdminLTE.min');
            //AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load
            echo $this->Html->css('dgie/dist/css/skins/_all-skins');
            //Font Awesome
            echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
            //Ionicons
            echo $this->Html->css('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
            //iCheck
            echo $this->Html->css('dgie/plugins/iCheck/flat/blue');
            //Morris chart 
            echo $this->Html->css('dgie/plugins/morris/morris');
            //jvectormap
            echo $this->Html->css('dgie/plugins/jvectormap/jquery-jvectormap-1.2.2');
            //Date Picker
            echo $this->Html->css('dgie/plugins/datepicker/datepicker3');
            //Daterange picker
            echo $this->Html->css('dgie/plugins/daterangepicker/daterangepicker-bs3');
            //bootstrap wysihtml5 - text editor
            echo $this->Html->css('dgie/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min');
        ?>
    </head>
  <!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
    <body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="../../index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->
 <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <?php foreach ($display_menus as $key => $value): ?>
                            <li class="treeview">
                                <a href="#">
                                    <i class="<?php echo $value['CSS']; ?>"></i> <span><?php echo $value['Title']; ?></span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <?php foreach ($value['Submenus'] as $key=>$menu): 
                                        echo '<li>'.$this->Html->link($menu['Submenus']['menu_title'], 
                                            array('controller' => $menu['Submenus']['load_page']), 
                                            array('escape' => false)).'</li>';  
                                    endforeach; ?>
                                </ul>
                            </li>
                            <?php endforeach; ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
            </footer>
        </div><!-- ./wrapper -->

    <?php 
        echo $this->Html->script('dgie/plugins/jQuery/jQuery-2.1.4.min'); 
        echo $this->Html->script('dgie/bootstrap/js/bootstrap.min'); 
        echo $this->Html->script('dgie/plugins/slimScroll/jquery.slimscroll.min'); 
        echo $this->Html->script('dgie/plugins/fastclick/fastclick.min'); 
        echo $this->Html->script('dgie/dist/js/app.min'); 
        echo $this->Html->script('dgie/dist/js/demo'); 
    ?>
    </body>
</html>

