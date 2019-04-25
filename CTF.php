<html>
<head>
  <title>
    Calculator
  </title>
  <link rel="stylesheet" href="main.css">
<?php
class Calcu{

  public $arr = array();
  public $x;
  public $y;
  function __construct($x,$y)
  {
    $this->arr[0]=$x;
    $this->arr[1]=$y;
  }
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
  if ($Expression1 >= $Expression2){

    $add = $Expression1 / $Expression2;
  }
  else if ($Expression1 <= $Expression2)
  {
    $add = $Expression2 / $Expression3;
  }
  else
  {
    $add = 0;
  }
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
$token = isset($_REQUEST['token']) ? $_REQUEST['token'] : null;
$token1 = base64_decode($token);
if($token1 == null)
{
  $object1 = new Expression($_POST['num1'],$_POST['num2']);
  $object1->x = $_POST['num1'];
  $object1->y = $_POST['num2'];
  $object1->arr;
  $object1->expressionop = (string)$_POST['operator'];
  $Operator = $object1->expressionop;
  if ( $object1->expressionop == (string)$_POST['operator'] );
  {

    echo $Operator($object1->arr);
  }
  echo '<br>';
  $token = base64_encode(serialize($object1));
  echo $token;
  echo '<a href="?token='.$token.'">Share it</a>';
}
else {
  $object1 = unserialize($token1);
  $Operator = (string)$object1->expressionop;
  echo $Operator($object1->arr);
  echo '<br>';
  $token = base64_encode(serialize($object1));
  echo $token;
  echo '<a href="?action=load&token='.$token.'">Share it</a>';
}
 ?>
