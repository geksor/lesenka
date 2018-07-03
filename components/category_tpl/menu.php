    <li>
        <a href="/catalog/<?=$category['alias']?>" <?if (isset($category['childs']))echo"class='parent'"?>><?=$category['name']?></a>
        <?php if( isset($category['childs']) ): ?>
                    <ul>
                        <?= $this->getMenuHtml($category['childs'])?>
                    </ul>
        <?php endif;?>
    </li>