<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_technician".
 *
 * @property int $ID
 * @property string $Name
 * @property string $Address
 * @property string $Email
 * @property string $Tel
 * @property string $Img
 * @property int $Status
 * @property string $Create_Date
 * @property string $Update_Date
 * @property int $User_id
 *
 * @property TblBooking[] $tblBookings
 * @property TblBookingTmp[] $tblBookingTmps
 * @property TblAdmin $user
 */
class TblTechnician extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_technician';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Address', 'Email', 'Tel', 'Img', 'Status', 'User_id'], 'required'],
            [['Status', 'User_id', 'Tel'], 'integer'],
            [['Create_Date', 'Update_Date'], 'safe'],
            [['Name', 'Address', 'Img'], 'string', 'max' => 200],
            [['Email'], 'email'],
            [['Tel'], 'string', 'max' => 20],
            [['User_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblAdmin::className(), 'targetAttribute' => ['User_id' => 'ID']],
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
            'Email' => 'อีเมลล์',
            'Tel' => 'เบอร์โทร',
            'Img' => 'รูปภาพ',
            'Status' => 'สถานะ',
            // 'Create_Date' => 'Create  Date',
            // 'Update_Date' => 'Update  Date',
            'User_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBookings()
    {
        return $this->hasMany(TblBooking::className(), ['Technic_id' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBookingTmps()
    {
        return $this->hasMany(TblBookingTmp::className(), ['Technic_id' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(TblAdmin::className(), ['ID' => 'User_id']);
    }
}
