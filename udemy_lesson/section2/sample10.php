<?php

// 時間の初期設定
date_default_timezone_set('Asia/Tokyo');

$week_name = ['日', '月'];
echo $week_name[0];

$week = date('w');
echo $week;

?>