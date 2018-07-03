<?foreach ($slider as $id => $slide):?>
<div style="background: url('/images/slides/<?=$slide['image']?>') no-repeat center/cover;">
    <div class="inner">
        <div class="main_header_block">
            <h<?=$id == 1 ? '1' : '2'?> class="main_header">
                <?=$slide['title']?>
                <span>
                    <?=$slide['text']?>
                </span>
            </h<?=$id == 1 ? '1' : '2'?>>
            <div class="btn_wrap">
                <a href="javascript://" class="site_btn red_btn menu_btn_scroll">Посмотреть меню <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<?endforeach;?>