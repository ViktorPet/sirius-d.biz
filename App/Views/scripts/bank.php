
<?php
session_start();

$host = getenv ('DB_HOST');
$db   = getenv ('DB_NAME');
$user = getenv ('DB_USER');
$pass = getenv ('DB_PASSWORD');
$charset = getenv ('DB_CHARSET');

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
$pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
throw new \PDOException($e->getMessage(), (int)$e->getCode());
}






?>



<!DOCTYPE html>
<html class="no-js">
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" href="favicon.ico">
    <title>Сириус Д</title>
  <meta name="description" content="">
  <meta name="keywords" content="сириус-д,подагра,шипове,киста">
  <meta name="google-site-verification" content="hWux4N5O98PGFGK8f818kfDgHZW6dUTobE1pLPV-lX4" />
  <meta name="author" content="">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Template CSS Files
  ================================================== -->
  <!-- Twitter Bootstrs CSS -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Ionicons Fonts Css -->
  <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
  <!-- animate css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- Hero area slider css-->
  <link rel="stylesheet" href="plugins/slider/slider.css">
  <!-- owl craousel css -->
  <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
  <!-- Fancybox -->
  <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
  <!-- template main css file -->
  <link rel="stylesheet" href="css/style.css">
    <script type="text/JavaScript">
        //courtesy of BoogieJack.com
        function killCopy(e){
            return false
        }
        function reEnable(){
            return true
        }
        document.onselectstart=new Function ("return false")
        if (window.sidebar){
            document.onmousedown=killCopy
            document.onclick=reEnable
        }
    </script>
</head>
<body>


<!--
==================================================
Header Section Start
================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header" style="background-color: #0cc1d8;">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" onclick="lockScroll()">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <div class="navbar-brand">
                <a href="/" >
                    <img src="images/logo2.png" alt="">
                </a>
            </div>
            <!-- /logo -->
        </div>
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <!-- <div class="main-menu">-->
            <ul class="nav navbar-nav navbar-right" >
                <li style="color: #4f46a1">
                    <a href="/" class="btn btn-primary hover-item" >НАЧАЛО</a>
                </li>
                <li><a href="about" class="btn btn-primary hover-item">ДЕЙСТВИЕ</a></li>
                <li><a href="siriusclub" class="btn btn-primary hover-item">СИРИУС-Д КЛУБ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle btn btn-primary hover-item" data-toggle="dropdown">ДИАГНОСТИКА <span class="caret"></span></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="aura-diagnosis">ЕНЕРГИЙНА с различни апаратури</a></li>
                            <li><a href="bio-diagnosis">БИОРЕЗОНАНСНА НЕЛИНЕЙНА с Апарат "Нейро-Оберон"</a></li>
                            <li><a href="iris-diagnosis">АПАРАТНА ИРИСОВА </a></li>
                            <li><a href="radiestesia">РАДИЕСТЕЗИЧНА по различни методи </a></li>
                            <li><a href="kv-analisator">КВАНТОВ АНАЛИЗАТОР БИОСКЕНЕР</a></li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle btn btn-primary hover-item" data-toggle="dropdown">АЛТЕРНАТИВНА МЕДИЦИНА <span class="caret"></span></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="en-harmony">ЕНЕРГИЙНО ХАРМОНИЗИРАНЕ</a></li>

                        </ul>
                    </div>
                </li>

                <li><a href="doza" class="btn btn-primary hover-item">ДОЗИРАНЕ</a></li>
                <li><a href="ceni"  class="btn btn-primary hover-item">ПОРЪЧКА</a></li>
                <li><a href="otzivi"  class="btn btn-primary hover-item">ОТЗИВИ</a></li>

                <li><a href="contact"  class="btn btn-primary hover-item">ЗА НАС</a></li>
            </ul>
            <!--</div>-->
        </nav>
        <!-- /main nav -->
    </div>
</header>



<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>Цена и доставка на “Сириус-Д“ </h2>


        </div>
      </div>
    </div>
  </div>
</section>


<!--=======================================
=            Blog Left sidebar            =
========================================-->

