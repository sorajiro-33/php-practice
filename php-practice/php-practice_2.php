<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 20 == 0) {
      echo 'tic-tac', "\n";
   }elseif ($i % 4 == 0) {
      echo 'tic', "\n";
   }elseif ($i % 5 == 0) {
      echo 'tac', "\n";
   }else{
  echo $i, "\n";
  }
}


// Q2 多次元連想配列
・問題1
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
echo $personalInfos[1]['name'].'の電話番号は' .$personalInfos[1]['tel']. 'です。';


・問題2
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

foreach ($personalInfos as $x => $y) {
  $x = $x +1;
  echo $x. '番目の' .$y['name'].'のメールアドレスは'.$y['mail'].'で、電話番号は'.$y['tel'].'です。', "\n";
}


・問題3
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

$ageList = [
        25,
        30,
        18
      ];
foreach($ageList as $key => & $value){
$personalInfos[$key]["age"] = $value;
}

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name){
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend(){
        echo '授業に出席しました。';
    }
}

$Yamanaka = new Student('32', '山中');

echo '学籍番号'.$Yamanaka->studentId.'番の生徒は'.$Yamanaka->studentName.'です。';


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name){
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($kyouka){
        $this->attend = $kyouka;
        echo $this->studentName. 'は' .$this->attend. 'の授業に参加しました。学籍番号:' .$this->studentId;
    }
}

$Yamanaka = new Student('32', '山中');
$Yamanaka -> attend('PHP');


// Q5 定義済みクラス
・問題1
date_default_timezone_set('JAPAN');
$date = new DateTime();
echo $date->modify('-1 months')->format('Y-m-d');


・問題2
date_default_timezone_set('JAPAN');
$date1 = new DateTime('1992-04-25');
$date2 = new DateTime();
$diff = $date1->diff($date2);
echo 'あの日から' .$diff->format('%a'). '経過しました。'; 


?>