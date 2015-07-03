
<section id="hero" class="hero js-section">
  <div class="wrapper hero__wrapper">
    <div class="hero__pretitle">
      <date class="hero__date"><?= $site->conf_date() ?></date>, <span class="hero__place"><?= $site->conf_place() ?></span>
    </div>
    <h1 class="hero__title"><?= $site->title() ?></h1><img src="assets/images/logo.svg" class="hero__logo"/>
    <h2 class="hero__subtitle"><?= $data->subtitle() ?></h2>
    <div class="hero__buttons buttons"><a href="#about" class="buttons__item button--ghost_main js-scrollTo"><?= l::get("learn more") ?></a><a href="#sponsors" class="buttons__item button--ghost_accent js-scrollTo"><?= l::get("sponsor") ?></a></div>
    <div class="hero__foot"><a href="#about" class="hero__down js-scrollTo">
        <svg>
          <use xlink:href="#icon-arrow-double-down"></use>
        </svg></a></div>
  </div>
</section>