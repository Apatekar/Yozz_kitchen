<?php
	session_start();
?>

<html>
<head>
<meta charset="utf-8">
<title>Apoteka</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
	
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body class="front">
	
<div id="wrapper">
	
	<div id="header">
		
		<div id="logo" style="background-color:#5585d1; width:100px;">
			<?php
	if(@$_POST['username'] && $_POST['password'])
	{
		echo "Kuvar:"."<br/>";
	echo "Name: ".$_POST['username'];
	}
	echo "<br>";
?>
	<a href="index.html">Logout</a>
		</div>
		
		<div class="nav">
			<ul>
				<li><a href="index.html">Main page</a></li>
				<li><a href="about.html">About me</a></li>
				<li><a href="recipes.html">Recipes</a></li>
                <li><a href="comment.html">Comments</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="login.html">Login</a></li>
			</ul>
		</div>
		
	</div><!-- end #header -->
	
	<div id="hero">
		<img src="images/main.jpg" alt="">
		
		<div id="heroText">
			<h1>Welcome to<br><span>Yozz<span>kitchen</span></span></h1>
		</div>
	</div><!-- end #hero -->
	
	<div id="products">
	
		<div class="product">
			<a href="recepti/oslic.html" target="_blank">
				<img src="images/p1.jpg" alt="">
				<span>Boiled<br> hake</span>
			</a>
		</div><!-- end .product -->
		
		<div class="product">
			<a href="recepti/piletina.html" target="_blank">
				<img src="images/p2.jpg" alt="">
				<span>Dešanž čiken with vegetables</span>
			</a>
		</div><!-- end .product -->
		
		<div class="product">
			<a href="recepti/uvijaca.html" target="_blank">
				<img src="images/p3.jpg" alt="">
				<span>Uvijača with puno cheese</span>
			</a>
		</div><!-- end .product -->
	
	</div><!-- end #products -->
	
	<div id="main">
		<h2>Yozz kitchen  <p style="font-size:10px;">07.02.2019</p></h2>
		<p>Pozdrav drugari,
ovo je moj prvi sajt.<br>
Nadam se da će vremenom postati sve bolji i lepši.</p>


<div >
		<h2>Fun facts  <p style="font-size:10px;">10.02.2019</p></h2>
		<p>Luk, jabuka i krompir imaju isti ukus.<br>
		Razlike koje osetimo,<br>
		prouzrokovane su njihovim pojedinačnim mirisima.</p>

	</div>

	</div>
	
	
	<!-- end #main -->
	
	<div id="sidebar">
		<i class="fas fa-drumstick-bite"></i>
		<h3>Anthony Bourdain</h3>
		<p>Travel isn't always pretty.It isn't always comfortable.
            Sometimes it hurts,it even breaks your heart.But it's okay.
            The journey changes you;it should change you.
            It leavs marks on your memory, on your consciousness,on your heart,and on your body.
            You take something with you. Hopefully,you leave something good behind.</p>
		<i class="fas fa-seedling"></i>
		<h3>Jamie Oliver</h3>
		<p>Stop being a vegan and start enjoying what you eat.</p>
	</div><!-- end #sidebar -->
	
	<div id="footer">
		
		<div id="footerLogo">
			<img src="images/logo_footer.png" alt="">
		</div><!-- end #footerLogo -->
		
		<div class="footerText">
			<h3>Posted by:<br>Dejan Ranić</h3>
  <p>Contact information: <a href="mailto:yozzkitchen@gmail.com">
  yozzkitchen@gmail.com</a></p>
		</div><!-- end .footerText -->
		
		<div id="footerCopy">
			<p>Copyright <a href="#">Yozz kitchen</a></p>
		</div><!-- end #footerCopy -->
		
	</div><!-- end #footer -->
	
	
</div><!-- end #wrapper -->
	
	
	
</body>
</html>

