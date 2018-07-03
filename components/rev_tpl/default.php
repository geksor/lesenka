<?php
use kartik\rating\StarRating;
?>
<?if($lastReviews):?>
    <?foreach ($lastReviews as $review):?>
        <div class="col-lg-4 col-12">
            <article class="review">
                <div class="rev_header">
                    <div class="rev_info_block">
                        <p class="rev_name"><?=$review['name']?></p>
                        <p class="rev_date"><?=$review['create_date']?></p>
                    </div>
                    <?=StarRating::widget([
                        'name' => 'mark',
                        'pluginOptions' => ['displayOnly' => true,'size' => 's'],
                        'value' => $review['mark']
                    ]);?>
                </div>
                <p class="rev_text">
                    <?=$review['text']?>
                </p>
            </article>
        </div>
    <?endforeach;?>
<?endif;?>