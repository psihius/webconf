
<head><? if($page->isHomepage()): ?>
  <title><?= $site->title() ?></title><? else: ?>
  <title><?= html($site->title().' — '.$page->title()) ?></title><? endif ?>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="description" content="<?= ($page->isHomepage()) ? $site->description() : $page->meta_description() ?>"/>
  <meta name="author" content="<?= $site->author() ?>"/>
  <meta name="keywords" content="<?= $page->keywords() ?>"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge"/><? snippet('favicons') ?>
  <?= css('assets/css/8a420f88.main.cache.css') ?>
  <? snippet('facebook_aud') ?>
</head>