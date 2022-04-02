<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$websiteErr = "";
$website = "";
$result="";
    
  if (empty($_POST["website"])) {
    $websiteErr = "Website is required";
  } else {
    
    $website = test_input($_POST["website"]);
    $str=explode("?",$website);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website) || sizeof($str)==1) {
      $result= "URL is not valid";
      $websiteErr = "URL is not valid";
    }    
    else
    {
      $result="URL is Valid";
      // echo "<h2>URL is Valid</h2>";
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form URL Validation </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Website: <input type="text" name="website" id="web">
  <span class="error">* <?php echo $websiteErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Output:</h2>";
echo "<h2>$result</h2>";
echo "<br>";
?>

</body>
</html>