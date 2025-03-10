<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prodi $model */
/** @var array $universities */

$this->title = 'Create Prodi';
$this->params['breadcrumbs'][] = ['label' => 'Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'universities' => $universities
    ]) ?>

</div>
