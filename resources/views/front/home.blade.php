<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Homepage</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />

	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />

	<meta property="og:locale" content="en_AU" />
	<meta property="og:type" content="website" />
	<meta property="fb:admins" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="" />
	<meta property="og:image:height" content="" />
	<meta property="og:image:alt" content="" />

	<meta name="twitter:title" content="" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:image:alt" content="" />
	<meta name="twitter:card" content="summary_large_image" />
	

	<link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/slick-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/video-js.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/css/style.css') }}">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&family=Raleway:ital,wght@0,400;0,600;0,800;1,200&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">

	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body data-instant-intensity="mousedown">

<div class="bg-light top-header">        
	<div class="container">
		<div class="row align-items-center py-3 d-none d-lg-flex justify-content-between">
			<div class="col-lg-4 logo">
				<a href="index.php" class="text-decoration-none">
					<span class="h1 text-uppercase text-primary bg-dark px-2">tech</span>
					<span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">pinak</span>
				</a>
			</div>
			<div class="col-lg-6 col-6 text-left  d-flex justify-content-end align-items-center">
				<a href="{{route('account.login')}}" class="nav-link text-dark">My Account</a>
				<form action="">					
					<div class="input-group">
						<input type="text" placeholder="Search For Products" class="form-control" aria-label="Amount (to the nearest dollar)">
						<span class="input-group-text">
							<i class="fa fa-search"></i>
					  	</span>
					</div>
				</form>
			</div>		
		</div
	</div>
</div>

<header class="bg-dark">
	<div class="container">
		
        <nav class="navbar navbar-expand-xl" id="navbar">
			<a href="index.php" class="text-decoration-none mobile-logo">
				<span class="h2 text-uppercase text-primary bg-dark">Online</span>
				<span class="h2 text-uppercase text-white px-2">SHOP</span>
			</a>
			<button class="navbar-toggler menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<!-- <span class="navbar-toggler-icon icon-menu"></span> -->
				  <i class="navbar-toggler-icon fas fa-bars"></i>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        			<!-- <li class="nav-item">
          				<a class="nav-link active" aria-current="page" href="index.php" title="Products">Home</a>
        			</li> -->
                    @foreach ($categories as $category)

					<li class="nav-item dropdown">
						<button class="btn btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
				
                            {{ $category->name }}

						</button>
						<ul class="dropdown-menu dropdown-menu-dark">
                            @foreach ($category->prod_cat as $product)
                            <li><a class="dropdown-item nav-link" href="{{route('front.product',$product->title)}}">{{ $product->title }}</a></li>
                            @endforeach
							
						</ul>
					</li>
                    @endforeach 


      			</ul>      			
      		</div>   
			<div class="right-nav py-0">
				<a href="cart.php" class="ml-3 d-flex pt-2">
					<i class="fas fa-shopping-cart text-primary"></i>					
				</a>
			</div> 		
      	</nav>

  	</div>
</header>


