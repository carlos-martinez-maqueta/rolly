<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Hello, world!</title>

  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"
    integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ"
    crossorigin="anonymous"></script>
    <style type="text/css">
    	.Header a {
    text-transform: uppercase;
}	
.Header{
    height: 80px;
    padding: 10px 50px;
    z-index: 9;
    position: absolute;
    width: 100%;
}
.Header-container {
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    max-width: 100%;
    margin: 0 auto;
}
    	.MenuResponsive-desktop ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    list-style: none;
}
.MenuResponsive-desktop ul li {
    position: relative;
    font-size: var(--font-size-main);
    padding: .4rem 1rem;
    -webkit-transition: background-color .25s,color .25s;
    transition: background-color .25s,color .25s;
}
.MenuResponsive-desktop ul li a {
    color: #ffffff;
    font-size: 14px;
}
.MenuResponsive-desktop ul li .active::after{
    content: "";
    display: block;
    width: 20px;
    text-align: center;
    background-color: #FF6611;
    height: 1px;
    position: relative;
    top: 4px;
    margin: auto;
}
.carousel-caption-home {
    position: absolute;
    right: 0px;
    top: 34%;
    left: 13%;
    z-index: 10;
    padding-top: 11px;
    padding-bottom: 20px;
    color: #ffffff;
    width: 30%;
}
.carousel-caption-home h5{
	font-size: 44px;
}


.Header-options ul{
	padding: 0px;
	list-style: none;
}
    </style>
  </head>
  <body>
  	<!-- HEADER -->
  	<header class="Header ">
  		<div class="Header-container d-flex">
  			<div class="Header-logo">
  				<a href=""><img src="img/logo-home.png"></a>
  			</div>
  			<div class="Header-menu">
  				<nav class="MenuResponsive-desktop ">
					<ul>
						<li class="">
							<a href="" class="active">HOME</a>		
						</li>
						<li class="">
							<a href="" class="">SHOP</a>
						</li>
						<li class="">
							<a href="" class="">NEWS</a>	
						</li>
						<li class="">
							<a href="" class="">FEATURED</a>										
						</li>
						<li class=" ">
							<a href="" class="">PROMOTIOS</a>								
						</li>							
					</ul>
				</nav>
  			</div>
  			<div class="Header-options">
  				<ul>
  					<li>
  						<a href=""><img src=""></a>
  					</li>
  					<li>
  						<a href=""><img src=""></a>
  					</li>
  					<li>
  						<a href=""><img src=""></a>
  					</li>
  				</ul>
  			</div>
  		</div>
  	</header>

  	<!--  MAIN  -->
  <main>
  	<section class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/banner-home.png" class="d-block w-100" >
		            <div class="carousel-caption-home d-none d-md-block">
				        <h5>BEST HEADLINE IN THE WORLD</h5>
				        <p>Lorem ipsum dolor si</p>
				    </div>	
		    </div>
		    <div class="carousel-item">
		      <img src="img/banner-home.png" class="d-block w-100" >
		            <div class="carousel-caption-home d-none d-md-block">
				        <h5>BEST HEADLINE IN THE WORLD</h5>
				        <p>Lorem ipsum dolor si</p>
				    </div>	      
		    </div>
		    <div class="carousel-item">
		      <img src="img/banner-home.png" class="d-block w-100" >
		            <div class="carousel-caption-home d-none d-md-block">
				        <h5>BEST HEADLINE IN THE WORLD</h5>
				        <p>Lorem ipsum dolor si</p>
				    </div>	      
		    </div>
		  </div>		
  	</section>
<style type="text/css">
	/*.product-pants{
		background: url(img/fondo-1.png);
		background-repeat: no-repeat;
    background-size: contain;
    height: 260px;
	}
	.product-pole{
						background: url(img/fondo-2.png);
		background-repeat: no-repeat;
    background-size: contain;
    height: 340px;
	}
	.product-shorts{
				background: url(img/fondo-3.png);
		background-repeat: no-repeat;
    background-size: contain;
    height: 340px;
	}
	*/
	.product-sneakers{
    height: 558px;
	}
</style>
  	<section class="featured-products">
  		<div class="container">
  			<div class="row mb-5">
  				<div class="col-12 text-center pt-4 pb-3">
  					<h1>Featured Products</h1>
  				</div>
  				<div class="col-lg-6">
  					<div class="row">
  						<div class="col-lg-12 mb-4" >
  							<div class="product-pants">
  								<img src="img/fondo-1.png" class="img-fluid">
  							</div>
  						</div>
  						<div class="col-lg-6 col-md-6 col-6">
  							<div class="product-pole">
  								<img src="img/fondo-2.png" class="img-fluid">
  							</div>
  						</div>
  						<div class="col-lg-6 col-md-6 col-6">
  							<div class="product-shorts">
  								<img src="img/fondo-3.png" class="img-fluid">
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-lg-6 col-12">
  					<div class="product-sneakers px-3">
  						<img src="img/fondo-4.png" class="w-100 h-100">
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
<style type="text/css">
	.spring-preview{
		background: url(img/fondo-5.png);
		background-size: cover;
	}
	.spring-preview-2{
		background: url(img/fondo-6.png);
		background-size: cover;
	}
	.btn-collection{
    width: 140px;
    height: 40px;
    background-color: #FF6611;
    color: #ffffff;
    border-radius: 1.25rem;
    
}
.cont-button{
    position: absolute;
    width: 22%;
    margin: auto;
    bottom: 8%;
    left: 40%;
}
</style>
<!-- SECTION 4-->
  	<section class="py-5" >
  		<div class="container-fluid">
  			<div class="row" style="height: 671px;">
  				<div class="col-lg-6 text-center spring-preview">
  					  			<h3>Spring 2019 Preview</h3>
  			<p>Lorem ipsum dolor si Lorem ipsum dolor si Lorem ipsum dolor si Lorem ipsum dolor si</p>
  			<div class="cont-button"><button class="btn btn-collection">See Collection</button></div>
  				</div>
				<div class="col-lg-6 text-center spring-preview-2">
  					  			<!-- <h3>Spring 2019 Preview</h3>
  			<p>Lorem ipsum dolor si Lorem ipsum dolor si Lorem ipsum dolor si Lorem ipsum dolor si</p> -->
  				<div class="cont-button">
  					<button class="btn btn-collection">See Collection</button></div>
  				</div>  				
  			</div>
  		</div>

  	</section>


  	<!-- SECTION 5-->
  	<section class="ambassadors py-5">
  		<div class="container">
  			<div class="row">
  				<div class="col-4">
  					<div class="row">
  						<div class="col-6"><img src="img/ambasser-1.png" class="img-fluid"></div>
  						<div class="col-6 text-center">
  							<h5>Juana Paula</h5>
  							<p>User invite</p>
  						</div>
  					</div>
  				</div>
  				<div class="col-4">
  					<div class="row">
  						<div class="col-6"><img src="img/ambasser-1.png" class="img-fluid"></div>
  						<div class="col-6 text-center">
  							<h5>Juana Paula</h5>
  							<p>User invite</p>
  						</div>
  					</div>
  				</div>
  				<div class="col-4">
  					<div class="row">
  						<div class="col-6"><img src="img/ambasser-1.png" class="img-fluid"></div>
  						<div class="col-6 text-center">
  							<h5>Juana Paula</h5>
  							<p>User invite</p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<!-- SECTION 6-->
  	<section class="">
  		
  	</section>
  </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>