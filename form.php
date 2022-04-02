<!DOCTYPE html>
<head>
<title> Cookies
 </title>
</head>
<?php
$FirstNumber='0';
$SecondNumber='0';
$operator="p";
$result="";
if(!empty($_GET['FirstNumber']))
$FirstNumber = $_GET['FirstNumber'];
if(!empty($_GET['operator']))
$operator = $_GET['operator'];

if($operator=="Set")
{
    setcookie("Value_Storing",$FirstNumber, time() + 2 * 24 * 60 * 60);
    $result="Cookie is Set";
}
else
{
    setcookie("Value_Storing", "", time()-3600);
    $result="Cookie is Deleted";
}
?>
<body>
<div id="page-wrap">
<h1>Cookie Setting And Deleting</h1>
<form action="" method="get" id="quiz-form">
<p>
<input type="number" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber; ?>" /> <b>Enter Your Value</b>
</p>

<input type="submit" name="operator" value="Set" />
<input type="submit" name="operator" value="Delete" />

<?php
if($operator!="p")
echo "<h2>$result</h2>";
?>

</form>
</div>
</body>