<main>
    <section class="section-1">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('front-assets/images/carousel-1.jpg') }}" class="d-block w-100" alt=""> 

                    <picture>
                        <source media="(max-width: 799px)" srcset="images/carousel-1-m.jpg" />
                        <source media="(min-width: 800px)" srcset="images/carousel-1.jpg" />
                        {{-- <img src="{{ asset('front-assets/images/carousel-1.jpg') }}" /> --}}
                        

                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">Workstation Processors</h1>
                            <p class="mx-md-5 px-5">AThe world’s highest performing x86 server processors4 setting superior standards for performance, security and scalability.</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front-assets/images/server.jpg') }}" class="d-block w-100"/> 

                    
                    <picture>
                        <source media="(max-width: 799px)" srcset="images/carousel-2-m.jpg" />
                        <source media="(min-width: 800px)" srcset="images/carousel-2.jpg" />
                        {{-- <img src="{{ asset('front-assets/images/carousel-1.jpg') }}" /> --}}
                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">Server Processors</h1>
                            <p class="mx-md-5 px-5">Leverage the fastest6, most versatile workstation processor ever created, with unmatched core counts for multi-threaded workloads.</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front-assets/images/laptop123.jpg') }}" class="d-block w-100"/> 
                    {{-- <img src="{{ asset('front-assets/images/carousel-1.jpg') }}" class="d-block w-100" alt="">  --}}


                    <picture>
                        <source media="(max-width: 799px)" srcset="images/carousel-3-m.jpg" />
                        <source media="(min-width: 800px)" srcset="images/carousel-3.jpg" />
                        <img src="{{ asset('front-assets/images/') }}" />
                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">Super Computing</h1>
                            <p class="mx-md-5 px-5">Multi-core performance and battery life + manageability and additional security features.</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-check text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">Quality Product</h5>
                    </div>                    
                </div>
                <div class="col-lg-3 ">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-shipping-fast text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">Free Shipping</h2>
                    </div>                    
                </div>
                <div class="col-lg-3">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-exchange-alt text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">14-Day Return</h2>
                    </div>                    
                </div>
                <div class="col-lg-3 ">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-phone-volume text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">24/7 Support</h5>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
  
    
    <section class="section-4 pt-5">
        <div class="container">
            <div class="section-title">       
                <h2>Featured Products</h2>
            </div> 
            <div class="row pb-3">
                @foreach ($c as $pr)
                @if($pr->status==1)   
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" @if($product->productImage)
                         
                     
                                <img class="w-100 h-100" src="{{ asset($product->productImage->image) }}" alt="Image">
    
                                   @endif alt=""></a>
                                                      
                            
                            <div class="product-action">
                                <a class="btn btn-dark">
                                    <i class="fa fa-shopping-cart"></i>Add To Cart
                                </a>                            
                            </div>
                        </div>                 
                        <div class="card-body text-center mt-3">
                            
                           

                            
                            <a class="h6 link" >{{$pr->title}}</a>
                           
                            <div class="price mt-2">
                                <span class="h5"><strong> &#8377;{{$pr->price}}</strong></span>
                                <span class="h6 text-underline"><del>{{$pr->compare_price}}</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>
                @endif  
               
        @endforeach</div>
    </section> 

    <section class="section-4 pt-5">
        <div class="container">
            <div class="section-title">       
                <h2>Latest Products</h2>
            </div> 
            <div class="row pb-3">
                {{-- @foreach ($c as $pr) --}}
                @foreach ($category->prod_cat as $product)   
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img">@if($product->productImage)
                         
                     
                                <img class="w-100 h-100" src="{{ asset($product->productImage->image) }}" alt="Image">
    
                                   @endif</a>
                                                
                            
                            <div class="product-action">
                                <a class="btn btn-dark" href="">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                 
                        <div class="card-body text-center mt-3">
                            
                           

                            
                            <a class="h6 link" href="{{route('front.product',$product->title)}}">{{ $product->title }}</a>
                           
                            <div class="price mt-2">
                                <span class="h5"><strong>&#x20b9;{{$pr->price}}</strong></span>
                                <span class="h6 text-underline"><del>{{$pr->compare_price}}</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
               
        @endforeach</div>
    </section> 
    
 
</main>

<footer class="bg-dark mt-5">
	<div class="container pb-5 pt-3">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-card">
					<h3>Get In Touch</h3>
					 <br>
					sector 21, Kaithal, Haryana <br>
					pardeepsharma@gmail.com <br>
					8708003431</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="footer-card">
					<h3>Important Links</h3>
					<ul>
						<li><a href="{{route('about')}}" title="About">About</a></li>
						<li><a href="{{route('contact')}}" title="Contact Us">Contact Us</a></li>						
						<li><a href="#" title="Privacy">Privacy</a></li>
						<li><a href="#" title="Privacy">Terms & Conditions</a></li>
						<li><a href="#" title="Privacy">Refund Policy</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-4">
				<div class="footer-card">
					<h3>My Account</h3>
					<ul>
						
                        <li><a href="{{route('account.login')}}" title="Sell">Login</a></li>
						<li><a href="{{route('account.register')}}" title="A vertise">Register</a></li>
						<li><a href="#" title="Contact Us">My Orders</a></li>						
					</ul>
				</div>
			</div>			
		</div>
	</div>
	<div class="copyright-area">
		<div class="container">
			<div class="row">
				<div class="col-12 mt-3">
					<div class="copy-right text-center">
						<p>© Copyright Tech Pinak. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="{{ asset('front-assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('front-assets/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
<script src="{{ asset('front-assets/js/instantpages.5.1.0.min.js') }}"></script>
<script src="{{ asset('front-assets/js/lazyload.17.6.0.min.js') }}"></script>
<script src="{{ asset('front-assets/js/slick.min.js') }}"></script>
<script src="{{ asset('front-assets/js/custom.js') }}"></script>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>