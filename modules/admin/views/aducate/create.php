<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Aducate */

$this->title = 'Create Aducate';
$this->params['breadcrumbs'][] = ['label' => 'Aducates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aducate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
