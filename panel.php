<html>
<head><title>panel
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
<br>
<br>
<div style="opacity: 0.7; background-color: skyblue;height: 80%; width: 35%">
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
		<td><input type="submit" name="DELETE" value="DELETE">
		</input></td>
        <td><input type="submit" name="UPDATE" value="UPDATE">
		</input></td>
        <td><input type="submit" name="RESET" value="RESET">
		</input></td>
		<tr>
		<td><br></td></tr>
        <font color="red" size="5"><b>

        <?php

        if(isset($_GET['DELETE']))
			{
				$sql="DELETE FROM customers WHERE email='$email'";
				$ins=mysqli_query($var,$sql);
				if($ins)
					echo"Successful Deletion";
				else
					echo"Unsuccessful Deletion";
			}      
			if(isset($_GET['UPDATE']))
			{
				$sql="UPDATE customers SET username='$username',mobile=$mobile WHERE email='$email'";
				$ins=mysqli_query($var,$sql);
				if($ins)
					echo"Successful Updation";
				else
					echo"Unsuccessful Updation";
			}
			if(isset($_GET['RESET']))
			{	
				echo"in reset";
				$_POST['username']=null;
				$_POST['email']=null;
				$_POST['mobile']=null;
			}
			$result=mysqli_query($var,"select * from customers");
			echo"<table border=1>
			<tr>
				<th>Username</th>
				<th>email</th>
				<th>mobile</th>
			</tr>";
				while($row=mysqli_fetch_array($result))
				{
				echo"<tr>";	
				echo"<td>".$row['username']."</td>";
				echo"<td>".$row['email']."</td>";
				echo"<td>".$row['mobile']."</td>";
				echo"</tr>";
				}
			echo"</table>";
			//$name=$aname=$price=NULL;		
			mysqli_close($var);
		?>
		
		</table>
	</form>
    </centre>
</body>
</html>