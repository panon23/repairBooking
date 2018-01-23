<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_booking_tmp".
 *
 * @property int $ID
 * @property int $Cus_id
 * @property int $Technic_id
 * @property string $Date
 * @property int $Status
 * @property string $Creare_Date
 * @property string $Update_Date
 * @property int $User_id
 *
 * @property TblCustomer $cus
 * @property TblTechnician $technic
 * @property TblAdmin $user
 */
class TblBookingTmp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_booking_tmp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Cus_id', 'Technic_id', 'Date', 'Status', 'Creare_Date', 'Update_Date', 'User_id'], 'required'],
            [['ID', 'Cus_id', 'Technic_id', 'Status', 'User_id'], 'integer'],
            [['Date', 'Creare_Date', 'Update_Date'], 'safe'],
            [['ID'], 'unique'],
            [['Cus_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblCustomer::className(), 'targetAttribute' => ['Cus_id' => 'ID']],
            [['Technic_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblTechnician::className(), 'targetAttribute' => ['Technic_id' => 'ID']],
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
            'Cus_id' => 'Cus ID',
            'Technic_id' => 'Technic ID',
            'Date' => 'Date',
            'Status' => 'Status',
            'Creare_Date' => 'Creare  Date',
            'Update_Date' => 'Update  Date',
            'User_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCus()
    {
        return $this->hasOne(TblCustomer::className(), ['ID' => 'Cus_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTechnic()
    {
        return $this->hasOne(TblTechnician::className(), ['ID' => 'Technic_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(TblAdmin::className(), ['ID' => 'User_id']);
    }
}
