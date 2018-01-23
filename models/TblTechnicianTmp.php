<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_technician_tmp".
 *
 * @property int $ID
 * @property string $Name
 * @property string $Address
 * @property string $Email
 * @property string $Tel
 * @property string $Img
 * @property int $Status
 * @property string $Create_Date
 * @property int $User_id
 *
 * @property TblAdmin $user
 */
class TblTechnicianTmp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_technician_tmp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Address', 'Email', 'Tel', 'Img', 'Status', 'Create_Date', 'User_id'], 'required'],
            [['Status', 'User_id'], 'integer'],
            [['Create_Date'], 'safe'],
            [['Name', 'Address', 'Img'], 'string', 'max' => 200],
            [['Email'], 'string', 'max' => 100],
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
            'Name' => 'Name',
            'Address' => 'Address',
            'Email' => 'Email',
            'Tel' => 'Tel',
            'Img' => 'Img',
            'Status' => 'Status',
            'Create_Date' => 'Create  Date',
            'User_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(TblAdmin::className(), ['ID' => 'User_id']);
    }
}
