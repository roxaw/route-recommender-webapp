<?php 
//session_start();

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
<div class="container-fluid" >
  <a class="navbar-brand" href="index.php">پیش سفر</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class=" collapse navbar-collapse" id="navbarNavDropdown" dir="rtl" align="right">
    <ul class="navbar-nav ms-auto ">
        <?php if(strlen($_SESSION['login']))
    {   ?>
				<li class="nav-item"><a class="nav-link mx-2 active" aria-current="page" href="#"><i></i> <?php echo htmlentities($_SESSION['username']);?>- خوش آمدی</a></li>
				<?php } ?>
      <li class="nav-item">
        <a class="nav-link mx-2" href="my-account.php">حساب کاربری</a>
      </li>
      <?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li class="nav-item"><a class="nav-link mx-2 active" aria-current="page" href="login.php"><i></i>وارد شدن</a></li>
<?php }
else{ ?>
	
				<li class="nav-item"><a class="nav-link mx-2 active" aria-current="page" href="logout.php"><i ></i>خارج شدن</a></li>
				<?php } ?>
      </ul>
      </li>
    </ul>
  </div>
</div>
</nav>
<script>
	// Toggle Animation by Class
$(window).scroll(function(){
  if($(document).scrollTop() > 100){
    $('nav').addClass('animate');
  }else{
    $('nav').removeClass('animate');
  }
})
</script>