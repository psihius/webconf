
<head><? if($page->isHomepage()): ?>
  <title><?= $site->title() ?></title><? else: ?>
  <title><?= html($site->title().' — '.$page->title()) ?></title><? endif ?>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="description" content="<?= ($page->isHomepage()) ? $site->description() : $page->meta_description() ?>"/>
  <meta name="author" content="<?= $site->author() ?>"/>
  <meta name="keywords" content="<?= $page->keywords() ?>"/><? snippet('favicons') ?>
  <?= css('assets/css/107460ec.main.cache.css') ?>
  <? snippet('facebook_aud') ?><!--[if (!IE)|(gt IE 8)]><!-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><!--<![endif]-->
  <!--[if lte IE 8]>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><![endif]-->
  <script src="<?= url('assets/js_libs/jquery.smooth-scroll.min.js') ?>"></script>
  <script src="<?= url('assets/js/script.js') ?>"></script>
</head>