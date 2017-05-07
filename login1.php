
<html>
<title>login</title>
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
input[type=password] {
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
<br>
<br>
<br>
<br>
<br>
<center>
<div style="opacity: 0.7; background-color:skyblue;height: 30%; width: 40%">
<form action="home1.php" method="post">
<table width="50" height="50">
<tr>
<td>Username: </td>
<td><input type="text" size="40" name="uid"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" size="40" name="pass">
</tr>
</table>
<input type="submit"  value="SUBMIT">
<input type="RESET" value="RESET">
</form>
</div>
</center>
</body>
</html>
