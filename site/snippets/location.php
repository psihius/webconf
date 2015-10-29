
<section id="location" class="section--gray js-section">
  <div class="section--gray__head">
    <h3 class="section--gray__title"><?= $data->title() ?></h3>
  </div>
  <div class="section--gray__body">
    <div class="location">
      <div class="location__container">
        <? if($data->images()): ?>
        <? foreach($data->images() as $image): ?><img src="<?= thumb($image, array('width'=> 1280,'height' => 640, 'crop' => true, 'blur' => true))->url() ?>" class="location__image"/><? endforeach ?>
        <? endif ?>
        <div class="location__info">
          <div class="location__head">
            <div class="location__name"><?= $data->name() ?></div>
            <div class="location__addess"><?= $data->address() ?></div>
          </div>
          <div class="location__parking"><?= kirbytext($data->parking()) ?></div>
          <div class="location__maplink"><a href="<?= $data->map() ?>" target="_blank" class="button--ghost_white"><?= l::get("open map") ?></a></div>
        </div>
      </div>
      <div class="location__map">
        <iframe src="<?= $data->iframe() ?>" frameborder="0" allowfullscreen="allowfullscreen" class="location__googlemap"></iframe>
      </div>
    </div>
  </div>
</section>