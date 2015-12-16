<!DOCTYPE html>
<html>
  <head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200' rel='stylesheet' type='text/css'>
    <title>Ovation Vintage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS BOOTSTRAP -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      <style type="text/css">
      a:link {color:black;
         text-decoration: none;
      }
      a:visited {color:black;
         text-decoration: none;
      }
      a:hover {color:black;
         text-decoration: none;
      }
      a:active {color:black;
         text-decoration: none;
      }
    </style>
  </head>
  <body>

<!-- JQUERY BOOTSTRAP -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

<!-- JQUERY OTHER -->
    <script src="js/slider.js"></script>

<!--BEING PAGE -->
    <div class="container-fluid">
      <div class="row-fluid">

<!-- ABOUT -->
        <div class="row-fluid">
          <div class="span2 offset2">
            <div style="font-family: 'Raleway', sans-serif; font-size:25px; font-weight:100; text-align:center; margin:20px 0px 0px 0px">
              <a href="about.html" alt="about">about</a>
            </div>
          </div>

<!-- CONTACT -->
          <div class="span2 offset4">
            <div style="font-family: 'Raleway', sans-serif; font-size:25px; font-weight:100; text-align:center; margin:20px 0px 0px 0px">
              <a href="contact.html" alt="contact">contact</a>
            </div>
          </div>
        </div>
        
<!-- HEADER: OVATION V -->
        <div class="row-fluid">
          <div class="span12">
            <div style="font-family: 'Raleway', sans-serif; font-size:800%; font-weight:100; text-align:center; margin:55px 0px 50px 0px">
              <a href="index.php" alt="Home">OVATION V.</a>
            </div>
          </div>
        </div>
        
<!-- HORIZONTAL BORDER -->
        <div class="row-fluid">
          <div class="span8 offset2">
            <div style="border: solid 1px #e2e2e2">
            </div>
          </div>
        </div>
        
<!-- ACTIVE ITEM -->
        <div class="row-fluid">
          <div class="span12">
            <div style="margin:0px 0px 30px 0px; text-align:center">
              <div id="active">
                <img src="img/jewelry/j1.jpg" alt="jewelry">
              </div>
            </div>
          </div>
        </div>
        
<!-- HORIZONTAL BORDER -->
        <div class="row-fluid">
          <div class="span8 offset2">
            <div style="border: solid 1px #e2e2e2">
            </div>
          </div>
        </div>

<!-- CAROUSEL CODE IN PROGRESS -->
        <div class="row-fluid">
            <div class="span1"></div>
              <ul class="thumbnails">
              <!-- Thumbnails 
                <li class="span2">
                  <a href="#" class="thumbnail">
                    <img src="img/jewelry/j1.jpg" alt"=Jewelry">
                  </a>
                </li>
                <li class="span2">
                  <a href="#" class="thumbnail">
                    <img src="img/jewelry/j2.jpg" alt"=Jewelry">
                  </a>
                </li>
                <li class="span2">
                  <a href="#" class="thumbnail">
                    <img src="img/jewelry/j3.jpg" alt"=Jewelry">
                  </a>
                </li>
                <li class="span2">
                  <a href="#" class="thumbnail">
                    <img src="img/jewelry/j4.jpg" alt"=Jewelry">
                  </a>
                </li>
                <li class="span2">
                  <a href="#" class="thumbnail">
                    <img src="img/jewelry/j5.jpg" alt"=Jewelry">
                  </a>
                </li>
              -->

              <?php include 'test.php'; ?>
              <?php echo $output ?>





              </ul>
            <div class="span1"></div>
        </div>
        <!-- Slider Nav -->
        <div class="row-fluid">
          <div class="span1 offset4">
            <a href='#' id="slider_prev"><i class="icon-arrow-left"></i></a>   
          </div>
          <div class="span2"></div>
          <div class="span1">
            <a href='#' id="slider_next"><i class="icon-arrow-right"></i></a>
          </div>
          <div class="span4"></div>
        </div>


<!-- END CAROUSEL CODE -->

        <div class="row-fluid">
          <div class="span12">
            <div style="font-size:12px; color:#9a9a9a; text-align:center">
              &copy; 2013 Ovation Vintage 
            </div>
          </div>
        </div>

      </div>
    </div>

  </body>
</html>