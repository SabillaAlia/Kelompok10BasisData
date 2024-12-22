<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $Id_Pelanggan
 * @property string $Nama_Pelanggan
 * @property string $Alamat_Pelanggan
 *
 * @property Membeli[] $membelis
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pelanggan', 'Nama_Pelanggan', 'Alamat_Pelanggan'], 'required'],
            [['Id_Pelanggan'], 'integer'],
            [['Nama_Pelanggan', 'Alamat_Pelanggan'], 'string', 'max' => 45],
            [['Id_Pelanggan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pelanggan' => 'Id Pelanggan',
            'Nama_Pelanggan' => 'Nama Pelanggan',
            'Alamat_Pelanggan' => 'Alamat Pelanggan',
        ];
    }

    /**
     * Gets query for [[Membelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMembelis()
    {
        return $this->hasMany(Membeli::className(), ['Pelanggan_Id_Pelanggan' => 'Id_Pelanggan']);
    }
}
