<!DOCTYPE HTML>
<html>
	<head> 
	<link rel="stylesheet" href="s1.css">
	<script> 
	function fill()
{	
var x=document.getElementById('fi').value;
	y=document.getElementById('la').value;
	result=document.getElementById('r')
	result.value=x.substr(0,3)+y.substr(0,3);
}
</script>
<style>
table 
{

   border: 1px  #999;
   border-style: double;
   border-collapse: separate;
   border-spacing: 10px;

}
</style>
	</head>
	
	<nav> 
	<div class="wrapper">
	<ul>
		<li> <a href="http://localhost/Project/1.php"> Home </a> </li>
		<li> <a href="http://localhost/Project/2.php"> Login </a> </li>
		<li> <a href="http://localhost/Project/3.php"> Destinations </a> </li>
		<li> <a href="http://localhost/Project/4.php"> Booking </a> </li>
		<li> <a href="http://localhost/Project/aboutus.php"> About Us </a> </li>
	</ul>
	</div>
	</nav>
	<br>
	<body>
		<header> TIME TRAVEL AGENCY </header>
		<h4> <i> LOG IN TO LIVE THE HISTORY! </i> <h4>
		<br> <br>

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> 
	<fieldset>
			<legend>
			<b style="color:#8fa897"> Let's Get to Know You! </b>
			</legend>
			<br>
	<table id="form">
	
		<tr>
			<td> Civility </td>
			<td>
				<input type="radio" name="civility" value="Miss">Miss
				<input type="radio" name="civility" value="Mrs" checked>Mrs
				<input type="radio" name="civility" value="Mr">Mr
			</td>
		</tr>
		<tr>	
			<td> First Name      </td>
			<td>
				<input type="text" name="first" class="inputField" id="fi" oninput='fill()' value="">
			</td>
		</tr>
			
				
		<tr>	
			<td> Last Name      </td>
			<td>
				<input type="text" name="last"  class="inputField" id="la" oninput='fill()' value="">
			</td>
		</tr>
		<tr> <td> Identifier      </td> <td> <input type="text" id="r" name="idn" readonly> </td></tr>
		<tr>	
			<td> Email      </td>
			<td>
				<input type="text" name="email"  class="inputField" id="em">
			</td>
		</tr>
		<tr> <td> <label for="pwd">Password      </label> </td>
		<td> <input type="password" id="pwd" name="pwd"> </td> </tr>
	</table>
	<br> <br> 
	<button type="submit" value="Submit" name="Submit" style="color:#8fa897"><i> <b> Login </i> </b></button>
	</fieldset>
	</form>
	<br> <br>
	<?php
	if (isset($_POST['Submit']))
	{
		$conn=mysqli_connect("localhost","root","","tta");
			if (!$conn)
			{
			die("connexion failed".mysqli_connect_error());
			}
		$cv=$_POST['civility'];
		$fn=$_POST['first'];
		$ln=$_POST['last'];
		$idn=$_POST['idn'];
		$em=$_POST['email'];
		$pwd=$_POST['pwd'];

		$req1="insert into customer (cv,fn,ln,idn,em,pwd) values ('$cv','$fn','$ln','$idn','$em','$pwd') ";
		$res1=mysqli_query($conn,$req1);
		if ($res1)
			 {
					echo "<div>Your registration was successful.</div>";
					header("Location:http://localhost/Project/3.php");
			 }
		
	}
	?>
		
	</body>	

</html>