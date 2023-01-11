<?php

$conn = mysqli_connect('localhost','root','','CALORIE_CALCULATOR') or die("Connection Failed");

// $query = "select cit.date , cit.User_Name , cit.Total_Calorie_Intake , cit.Target_Calorie_Intake , cit.	Target_Acheived_Intake ,cbt.Total_Calorie_Burned , cbt.Target_Calorie_Burned , cbt.Target_Acheived_Burned from calorie_intake_table cit , calorie_burned_table cbt where cit.User_Name=cbt.User_Name ";

$query = "select * from calorie_intake_table inner join calorie_burned_table on calorie_intake_table.User_Name=calorie_burned_table.User_Name ";

$result = mysqli_query($conn,$query);


                //   require_once('joint.php');


?>