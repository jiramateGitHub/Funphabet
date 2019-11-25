<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<style>
  @media screen and (min-height: 700px) {
  div.example {
    margin-top: 30px;
  }
}
</style>
<?php include "templates/header.php"?>
<script>
  var c_name = "";

	function inputName(element) {
		(async function getName() {
		const {value: name} = await Swal.fire({
		  title: 'กรุณาใส่ชื่อ',
		  input: 'text',
		  inputPlaceholder: 'ชื่อ'
		})
		if (name) {
      c_name = name;
		  Swal.fire('สวัสดี ' + name + '!')
      setTimeout('Redirect()', 1000);
		}else{
      Swal.fire("กรุณาใส่ชื่อ","", "error");
    }
		})()
	}
	// Wrap every letter in a span

  function Redirect(element) {
    window.location="level.php?name="+c_name;
}

</script>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
		FUNPHABET
	  </a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">เล่นเกม</a>
          </li>
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
  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio" style="background-color:#FF6B6B;">
    <div class="container">
	  <div class="example">
    <h1 class="text-center mb-0 ml6" style="color:#fff">
		  <span class="text-wrapper">
			  <span class="letters">อักษรพาเพลิน</span>
		  </span>
	  </h1>
    </div>
	  <hr class="star-dark">
	  <br>
	  <img class="img-fluid d-block mx-auto img-logo my-pulse" style="background-color:#fff;" src="img/logo.png" alt="https://www.flaticon.com">
	  <br>
	  <br>
	  <center><a onclick="inputName();">
	    <p class="my-pulse1" style="background-color:#C44D58;">เล่นเกม</p>
	  </a></center>

	  <hr class="star-dark">
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
                <div class="col order-8"> </b>คะแนน</b> </div>
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
            <h2 class="text-secondary text-uppercase mb-0">ติดต่อเรา</h2>
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
              <i class="fa fa-close"></i>ปิด</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"?>
</body>
</html>
