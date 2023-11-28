<html>
    <head>
        <title>Body Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">  
        <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
        <style>
            .link{
                color:#000;
                font-weight:700;
            }
            .product-images-container {
                display: flex;
                flex-direction: row; /* Display images and thumbs in a row */
            }

            .product-image {
                margin-right: 20px; /* Adjust margin as needed */
            }

            .product-image-thumbs {
                display: flex;
                flex-direction: column; /* Display thumbs in a column */
            }

            .product-image-thumb {
                margin-bottom: 10px; /* Adjust margin as needed */
            }

            .main-product-image {
                max-width: 100%;
                height: auto;
                display: block; /* Ensure the image takes full width */
            }
            .product-rating .checked {
                color: gold;
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
    color: gold;
}

.product-rating {
    display: flex;
    align-items: left;
    
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
    </style> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <?php include "includes/header.php"; ?>
        <div class=" card-solid ml-4 mr-4">
        <div class="card-body">
          <div class="row">
          <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none">Technic Invite Only Pressed Pigment Eyeshadow Palette</h3>
             
                <div class="col-12 product-images-container">
                    <div class="product-image-thumbs">
                        <div class="product-image-thumb active"><img src="images/7.png" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="images/13.jpg" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="images/10.jpg" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="images/11.jpg" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="images/12.jpg" alt="Product Image"></div>
                    </div>
                    <div class="product-image">
                        <img src="images/13.jpg" class="main-product-image" alt="Product Image">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">Technic Invite Only Pressed Pigment Eyeshadow Palette</h3>
              <div class="product-rating pb-1">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star half-checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
              <p>The latest design in our X15 Pressed Pigment Palettes! With a mixture of pressed glitters, foiled shimmers and buttery matte shades. 
                A mixture of pinks, berries and neutral tones...
                Suitable for Vegans
                Suitable for Vegetarians .</p>
              <hr>
              <h4>Available Varients</h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center active">
                  <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
            
                  <br>
                  <i class="fas fa-circle fa-2x " style="color:#F2D2BD"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
                    <br>
                  <i class="fas fa-circle fa-2x" style="color:#811331"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                
                  <br>
                  <i class="fas fa-circle fa-2x" style="color:#AA336A"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                
                  <br>
                  <i class="fas fa-circle fa-2x" style="color:#FF69B4"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
               
                  <br>
                  <i class="fas fa-circle fa-2x" style="color:#770737"></i>
                </label>
              </div>
              <div class=" py-2 px-3 mt-4">
                <h2 class="mb-0">
                  AED 40.00
                </h2>
                <h4 class="mt-0">
                  <small> Tax: AED 5.00 </small>
                </h4>
              </div>

              <div class="mt-4">
                <div class="btn btn-dark ">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Add to Cart
                </div>

                <div class="btn  btn-danger" >
                  <i class="fas fa-heart fa-lg mr-2" style="color:#fff"></i>
                  Add to Wishlist
                </div>
              </div>

              <div class="mt-4 product-share">
                <a href="#" >
                  <i class="fab fa-facebook-square fa-2x" style="color:#000"></i>
                </a>
                <a href="#" >
                  <i class="fab fa-twitter-square fa-2x" style="color:#000"></i>
                </a>
                <a href="#" >
                  <i class="fas fa-envelope-square fa-2x" style="color:#000"></i>
                </a>
                <a href="#" >
                  <i class="fas fa-rss-square fa-2x" style="color:#000"></i>
                </a>
              </div>

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true" style="color:#000">Description</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-ingredients" aria-selected="false" style="color:#000">Ingredients</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false" style="color:#000">Rating</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                    Introducing our newest release, the cutting-edge X15 Pressed Pigment Palette!
                    This palette boasts a harmonious blend of pressed glitters, foiled shimmers,
                    and velvety matte shades, providing endless possibilities for creating captivating eye looks.
                    Featuring an array of captivating hues, including a delightful mix of pinks, 
                    rich berries, and versatile neutral tones, this palette is designed to inspire 
                    creativity and complement a variety of styles. Whether you're aiming for a bold and 
                    vibrant look or a subtle and sophisticated vibe, the X15 Pressed Pigment Palette has you covered.
                    We take pride in ensuring our products cater to diverse preferences and lifestyles. That's why we
                    are thrilled to announce that this palette is not only a feast for the eyes but also a conscientious choice.
                    It is suitable for both Vegans and Vegetarians, aligning with our commitment to providing inclusive, 
                    cruelty-free beauty options.
                    Indulge in the luxurious texture of our buttery matte shades, experience the dazzling effect of our pressed glitters,
                    and revel in the radiant finish of our foiled shimmers. Elevate your makeup routine with the X15 Pressed Pigment Palette 
                    - a palette that not only enhances your beauty but also reflects your values.. 
                </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
            </div>
          </div>
          <section class="pb-2  mr-3 ml-3 ">
                <h1>People also viewed</h1>
                <div style="background-color: #ffff;"><br>
                    <div class="best-products">
                        <div class="card product-card mr-2 ml-2">
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
                        </div>
                            <div class="card product-card mr-2 ml-2">
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
        </div>
        <!-- /.card-body -->
        
      </div>
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
        <script src="template/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="template/dist/js/adminlte.min.js"></script>
        <!-- jQuery Knob -->
        <script src="template/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- Sparkline -->
        <script src="template/plugins/sparklines/sparkline.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick/slick.min.js"></script>
        <script>
        $(document).ready(function() {
            $('.product-image-thumb').on('click', function() {
                var $image_element = $(this).find('img');
                $('.main-product-image').prop('src', $image_element.attr('src'));
                $('.product-image-thumb.active').removeClass('active');
                $(this).addClass('active');
            });
        });
</script>
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
        <!-- AdminLTE for demo purposes -->
    </body>
</html>