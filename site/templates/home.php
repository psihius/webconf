<!DOCTYPE html>
<html lang="<?= $site->language() ?>"><? snippet('head') ?>
  <body>
    <? include_once('assets/images/svg-defs.svg') ?>
    <? $hero = $site->find("hero") ?>
    <? if($hero->hasImages()): ?>
    <div class="slideshow"><? foreach($hero->images() as $image): ?>
      <div style="background-image: url(<?= thumb($image, array('width' => 1920, 'height' => 1080))->url(); ?>)" class="slideshow__item"></div><? endforeach ?>
    </div><? endif ?>
    <? snippet('header') ?>
    <main>
      <? foreach($pages->visible() as $section): ?>
      <? snippet($section->uid(), array('data' => $section)) ?>
      <? endforeach ?></main><? snippet('footer') ?>
  </body>
</html>