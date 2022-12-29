<?php
date_default_timezone_set('Asia/Tokyo');

$time = strtotime('+1 day');
echo $time . '<br>';

$day = date('n/j(D)', $time);
echo $day . '<br />';

?>