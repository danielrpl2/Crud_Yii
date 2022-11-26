<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TblJenisKelamin $model */

$this->title = 'Update Tbl Jenis Kelamin: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Jenis Kelamins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-jenis-kelamin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
