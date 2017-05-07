<html>
<head><title>PHP-FORM
	<?php
		$username=$email=$mobile=" ";
		$username=$_GET['username'];
		$email=$_GET['email'];
		$mobile=$_GET['mobile'];
					$var=mysqli_connect("localhost","root","","amazing");

		?>
	</title>
	<style>
		body{
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	

}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
	
}

li {
    float: left;
}

li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #4CAF50;
}
input[type=text] {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #4cff00;
}
 </style>
	</head>
<body background="img.jpg">
<div style=opacity:0.7>
   		<ul>
    		<li><a href="home.html"><b>Home</a></li>
    		<li><a href="about.html">About</a> 
    		<li><a href="form.php">Register</a>  
    		<li ><a href="login1.php">Admin</a></li>    
   		</ul> 
</div>
<center>


<div style="opacity: 0.7; background-color: skyblue;height: 55%; width: 30%">
	<h1>User Registration</h1>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
		<table>
		<tr>
		<td>Enter Username</td><td><input type="text" name="username" value="<?php echo $username; ?>"> <br></input></td></tr>
		<tr>
		<td>Enter E-mail ID</td><td><input type="text" name="email" value="<?php echo $email; ?>"> </input></td></tr>
		<tr>
		<tr>
		<td>Enter Mobile Number</td><td><input type="text" name="mobile" value="<?php echo $mobile; ?>"> </input></td></tr>
		<tr>
		<tr>
		<td><input type="submit" name="INSERT" value="SUBMIT">
		</input></td></tr>
		<font color="red" size="5"><b>
		

		<?php
		$flg=0;
	
		if(empty($username)) 
		{echo "username is blank---";
		$flg=1;}
		else if(!preg_match("/^[a-zA-Z _]*$/",$username)) 
		{echo "---invalid username---";
			$flg=1;}
		if(empty($email)) 
		{echo "email is blank   ";
			$flg=1;}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{echo "---invalid email-id---";
			$flg=1;}
		if(empty($mobile)) 
		{echo "---mobile no. is blank---";
			$flg=1;}
		else if(strlen($mobile)!=10)
		{echo "---invalid mobile no---";
			$flg=1;}
		if($flg == 0)
			if(isset($_GET['INSERT']))
			{
				$sql="INSERT INTO customers(username ,email ,mobile) VALUES('$username','$email','$mobile')";
				$ins=mysqli_query($var,$sql);
				echo "Succesfully registered";
			}
				?>
		
		</table>
	</form>
	</div>
</body>
</html>