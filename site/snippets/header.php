
<header class="siteHeader js-siteHeader">
  <nav role="navigation" class="siteHeader__lang nav js-siteHeaderLang">
    <? foreach($site->languages() as $language): ?>
    <? 	if($site->language() !== $language): ?><a href="<?= $page->url($language->code()) ?>" class="nav__item--lang"><?= $language->code() ?></a><? 	endif ?>
    <? endforeach ?>
  </nav><a href="#hero" class="siteHeader__logo js-siteHeaderLogo active"><img src="assets/images/logo.svg"/></a>
  <nav class="siteHeader__mainnav nav--mainnav">
    <button class="nav__item--hiddenicon js-mainnavOpener active">
      <svg>
        <use xlink:href="#icon-hamburger"></use>
      </svg>
    </button>
    <button class="nav__item--hiddenicon js-mainnavCloser">
      <svg>
        <use xlink:href="#icon-close"></use>
      </svg>
    </button>
    <div role="navigation" class="nav--mainnav__list js-mainnavList"><a href="#hero" class="nav--mainnav__item--logo js-mainnavItem"><img src="assets/images/logo.svg"/></a><? foreach($pages->visible()->not('tickets') as $section): ?><a href="#<?= $section->uid() ?>" class="nav--mainnav__item js-mainnavItem"><?= $section->title() ?></a><? endforeach ?>
      <? $tickets = $pages->find('tickets') ?><a href="#<?= $tickets->uid() ?>" class="nav--mainnav__item--button js-mainnavItem"><span class="button--ghost_accent_tiny"><?= $tickets->title() ?></span></a>
    </div>
  </nav>
  <nav class="siteHeader__socials nav"><a href="https://www.facebook.com/webconfriga" class="nav__item--icon icon--fb">
      <svg>
        <use xlink:href="#icon-facebook"></use>
      </svg></a><a href="https://twitter.com/webconfriga" class="nav__item--icon icon--tw">
      <svg>
        <use xlink:href="#icon-twitter"></use>
      </svg></a></nav>
</header>