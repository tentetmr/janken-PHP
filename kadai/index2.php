<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
$select = $_GET["select"];
echo "<p>自分の手:".$select."</p>";

$enemySelect = mt_rand(1,3);
if($select =="グー"){
  if($enemySelect == 1){
    echo "あいてはグーです<br>";
    echo "あいこです";
  } elseif($enemySelect == 2){
    echo "あいてはチョキです<br>";
    echo "かちです";
  } else{
    echo "あいてはパーです<br>";
    echo "まけです";
  }

} elseif($select =="チョキ"){
  if($enemySelect == 1){
    echo "あいてはグーです<br>";
    echo "まけです";
  } elseif($enemySelect == 2){
    echo "あいてはチョキです<br>";
    echo "あいこです";
  } else{
    echo "あいてはパーです<br>";
    echo "かちです";
  }

} else{
  if($enemySelect == 1){
    echo "あいてはグーです<br>";
    echo "かちです";
  } elseif($enemySelect == 2){
    echo "あいてはチョキです<br>";
    echo "まけです";
  } else{
    echo "あいてはパーです<br>";
    echo "あいこです";
  }

}


?>

</body>
</html>
