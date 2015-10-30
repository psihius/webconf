
<section id="sponsors" class="section--light js-section">
  <div class="section--light__head">
    <h1 class="section--light__title"><?= $data->title() ?></h1>
  </div>
  <div class="section--light__body">
    <div class="sponsors">
      <? if($data->hasChildren()): ?>
      <? foreach($data->children() as $sponsor): ?>
      <? if ($sponsor->type()->isNotEmpty()) { $mod = "--".$sponsor->type(); } ?>
      <div class="sponsors__item">
        <div class="sponsor<?= $mod ?>"><? if($sponsor->image('logo.png')): ?>
          <div class="sponsor<?= $mod ?>__logo"><a href="<?= $sponsor->website() ?>"><img src="<?= $sponsor->image('logo.png')->url() ?>"/></a></div><? endif ?>
          <h2 class="sponsor<?= $mod ?>__name"><a href="<?= $sponsor->url() ?>"><?= $sponsor->title() ?></a></h2>
          <div class="sponsor<?= $mod ?>__body">
            <div class="bodytext"><?= kirbytext($sponsor->text()) ?></div>
          </div>
        </div>
      </div><? endforeach ?>
      <? endif ?>
    </div>
  </div>
  <div class="section--light__foot">
    <h3 class="section--light__foottitle"><?= $data->foottitle() ?></h3><a href="#contact" class="button--ghost_accent button--lg js-scrollTo"><?= l::get("contact us") ?></a>
  </div>
</section>