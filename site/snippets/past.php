
<section id="past" class="section js-section past">
  <div class="section__head">
    <h3 class="section__title"><?= l::get("past-events-title") ?></h3>
  </div>
  <div class="section__body pastevents">
    <div class="pastevents__item pastevent">
      <div class="pastevent__head">
        <h4 class="pastevent__title"><?= $data->conf1_title() ?></h4>
      </div>
      <div class="pastevent__body stat--past">
        <div class="stat--past__item">
          <div class="stat--past__value"><?= $data->conf1_stat1() ?></div>
          <div class="stat--past__label"><?= l::get("speaches") ?></div>
        </div>
        <div class="stat--past__item">
          <div class="stat--past__value"><?= $data->conf1_stat2() ?></div>
          <div class="stat--past__label"><?= l::get("participants") ?></div>
        </div>
        <div class="stat--past__item">
          <div class="stat--past__value"><?= $data->conf1_stat3() ?></div>
          <div class="stat--past__label"><?= l::get("hours") ?></div>
        </div>
      </div>
    </div>
    <div class="pastevents__item pastevent">
      <div class="pastevent__head">
        <h4 class="pastevent__title"><?= $data->conf2_title() ?></h4>
      </div>
      <div class="pastevent__body stat--past">
        <div class="stat--past__item">
          <div class="stat--past__value"><?= $data->conf2_stat1() ?></div>
          <div class="stat--past__label"><?= l::get("speaches") ?></div>
        </div>
        <div class="stat--past__item">
          <div class="stat--past__value"><?= $data->conf2_stat2() ?></div>
          <div class="stat--past__label"><?= l::get("participants") ?></div>
        </div>
        <div class="stat--past__item">
          <div class="stat--past__value"><?= $data->conf2_stat3() ?></div>
          <div class="stat--past__label"><?= l::get("hours") ?></div>
        </div>
        <div class="stat--past__concat">×</div>
        <div class="stat--past__item">
          <div class="stat--past__value"><?= $data->conf2_stat4() ?></div>
          <div class="stat--past__label"><?= l::get("halls") ?></div>
        </div>
      </div>
    </div>
  </div>
</section>