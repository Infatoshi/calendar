<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>


<?php 

// $subDivNum = 1;

?>


<div class='gridParent'>
<div class='subDiv'>
<p>
<?php
echo $startDate;
?>
</p>
</div>

<div class='subDiv'>
<p>
<?php
echo $startDate;
?>
</p>
</div>
</div>
<!-- <div class='subDiv'>
<p>
test? 
</p>
</div>

<div class='subDiv'>
<p>
test? 
</p>
</div> -->

    
<?php
$defaultYear = 2022;
$defaultMonth = 1;
$d=cal_days_in_month(CAL_GREGORIAN,$defaultMonth,$defaultYear);
echo "There was $d days in jan 2022";

$rowLength = 7;
$startDate = 1;
// $colLength = 5;

for ($i = 0; $i < 7; $i++){
?>

<div class='gridParent'>
<div class='subDiv'>
<p>
<?php
echo $startDate;
?>
</p>
</div>
</div>
<?php
$startDate += 8;
}




?>
</body>
</html>