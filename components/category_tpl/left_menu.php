<li <?if($category['id'] == $this->active_id){print 'class=active';}?>>
    <a href="/catalog/<?=$category['alias']?>"><?=$category['name']?><span><?=count($category['products'])?></span></a>
</li>