<section id="blog-full-width">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
          <div class="2" >
            <a href=""><img class="img-responsive" src="images/blog/delivery.png" alt="" /></a>
          </div>
          <div class="blog-content">
            <h2 class="blogpost-title">
              <h2  class="text-center">Цена и доставка на “Сириус-Д“</h2>
            </h2>

            <h3 class="text-center" style="text-decoration: underline #1124ff; color: #1124ff">Консултации и поръчки: 0876-21-21-10 - Здравен консултант</h3>
              <h2 class="text-center" style="color: #770eff">VIVACOM: 0877-555-319, GLOBUL: 0896-097-428, MTEL: 0889-190-839</h2>
              <h3 class="text-center" style="color: #770eff">skype: sirius-d-Писма на: sirius7@abv.bg</h3>
              <h3 class="text-center" style="color: #770eff">Работно време: от 8.30 до 20 часа без почивен ден </h3>
              <h3 class="text-center" style="color: #770eff">Доставка до Ваш адрес в цялата страна.</h3>
              <h3 class="text-center" style="color: #770eff">Цените са в зависимост от количеството. ОТСТЪПКИ ПОЛУЧАВАТ ВСИЧКИ!</h3>
          </div>
        </article>


      </div>

    </div>
  </div>
  <div class="container">
      <div class="row">

            <?php
            $sth = $pdo->prepare("SELECT * FROM products");
            $sth->execute();

            /* Fetch all of the remaining rows in the result set */
            // print("Fetch all of the remaining rows in the result set:\n");
            $rows = $sth->fetchAll();

             foreach( $rows as $row){
               $id = $row['id'];
               $name = $row['name'];
               $price = $row['price'];
               $product = $row['product-quantity'];
               $short_description = $row['short_description'];
               $description  = $row['description'];

            ?>


            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                  <form action="/product" method='post' >
                <img src="<?php echo $row['image'] ?>" alt="...">
                <div class="caption">
                  <h4  style="<?php echo $row['styleh'] ?>"><?php echo $row['name'] ?></h4>
                  <p  style="<?php echo $row['stylep'] ?>"><?php echo $row['short_description'] ?> </p>
                  <p style=" text-align:center;"><button  type="submit" name="first" class="btn btn-primary" role="button">Поръчай Сега</button> </p>
                  <input type="hidden" name="id" value="<?php echo $id ?>"  >
                  <input type="hidden" name="name" value="<?php echo $name ?>"  >
                  <input type="hidden" name="price" value="<?php echo $price ?>"  >
                  <input type="hidden" name="product-quantity" value="<?php echo $product ?>"  >
                  <input type="hidden" name="short_description" value="<?php echo $short_description ?>" >
                  <input type="hidden" name="description" value="<?php echo $description ?>" >
                 </form>
                </div>
              </div>
            </div>

        <?php } ?>
      </div>


  </div>
</section>

<!--====  End of Blog Left sidebar  ====-->
<section id="feature">
    <div class="container-fluid">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Информация </h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                Полезна информация за Сириус-Д и контакти с  дистрибуторa
            </p>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-barcode-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Линии за връзка</h4>
                        <p> <span style="color: #ee793c">Vivacom: &nbsp;</span>  <span>0877-55-53-19</span></p>
                        <p> <span style="color: #ee793c">Vivacom: &nbsp;</span>  <span>0876-21-21-10</span></p>
                        <p> <span style="color: #644aee">Globul: &nbsp&nbsp&nbsp&nbsp;</span>  <span>0896-097-428</span></p>
                        <p> <span style="color: #2ae110">Mtel: &nbsp &nbsp &nbsp &nbsp&nbsp;</span>  <span>0889-190-839</span> </p>
                        <p>   ДОСТАВКА БЕЗ ПОЧИВЕН ДЕН!   </p>
                        <p><span  style="color: #ee793c"> SKYPE: </span> <span >  sirius-d  </span>   </p>
                        <p><span  style="color: #ee793c"> EMAIL: </span> <span >   sirius7@abv.bg   </span>   </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="media-left">
                        <div class="icon">
                            <a href="https://www.facebook.com/SiriusdHolistic/" class="Facebook">
                                <i class="ion-social-facebook"></i>
                            </a>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="https://www.facebook.com/SiriusdHolistic/">СИРИУС-Д Фейсбук </h4>
                        <p>Здравно консултативен екип с участието на създателя на храната - проф. Димитров</p>

                </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Консултации и поръчки: 0876-21-21-10 - Здравен консултант</h4>
                        <p>Цените са в зависимост от количеството. ОТСТЪПКИ ПОЛУЧАВАТ ВСИЧКИ!</p>
                        <h5>Работно време: от 8.30 до 20 часа без почивен ден </h5>
                        <h5>Доставка до Ваш адрес в цялата страна</h5>
                        <p>Цените са в зависимост от количеството. ОТСТЪПКИ ПОЛУЧАВАТ ВСИЧКИ!</p>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section> <!-- /#feature -->








<footer id="footer">
    <div class="container">
        <div class="col-md-8">
            <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="http://www.surreyviktor.com" target="_blank">Viktor Petrov</a>. <br>

            </p>
        </div>
        <div class="col-md-4">
            <!-- Social Media -->
            <ul class="social">
                <li>
                    <a href="https://www.facebook.com/SiriusdHolistic/" class="Facebook">
                        <i class="ion-social-facebook"></i>
                    </a>
                </li>
                <!-- <li>
                    <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                        <i class="ion-social-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="Linkedin">
                        <i class="ion-social-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                        <i class="ion-social-googleplus"></i>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</footer> <!-- /#footer -->


<!-- Template Javascript Files
================================================== -->
<!-- jquery -->
<script src="plugins/jQurey/jquery.min.js"></script>
<!-- Form Validation -->
<script src="plugins/form-validation/jquery.form.js"></script>
<script src="plugins/form-validation/jquery.validate.min.js"></script>
<!-- owl carouserl js -->
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- bootstrap js -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- wow js -->
<script src="plugins/wow-js/wow.min.js"></script>
<!-- slider js -->
<script src="plugins/slider/slider.js"></script>
<!-- Fancybox -->
<script src="plugins/facncybox/jquery.fancybox.js"></script>
<!-- template main js -->
<script src="js/main.js"></script>
</body>
</html>

<
