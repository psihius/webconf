
<section id="speakers" class="section--dark js-section">
  <div class="section--dark__head">
    <h1 class="section--dark__title"><?= $data->title() ?></h1>
  </div>
  <div class="section--dark__body"><? if($data->hasChildren()): ?>
    <div class="speakers"><? foreach($data->children() as $speaker): ?>
      <div class="speakers__item speaker"><? if ($photo = $speaker->image("photo.jpg")): ?>
        <div class="speaker__photo"><?= thumb($photo, array('width' => 128, 'height' => 128, 'crop' => true, 'title' => $speaker->title(), 'quality' => 80)) ?></div><? else: ?>
        <div class="speaker__photo--blank">
          <svg>
            <use xlink:href="#icon-profile"></use>
          </svg>
        </div><? endif ?>
        <div class="speaker__profile">
          <div class="speaker__fullname"><?= $speaker->title() ?></div>
        </div><? if ($speaker->bio()->isNotEmpty()): ?>
        <div class="speaker__bio"><?= kirbytext($speaker->bio()) ?></div><? endif ?>
        <? if ($speaker->speach()->isNotEmpty()): ?>
        <div class="speaker__speach">
          <div class="speaker__speach_title"><?= l::get("speeches") ?></div>
          <div class="speaker__speach_text"><?= kirbytext($speaker->speach()) ?></div>
        </div><? endif ?>
      </div><? endforeach ?>
    </div><? endif ?>
  </div>
</section>