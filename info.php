
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile Image hover effect</title>
	<link rel="stylesheet" href="style.css">

	<!-- ------------ Font awesome CDN link ------------------ -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
	box-sizing: border-box;
}

body {
	background-color: black;
    background-image: url(web_images/bg2.jpg);
    background-size: cover;
	font-family: Montserrat, sans-serif;
	
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;

	min-height: 100vh;
	margin: 0;
}

h3 {
	margin: 10px 0;
}

h6 {
	margin: 5px 0;
	text-transform: uppercase;
}

p {
	font-size: 14px;
	line-height: 21px;
}
img{
    height: 150px;
    width: 150px;
}

.card-container {
	background-color: #030A21;
	border-radius: 5px;
	box-shadow: 2px 3px 5px 2px black;
	color: #B3B8CD;
	padding-top: 30px;
	position: relative;
	width: 350px;
	max-width: 100%;
	text-align: center;
}
a{
	text-decoration: none;
}

.card-container .pro {
	color: #231E39;
	background-color: #FEBB0B;
	border-radius: 3px;
	font-size: 14px;
	font-weight: bold;
	padding: 3px 7px;
	position: absolute;
	top: 30px;
	left: 30px;
}

.card-container .round {
	border: 1px solid #03BFCB;
	border-radius: 50%;
	padding: 7px;
	box-shadow: 12px 13px 15px 12px black;
}

button.primary {
	background-color: #03BFCB;
	border: 1px solid #03BFCB;
	border-radius: 3px;
	color: #231E39;
	font-family: Montserrat, sans-serif;
	font-weight: 500;
	padding: 10px 25px;

}

button.primary.ghost {
	background-color: transparent;
	color: #02899C;
}

.skills {
	background-color: #1F1A36;
	
	border-bottom-left-radius:10px ;
	border-bottom-right-radius:10px ;
	text-align: left;
	padding: 15px;
	margin-top: 30px;
}

.skills ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.skills ul li {
	border: 1px solid #2D2747;
	border-radius: 2px;
	display: inline-block;
	font-size: 12px;
	margin: 0 7px 7px 0;
	padding: 7px;
}

footer {
    background-color: black;
	opacity: 0.3;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
</style>
<body>
<div class="card-container">
	<span class="pro">PRO</span>
	<img class="round" src="web_images/info.jpg" alt="user" />
	<h3>Nguyễn Tấn Kiệt</h3>
	<h6>Nha Trang</h6>
	<p>59-CNTT1  <br/> Nha trang uninversity</p>
	<div class="buttons">
		<button class="primary">
			<a href="Bai_Tap.php">BaiTap_TH</a>
		</button>
		<button class="primary ">
		<a href="Bai_Tap2.php">BaiTap_MYSQL</a>
		</button>
	</div>
	<div class="skills">
		<h6>Skills</h6>
		<ul>
			<li>UI / UX</li>
			<li>Front End Development</li>
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
			<li>React</li>
			<li>Node</li>
		</ul>
	</div>
	
</div>

<footer>
	<p>
    Contact-info<i class="fa fa-heart"></i> by
		<a target="_blank" href="">Email</a>
		- kietnguyen1147@gmail.com
		<a target="_blank" href=">here</a>
		- Design made by
		<a target="_blank" href="">0913314614</a>
	</p>
	<a href="Bai_Tap.php"><i class="fas fa-sign-out-alt"></i></a>
</footer>
</body>
</html>
