<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="ID is invalid";
		}
	}
		echo "<script>alert('محصول به سبد خرید اضافه شد')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>

<!DOCTYPE html>
<html  lang="fa-IR" >
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>صفحه اصلی</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href='http://www.fontonline.ir/css/BNazanin.css' rel='stylesheet' type='text/css'>
        <style>
             *{
             font-family:BNazanin,'BNazanin',tahoma;
             font-size:12px;
			 color : black;
             dir="rtl";
              align="right"
            }
        </style>
	</head>
    <body class="is-boxed has-animations">
	
		
	
		<!--  HEADER  -->
<header  class="header-style-2" >
<?php include('includes/top-header.php');?>
</header>

<div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<a href="#">
								<img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0" dir="rtl" align="right">پیش نیاز هر سفر</h1>
	                        <p class="hero-paragraph" dir="rtl" align="right" با استفاده از این برنامه کاربردی سفری راحت رت داشته باشید.</p>
	                        <div class="hero-cta"><a class="button button-primary" href="#">در مورد ما</a><a class="button" href="#">ارتباط با ما</a></div>
						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
					<div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-01.svg" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24" >آسان</h4>
                                    <p class="text-sm mb-0" dir="rtl" align="right" style="color:white">سفرت رو راحت و بی دغدغه کن</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-01.svg" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24">کاربردی</h4>
                                    <p class="text-sm mb-0" dir="rtl" align="right" style="color:white">میتونی از پیشنهاد مسیر ما استفاده کنی</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-01.svg" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24" >مطمئن</h4>
                                    <p class="text-sm mb-0" dir="rtl" align="right" style="color:white">با خیال راحت حساب کاربری بساز</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-01.svg" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24" >سریع</h4>
                                    <p class="text-sm mb-0" dir="rtl" align="right" style="color:white">زود میرسی به مقصد</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-01.svg" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24" >ارزان</h4>
                                    <p class="text-sm mb-0" dir="rtl" align="right" style="color:white">نگران گرونی نباش</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-01.svg" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24"> تمام وقت</h4>
                                    <p class="text-sm mb-0" dir="rtl" align="right" style="color:white">هر وقت خواستی با خیال راحت سفر کن</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pricing section" dir="rtl" align="right>
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            <h2 class="section-title mt-0" >عضویت در گروه ما</h2>
                            <p class="section-paragraph mb-0" style="color:white">با خرید اشتراک به مبلغ 40 تومن از مزایای زیر بهره مند شوید</p>
                        </div>
						<div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <div class="pricing-table-price" style="color:white"><span class="pricing-table-price-currency h2">تومن</span><span class="pricing-table-price-amount h1">49</span><span class="text-xs" style="color:white">/ماه</span></div>
                                        </div>
										<div class="pricing-table-features-title text-xs pt-24 pb-24">با خرید اشتراک از ما</div>
                                        <ul class="pricing-table-features list-reset text-xs">
                                            <li>
                                                <span dir="rtl" align="right" style="color:white">می توانید از برنامه استفاده کنید</span>
                                            </li>
                                            <li>
                                                <span dir="rtl" align="right" style="color:white">از آخرین اخبار آگاه شوید</span>
                                            </li>
                                            <li>
                                                <span dir="rtl" align="right" style="color:white">استفاده ساده تر و بهنیه تز از برنامه</span>
                                            </li>
											<li>
												<span dir="rtl" align="right" style="color:white">بهره مندی از امکانات سایت به مدت یک سال</span>
											</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table-cta mb-8">
                                        <a class="button button-primary button-shadow button-block" href="#">اکنون عضو شوید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<section class="cta section" dir="rtl" align="right">
				<div class="container">
					<div class="cta-inner section-inner">
						<h3 class="section-title mt-0" dir="rtl" align="right">هنوز سوال دارید؟</h3>
						<div class="cta-cta">
							<a class="button button-primary button-wide-mobile" href="#">در ارتباط باشید</a>
						</div>
					</div>
				</div>
			</section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
						<a href="#">
							<img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
						</a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2019 Solid, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="dist/js/main.min.js"></script>


<?php include('includes/footer.php');?>
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>

</body>
</html>