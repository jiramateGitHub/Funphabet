<?php  
$check = $_POST['level']."-".$_COOKIE['name_current'];
if(!isset($_COOKIE[$check])){
	setcookie($_POST['level'].'-'.$_COOKIE['name_current'],$_POST['true_stack'],time()+3600000);
	$score = $_POST['true_stack'];
}else{
	$score = $_COOKIE[$check];
}
?>
<section class="portfolio" id="portfolio" >
		<div class="container">
			<h1 class="text-center mb-0 ml6">
			  <span class="text-wrapper">
				<span class="letters">คะแนนของคุณคือ</span>
			  </span>
			</h1>
			<hr class="star-dark">
			<center><h3 class="my-pulse4" style="font-size: 100px"><?php echo $score;?></h3></center>
			<hr class="star-dark">
		</div>
</section>