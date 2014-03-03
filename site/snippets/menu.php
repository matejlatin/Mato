<div class="mainMenu">
  <ul>
    <?php foreach($pages->visible() AS $p): ?>
    <li><a<?php echo ($p->isActive()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
    <?php endforeach ?>
  </ul>
</div>
