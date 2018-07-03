<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="inner">
    <div class="site-error">

        <h1 class="site_header"><?= Html::encode($this->title) ?></h1>

        <div class="fc_ff1 fs_16 ff_rob_b">
            <?= nl2br(Html::encode($message)) ?>
        </div>

    </div>
</div>
