<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\University $model */

$this->title = 'Create University';
$this->params['breadcrumbs'][] = ['label' => 'Universities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="university-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
