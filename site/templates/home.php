<!DOCTYPE html>
<html lang="<?= $site->language() ?>"><? snippet('head') ?>
  <body>
    <? include_once('assets/images/svg-defs.svg') ?>
    <? snippet('header') ?>
    <main>
      <? foreach($pages->visible() as $section): ?>
      <? snippet($section->uid(), array('data' => $section)) ?>
      <? endforeach ?></main><? snippet('footer') ?>
    <? snippet('ga') ?>
  </body>
</html>