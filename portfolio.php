<!DOCTYPE html>
<style>
	body {
	  height: 800px; /* You must set a specified height */
	  background-position: center; /* Center the image */
	  background-repeat: no-repeat; /* Do not repeat the image */
	  background-size: cover; /* Resize the background image to cover the entire container */
	}
	h1 {
		position: center;
	}
	p{
		
		position: left;
		
	}
	label {
		display: inline-block;
        width: 240px;
       text-align: left;
	}
	.slidecontainer {
  width: 100%; /* Width of the outside container */
}
.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;  
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%; 
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

</style>
<html> 
   <head> 
   <script>
				var slider = document.getElementById("myRange");
                var output = document.getElementById("demo");
               output.innerHTML = slider.value; // Display the default slider value

               // Update the current slider value (each time you drag the slider handle)
               slider.oninput = function() {
               output.innerHTML = this.value;
			   }
				</script>
   </head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<body>
	     <center style="background-color:rgba(255,255,255,0.7); margin-right: 500px; margin-left: 500px; margin-top: 150px; padding-bottom: 50px; border-radius: 5px">
            <br><br>
            <form method="post" action="main.php">
			    <h1> Your Portfolio </h1>
			    <i class="fas fa-lock"></i>
				<label>Name :</label> <br>
                <input type="text" name="First Name" value="" placeholder="First Name" size="25" style="background-color: #CCCCCC; border-style: none; border-radius: 3px"><br><br>
				<i class="fas fa-lock"></i>
                <input type="text" name="Last Name" value="" placeholder="Last Name" size="25" style="border-style: none; background-color: #CCCCCC; border-radius: 3px"><br><br>
				<i class="fas fa-lock"></i>
				<label>Gender :</label> <br>
                 <input type="radio" name="gender" value="male"> Male<br>
                 <input type="radio" name="gender" value="female"> Female<br>
				 <i class="fas fa-lock"></i>
				 <label>Date of Birth :</label> <br>
				 <input type="date" name="bday" placeholder="Last Name" size="25" style="border-style: none; background-color: #CCCCCC; border-radius: 3px font-size=20px" > <br>
				 <i class="fas fa-lock"></i><br>
				 <label>Goals ? (left easiest)</label> <br>
				<div class="slidecontainer">
                <input type="range" min="1" max="5" value="5" class="slider" id="myRange">
				
                </div>
                <input type="submit" value="Save" class="submit" style="border-style: none; background-color: #FF643E; padding:10px; border-radius: 5px">
				
            </form> 
        </center>
	
	
	</body>
		   


</html>
