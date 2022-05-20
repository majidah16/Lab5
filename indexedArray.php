<DOCTYPE html>
<html> 
<body>
<?php 
$month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September','October', 'November', 'December');
&monthDays = array ('January' => 31, 'February' => 28, 'March' => 31, 'April' =>30, 'May' =>31, 'June'=>30, 'August' =>31, 'September'=> 30, 'October' =>31, 'November' =>30, 'December' =>31);
$len = count($month);
foreach($month as $item) 
{
    echo $item;
    echo "<br>";
}

?>
</body>
</html>