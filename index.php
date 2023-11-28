
<html>
    <head>
        <title>Design IN progress</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">  
        <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/> 
        <style>
        .nav-link{
            cursor:pointer
        }
        body{
            /*font-family: 'Trebuchet MS', sans-serif;*/
        }
     
        .product-card {
            
            position: relative;
            overflow: hidden;
            background-color: #fff;
            
            height: auto !important ;
            transition: transform 0.3s; /* Add a smooth transition effect */
            }
            .slick-prev:before, .slick-next:before {
                color: #000  !important;
            }

            .product-card:hover{
        
                box-shadow: 0px 20px 25px 0px rgba(0, 0, 0, 0.4);
                transform: scale(1);
                z-index: 10;
            }
            
             .product{
                width:250px;
                text-align:center;
             }
.categories {
    margin: 10px auto;
    max-width: 90%;
    /* display: flex; */
    /* flex-flow: row wrap; */
}
.best-products {
    margin: 10px auto;
    max-width: 90%;
    /* display: flex; */
    /* flex-flow: row wrap; */
}
.circle-container {
     
      border-radius: 50%;
      background-color:  #fff; /* circle background color */
      display: flex;
      align-items: center;
      justify-content: center;
      color: #000; /* text color */
      font-size: 16px;
      font-weight: bold;
      height: auto !important;
      border: 1px solid #000;
      transition: transform 0.3s
    }
    .circle-container:hover {
     
     color:#000;
     border: 3px solid #000;

   }
    .social-block{
        text-align:right;
    }


.wishlist-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    color: #555555 ; /* Adjust the color of the heart outline */
    opacity: 0; /* Initially hide the heart outline */
    transition: opacity 0.3s; /* Add a smooth transition effect for opacity */
    cursor:pointer;
    z-index:1;
}

.product-card:hover .wishlist-icon {
    opacity: 1; /* Show the heart outline on hover */
}
.product-card img {
    transition: transform 0.3s; /* Add a smooth transition effect for the transform property */
}

.product-card:hover img {
    transform: scale(1.2); /* Zoom in on hover by 20% (adjust the scale value as needed) */
    border-radius:150px;
  
}

.img-box{
    overflow:hidden;
}
.product-rating {
    display: flex;
    align-items: center;
}

.product-rating .fa-star {
    font-size: 16px;
    color: #000;
}

.product-rating .checked {
    color: orange;
}

.product-rating {
    display: flex;
    align-items: center;
    justify-content: center; /* Center the stars horizontally */
}
.trending-label {
    position: absolute;
    top: 10px;
    background-color: #000; /* Adjust the background color as needed */
    color: #fff; /* Adjust the text color as needed */
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 15px;
    opacity:1;
    font-weight:600;
    z-index:1;
}
.discount-label {
    position: absolute;
    top: 10px;
    background-color: #B22222; /* Adjust the background color as needed */
    color: #fff; /* Adjust the text color as needed */
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 15px;
    opacity:1;
    font-weight:600;
    z-index:1;
}
.btn-dark{
    background-color:#000 !important;
}
.video-container {
    position: relative;
    width: 100vw;
    height: 70vh;
    overflow: hidden;
}

#video-background {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}

