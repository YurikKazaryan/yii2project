<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organization".
 *
 * @property integer $id
 * @property string $name
 * @property string $name_short
 * @property string $name_rod
 * @property string $ldap_name
 * @property integer $raion
 * @property integer $parent
 * @property string $forma
 * @property integer $type
 * @property string $ogrn
 * @property string $aindex
 * @property string $adres
 * @property string $inn
 * @property string $kpp
 * @property string $rschet
 * @property string $lschet
 * @property string $descr
 * @property string $bank
 * @property string $tel_code
 * @property string $tel
 * @property string $fax
 * @property string $email1
 * @property string $email2
 * @property integer $deleted
 * @property string $status
 * @property integer $ege_code
 * @property string $f1p1_2
 * @property string $date_obr
 * @property string $date_lic
 * @property integer $archiver
 * @property string $site_addr
 * @property integer $ppe
 * @property string $uchred
 * @property string $lic_num
 * @property string $lic_end
 * @property string $akkr_num
 * @property string $akkr_date
 * @property string $akkr_end
 * @property string $name_dat
 * @property string $add_prikaz
 * @property string $add_prikaz_date
 * @property string $add_type
 * @property string $add_date_prov
 * @property string $add_yur_addr
 * @property string $add_date_egrul
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'name_short', 'name_rod', 'ldap_name', 'raion', 'parent', 'ogrn', 'aindex', 'adres', 'inn', 'kpp', 'rschet', 'lschet', 'descr', 'bank', 'tel_code', 'tel', 'fax', 'email1', 'email2', 'f1p1_2', 'site_addr', 'ppe', 'uchred', 'lic_num', 'lic_end', 'akkr_num', 'akkr_date', 'akkr_end', 'name_dat', 'add_prikaz', 'add_prikaz_date', 'add_type', 'add_date_prov', 'add_yur_addr', 'add_date_egrul'], 'required'],
            [['raion', 'parent', 'type', 'deleted', 'ege_code', 'archiver', 'ppe'], 'integer'],
            [['forma', 'status', 'f1p1_2', 'uchred'], 'string'],
            [['date_obr', 'date_lic', 'lic_end', 'akkr_date', 'akkr_end', 'add_prikaz_date', 'add_date_prov', 'add_date_egrul'], 'safe'],
            [['name'], 'string', 'max' => 250],
            [['name_short', 'tel', 'email1', 'email2', 'lic_num', 'akkr_num', 'add_prikaz', 'add_type'], 'string', 'max' => 50],
            [['name_rod', 'adres'], 'string', 'max' => 150],
            [['ldap_name'], 'string', 'max' => 25],
            [['ogrn'], 'string', 'max' => 13],
            [['aindex'], 'string', 'max' => 6],
            [['inn'], 'string', 'max' => 10],
            [['kpp'], 'string', 'max' => 9],
            [['rschet'], 'string', 'max' => 20],
            [['lschet'], 'string', 'max' => 11],
            [['descr'], 'string', 'max' => 100],
            [['bank', 'site_addr', 'add_yur_addr'], 'string', 'max' => 200],
            [['tel_code'], 'string', 'max' => 5],
            [['fax'], 'string', 'max' => 8],
            [['name_dat'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'name_short' => 'Name Short',
            'name_rod' => 'Name Rod',
            'ldap_name' => 'Ldap Name',
            'raion' => 'Raion',
            'parent' => 'Parent',
            'forma' => 'Forma',
            'type' => 'Type',
            'ogrn' => 'Ogrn',
            'aindex' => 'Aindex',
            'adres' => 'Adres',
            'inn' => 'Inn',
            'kpp' => 'Kpp',
            'rschet' => 'Rschet',
            'lschet' => 'Lschet',
            'descr' => 'Descr',
            'bank' => 'Bank',
            'tel_code' => 'Tel Code',
            'tel' => 'Tel',
            'fax' => 'Fax',
            'email1' => 'Email1',
            'email2' => 'Email2',
            'deleted' => 'Deleted',
            'status' => 'Status',
            'ege_code' => 'Ege Code',
            'f1p1_2' => 'F1p1 2',
            'date_obr' => 'Date Obr',
            'date_lic' => 'Date Lic',
            'archiver' => 'Archiver',
            'site_addr' => 'Site Addr',
            'ppe' => 'Ppe',
            'uchred' => 'Uchred',
            'lic_num' => 'Lic Num',
            'lic_end' => 'Lic End',
            'akkr_num' => 'Akkr Num',
            'akkr_date' => 'Akkr Date',
            'akkr_end' => 'Akkr End',
            'name_dat' => 'Name Dat',
            'add_prikaz' => 'Add Prikaz',
            'add_prikaz_date' => 'Add Prikaz Date',
            'add_type' => 'Add Type',
            'add_date_prov' => 'Add Date Prov',
            'add_yur_addr' => 'Add Yur Addr',
            'add_date_egrul' => 'Add Date Egrul',
        ];
    }
    /**
     * Relations
     */
    public function getOrganizationType()
    {
        return $this->hasMany(OrganizationType::className(),['type' => 'id']);
    }
    /**
     *
     */
    public function getOrganizationsByMunicipality($id)
    {
        return $this->find()->where(['raion' => $id])->orderBy('type')->all();
    }

}
