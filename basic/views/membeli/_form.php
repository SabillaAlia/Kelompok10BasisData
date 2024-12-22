<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Membeli */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="membeli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Harga_produk')->textInput() ?>

    <?= $form->field($model, 'Total_pembelian')->textInput() ?>

    <?= $form->field($model, 'Metode_pembelian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pelanggan_Id_Pelanggan')->textInput() ?>

    <?= $form->field($model, 'Produk_Id_Produk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
