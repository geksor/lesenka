<div class="program__wrap row justify-content-center">
    <?

    if($this->data){
        foreach ($this->data as $item){
    ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="program__block relative">
                <a href="aducate/<?=$item['alias']?>" class="absolute_100prc"></a>
                <div class="imgWrap" style="background-image: url('<?=Yii::getAlias('@aduc_images').'/'.$item['image']?>')">
                    <div class="padding"></div>
                </div>
                <p class="title"><?=$item['name']?></p>
            </div>
        </div>
    <?
        }
    }
    ?>
</div>
