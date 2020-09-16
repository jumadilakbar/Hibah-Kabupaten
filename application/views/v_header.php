<!doctype html>
<html>
<head>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/form.css">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
	.bg-success{
		    background-color:#bdeaaa;
	}
	/**********************************
Responsive navbar-brand image CSS
- Remove navbar-brand padding for firefox bug workaround
- add 100% height and width auto ... similar to how bootstrap img-responsive class works
***********************************/

.navbar-brand {
  padding: 0px;
}
.navbar-brand>img {
  height: 100%;
  padding: 15px;
  width: auto;
}







/*************************
EXAMPLES 2-7 BELOW
**************************/

/* EXAMPLE 2 (larger logo) - simply adjust top bottom padding to make logo larger */

.example2 .navbar-brand>img {
  padding: 7px 15px;
}


/* EXAMPLE 3

line height is 20px by default so add 30px top and bottom to equal the new .navbar-brand 80px height  */

.example3 .navbar-brand {
  height: 80px;
}

.example3 .nav >li >a {
  padding-top: 30px;
  padding-bottom: 30px;
}
.example3 .navbar-toggle {
  padding: 10px;
  margin: 25px 15px 25px 0;
}


/* EXAMPLE 4 - Small Narrow Logo*/
.example4 .navbar-brand>img {
  padding: 7px 14px;
}


/* EXAMPLE 5 - Logo with Text*/
.example5 .navbar-brand {
  display: flex;
  align-items: center;
}
.example5 .navbar-brand>img {
  padding: 7px 14px;
}


/* EXAMPLE 6 - Background Logo*/
.example6 .navbar-brand{
  background: url(https://res.cloudinary.com/candidbusiness/image/upload/v1455406304/dispute-bills-chicago.png) center / contain no-repeat;
  width: 200px;
}





/* EXAMPLE 8 - Center on mobile*/
	@media only screen and (max-width : 768px){
  .example-8 .navbar-brand {
  padding: 0px;
  transform: translateX(-50%);
  left: 50%;
  position: absolute;
}
.example-8 .navbar-brand>img {
  height: 100%;
  width: auto;
  padding: 7px 14px;
}
}


/* EXAMPLE 8 - Center Background */
.example-8 .navbar-brand {
  background: url(https://res.cloudinary.com/candidbusiness/image/upload/v1455406304/dispute-bills-chicago.png) center / contain no-repeat;
  width: 200px;
  transform: translateX(-50%);
  left: 50%;
  position: absolute;
}





/* EXAMPLE 9 - Center with Flexbox and Text*/
.brand-centered {
  display: flex;
  justify-content: center;
  position: absolute;
  width: 100%;
  left: 0;
  top: 0;
}
.brand-centered .navbar-brand {
  display: flex;
  align-items: center;
}
.navbar-toggle {
    z-index: 1;
}




/* CSS Transform Align Navbar Brand Text ... This could also be achieved with table / table-cells */
.navbar-alignit .navbar-header {
	  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
  height: 50px;
}
.navbar-alignit .navbar-brand {
	top: 50%;
	display: block;
	position: relative;
	height: auto;
	transform: translate(0,-50%);
	margin-right: 15px;
  margin-left: 15px;
}





.navbar-nav>li>.dropdown-menu {
	z-index: 9999;
}

body {
  font-family: "Lato";
}
  </style>

</head>
<body>
	<div class="container">
		<!-- <h1 class="text-center">Example 4 - Tall Narrow Logo</h1> -->
		<div class="example4">
		  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
		    <div class="container-fluid">
		      <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar4">
		          <span class="sr-only">Toggle navigation</span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="<?php echo base_url().'index.php/web'?>"><img style="	width: 64px;" src="<?php echo base_url() ?>asset/gambar/logo.png" alt="Dispute Bills">
		        </a>
		      </div>
		      <div id="navbar4" class="navbar-collapse collapse">
		        <ul class="nav navbar-nav">
							<li><a class="nav-link" href="<?php echo base_url().'index.php/hibah'?>">HIBAH</a></li>
				      <li><a class="nav-link" href="<?php echo base_url().'index.php/bansos'?>">BANSOS</a></li>
				      <li><a class="nav-link" href="<?php echo base_url().'index.php/petunjuk'?>">PETUNJUK</a></li>
				      <li><a class="nav-link" href="<?php echo base_url().'index.php/bansos/cek_proposal'?>">CEK PROPOSAL</a></li>
				      <li><a class="nav-link" href="<?php echo base_url().'index.php/faq'?>">HUBUNGI KAMI</a></li>
				      <li><a class="nav-link" href="<?php echo base_url().'index.php/login'?>">LOGIN</a></li>
		            </ul>
		          </li>
		        </ul>
		      </div>
		      <!--/.nav-collapse -->
		    </div>
		    <!--/.container-fluid -->
		  </nav>
		</div>
		

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
	      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">

	      <div class="item active">
	        <img src="<?php echo base_url() ?>asset/gambar/bima1.jpeg" alt="Chicago" style="width:100%;">
	      </div>

	      <div class="item">
	        <img src="<?php echo base_url() ?>asset/gambar/bima2.jpeg" alt="New york" style="width:100%;">
	      </div>
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	<!-- </div> -->
