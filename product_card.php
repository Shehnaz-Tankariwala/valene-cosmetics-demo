<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Circle with Text</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">  
        <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/> 
  <style>
    .img{
      height:300px;
      width:180px;
    }
  </style>
</head>
<body>
    <div class="card ml-5 mr-5">
    <br>
      <div class="card">
        <div class="category-section">
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
      </div>
      <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick/slick.min.js"></script>
</body>
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
      $('.category-section').slick({
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