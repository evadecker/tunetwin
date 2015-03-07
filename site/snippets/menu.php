<nav class="menu" role="navigation">

    <?php foreach($pages->visible() as $p): ?><a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->slug() ?></a><?php endforeach ?>

</nav>
