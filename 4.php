<html>
	<head>
		<title> Trip Booking </title>
		<style>
body
{
	background-color:"light-grey";
	font-family: "Segoe UI";
	word-spacing: 6px;
	background-color: #1e1f26;
}
header
{
	text-align:center;
	font-family: "serif";
	font-size: 72px;
	color:#dcf7b2;
}
h2
{
	color:white;
	text-align:center;
	font-size: 38px;
	color:#d5f7a1;
	
font-family: "Brush Script MT, Brush Script Std, cursive";
}

.text
{
	text-align:center;
	font-size: 32px;
	color:grey;
	font-family: "Courier New, monospace";
}
h4
{
	text-align:center;
	color:#898c84;
	font-family: "Courier New, monospace"
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #dddddd;
}

li {
  float: left;
}


li a {
  display: block;
  color: grey;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.link1 
{
	color:grey;
}
.slider {
  width: 800px;
  margin: 30px auto;
  position: relative;
}

.slider-viewport {
  width: 800px;
  height: 400px;
  overflow: hidden;
}

.slider-content {
  display: grid;
  grid-auto-flow: column;
  transition: 1s all;
}
.slider-content img {
  width: 800px;
  height: 400px;
}

.slider-nav {
  position: absolute;
  width: 100%;
  bottom: -30px;
  margin-top: 10px;
  text-align: center;
}
.slider-nav a {
  box-shadow: 0px 0px 5px 0px rgba(255, 255, 255, 0.3);
  display: inline-block;
  background-color: #adafbc;
  width: 15px;
  height: 15px;
  margin: 0 3px;
}
.slider-nav a:hover {
  background-color: #fff;
  box-shadow: 0px 0px 5px 0px rgba(255, 255, 255, 0.8);
}

#img2:target .slider-content {
  transform: translateX(-800px);
}

#img3:target .slider-content {
  transform: translateX(-1600px);
}

#img4:target .slider-content {
  transform: translateX(-2400px);
}

#img5:target .slider-content {
  transform: translateX(-3200px);
}


table 
{
	border-collapse: separate;
   border: 1px  #999;
   border-style: double;
   border-spacing: 10px;

}
tr
{
	font-color:#d5f5e1;
}

td, th 
{
  text-align: left;
  color:#dae8df;
  font-size: 12pt;
  font-family:"Goudy Bookletter 1911";
  
}

button {
  background-color: #d8e3da;
  border: none;
  color: #1c291e;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 8px;
  font-family:"Snell Roundhand, cursive";
}
button:hover
{
  background-color: #73de84; 
  color: white;
}
form
{
display: table;
margin: 0 auto;
text-align:center;
font-family:"Courier New, monospace";
color:"white";
font-size:14pt;
}
#t
{
	font-family: "Courier New, monospace";
	color: #97c2a7;
}
#myB
{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  background-color:grey;
	color:#1c291e;
	border-radius: 0px;
	padding: 15px 32px;
}

#myB:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  padding: 15px 32px;
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
	<?php       
			$conn=mysqli_connect("localhost","root","","tta");
			if (!$conn)
				{
					die("connexion failed".mysqli_connect_error());
				}		
			
			 $request1="SELECT * FROM timeera ";
			 $result1=mysqli_query($conn,$request1);
			 $option1='';
			 while($line1=mysqli_fetch_assoc($result1))
			 {
			 $option1.= "<option value=\"".$line1['period']."\">".$line1['period']."</option>";
			 }
	?>
	
	<?php       
			$conn=mysqli_connect("localhost","root","","tta");
			if (!$conn)
				{
					die("connexion failed".mysqli_connect_error());
				}		
			
			 $request2="SELECT country FROM castle ";
			 $result2=mysqli_query($conn,$request2);
			 $option2='';
			 while($line2=mysqli_fetch_assoc($result2))
			 {
			 $option2.= "<option value=\"".$line2['country']."\">".$line2['country']."</option>";
			 }
	?>
	
	<?php 
			$conn=mysqli_connect("localhost","root","","tta");
			if (!$conn)
				{
					die("connexion failed".mysqli_connect_error());
				}	
			$sql= "UPDATE castle SET id=2 WHERE cas_id=2 ";
			

			

			mysqli_close($conn);
	?>
	
	<body>
		
		<header> TIME TRAVEL AGENCY </header>
		<h4> <i> THE JOURNEY STARTS HERE! </i> <h4>
			<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">		
			<fieldset>
			<legend>
			<p id=t> <i> Live the History! </i> </p>
			</legend>
			<br> 

			<table id="tab2">
			<tr>
			<td> Time-Era </td>
			<td>
			<select name="te" class="select"> 
			<?php echo $option1; ?> 
			</select>
			</td>
			</tr>
			<tr>
			<td> Country </td>
			<td>
			<select name="c" class="select"> 
			<?php echo $option2; ?> 
			</select>
			</td>
			</tr>
			
			<br>
			
			</table>
			<br> <br>
			<tr ><td id="c" colspan="2"><button type="submit" value="submit" name="Submit"> <b> <i> Result </b> </i></button></td></tr>
			</fieldset>
			<br> <br>
			
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
		$te=$_POST['te'];
		$c=$_POST['c'];
		
		
		$reqid="select id from timeera where period='$te'";
		$resid=mysqli_query($conn,$reqid);
		$line=mysqli_fetch_assoc($resid);
		$tid=$line['id'];
		
		//search for the castle id
		$reqid="select name, price from castle where country='$c' and id=$tid";
		$resid=mysqli_query($conn,$reqid);
		$line=mysqli_fetch_assoc($resid);
		$csn=$line['name'];
		$p=$line['price'];
		
		echo "<div class='txt'> You are going to: ".$csn." . This trip to the past will only cost you  " .$p . " $ per week <br>";
		
		$reqid="select book_id, movie_id from castle where name='$csn' ";
		$resid=mysqli_query($conn,$reqid);
		$line=mysqli_fetch_assoc($resid);
		$bid=$line['book_id'];
		$mid=$line['movie_id'];
		
		$reqid="select name, author, price from book where book_id='$bid' ";
		$resid=mysqli_query($conn,$reqid);
		$line=mysqli_fetch_assoc($resid);
		$bn=$line['name'];
		$ba=$line['author'];
		$bp=$line['price'];
		
		$reqid="select name, price from movie where movie_id='$mid' ";
		$resid=mysqli_query($conn,$reqid);
		$line=mysqli_fetch_assoc($resid);
		$mn=$line['name'];
		$mp=$line['price'];
		
		echo "<div class='txt'> In order for this trip to be perfect, we suggest: ".$bn." by " .$ba. " that will only cost you  " .$bp . " $ <br>";
		echo "<div class='txt'> We also recommend the movie: ".$mn." <br> <br>";
		$p=$p+$bp+$mp;
		echo "<div class='txt1'> This trip to the past will only cost you  " .$p . " $ ! <br>";
		}
		?>
		<br> <br>
		<style>
	a 
 { 
 text-decoration: none; 
 color: #d7fce0;
 font-family: "calibri";
 }
 </style>
		
		<button id="myB" class="float-left submit-button" > <a href= "http://localhost/Project/5.php"> <b> <i> Confirm! </b> </i> </a></button>

</body>
</html>