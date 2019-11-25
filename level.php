<?php 
  $name = $_GET['name'];
  if(isset($name)){
    if(!isset($_COOKIE[$name])){
      setcookie($name,$name,time()+3600000);
      header("Refresh:0");
    }
  }
  if($name != $_COOKIE['name_current']){
    setcookie('name_current',$_COOKIE[$name],time()+36000);
    header("Refresh:0");
  }
?>

<style type="text/css">
.tracking-in-contract:hover {
  -webkit-animation: tracking-in-contract 0.8s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
          animation: tracking-in-contract 0.8s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
}
@-webkit-keyframes tracking-in-contract {
  0% {
    letter-spacing: 1em;
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    letter-spacing: normal;
    opacity: 1;
  }
}
@keyframes tracking-in-contract {
  0% {
    letter-spacing: 1em;
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    letter-spacing: normal;
    opacity: 1;
  }
}

</style>
<?php include "templates/header.php"?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger btn my-btn" href="index.php" style="-moz-border-radius:28px;-webkit-border-radius:28px;border-radius:28px;">ออกจากเกม</a>
      <a class="navbar-brand" href="index.php">สวัสดี <?php echo $name?></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		  <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger portfolio-item" href="#portfolio-modal-1">คำอธิบาย</a>
          </li>
		  <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger portfolio-item" href="#portfolio-modal-2">ลำดับคะแนน</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger portfolio-item" href="#portfolio-modal-3">ติดต่อเรา</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	<section class="portfolio" id="portfolio" >
		<div class="container">
			<h1 class="text-center mb-0 ml6">
			  <span class="text-wrapper">
        <span class="letters">ระดับการเล่น</span>
       
			  </span>
			</h1>
			<br>
			<!-- <hr class="star-dark"> -->
			<div align="middle">
				<div class="row" >
					<div class="col-md-4 col-sm-4" align="middle">
						<a href="easy.php" class="btn-level1">
							<i class="fas fa-dog"></i>
						</a>
						<h3>ง่าย</h3>
					</div>
					<div class="col-md-4 col-sm-4 " align="middle">
						<a href="medium.php" class="btn-level2">
							<i class="fas fa-spider"></i>
						</a>
						<h3>ปานกลาง</h3>
					</div>
					<div class="col-md-4 col-sm-4" align="middle">
						<a href="hard.php" class="btn-level3">
							<i class="fas fa-dragon"></i>
						</a>
						<h3>ยาก</h3>
					</div>
				</div>
			</div>
		</div>
    </section>
  <div class="copyright py-4 text-center text-white fixed-bottom">
    <div class="container">
      <small>Copyright &copy; ART And Creative 2019</small>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
		<div class="card">
		  <div class="card-header">
			<h2 class="text-secondary text-uppercase mb-0">คำอธิบาย</h2>
			<img class="img-fluid mb-5 img-port" src="img/discription.png" alt="https://www.flaticon.com" width="200%">
		  </div>
		  <hr class="star-dark mb-5">
		  <div class="card-body">
			<blockquote class="blockquote mb-0">
			   <p class="mb-5">FUNPHABET เป็นเว็บแอพพลิเคชันที่ถูกพัฒนาให้เหมาะสมกับผู้บกพร่องด้านการอ่านในกลุ่มของเด็กอนุบาลถึงประถมชั้นต้น หรือผู้ที่สนใจ เพื่อเป็นส่วนสนับสนุนการเรียนรู้พยัญชนะภาษาไทยทั้ง 44 อักขระ ให้ง่ายขึ้นด้วยการใช้ภาพและสีช่วยส่งเสริมการจดจำพยัญชนะไทยในรูปแบบของเกม</p>
			  <footer class="blockquote-footer">ทีมงาน FUNPHABET</footer>
			</blockquote>
		  </div>
			<a class="btn btn-danger btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
			ปิด</a>
		</div>
      </div>
    </div>
  </div>
  
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">ลำดับคะแนน</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5 img-port" src="img/rank.png" alt="https://www.flaticon.com">
            <div class="mb-5 ">
              <div class="row" style="font-size: 20px;">
                <div class="col order-4" style="text-align: center;"> <b>ชื่อ</b> </div>
                <div class="col order-8"> <b>คะแนน</b> </div>
              </div>
              <div class="row" style="font-size: 20px;">
                <div class="col order-4" > หมี </div>
                <div class="col order-8"> 6 </div>
              </div>
              <div class="row" style="font-size: 20px;">
                <div class="col order-4" > แบงค์หงิด </div>
                <div class="col order-8"> 5 </div>
              </div>
              <div class="row" style="font-size: 20px;">
                <div class="col order-4" > ฟลุ๊คหงิด </div>
                <div class="col order-8"> 4 </div>
              </div>
              <div class="row" style="font-size: 20px;">
                <div class="col order-4" > เฟิร์สโลเล </div>
                <div class="col order-8"> 3 </div>
              </div>
              <div class="row" style="font-size: 20px;">
                <div class="col order-4" > กันปล่อยจอย </div>
                <div class="col order-8"> 3 </div>
              </div>
            </div>
            <a class="btn btn-danger btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
			ปิด</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">ติดต่อ</h2>
			<hr class="star-dark mb-5">
            <img class="img-fluid mb-5 img-port" src="img/contract.png" alt="https://www.flaticon.com">
			<div class="col-lg-12" align="middle">
				<a href="https://www.facebook.com/bangker.phonlayut" class="btn-facebook">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a href="https://www.google.com/gmail/about/" class="btn-google">
					<i class="fab fa-google"></i>
				</a>
				<a href="https://www.instagram.com/bank_ngid/?hl=en" class="btn-instagram">
					<i class="fab fa-instagram"></i>
				</a>
				<a href="https://line.me/ti/p/TQXrh9747T" class="btn-line">
					<i class="fab fa-line"></i>
				</a>
			</div>
			<hr class="star-dark mb-5">
            <a class="btn btn-danger btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
			ปิด</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <?php include "templates/footer.php"?>
</body>
</html>
