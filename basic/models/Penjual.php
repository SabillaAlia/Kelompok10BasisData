<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjual".
 *
 * @property int $Id_Penjual
 * @property int $No_telepon
 * @property string $Nama_penjual
 * @property string $Alamat_penjual
 * @property int $Produk_Id_Produk
 *
 * @property Produk $produkIdProduk
 */
class Penjual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Penjual', 'No_telepon', 'Nama_penjual', 'Alamat_penjual', 'Produk_Id_Produk'], 'required'],
            [['Id_Penjual', 'No_telepon', 'Produk_Id_Produk'], 'integer'],
            [['Nama_penjual', 'Alamat_penjual'], 'string', 'max' => 45],
            [['Id_Penjual'], 'unique'],
            [['Produk_Id_Produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::className(), 'targetAttribute' => ['Produk_Id_Produk' => 'Id_Produk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Penjual' => 'Id Penjual',
            'No_telepon' => 'No Telepon',
            'Nama_penjual' => 'Nama Penjual',
            'Alamat_penjual' => 'Alamat Penjual',
            'Produk_Id_Produk' => 'Produk Id Produk',
        ];
    }

    /**
     * Gets query for [[ProdukIdProduk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdukIdProduk()
    {
        return $this->hasOne(Produk::className(), ['Id_Produk' => 'Produk_Id_Produk']);
    }
}
