
<section id="schedule" class="section--lightgray js-section">
  <div class="section--lightgray__head">
    <h1 class="section--lightgray__title"><?= $data->title() ?></h1>
  </div>
  <div class="section--lightgray__body">
    <? $day1 = yaml($data->day1()) ?>
    <? if(!empty($day1)): ?>
    <div class="wrapper">
      <table class="t schedule">
        <tbody class="t-body"><? foreach($day1 as $line): ?>
          <tr class="t-body__tr">
            <td class="t-body__td--time"><?= $line["time"] ?></td>
            <td class="t-body__td"><? if($line["type"] == "speach"): ?><a href="#<?= $line['link'] ?>" class="js-scrollTo schedule__link"><span class="schedule__speach"><?= $line["title"] ?></span><span class="schedule__speaker"><?= $line["speaker"] ?></span></a><? else: ?><span class="schedule__action"><?= $line["title"] ?></span><? endif ?></td>
          </tr><? endforeach ?>
        </tbody>
      </table>
    </div><? endif ?>
  </div>
</section>