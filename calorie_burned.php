<html>
   <head>

      <title>calorie page burned </title>

      <link rel="stylesheet" href="calorie_nav_pages.css">

      <script>

         function check_data_2()
         {
            var return_Value=true;
            var date=document.querySelector('.input-date').value;
            var name=document.querySelector('.input-name').value;
            var activity=document.querySelector('.input-activity').value;
            var step=document.querySelector('.input-step').value;

            if(date.length == 0)
            {
               alert("Date can not be Empty !");
               return_Value=false;
            }
            else if(name.length == 0)
            {
               alert("Name can not be Empty");
               return_Value=false;
            }
            else if(activity.length == 0)
            {
               alert("Food Type can not be Empty");
               return_Value=false;
            }
            else if(step.length == 0)
            {
               alert("Food Quantity can not be Empty");
               return_Value=false;
            }
            return return_Value;
         }

      </script>

   </head>

   <body>

      
   
      <div class="container">

         <h1 id="heading">Create Calorie Burned</h1>

         <form name="burned-form" action="calorieBurned.php" method="post" id="form-div">

            <label for="date" id="input_labels">Date  </label><input type="date" class="input-date" name="date" id="input_feild">
            
            <br>

            <label for="name" id="input_labels">Name  </label><input type="text" class="input-name" name="name" id="input_feild" placeholder="Name of the user">

            <br>

            <label for="activity" id="input_labels">Type of Activity Done </label>
            <select name="activity" id="input_feild" class="input-activity">
               <option value="">Select Activity</option>
               <option value="Running">Running</option>
               <option value="Walking">Walking</option>
            </select>

            <br>

            <label for="step" id="input_labels">Count of Steps </label><input type="number" class="input-step" name="step" id="input_feild" placeholder="Number of steps">

            <br>

            <input type="submit" id="submit_button" class="sub-btn-2" value="Submit" onclick="check_data_2()">
            

            <input type="button" id="Home_button" value="Home" onclick="document.location='Home_page.html'">

         </form> 

      </div>

   </body>

</html>