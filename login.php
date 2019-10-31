<!DOCTYPE html>
<style>
	body {
	  background-image: url("skyline.jpg"); /* The image used */
	  height: 800px; /* You must set a specified height */
	  background-position: center; /* Center the image */
	  background-repeat: no-repeat; /* Do not repeat the image */
	  background-size: cover; /* Resize the background image to cover the entire container */
	}
</style>
<html> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<body> 
        <center style="background-color:rgba(255,255,255,0.7); margin-right: 500px; margin-left: 500px; margin-top: 150px; padding-bottom: 50px; border-radius: 5px">
            <img src="dbslogo.png" alt="DBS_Logo" style="padding-top:50px"><br><br>
            <form method="post" action="main.php">
                <input type="text" name="userid" value=" " placeholder="User ID" size="25" style="background-color: #CCCCCC; border-style: none; border-radius: 3px"><br><br>
				<i class="fas fa-lock"></i>
                <input type="password" name="pass" value="" placeholder="Password" size="25" style="border-style: none; background-color: #CCCCCC; border-radius: 3px"><br><br>
                <input type="submit" value="Login" class="submit" style="border-style: none; background-color: #FF643E; padding:10px; border-radius: 5px">
            </form> 
        </center>
    </body> 
</html> 