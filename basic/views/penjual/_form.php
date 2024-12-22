<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penjual */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjual-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Penjual')->textInput() ?>

    <?= $form->field($model, 'No_telepon')->textInput() ?>

    <?= $form->field($model, 'Nama_penjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_penjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Produk_Id_Produk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
