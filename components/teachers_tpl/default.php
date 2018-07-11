<div class="row justify-content-between">
<?
if($teachers){
    foreach ($teachers as $teacher):
?>
    <div class="col-12 col-sm-6 col-lg-3 flex justify-content-center justify-content-md-start">
        <div class="teacher__block col-9">
            <div class="imgWrap <?=$teacher['color']?>" style="background-image: url('/<?=Yii::getAlias('@teach_images')?>/<?=$teacher['avatar']?>');"></div>
            <p class="name">
                <span><?=$teacher['family']?></span><br>
                <?=$teacher['name']?> <?=$teacher['father']?>
            </p>
            <p class="job">(<?=$teacher['rang']?>)</p>
        </div>
    </div>
    <?endforeach;?>
<?}?>
</div>