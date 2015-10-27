
<section id="schedule" class="section--lightgray js-section">
  <div class="section--lightgray__head">
    <h1 class="section--lightgray__title"><?= $data->title() ?></h1>
  </div>
  <div class="section--lightgray__body">
    <div class="wrapper">
      <? $day1 = yaml($data->day1()) ?>
      <? if(!empty($day1)): ?>
      <table class="t schedule">
        <caption class="schedule__caption"><?= $data->day1_title() ?>
          <div class="schedule__desc"><?= $data->day1_desc() ?></div>
        </caption>
        <tbody class="t-body"><? foreach($day1 as $line): ?>
          <tr class="t-body__tr">
            <td class="t-body__td--time"><?= $line["time"] ?></td>
            <td class="t-body__td"><? if($line["type"] == "speach"): ?><a href="#<?= $line['link'] ?>" class="js-scrollTo schedule__link"><span class="schedule__speach"><?= $line["title"] ?></span><span class="schedule__speaker"><?= $line["speaker"] ?></span></a><? else: ?><span class="schedule__action"><?= $line["title"] ?></span><? endif ?></td>
          </tr><? endforeach ?>
        </tbody>
      </table><? endif ?>
      <? $afterparty = yaml($data->afterparty()) ?>
      <? if(!empty($afterparty)): ?>
      <table class="t schedule">
        <caption class="schedule__caption"><?= $data->afterparty_title() ?>
          <div class="schedule__desc"><?= $data->afterparty_desc() ?></div>
        </caption>
        <tbody class="t-body"><? foreach($afterparty as $line): ?>
          <tr class="t-body__tr">
            <td class="t-body__td--time"><?= $line["time"] ?></td>
            <td class="t-body__td"><? if($line["type"] == "speach"): ?><a href="#<?= $line['link'] ?>" class="js-scrollTo schedule__link"><span class="schedule__speach"><?= $line["title"] ?></span><span class="schedule__speaker"><?= $line["speaker"] ?></span></a><? else: ?><span class="schedule__action"><?= $line["title"] ?></span><? endif ?></td>
          </tr><? endforeach ?>
        </tbody>
      </table><? endif ?>
      <? $day2 = yaml($data->day2()) ?>
      <? if(!empty($day2)): ?>
      <table class="t schedule">
        <caption class="schedule__caption"><?= $data->day2_title() ?>
          <div class="schedule__desc"><?= $data->day2_desc() ?></div>
        </caption>
        <tbody class="t-body"><? foreach($day2 as $line): ?>
          <tr class="t-body__tr">
            <td class="t-body__td--time"><?= $line["time"] ?></td>
            <td class="t-body__td"><? if($line["type"] == "speach"): ?><a href="#<?= $line['link'] ?>" class="js-scrollTo schedule__link"><span class="schedule__speach"><?= $line["title"] ?></span><span class="schedule__speaker"><?= $line["speaker"] ?></span></a><? else: ?><span class="schedule__action"><?= $line["title"] ?></span><? endif ?></td>
          </tr><? endforeach ?>
        </tbody>
      </table><? endif ?>
    </div>
  </div>
</section>