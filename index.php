
<html>

<head>
   
   <title>Home_Page_Calorie_Calculator</title>

   <link rel="stylesheet" href="index.css">

   <script src="project.js"></script>
   
</head>

<body>

   <!-- container is the class name given for the whole page -->

   <div class="container">

      <!-- this the header part section to hold the heading and navigation items -->

      <header id="page_header_1">

         <!-- page_heading is the id which holds the heading name part -->

         <h1 id="page_heading">
            
            CALORIE CALCULATOR

         </h1>

         <!-- page_nav_bar is the id which holds the navigation items -->

         <nav id="page_nav_bar">

            <a href="calorie_intake.html" id="nav_link">Create Calorie Intake</a>
            <a href="calorie_burned.html" id="nav_link">Create Calorie Burned</a>

         </nav>

      </header>

      <!-- bodypart will hold the table for the calorie data -->

      <div class="bodypart">

         <!-- table is created to show the data -->
         <table id="calorie_table">

            <tr id="table_column">

               <td id="table_data">Date of data created (yyyy/mm/dd)</td>
               <td id="table_data">Name of the user</td>
               <td id="table_data">Total calories intake on that date(in cal.)</td>
               <td id="table_data">Target calorie intake Value(in cal.)</td>
               <td id="table_data">Target Acheived for calories intake(in %)</td>
               <td id="table_data">Total Calorie burned on that date(in cal.)</td>
               <td id="table_data">Target Calorie Burned Value(in cal.)</td>
               <td id="table_data">Target Acheived for calories burned(in %)</td>
               <td id="table_data">Edit Calorie Intake Value</td>
               <td id="table_data">Edit Calorie Burned Value</td>

            </tr>

            <!-- <tr id="table_column_i">

               <td id="table_data-t">02/04/2023</td>
               <td id="table_data-t">Sabyasachi Sahoo</td>
               <td id="table_data-t">450</td>
               <td id="table_data-t">1000</td>
               <td id="table_data-t">45</td>
               <td id="table_data-t">230</td>
               <td id="table_data-t">600</td>
               <td id="table_data-t">36</td>
               <td id="table_data-t"><input type="button" value="Edit Imfo" id="btn-1" onclick="document.location='edit_intake.html'"></td>
               <td id="table_data-t"><input type="button" value="Edit Imfo" id="btn-2" onclick="document.location='edit_burned.html'"></td>

            </tr> -->


            <tr id="table_column_i">

                  <?php

                  require_once('joint.php');
                  while($row = mysqli_fetch_array($result))
                  {

                     ?>

                     
            
                     <td id="table_data-t"><?php echo $row['date'];?></td>
                     <td id="table_data-t"><?php echo $row['User_Name'];?></td>
                     <td id="table_data-t"><?php echo $row['Total_Calorie_Intake'];?></td>
                     <td id="table_data-t"><?php echo $row['Target_Calorie_Intake'];?></td>
                     <td id="table_data-t"><?php echo $row['Target_Acheived_Intake'];?></td>
                     <td id="table_data-t"><?php echo $row['Total_Calorie_Burned'];?></td>
                     <td id="table_data-t"><?php echo $row['Target_Calorie_Burned'];?></td>
                     <td id="table_data-t"><?php echo $row['Target_Acheived_Burned'];?></td>
                     <td id="table_data-t"><a type="button" id="btn-1" href="edit_intake.html">Edit Info</td>
                     <td id="table_data-t"><a type="button" id="btn-2" href="edit_burned.html">Edit Info</td>
                  
                     </tr>


                  <?php

                  }

               ?>

            



         </table>


      </div>

   </div>

</body>

</html>