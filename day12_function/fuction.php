<?php
    // 関数について学ぶ「自作関数」

    // step1.定義する
        // function 関数名(){繰り返し使いたい処理}
    // step2.呼び出す
        // 関数名();
    
    // 定義元
    function hello(){
        echo 'こんにちは' . '<br>';
    }
    // 呼び出し
    hello();


    // 引数
    function greeting($test, $test1){
        echo $test . $test1 . 'が引き渡されました' . '<br>';
    }
    greeting('おはようございます', 'ボンジュール');

    function calc($fruit, $price){
        echo $fruit . 'は';
        echo '税抜き価格：'  . $price. '、';
        echo '税込価格：' . $price * 1.1 . '円<br>';
    }
    calc('りんご',300);
    calc('みかん',250);
    calc('ぶどう',500);
    calc('いちご',380);

    // 戻り値
    function calc2($num1, $num2){
        return $num1 * $num2;
    }
    echo '合計' .  calc2(100, 1.1) + calc2(200, 1.1) . '円です';

?>
