<?php

// PHP問題 基本構文
// 問題① 要素の数を出力せよ
    // $array = ['笹野', '赤笹野', '青笹野', '黒笹野', '黄笹野'];
// 問題② foreach文を用いて、$arrayの中身を一覧表示せよ
// 問題③ for文を用いて、$arrayの中身を一覧表示せよ

// ヒント
// 組み込みを使う = phpが用意してくる技
    // 配列の要素をカウントしてくれる関数

// 問題①
$array = ['yota', 'red-yota', 'blue-yota', 'blackyota', 'yellow-yota'];

$count = count($array);
echo $count . '<br>';

// 問題②
foreach($array as $arr){
    echo $arr . '<br>';
}

// 問題③
for($i=0; $i<$count; $i++){
    echo $array[$i] . '<br>';
}