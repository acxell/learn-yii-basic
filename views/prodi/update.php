<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prodi $model */
/** @var array $universities */

$this->title = 'Update Prodi: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'universities' => $universities,
    ]) ?>

</div>
