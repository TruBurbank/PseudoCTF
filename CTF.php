<html>
<head>
  <title>
    Calculator
  </title>
  <link rel="stylesheet" href="main.css">
<?php
class Calcu{

  public $arr = array();
/*  public $x;
  public $y;
  function __construct($x,$y)
  {
    $this->arr[0]=$x;
    $this->arr[1]=$y;
  }*/
}
class Expression extends Calcu {
  public $expressionop = '';
  /*function __tostring()
  {
      return $Operator = (string)$this->expressionop;

  }*/
}

function Add($arr){

  $Expression1 = $arr[0];
  $Expression2 = $arr[1];
  $add = $Expression1 + $Expression2;
  return $add;
}
function Subtract($arr){

  $Expression1 = $arr[0];
  $Expression2 = $arr[1];
  $add = $Expression1 - $Expression2;
  return $add;
}

function Multiply($arr){

  $Expression1 = $arr[0];
  $Expression2 = $arr[1];
  $add = $Expression1 * $Expression2;
  return $add;
}
function Division($arr){

  $Expression1 = $arr[0];
  $Expression2 = $arr[1];


    $add = $Expression1 / $Expression2;


  return $add;
}


/*$object1->arr[0] = 5;
$object1->arr[1] = 5;
$object1->expressionop = 'sum';
if ( $object1->expressionop == 'sum' );
{
  echo $object1->sum();
  echo '<br>';
}
echo '<br>';*/
$token = isset($_POST['token']) ? $_POST['token'] : null;
$token1 = urldecode(base64_decode($token));
if($token1 == null)
{
  $object1 = new Expression();
  $object1->arr[0] = $_POST['num1'];
  $object1->arr[1] = $_POST['num2'];
  $object1->arr;
  $object1->expressionop = (string)$_POST['operator'];
  $Operator = $object1->expressionop;
  if ( $object1->expressionop == (string)$_POST['operator'] );
  {

    echo $Operator($object1->arr);
  }
  echo '<br>';
  $token = base64_encode(urlencode(serialize($object1)));

  echo '<form action="CTF.php" method="post">';
  echo '<button name = "token" value ="'.$token.'">';
  echo '<a href="?action=post&token='.$token.'">Share it</a>';
  echo '</form>';
}
else {
  $object1 = unserialize($token1);
  $Operator = (string)$object1->expressionop;
  echo $Operator($object1->arr);
  echo '<br>';
  $token = base64_encode(urlencode(serialize($object1)));

  echo '<form action="CTF.php" method="post">';
  echo '<button name = "token" value ="'.$token.'">';
  echo '<a href="?action=post&token='.$token.'">Share it</a>';
  echo '</form>';

}
 ?>
