<?php

function function1($number) {
    $result = 2 * $number;
    return $result;
}
echo function1(5);

echo "\n";

function function2($a, $b) {
    $result = $a + $b;
    return $result;
}

echo function2(2, 3);

echo "\n";

function function3($arr) {
    $result = 1;
    foreach($arr as $n){
    $result *= $n;
    }
    return $result;
}

echo function3(array(1, 3, 5 ,7, 9));

echo "\n";


 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if($max_number < $a){
     $max_number = $a;
 }
 }

 return $max_number;
 }
 echo max_array(array(1, 3, 5 ,7, 9, 3));

echo "\n";


/*strip_tags
文字列に含まれるHTMLタグやPHPタグを取り除くことができる*/
$str = "<p>テスト<br>テキスト</p>";
echo $str;
echo "\n";
$str = "<p>テスト<br>テキスト</p>";
echo strip_tags( $str, '<br>');/*<br>以外のタグが取り除かれてでる*/
echo "\n";

/*array_push
配列に要素を追加することができる*/
$fluits = array("みかん", "りんご");
array_push($fluits, "なし", "ぶどう");
foreach($fluits as $fluit){
    echo $fluit;
}

echo "\n";

/*array_merge
配列を結合できる*/
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];
$array123 = array_merge($array1, $array2, $array3);
foreach($array123 as $array){
    echo $array;
}

echo "\n";

/*time
タイムスタンプを取得できる*/
echo time();  /*現在のタイムスタンプ*/

echo "\n";

$nweek = time() + (7 * 24 * 60 * 60);  /*7日後のタイムスタンプ*/
echo $nweek;

echo "\n";

/*mktime
タイムスタンプを取得できる*/
$timestamp = mktime(1, 2, 3, 8, 11, 2021);
echo $timestamp;
echo "\n";

/*date
日付のフォーマットを指定できる*/
echo date('Y/m/d', $timestamp);  //日付のフォーマットを指定//
echo "\n";























