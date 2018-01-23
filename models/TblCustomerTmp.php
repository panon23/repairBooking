<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_customer_tmp".
 *
 * @property int $ID
 * @property string $Name
 * @property string $Address
 * @property string $Plat
 * @property string $Plong
 * @property string $Email
 * @property string $Tel
 * @property string $Img
 * @property string $FacebookLogin
 * @property int $Status
 * @property string $Create_Date
 */
class TblCustomerTmp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customer_tmp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Address', 'Plat', 'Plong', 'Email', 'Tel', 'Img', 'FacebookLogin', 'Status', 'Create_Date'], 'required'],
            [['Status'], 'integer'],
            [['Create_Date'], 'safe'],
            [['Name', 'Address', 'Img'], 'string', 'max' => 200],
            [['Plat', 'Plong'], 'string', 'max' => 12],
            [['Email'], 'string', 'max' => 100],
            [['Tel', 'FacebookLogin'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'Address' => 'Address',
            'Plat' => 'Plat',
            'Plong' => 'Plong',
            'Email' => 'Email',
            'Tel' => 'Tel',
            'Img' => 'Img',
            'FacebookLogin' => 'Facebook Login',
            'Status' => 'Status',
            'Create_Date' => 'Create  Date',
        ];
    }
}
