<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_admin".
 *
 * @property int $ID
 * @property string $Username
 * @property string $Password
 *
 * @property TblBooking[] $tblBookings
 * @property TblBookingTmp[] $tblBookingTmps
 * @property TblTechnician[] $tblTechnicians
 * @property TblTechnicianTmp[] $tblTechnicianTmps
 */
class TblAdmin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Username', 'Password'], 'required'],
            [['Username'], 'string', 'max' => 20],
            [['Password'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Username' => 'Username',
            'Password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBookings()
    {
        return $this->hasMany(TblBooking::className(), ['User_id' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBookingTmps()
    {
        return $this->hasMany(TblBookingTmp::className(), ['User_id' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblTechnicians()
    {
        return $this->hasMany(TblTechnician::className(), ['User_id' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblTechnicianTmps()
    {
        return $this->hasMany(TblTechnicianTmp::className(), ['User_id' => 'ID']);
    }
}
