<?foreach ($gallery->images as $image):?>
<div class="col-12 col-sm-6 col-md-4 col-lg-3">
    <div class="about__imgWrap" style="background: url('<?='/'.Yii::getAlias('@gall_images').'/'.$image?>') no-repeat top center/cover"></div>
</div>
<?endforeach;?>