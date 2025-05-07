<?php
// Q1 変数と文字列
<?php $name = '「平戸」';
<? echo '私の名前は' .$name. 'です。'; 


// Q2 四則演算
<?php $num = 5*4;

<? echo($num);
<? echo($num / 2);


// Q3 日付操作
date_default_timezone_set('JAPAN');
$today = date("Y年m月d日 H時i分s秒");
echo '現在時刻は、' .$today. 'です。'


// Q4 条件分岐-1 if文 * if else 1個ずつ出す
・パターン1
$device = 'windows';

if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、windowsです。' || '使用OSは、macです。';
 } else {
    if($device === 'mac') {
    echo '使用OSは、macです。';
    } else {
    echo 'どちらでもありません。'; 
    }
 }

・パターン2
$device = 'windows';

if ($device == 'windows' or $device == 'mac') {
    echo  '使用OSは、' .$device. 'です。';
 }else {
    echo 'どちらでもありません。'; 
 }


// Q5 条件分岐-2 三項演算子　　if文禁止
$age = 20;
$message = ($age >= 18) ? '成人です。' : '未成年です。';

echo $message;


// Q6 配列 *
$prefectures = [
           '東京都', 
           '神奈川県', 
           '埼玉県',
           '栃木県', 
           '千葉県', 
           '茨城県', 
           '群馬県'
];

echo $prefectures[3].'と' .$prefectures[4]. 'は関東地方の都道府県です。';


// Q7 連想配列-1
<?php
$city = [
    '東京都'=>'新宿区',
    '神奈川県'=>'横浜市',
    '千葉県'=>'千葉市',
    '埼玉県'=>'さいたま市',
    '栃木県'=>'宇都宮市',
    '群馬県'=>'前橋市',
    '茨城県'=>'水戸市'
];

foreach($city as $prefectures ){
    echo $prefectures,"\n";
}


// Q8 連想配列-2
<?php
$city = [
    '東京都'=>'新宿区',
    '神奈川県'=>'横浜市',
    '千葉県'=>'千葉市',
    '埼玉県'=>'さいたま市',
    '栃木県'=>'宇都宮市',
    '群馬県'=>'前橋市',
    '茨城県'=>'水戸市'
];

$ken_name = '埼玉県';

foreach($city as $ken => $kencho){
    if($ken == $ken_name){
        echo $ken.'の県庁所在地は'.$kencho.'です。',"\n";
        break;
    }
}


// Q9 連想配列-3 *　　奈良県、滋賀県を追加する
$city = [
  '東京都'=>'新宿区',
  '神奈川県'=>'横浜市',
  '千葉県'=>'千葉市',
  '埼玉県'=>'さいたま市',
  '栃木県'=>'宇都宮市',
  '群馬県'=>'前橋市',
  '茨城県'=>'水戸市'
];

$city['奈良県'] = '奈良市';
$city['滋賀県'] = '大津市'; 

foreach($city as $ken => $kencho){
  if ($ken === '東京都' || 
      $ken === '神奈川県' ||
      $ken === '千葉県' ||
      $ken === '埼玉県' ||
      $ken ==='栃木県' ||
      $ken ==='群馬県' ||
      $ken ==='茨城県'){
  echo $ken.'の県庁所在地は'.$kencho.'です。',"\n";
  } else {
  echo $ken.'は関東地方ではありません。',"\n";
}    
}


// Q10 関数-1
function sayHi($name){
    echo $name.'さん、こんにちは。',"\n";
}

sayHi('山中');
sayHi('野村');


// Q11 関数-2 *
function calcTaxInPrice($price){ 
    $taxInPrice = "$price" * 1.10; 
    echo  $price. '円の商品の税込価格は' .$taxInPrice. '円です。';
}
calcTaxInPrice(1000);


// Q12 関数とif文
function distinguishNum($num){
    if ($num % 2 == 0) {
    echo $num. 'は奇数です。', "\n";
    }else {
    echo $num. 'は偶数です。', "\n";
    }
}
distinguishNum(11);
distinguishNum(24);


// Q13 関数とswitch文
<?php

function evaluateGrade($seiseki){

switch ($seiseki) {
    case 'A':
    case 'B':
        echo '合格です。', "\n";
        break;
    case 'C':
        echo '合格ですが追加課題があります。', "\n";
        break;
    case 'D':
        echo '不合格です。', "\n";
        break;
    default:
        echo '判定不明です。講師に問い合わせてください。', "\n";
        break;
 }
}
evaluateGrade('A');
evaluateGrade('G');


?>