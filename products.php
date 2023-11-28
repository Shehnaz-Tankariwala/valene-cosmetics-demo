<html>
    <head>
        <title>Body Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">  
        <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
        <style>

.nav-link{
    border-radius: 0px !important;
    color:#000 !important;
}
.nav-item a {
    border-radius:0rem;
    border-bottom: 1px solid #818589; /* Change the border color on hover */
    color:#000;
}
.nav-item a p{

    color:#000;
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
             a{
                    color:#000 !important;
                    font-weight: 600;
                }
        .header-image {
            position: relative;
    
        }
        
        .paragraph-container {
            position: absolute;
            top: 50%;
            left: 60%;
            transform: translate(-50%, -50%);
            text-align: center;
        }             
        </style> 
    </head>
    <body>
   <?php include "includes/header.php" ?>
            <div class="header-image pb-1  ml-5 mr-5">
                <img src="images/product-banner1.png" style="width:100%;border: 1rem solid #000">
                <div class="paragraph-container">
                    <p><b>
                    Every product tells a story. It's not just about cosmetics; it's about confidence, creativity,
                     and self-expression. Each lipstick, eyeshadow, or brush is a tool for individuals to 
                    paint their unique narratives on the canvas of their faces.
                    </b></p>
                </div>
            </div>
            <div class="breadcrumbs ml-5"><p><span style="color:#808080">Home </span>/ All Poducts </p></div>
            <div class="navigation">
            </div>
            <div class="main ml-4 mr-4">
                <div class="wrapper">
                    <aside class="main-sidebar">
                        <div class="sidebar" >
                            <nav class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-item">
                                <a href="#" class="nav-link ">
                                
                                <p>Categories <i class="right fas fa-angle-left"></i></p>
                                </a>
                                   <ul class="nav nav-treeview ml-3" >
                                    <li class="nav-item ">
                                        <a>Eyeliner</a>
                                    </li>
                                    <li>Eyeshadows</li>
                                    <li>Lipstick</li>
                                    <li>Lipbalm</li>
                                    <li>Mosturizers</li>
                                    <li>Face Masks</li>
                                    <li>NailPolish</li>
                                    <li>Contour</li>
                                    <li>Blush</li>
                                    <li>MakeUp Remover</li>
                                    <li>Lip Oil</li>
                                    <li>Night Cream</li>
                                   </ul> 
                            
                                
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="right fas fa-angle-left"></i>
                                <p>Brands</p>
                                </a>
                                <ul class="nav nav-treeview ml-3" >
                                    <li class="nav-item ">
                                        <a>Technic Cosmetics</a>
                                    </li>
                                    <li>Ava Skincare</li>
                                    <li>WIBO</li>
                                    <li>NAM</li>
                                    <li>Lovely</li>
                                   </ul> 
                                </li>
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="right fas fa-angle-left"></i>
                                <p>Price</p>
                                </a>
                                <ul class="nav nav-treeview ml-3" >
                                    <li class="nav-item">
                                        <div class="price">
                                            <label>Min Price</label>
                                            <input type="number" placeholder="Minimum Price" class="form-control">
                                            <label>Max Price</label>
                                            <input type="number" placeholder="Max Price" class="form-control">
                                        </div>
                                    </li>
                                   </ul> 
                              
                                </li>
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="right fas fa-angle-left"></i>
                                <p>Rating</p>
                                </a>
                                <ul class="nav nav-treeview ml-3" >
                                    <li class="nav-item">
                                    <div class="product-rating pb-1" style="text-align:center">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star half-checked"></span>
                                                        <span class="fa fa-star"></span>
                                                </div>
                                    </li>
                                   </ul> 
                                </li>
            
                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <div class="content-wrapper" style="background-color:#fff; border-left: 1px solid #818589;">
                    <div class="ml-3">
                        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row ">
                            <div class="col-sm-6">
                               <h6 style="color:#808080">230 Products</h6>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <select class="form-control" placeholder="Sort By" name="sort">
                                        <option>Default</option>
                                        <option>Price [From Lowest]</option>
                                        <option>Rating</option>
                                        <option>Aphabetical</option>
                                        <option>Featured</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div  style="background-color: #fff;" class="mr-4 ml-4"><br>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <a href="product_detail.php" style="color:#000">
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
                            </a>
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
                            <a href="product_detail.php">
                              <div class="card product-card product  ">
                              <div class="trending-label">#trending</div>
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
                                        <button class="btn btn-block btn-dark btn-sm " style="font-family:poppins"><i class="fa fa-eye fa-solid"></i>&nbsp; Quick View</button>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        </div>    
                    <div>
                </div>
                    </div>
                 </div>
                </div>
            </div>
       
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

   
    </body>
</html>