.overlay {
    position: absolute;
    top: 70%;
    left: 0;
    width: 100%;
    height: 30%;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust transparency here */
    display: flex;
    justify-content: center;
    align-items: center;
}
.card-hero {
    text-align: center;
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    background-color: transparent; /* Adjust card background color */
}
.cta-button {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 5px;
    background-color: #FFF2F0; 
    color: #000;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}
.cta-button:hover {
    background-color: #000; 
    color:#fff;
}
.brand-logo{
    transition: transform 0.3s;
    cursor:pointer;
}
.brand-logo:hover{
    transform: scale(1.2);
}
.link{
    color:#000 !important;
    font-weight: 600;
}
a{
    color:#000;
}
.img{
     height:250px; 
      width:180px;
    }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
     <?php include "includes/header.php"; ?>
           <section class="pb-3">
            <div class="banner">
            <div class="video-container">
                <video autoplay muted loop id="video-background">
                    <source src="video/video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay">
                    <div class="card-hero">
                        <h2>Your story, our shades - a perfect match for every chapter</h2>
                        <p > Where every face tells a story, and we've got the perfect shades for every chapter</p>
                        <a href="#" class="cta-button"><b>Glow Now!</b></a>
                    </div>
                </div>
            </div>
            </div>
           </section>
           <section class="pb-1 mr-4 ml-4" >
                <div class="row justify-content-center pb-3">
                    <div class="col-md-6" style="height:100px">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4"><img src="images/mascara1.png" style="width:100%"></div>
                            <div class="col-md-6" style="text-align:center">
                                <div class=" pb-1 pt-2">
                                    <h1 style="text-align:center;font-family:poppins">Discover our  Captivating Mascara </h1>
                                    <p style="text-align:center;font-family:poppins" class="mr-4 ml-4">Achieve mesmerizing lashes that steal the spotlight with our high-performance mascara formulas. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row" style="margin-right:0px;">
                                <div class="col-md-8">
                                    <div class="mr-4 ml-4 pb-4 pt-2">
                                        <h2 style="text-align:center;font-family:poppins" class="mr-3 ml-4">Immerse Yourself in our Flawless Foundation  </h2>
                                        <p style="text-align:center;font-family:poppins" class="">Explore a spectrum of shades designed to complement the unique tones and undertones of every individual.</p>
                                    </div>
                                </div>
                                <div class="col-md-4" style="text-align:right"> <img src="images/foundation2.png" style="width:100%" class="ml-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
           </section>
           <section class="pb-2  mr-3 ml-3 ">
                <h1>Best Sellers</h1>
                <div style="background-color: #ffff;"><br>
                    <div class="best-products">
                        <div class="card product-card mr-2 ml-2">
                        <a href="product_detail.php" style="color:#000">
                            <div class="card-body">
                                <div class="img-box">
                                    <i class="far fa-heart wishlist-icon"></i>
                                    <img src="images/13.jpg" style="width:100%">
                                </div>
                                <div class="text">
                                    <p style="text-align:center">Product Name</p>
                                    <h6 style="text-align:center">AED 40.00</h6>
                                    <div class="product-rating pb-1" style="text-align:center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star half-checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                </div>
                            </div>
                            <div class="trending-label">#Trending</div> 
                        </a>
                        </div>
                            <div class="card product-card mr-2 ml-2">
                                <a href="product_detail.php" style="color:#000">
                                <div class="card-body">
                                    <div class="img-box">
                                        <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/12.jpg" style="width:100%">
                                    </div>
                                    <div class="text">
                                            <p style="text-align:center">Product Name</p>
                                            <h6 style="text-align:center">AED 40.00</h6>
                                            <div class="product-rating pb-1" style="text-align:center">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star half-checked"></span>
                                            <span class="fa fa-star"></span>
                                            
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                                </a>
                            </div>
                        <div class="card product-card mr-2 ml-2">
                                <div class="card-body">
                                    <div class="img-box">
                            <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/3.png" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                                <div class="product-rating pb-1" style="text-align:center">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star half-checked"></span>
                                        <span class="fa fa-star"></span>
                                </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        <div class="card product-card mr-2 ml-2">
                        <div class="discount-label">Going Fast!!</div>
                                <div class="card-body">
                                    <div class="img-box">
                                <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/11.jpg" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                        <div class="product-rating pb-1" style="text-align:center">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star half-checked"></span>
                                        <span class="fa fa-star"></span>
                                                </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        <div class="card product-card mr-2 ml-2">
                                <div class="card-body">
                                    <div class="img-box">
                            <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/5.png" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                        <div class="product-rating pb-1" style="text-align:center">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star half-checked"></span>
                                        <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                    <div>
                                    <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        <div class="card product-card mr-2 ml-2">
                                <div class="card-body">
                                    <div class="img-box">
                                        <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/6.png" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                                        <div class="product-rating pb-1" style="text-align:center">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star half-checked"></span>
                                                        <span class="fa fa-star"></span>
                                                </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        <div class="card product-card mr-2 ml-2">
                                <div class="card-body">
                                    <div class="img-box">
                                        <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/7.png" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                                    <div class="product-rating pb-1" style="text-align:center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star half-checked"></span>
                                                <span class="fa fa-star"></span>
                                                </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </section>
           <section class="mr-3 ml-3">
           <h1>Explore by categories</h1>
            <div style="background-color:#F0F8FF;">
                <br>
                <div class="categories">
          <div class="img">
            <img src="images/cat-1.jpg"  style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">Eyeshadows</h4>
          </div> 
          <div class="img">
            <img src="images/cat-2.jpg"   style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">Compact</h4>
          </div> 
          <div class="img">
            <img src="images/cat-3.jpg"   style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">Contour</h4>
          </div> 
          <div class="img">
            <img src="images/cat-4.jpg" style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">Foundation</h4>
          </div> 
          <div class="img">
            <img src="images/cat-5.jpg" style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">Nail Polish</h4>
          </div> 
          <div class="img">
            <img src="images/cat-6.jpg" style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">Lipbalm</h4>
          </div> 
          <div class="img">
            <img src="images/cat-7.jpg" style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">Mascaras</h4>
          </div> 
          <div class="img">
            <img src="images/cat-8.jpg" style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">Lipstick</h4>
          </div> 
          <div class="img">
            <img src="images/cat-9.jpg" style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">BB Cream</h4>
          </div> 
          <div class="img">
            <img src="images/cat-10.jpg" style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">Eyeliners</h4>
          </div> 
          <div class="img">
            <img src="images/cat-11.jpg" style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">Brushes</h4>
          </div> 
          <div class="img">
            <img src="images/cat-12.jpg" style="border-radius:100%;border:  1px solid #000; width:95%;"> 
            <h4 style="text-align:center">Facial Care</h4>
          </div> 
          <div class="img">
            <img src="images/cat-13.jpg" style="border-radius:100%;border:  1px solid #000; width:95%;">
            <h4 style="text-align:center">Face Masks</h4>
          </div> 
        </div>
                <br>
            </div>
           </section>
            <section class="pb-3">
            <div class="banner ml-3 mr-3">
                <img src="images/technic-banner.jpg" style="width:100%">
            </div>
            </section>
            <section class="mr-3 ml-3" >
                <h1>New Arrivals</h1>
                <div  style="background-color: #fff;" class="mr-4 ml-4"><br>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                              <div class="card product-card  product ">
                              <div class="trending-label">New</div>
                                <div class="card-body">
                                    <div class="img-box">

                                        <img src="images/9.png" style="width:100%">
                                        <i class="far fa-heart wishlist-icon"></i>
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                                    <div class="product-rating pb-1" style="text-align:center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star half-checked"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-3">
                              <div class="card product-card  product">
                              <div class="trending-label">#MustHave</div>
                                <div class="card-body">
                                    <div class="img-box">
                                    <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/8.png" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                                <div class="product-rating pb-1" style="text-align:center">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star half-checked"></span>
                                                <span class="fa fa-star"></span>
                                                </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                              <div class="card product-card  product ">
                                <div class="card-body">
                                    <div class="img-box">
                                        <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/7.png" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                                    <div class="product-rating pb-1" style="text-align:center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star half-checked"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                              <div class="card product-card  product  ">
                              <div class="trending-label">#cute</div>
                                <div class="card-body">
                                    <div class="img-box">
                                <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/6.png" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                                <div class="product-rating pb-1" style="text-align:center">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star half-checked"></span>
                                                <span class="fa fa-star"></span>
                                                </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                              <div class="card product-card  product ">
                                <div class="card-body">
                                    <div class="img-box">
                                        <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/5.png" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                            <div class="product-rating pb-1" style="text-align:center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star half-checked"></span>
                                            <span class="fa fa-star"></span>
                                                </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                              <div class="card product-card   product ">
                              <div class="trending-label">#GlamUp!</div>
                                <div class="card-body">
                                    <div class="img-box">
                                    <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/4.png" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                                    <div class="product-rating pb-1" style="text-align:center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star half-checked"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                              <div class="card product-card product ">
                              
                                <div class="card-body">
                                    <div class="img-box">
                                        <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/3.png" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                                <div class="product-rating pb-1" style="text-align:center">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star half-checked"></span>
                                                <span class="fa fa-star"></span>
                                                </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                              <div class="card product-card product  ">
                              <div class="Discount-label">2 Pcs Left</div>
                                <div class="card-body">
                                    <div class="img-box">
                                        <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/2.png" style="width:100%">
                                    </div>
                                    <div class="details">
                                        <div class="text">
                                            <p style="text-align:center">Product Name</p>
                                            <h6 style="text-align:center">AED 40.00</h6>
                                        <div class="product-rating pb-1" style="text-align:center">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star half-checked"></span>
                                                        <span class="fa fa-star"></span>
                                                </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                              <div class="card product-card product  ">
                              <div class="trending-label">#SelfCare</div>
                                <div class="card-body">
                                    <div class="img-box">
                                <i class="far fa-heart wishlist-icon"></i>
                                        <img src="images/1.png" style="width:100%">
                                    </div>
                                    <div class="text">
                                        <p style="text-align:center">Product Name</p>
                                        <h6 style="text-align:center">AED 40.00</h6>
                                        <div class="product-rating pb-1" style="text-align:center">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star half-checked"></span>
                                                        <span class="fa fa-star"></span>
                                                </div>
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>    
                    <div>
                </div>
            </section>
           <section class="">
            <h1 >Explore By Brands</h1>
           <div  style="background-color: #B2BEB5">
                <br>
                <div class="row justify-content-center mr-3 ml-3">
                    <div class="col-md-3 ml-3 mr-3"><img src="images/wibo.svg" style="width:50%" class="brand-logo"></div>
                    <div class="col-md-3 ml-3 mr-3 pt-5"><img src="images/nam.svg" style="width:50%" class="brand-logo"></div>
                    <div class="col-md-3 ml-3 mr-3"><img src="images/technic.png" style="width:50%;border-radius:20px" class="brand-logo"></div>
                    <div class="col-md-3 ml-3 mr-3"><img src="images/lovely.png" style="width:50%" class="brand-logo"></div>
                    <div class="col-md-3 ml-3 mr-3"><img src="images/body-collection.png" style="width:60%;border-radius:20px" class="brand-logo"></div>
                </div>
                <br>
            </div>
           </section>
       
           <footer style="background-color:#000" >
           <br><br>
            <div class="ml-3 mr-3 pb-3">
                <div class="row justify-content-center">
                    <div class="col">
                        <img src="images/valene.jpg" style="width:70%" class="ml-5"><br>
                        <p class="pt-3 ml-2" style="text-align:center;color:#D3D3D3">Welcome to Valene, where creativity meets beauty! 
                        We're the go-to hub for all you artistic souls with unique makeup techniques. At Valene, we've got you covered - 
                        from skincare essentials to the finest cosmetics, all crafted to enhance your already wonderful features.
                         Your beauty journey starts and thrives with us.</p>
                    </div>
                    <div class="col">
                        
                        <ul style="list-style-type:none">
                            <li style="text-align:center"><h4 style="color:#fff">Products</h4></li>
                            <li style="text-align:center;color:#B2BEB5	"><a>Eyeshadows</a></li>
                            <li style="text-align:center;color:#B2BEB5	"><a>Lipstick</a></li>
                            <li style="text-align:center;color:#B2BEB5	"><a>Contour</a></li>
                            <li style="text-align:center;color:#B2BEB5	"><a>Foundation</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>Eyeliners</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>Mascara</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>Nail Polish</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>Kajol</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>Blushes</a></li>
                        </ul>
                    </div>
                    <div class="col">
                    <ul style="list-style-type:none">
                            <li style="text-align:center"><h4 style="color:#fff">Brands</h4></li>
                            <li style="text-align:center;color:#B2BEB5"><a>Technic Cosmetics</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>WIBO</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>Lovely</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>NAM</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>Body Collection England</a></li>
                        </ul>
                    </div>
                    <div class="col">
                    <ul style="list-style-type:none">
                            <li style="text-align:center"><h4 style="color:#fff">Quick Links</h4></li>
                            <li style="text-align:center;color:#B2BEB5"><a>About Us</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>Contact Us</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>Privacy Policy</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>Terms</a></li>
                            <li style="text-align:center;color:#B2BEB5"><a>FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
           </footer>
    </body>
    <script src="template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="template/dist/js/adminlte.min.js"></script>
<!-- jQuery Knob -->
<script src="template/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Sparkline -->
<script src="template/plugins/sparklines/sparkline.js"></script>
<!-- AdminLTE for demo purposes -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick/slick.min.js"></script>
    <script>
    $(document).ready(function() {
      $('.best-products').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
         
        ]
      });
      $('.categories').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
        ]
      });
    });
    </script>
</html>