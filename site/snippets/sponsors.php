
<section id="sponsors" class="section--dark js-section">
  <div class="section--dark__head">
    <h1 class="section--dark__title"><?= $data->title() ?></h1>
    <h2 class="section--dark__subtitle"><?= $data->subtitle() ?></h2>
  </div>
  <div class="section--dark__body sponsorspacks">
    <? if($data->hasChildren()): ?>
    <? foreach($data->children() as $pack): ?>
    <? if ($pack->type()->isNotEmpty()) { $mod = "--".$pack->type(); } ?>
    <div class="sponsorspacks__item sponsorspack<?= $mod ?>">
      <div class="sponsorspack<?= $mod ?>__head"><?= $pack->title() ?></div>
      <div class="sponsorspack<?= $mod ?>__body"><?= kirbytext($pack->benefits()) ?></div>
      <div class="sponsorspack<?= $mod ?>__foot"><span class="price"><?= $pack->price() ?></span></div>
    </div><? endforeach ?>
    <? endif ?>
  </div>
  <div class="section--dark__foot">
    <h3 class="section--dark__foottitle"><?= $data->foottitle() ?></h3><a href="#contact" class="button--ghost_accent button--lg js-scrollTo"><?= l::get("contact us") ?></a>
  </div>
</section>