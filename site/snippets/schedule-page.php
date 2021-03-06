<? date_default_timezone_set('Europe/Riga'); ?>
<section id="schedule" class="section--lightgray js-section">
  <div class="section--lightgray__head">
    <h1 class="section--lightgray__title"><?= $data->title() ?></h1>
  </div>
  <div class="section--lightgray__body">
    <div class="wrapper">
      <? $day1 = yaml($data->day2()) ?>
      <? if(!empty($day1)): ?>
      <table class="t schedule">
        <caption class="schedule__caption"><?= $data->day2_title() ?>
          <div class="schedule__desc"><?= $data->day2_desc() ?></div>
        </caption>
        <tbody class="t-body">
          <? foreach($day1 as $key => $line): ?>
          <?
          $nextLine = null;
          $nextKey = $key + 1;
          if (isset($day1[$nextKey])) {
          	$nextLine = $day1[$nextKey];
          }
          $nextTime = $line["time"] + 60 * 60;
          if ($nextLine !== null) {
          	$nextTime = strtotime($nextLine["time"]);
          }
          $currentTime = strtotime($line["time"]);
          $class = null;if (time() > $currentTime && time() < $nextTime) {
          	$class = 'schedule__status--present';
          } elseif (time() > $currentTime) {
          	$class = 'schedule__status--past';
          }	
          ?>
          <tr class="t-body__tr <?= $class ?>">
            <td class="t-body__td--time">
              <div class="schedule__time"><?= $line["time"] ?></div>
            </td>
            <td class="t-body__td"><? if($line["type"] == "speach"): ?><span class="schedule__speaker"><?= $line["speaker"] ?></span><span class="schedule__speach"><?= $line["title"] ?></span><span class="schedule__desc"><?= $line["desc"] ?></span><? else: ?><span class="schedule__action"><?= $line["title"] ?></span><? endif ?>
            </td>
          </tr><? endforeach ?>
        </tbody>
      </table><? endif ?>
    </div>
  </div>
</section>