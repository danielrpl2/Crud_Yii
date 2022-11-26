<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\TblJenisKelamin;
use yii\helpers\ArrayHelper;


/** @var yii\web\View $this */
/** @var common\models\TblSiswa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'jenis_kelamin_id')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin_id')->radioList(
       ArrayHelper::map(TblJenisKelamin::find()->asArray()->all(), 'id', 'jenis_kelamin')
        , ['separator' => '<br>'])->label('Jenis Kelamin'); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
