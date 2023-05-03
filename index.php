<?php 
session_start();

	include("connection.php");
	//include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$firstName = $_POST['fName'];
		$lastName = $_POST['lName'];
        $address=  $_POST['address']; 
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $degree= $_POST['degree'];
        $field= $_POST['field'];
        $dob= $_POST['dob'];

		if(!empty($firstName) && !empty($lastName) /*&& !is_numeric($user_name)*/)
		{

 			//save to database
			// $user_id = random_num(20);
			$query = "insert into uni search (fName,lName, address, email, phone, degree, field, dob) values ('$firstName','$lastName','$address', '$email', '$phone', '$degree', '$field', '$dob')";

			mysqli_query($con, $query);

			//header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unisearch</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col container bg-light" id="left">
                <a class="display-6 fs-3 text-decoration-underline mb-5" href="index.html">Unisearch</a>
                <h1 class="display-6 text-center">Tell us About Yourself</h1>
                
                <!-- <form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="fNafme"><br><br>

			<input id="text" type="password" name="lName"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form> -->
                <form  method="post" >
                <!-- class="m-5" id="signUp" -->

                    <div class="m-3">
                        <label for="exampleFormControlInput1" class="form-label">First Name</label>
                        <input id="firstName" type="text" name="fName" class="form-control"  placeholder="name@example.com">
                    </div>
                
                    <div class="m-3">
                        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                        <input id="lastName" name="lName" type="text"  class="form-control"  placeholder="Last Name">
                    </div>

                    <div class="m-3">
                        <label for="exampleFormControlInput1" class="form-label">Address</Address></label>
                        <input id="LastName" name="address" type="text" class="form-control"  placeholder="e.g 1000 Chastain Road">
                    </div>

                    <div class="m-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input id="email" name="email" type="text" class="form-control"  placeholder="e.g ksuID@ksu.edu">
                    </div>

                    <div class="m-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input id="phone" type="text" name="phone" class="form-control"  placeholder="e.g 123456789">
                    </div>

                    <div class="m-3">
                        <label for="exampleFormControlInput1" class="form-label">Desired Degree Type</label>
                        <input id="degree" type="text" name="degree" class="form-control"  placeholder="e.g MSSWE">
                    </div>

                    <div class="m-3">
                        <label for="exampleFormControlInput1" class="form-label">Desired Field of Study</label>
                        <input id="field" type="text" name="field" class="form-control"  placeholder="e.g. Game Development">
                    </div>

                    <div class="m-3">
                        <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                        <input type="password" name="dob" class="form-control" id="dob" placeholder="e.g mmddyyyy">
                    </div>
                
                    <div class="my-5 mx-3 d-grid gap-2" id="button">
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                
                </form>
            </div>
    
            <div class="col container" id="right">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact us</a>
                    </li>
                </ul>
                <div class="text-center" id="slogan">
                    <h1 class="display-2">Unisearch</h1>
                    <h3 class="">Education Made Easy.</h3>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    
</body>
</html>