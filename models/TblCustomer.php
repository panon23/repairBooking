<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

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
    public $upload_foler ='uploads';
   
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
            [['Name', 'Address', 'Email', 'Tel', 'Status'], 'required'],
            [['Status', 'Tel'], 'integer'],
            [['Create_Date', 'Update_Date'], 'safe'],
            [['Name', 'Address', 'Img'], 'string', 'max' => 200],
            [['Plat', 'Plong'], 'string', 'max' => 12],
            [['Email'], 'email'],
            [['Tel', 'FacebookLogin'], 'string', 'max' => 20],
            [['Img'], 'file',
            'skipOnEmpty' => true,
            'extensions' => 'png,jpg'
        ]
        ];
    }
    public function upload($model,$attribute)
    {
        $photo  = UploadedFile::getInstance($model, $attribute);
          $path = $this->getUploadPath();
        if ($this->validate() && $photo !== null) {

            $fileName = md5($photo->baseName.time()) . '.' . $photo->extension;
            //$fileName = $photo->baseName . '.' . $photo->extension;
            if($photo->saveAs($path.$fileName)){
              return $fileName;
            }
        }
        return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
    }

    public function getUploadPath(){
      return Yii::getAlias('@webroot').'/'.$this->upload_foler.'/';
    }

    public function getUploadUrl(){
      return Yii::getAlias('@web').'/'.$this->upload_foler.'/';
    }

    public function getPhotoViewer(){
      return empty($this->Img) ? Yii::getAlias('@web').'../../img/none.png' : $this->getUploadUrl().$this->Img;
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
