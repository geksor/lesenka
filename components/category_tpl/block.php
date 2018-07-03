<?if($category){?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="category">
                <img src="<?='/'.Yii::getAlias('@cat_images')?>/<?=$category['image']?>" alt="<?=$category['name']?>">
                <h3 class="category_name"><?=$category['name']?> →</h3>
                <a href="catalog/<?=$category['alias']?>" class="absolute_100prc"></a>
            </div>
     </div>
<?}?>