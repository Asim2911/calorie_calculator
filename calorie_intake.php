<html>
   <head>

      <title>calorie page intake</title>

      <link rel="stylesheet" href="calorie_nav_pages.css">

      <script>
         
         function check_data_1()
         {
            var return_Value=true;
            var date=document.querySelector('.input-date').value;
            var name=document.querySelector('.input-name').value;
            var food=document.querySelector('.input-food').value;
            var quantity=document.querySelector('.input-quantity').value;

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
            else if(food.length == 0)
            {
               alert("Food Type can not be Empty");
               return_Value=false;
            }
            else if(quantity.length == 0)
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

         <h1 id="heading">Create Calorie Intake</h1>

         <form name="intake-form"  action="calorieIntake.php" method="post" id="form-div">

            <label for="date" id="input_labels">Date  </label><input type="date" name="date" id="input_feild" class="input-date">
            
            <br>

            <label for="name" id="input_labels">Name  </label><input type="text" name="name" id="input_feild" placeholder="Name of the user" class="input-name">

            <br>

            <label for="food" id="input_labels">Type of Food taken</label>
            <select name="food" id="input_feild" class="input-food">
               <option value="">Select Food</option>
               <option value="Rice">Rice</option>
               <option value="Roti">Roti</option>
               <option value="apple">Apple</option>
               <option value="orange">Orange</option>
            </select>

            <br>

            <label for="quantity" id="input_labels">Quantity of food taken </label><input type="number" name="quantity" id="input_feild" placeholder="Quantity of the food" class="input-quantity">

            <br>

            <input type="submit" id="submit_button" class="sub-btn-1" value="Submit" onclick="check_data_1()">

            <input type="button" id="Home_button" value="Home" onclick="document.location='Home_page.html'">

         </form> 

      </div>

   </body>

</html>