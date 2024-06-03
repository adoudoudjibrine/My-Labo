<?php

date_default_timezone_set('Europe/Paris');

$date = "2014-02-03";
$new_date = date('Y-m-d', strtotime($date . " +3 months +4 day"));

echo date('Y/m/d', strtotime($new_date));


echo '###################\n';

$date = add_days($date, 2);
$date = add_months($date, 4);

echo format_date($date, 's/m/y');

echo '###################\n';

$date1 = new Madate("2014-02-03");
$date1->addDays($date, 2);
$date1->addMonths($date, 4);

$date1->format($date, 's/m/y');