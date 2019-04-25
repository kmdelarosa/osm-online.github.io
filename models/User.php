<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oms_db.user".
 *
 * @property int $u_id
 * @property string $u_fname
 * @property string $u_mname
 * @property string $u_lname
 * @property string $u_suffix
 * @property string $u_phone
 * @property string $u_email
 * @property string $u_type
 * @property string $ec_fname
 * @property string $ec_mname
 * @property string $ec_lname
 * @property string $ec_suffix
 * @property string $ec_phone
 * @property int $establishment_id
 */
class User extends \app\models\UserBase
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oms_db.user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['u_fname', 'u_mname', 'u_lname', 'u_phone', 'u_email', 'u_type', 'ec_fname', 'ec_mname', 'ec_lname', 'ec_phone', 'establishment_id'], 'required'],
            [['establishment_id'], 'integer'],
            [['u_fname', 'u_mname', 'u_lname', 'u_suffix', 'u_phone', 'u_email', 'u_type', 'ec_fname', 'ec_mname', 'ec_lname', 'ec_suffix', 'ec_phone'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_fname' => 'First Name',
            'u_mname' => 'Middle Name',
            'u_lname' => 'Last Name',
            'u_suffix' => 'Suffix',
            'u_phone' => 'Phone Number',
            'u_email' => 'Email',
            'u_type' => 'User Type',
            'ec_fname' => 'First Name',
            'ec_mname' => 'Middle Name',
            'ec_lname' => 'Last Name',
            'ec_suffix' => 'Suffix',
            'ec_phone' => 'Phone Number',
            'establishment_id' => 'Establishment ID',
        ];
    }
}
