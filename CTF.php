<?php
$cookie_name = "flag";
$token="";
?>
<html>
<head>
  <title>
    Calculator
  </title>
  <link rel="stylesheet" href="des.css">
</head>
<body text="white">
  <center>
<?php
class Calcu{
  public $arr = array();
}
class Expression extends Calcu {
  public $expressionop = '';
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
  if ($Expression2 == 0)
  {
    echo 'Cannot divide by zero';
  }
  else {
    $add = $Expression1 / $Expression2;
    return $add;
  }
}

$token = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : null;

$token1 = str_rot13(hex2bin(base64_decode($token)));
if($token1 == null)
{
  $object1 = new Expression();
  $object1->arr[0] = $_POST['num1'];
  $object1->arr[1] = $_POST['num2'];
  $object1->arr;
  $object1->expressionop = (string)$_POST['operator'];
  if (is_numeric($_POST['num1']) && is_numeric($_POST['num2']))
  {
    $Operator = $object1->expressionop;
    if ( $object1->expressionop == (string)$_POST['operator'] )
    {
      echo '<h3> The answer is : </h3>';
      echo '<h4>';
      echo $Operator($object1->arr);
      echo '</h4>';
    }
    echo '<br>';
    $token = base64_encode(bin2hex(str_rot13(serialize($object1))));
    setcookie($cookie_name, $token, time() + (300), "/");
  }
  else
  {
    echo '<h3>Please enter a number</h3>';
  }
}
else
{

  $object1 = unserialize($token1);
  $Operator = (string)$object1->expressionop;
  echo '<h3> The answer is : </h3>';
  echo '<h4>';
  echo $Operator($object1->arr);
  echo '</h4>';
  echo '<br>';
}
?>
</center>
</body>
<html>
