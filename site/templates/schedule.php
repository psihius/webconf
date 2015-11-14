<!DOCTYPE html>
<html lang="<?= $site->language() ?>"><? snippet('head') ?>
  <body>
    <? snippet('ga') ?>
    <? include_once('assets/images/svg-defs.svg') ?>
    <? snippet('header') ?>
    <main class="page"><? snippet("schedule-page", array('data' => $page)) ?></main><? snippet('footer') ?>
  </body>
</html>