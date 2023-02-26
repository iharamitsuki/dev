<?php
$id     = '100012210046709';
$target = '100012210046709';
$percent = 20;
$url = 'https://www.google.com/';
$percentage = substr($percent, 0, -1);

$date = date('d');
while(($id = array_sum(str_split($id)))>=10);
$rand_id = $date + $id;
while(($rand_id = array_sum(str_split($rand_id)))>=10);

if($target === $id) {
    if($percentage <= $rand_num) {
        echo '通過成功！';
        exit;
    } else {
        header("Location: {$url}");
        echo '通過失敗！';
        exit;
    }
}
