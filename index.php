<!DOCTYPE html>
<head>
<title> Write a simple calculator program in PHP
 </title>
</head>
<?php
class MyCalculator {
private $FirstNumber, $SecondNumber;
public function __construct( $Value1, $Value2 ) {
$this->FirstNumber = $Value1;
$this->SecondNumber = $Value2;
}
public function Addition() {
return $this->FirstNumber + $this->SecondNumber;
}
public function Subtraction() {
return $this->FirstNumber - $this->SecondNumber;
}
public function Multiplication() {
return $this->FirstNumber * $this->SecondNumber;
}
public function Division() {
return $this->FirstNumber / $this->SecondNumber;
}
}
$FirstNumber='0';
$SecondNumber='0';
$operator='Sum';
if(!empty($_GET['FirstNumber']))
$FirstNumber = $_GET['FirstNumber'];
if(!empty($_GET['SecondNumber']))
$SecondNumber = $_GET['SecondNumber'];
if(!empty($_GET['operator']))
$operator = $_GET['operator'];
$CalculatorResult='';
$mycalc = new MyCalculator($FirstNumber,$SecondNumber); 
if($operator=='Sum')
$CalculatorResult= $mycalc-> Addition();
if($operator=='Multiplication')
$CalculatorResult= $mycalc-> Multiplication();
if($operator=='Subtraction')
$CalculatorResult= $mycalc-> Subtraction();
if($operator=='Division')
$CalculatorResult= $mycalc-> Division();
?>
<body>
<div id="page-wrap">
<h1>PHP - Simple Calculator Program</h1>
<form action="" method="get" id="quiz-form">
<p>
<input type="number" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber; ?>" /> <b>First Number</b>
</p>
<p>
<input type="number" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" /> <b>Second Number</b>
</p>

<input type="submit" name="operator" value="Sum" />
<input type="submit" name="operator" value="Subtraction" />
<input type="submit" name="operator" value="Multiplication" />
<input type="submit" name="operator" value="Division" />




<p>
<input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> <b>CalculatorResult</b>
</p>
</form>
</div>
</body>

