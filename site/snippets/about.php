
<section id="about" class="section--light js-section">
  <div class="section--light__head">
    <h1 class="section--light__title"><?= $data->title() ?></h1>
  </div>
  <div class="section--light__body aboutlist">
    <div class="aboutlist__item about">
      <div class="about__head">
        <h2 class="about__title"><?= kirbytext($data->what_title()) ?></h2>
      </div>
      <div class="about__body">
        <div class="bodytext"><?= kirbytext($data->what_text()) ?></div>
      </div>
      <div class="about__foot"><a href="#press_release" class="button--ghost_neutral"><span class="button--ghost_neutral__icon">
            <svg>
              <use xlink:href="#icon-arrow-download"></use>
            </svg></span><?= l::get("get press release") ?></a></div>
    </div>
    <div class="aboutlist__item about">
      <div class="about__head">
        <h2 class="about__title"><?= kirbytext($data->who_title()) ?></h2>
      </div>
      <div class="about__body">
        <div class="bodytext"><?= kirbytext($data->who_text()) ?></div>
      </div>
      <div class="about__foot">
        <h3 class="about__ftitle"><?= l::get("want to participate") ?></h3><a href="#contact" class="button--ghost_main_active js-scrollTo"><?= l::get("contact us") ?></a>
      </div>
    </div>
    <div class="aboutlist__item about">
      <div class="about__head">
        <h2 class="about__title"><?= kirbytext($data->whom_title()) ?></h2>
      </div>
      <div class="about__body">
        <div class="bodytext"><?= kirbytext($data->whom_text()) ?></div>
      </div>
    </div>
  </div>
</section>