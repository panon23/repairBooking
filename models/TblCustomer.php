<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_customer".
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
 * @property string $Update_Date
 *
 * @property TblBooking[] $tblBookings
 * @property TblBookingTmp[] $tblBookingTmps
 */
class TblCustomer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Address', 'Email', 'Tel', 'Img', 'Status'], 'required'],
            [['Status', 'Tel'], 'integer'],
            [['Create_Date', 'Update_Date'], 'safe'],
            [['Name', 'Address', 'Img'], 'string', 'max' => 200],
            [['Plat', 'Plong'], 'string', 'max' => 12],
            [['Email'], 'email'],
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
            'Name' => 'ชื่อ',
            'Address' => 'ที่อยู่',
            'Plat' => 'Plat',
            'Plong' => 'Plong',
            'Email' => 'อีเมลล์',
            'Tel' => 'เบอร์โทร',
            'Img' => 'รูปภาพ',
            'FacebookLogin' => 'Facebook Login',
            'Status' => 'สถานะ',
            'Create_Date' => 'Create  Date',
            'Update_Date' => 'Update  Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBookings()
    {
        return $this->hasMany(TblBooking::className(), ['Cus_id' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBookingTmps()
    {
        return $this->hasMany(TblBookingTmp::className(), ['Cus_id' => 'ID']);
    }
}
