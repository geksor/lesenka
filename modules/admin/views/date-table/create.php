<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DateTable */

$this->title = 'Create Date Table';
$this->params['breadcrumbs'][] = ['label' => 'Date Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="date-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
