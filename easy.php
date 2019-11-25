<?php include "templates/header.php"?>
<script>
var num = {value: 2};
var i = 1;
var true_stack = 0;
var imgArray = new Array();
var ansArray = new Array();
imgArray[0] = new Image();
imgArray[0].src = 'img/กอไก่.PNG';
ansArray[0] = "ก";

imgArray[1] = new Image();
imgArray[1].src = 'img/ขอไข่.PNG';
ansArray[1] = "ข";

imgArray[2] = new Image();
imgArray[2].src = 'img/ฃอฃวด.PNG';
ansArray[2] = "ฃ";

imgArray[3] = new Image();
imgArray[3].src = 'img/คอควาย.PNG';
ansArray[3] = "ค";

imgArray[4] = new Image();
imgArray[4].src = 'img/ฅอฅน.PNG';
ansArray[4] = "ฅ";

function nextImage(element)
{
    document.getElementById('myimg').src = imgArray[i].src;
	  i++;
}
function changes(num,numid,element){
  var ans = document.getElementById('choice['+numid+']').innerHTML;
  if(ans == ansArray[num.value-2]){
    success();
    plusTrue();
  }else{
    fail();
  }
  if(num.value != 6){
    nextChoice(num);
    nextImage();
    num.value++;
  }else{
    setTimeout('Redirect()', 3000);
  }
}
function Redirect()
{
  //window.location="http://dekdee.buu.ac.th/~60160083/art/level.php";
  loadDoc();
}
function nextChoice(num,element){
  if(num.value == 2){
    var sound = "ขอไข่";
    document.getElementById('choice[0]').innerHTML = 'ข';
    document.getElementById('choice[1]').innerHTML = 'ช';
    document.getElementById('choice[2]').innerHTML = 'ฆ';
    document.getElementById('choice[3]').innerHTML = 'ด';
  }else if(num.value == 3){
    var sound = "ขอขวด";
    document.getElementById('choice[0]').innerHTML = 'ถ';
    document.getElementById('choice[1]').innerHTML = 'ฃ';
    document.getElementById('choice[2]').innerHTML = 'ก';
    document.getElementById('choice[3]').innerHTML = 'ภ';
  }else if(num.value == 4){
    var sound = "คอควาย";
    document.getElementById('choice[0]').innerHTML = 'น';
    document.getElementById('choice[1]').innerHTML = 'ร';
    document.getElementById('choice[2]').innerHTML = 'ค';
    document.getElementById('choice[3]').innerHTML = 'ฟ';
  }else if(num.value == 5){
    var sound = "ฅอคน";
    document.getElementById('choice[0]').innerHTML = 'ญ';
    document.getElementById('choice[1]').innerHTML = 'ด';
    document.getElementById('choice[2]').innerHTML = 'ฅ';
    document.getElementById('choice[3]').innerHTML = 'ย';
  }
  var txt = '<img onclick="PlaySound('+"'"+sound+"'"+')" style="height:40px;width:40px;" class="img-fluid img-stage my-pulse4" src="img/speaker2.PNG">';
  document.getElementById('num').innerHTML = "ข้อที่ " + num.value + "&nbsp " + txt;

}

function plusTrue(){
	true_stack++;
}

function loadDoc(element) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("portfolio").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "score.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("true_stack="+true_stack+"&level=easy");
}
</script>


<?php 
  $check = "easy-".$_COOKIE['name_current'];
  if(isset($_COOKIE[$check])){
   echo "<script>Redirect();</script>";
  }
?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="level.php?name=<?php echo $_COOKIE['name_current']; ?>">ย้อนกลับ</a>
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
		<div class="container portfolio">
			<br>
			<center><img id="myimg" class="img-fluid img-stage my-pulse4" src="img/กอไก่.PNG" alt="https://www.flaticon.com"></center>
			<br>
      <h1 id="num" class="text-center" style="color:#4ECDC4;">
      ข้อที่ 1 &nbsp
      <img onclick="PlaySound('กอไก่')" style="height:40px;width:40px;" class="img-fluid img-stage my-pulse4" src="img/speaker2.PNG">
      </h1>
      <br>
			<div class="col-lg-12" align="middle">
				<div class="col-sm-6">
					<a onclick="changes(num,0);" class="btn-stage1" >
						<h2 id="choice[0]" style="color:white">ส</h2>
					</a>
					<a onclick="changes(num,1);" class="btn-stage1">
						<h2 id="choice[1]" style="color:white">ก</h2>
					</a>
				</div>
				<div class="col-sm-6">
					<a onclick="changes(num,2);" class="btn-stage1">
						<h2 id="choice[2]" style="color:white">ว</h2>
					</a>
					<a onclick="changes(num,3);" class="btn-stage1">
						<h2 id="choice[3]" style="color:white">จ</h2>
					</a>
				</div>
			</div>
		</div>
    </section>
  <div class="copyright py-4 text-center text-white">
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
              <i class="fa fa-close"></i>
			ปิด</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <?php include "templates/footer.php"?>
</body>

<script>
    function PlaySound(melody) {
        var path = "audio/"
        var snd = new Audio(path + melody + ".mp3");
        snd.play();
    }
</script>

</html>

