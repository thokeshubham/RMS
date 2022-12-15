
<!DOCTYPE html>
<html>
<head>
	<title>index RMS</title>
	<!-- <link rel="stylesheet" type="text/css" href="indexstyle.css"> -->
</head>
<style>
	*{
	margin: 0;padding: 0;box-sizing: border-box;
}

header{
	width: 100%; height: 100vh;
	background-image: url('../images/t1.jpg');
	background-image: url('staticimages/t1.jpg');
	background-repeat: no-repeat;
	background-size: cover;
}

nav{
	width: 100%;height: 15vh;
	background: rgba(0,0,0,0.2);
	color:black;display: flex;justify-content: space-between;
	align-items: center;
}

nav .logo{
	width: 30% ;text-align: center;
	color: white;
}
/*nav .menu{
	width: 40%;display: flex;justify-content: space-around;
}
nav .menu a{
	width: 50%;
	text-decoration:none;color: white;
	font-weight: bold;
}
nav .menu a:first-child{
	color:yellow;
}*/

main{
	width: 100%;
	height: 85vh;
	display: flex;
	justify-content: center;
	align-items: center;
	text-align: center;
	/*color:black;*/

}
/* section{

} */
section h3{
	font-size: 35px;font-weight: 200;letter-spacing: 3px;
	margin-bottom: 25px;
	text-shadow: 2px 1px 5px black;
	color: white;
}

section h1{
	margin: 30px,0,20px,0;
	font-size: 55px;font-weight: 700;letter-spacing: 3px;
	text-shadow: 2px 1px 5px white;
	color:black;
}
section a{
	padding: 12px 30px;
	border-radius: 4px;
	outline: none;
	font-size: 13px;
	font-weight: 500;
	text-decoration: none;
	word-spacing: 1px;
}
section .btone{
	background:#fff;
	color: #000;
	font-size:50px;
}
section .bttwo{
	background:#00b894;
	color:white;
	font-size:50px;
}
body{
	background-image: url('bg.jpg');
	min-height: 100%;
  background-position: center;
  background-size: cover;
}
marquee{
	

	height: 50px;
            overflow: hidden;
            position: relative;
            background: #307e4d;
            color: white;
            border: 1px solid #4a4a4a;
			font-size:30px;
	
	        font-family:serif;
	

}
</style>
<body>
	<header>
		<nav>
			<div class="logo"><h1 style="font-family:Helvetica;font-size: 40px;">Result Management System</h1></div>
			<!-- <div class="menu">
			<a href="">HOME</a>
			<a href="">CONTACT</a>
			<a href="">FEEDBACK</a>
			</div> -->
		</nav>
		<marquee width="100%" direction="left" height="100px">
		Welcome...To Result Portal See Your Result Here....
		</marquee>
			<main>
				<section>
					<h1 style="color:#fd8d03; font-size: 100px;">SNJB COE</h1>
					<!-- <p><h3>"Traveling-It leaves you speechless,<br>then turns you into a storyteller"</h3></p> -->
					<!-- <a href="login.php" class="btone">SIGN IN</a> -->
					<a href="user/slogin.php" class="btone">Student</a>
					<a href="user/tlogin.php" class="bttwo">Teacher</a>
				</section>
			</main>
	</header>
	
</body>
</html>
