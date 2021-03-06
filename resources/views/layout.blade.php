<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>P3-Form</title>



<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<style>
	#foot_nav{
		height:20px;
	}
	#intro_row{
		background-image: url("abstract_circles_background_1.jpg");
		height: 150px;
		color: white;
		padding:0 50px 0 50px;
		margin-bottom: 20px;
		margin-top: 100px;

	}
	.fa{
		color: #1a242f;
	}
	#intro_row > p{

	}

	#users_form{
		border: 1px grey solid;
		margin: 20px;
			-moz-box-shadow:    3px 3px 5px 6px #ccc;
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
  box-shadow:         3px 3px 5px 6px #ccc;
  margin-right:25px;
  padding-bottom: 10px;
	}

		#lorem_form{
		border: 1px grey solid;
		margin: 20px;
			-moz-box-shadow:    3px 3px 5px 6px #ccc;
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
  box-shadow:         3px 3px 5px 6px #ccc;
  margin-left:25px;
  padding-bottom: 10px;
	}

	.panel-body{
		padding: 0 50px 0 50px;
	}
.footer-list{
	list-style: none;
}
	.footer-list >li {
	display: inline-block;
	margin-right: 10px;
}

.footer{
	background-color: #18bc9c;
	position: absolute;
	bottom: 0;
	height: 60px;
	width:100%;

}
.err_message{
	color:red;
	font-weight: small;
}

.panel{
	padding: 0 50px 0 50px;
}

	</style>






</head>
<body>
<?php
function activate($uri) {
    if ($_SERVER['REQUEST_URI'] == $uri) {
        echo ' class="active" ';
    }
}

?>

<!--script to make navigator tabs active-->

<!--code for making active nav tabs-->

<div class="container-fluid">


<nav class="navbar navbar-inverse navbar-fixed-top">

  <div>

<ul class="nav navbar-nav nav-pills">
  <li <?php activate("#")?> ><a href={{ url('http://p1.joyabia.co') }}>P1-About Me</a></li> 
  <li <?php activate("#")?>> <a href={{ url('http://p2.joyabia.co') }}>P2-XKCD</a></li>
  <li <?php activate("/")?>><a href="/">P3- Developer's Best Friend</a></li>
  <li <?php activate("#")?>><a href="#">P4 - Seed Management System</a></li>
</ul>
</div>
</nav>


<div class="row" id="intro_row">
<h1> The Developer's Best Friend</h1>
<p >Are you building an application and need seed data for user accounts and text?  Your best friend is here to hold your hand. Enter the number of paragraphs or users you want to create, select extra features and submit. Va! Va! Voom! the data you need right here on your screen.</p>
</div>


	

@yield('content')



<nav class="navbar navbar-inverse navbar-fixed-bottom" id="foot_nav">
  <div class="container">
    <ul class="footer-list">
    
   <li> Webdesign - by Joy Abia </li>
    <li><a href="{{ url('http://linkedin.com/in/joyabia') }}"> <i class="fa fa-linkedin-square fa-2x"></i></a></li>

    <li><a href="{{ url('https://github.com/joyabia/') }}"><i class="fa fa-github-alt fa-2x" ></i></a></li>
 
	
    
    </ul>
    
  </div>
</nav>

</div>

	
</body>
</html>