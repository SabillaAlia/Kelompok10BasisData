<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $Id_Produk
 * @property int $Id_pnjual
 * @property int $Harga
 * @property string $Nama_produk
 *
 * @property Membeli $membeli
 * @property Penjual[] $penjuals
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Produk', 'Id_pnjual', 'Harga', 'Nama_produk'], 'required'],
            [['Id_Produk', 'Id_pnjual', 'Harga'], 'integer'],
            [['Nama_produk'], 'string', 'max' => 45],
            [['Id_Produk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Produk' => 'Id Produk',
            'Id_pnjual' => 'Id Pnjual',
            'Harga' => 'Harga',
            'Nama_produk' => 'Nama Produk',
        ];
    }

    /**
     * Gets query for [[Membeli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMembeli()
    {
        return $this->hasOne(Membeli::className(), ['Produk_Id_Produk' => 'Id_Produk']);
    }

    /**
     * Gets query for [[Penjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjuals()
    {
        return $this->hasMany(Penjual::className(), ['Produk_Id_Produk' => 'Id_Produk']);
    }
}
