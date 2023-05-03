<?php

function check_login($con)
{

	if(isset($_SESSION['user_id']))    // reading; checking if this session value exist
	{
        //if session value exist, check if it is real

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);

        //if the result is +ve , return the data
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//if session value doesn't exist, we redirect to login
	header("Location: login.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length); //assign a random variable

	for ($i=0; $i < $len; $i++) { 
		
		$text .= rand(0,9);
	}

	return $text;
}