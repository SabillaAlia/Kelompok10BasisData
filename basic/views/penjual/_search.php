<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenjualSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjual-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id_Penjual') ?>

    <?= $form->field($model, 'No_telepon') ?>

    <?= $form->field($model, 'Nama_penjual') ?>

    <?= $form->field($model, 'Alamat_penjual') ?>

    <?= $form->field($model, 'Produk_Id_Produk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
