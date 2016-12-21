<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $idPerson
 * @property string $fname
 * @property string $Personcol
 * @property string $lname
 * @property string $mname
 * @property string $dob
 * @property string $pob
 * @property string $photo
 * @property string $nationality
 * @property string $maritialStatus
 * @property string $passportNo
 * @property string $cardid
 * @property int $profession_idprofession
 * @property int $category_idcategory
 * @property int $status_idstatus
 */
class Person extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'idPerson' => false
    ];
}
