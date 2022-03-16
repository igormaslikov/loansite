<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="colorlib.com">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Payday Loan Application | Money Line</title>

<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + "px";
  }
</script>
<link rel="stylesheet" href="css/style.css">
<style>
    
    .image-box {
  /* Here's the trick */
  box-shadow: inset 0 0 0 100vw rgba(0,0,0,0.5);

  /* Basic background styles */
  background: var(--image-url) center center;
  background-size: cover;

  /* Here's the same styles we applied to our content-div earlier */
  color: white;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  
  /* Add a transition, just for fun */
  transition: box-shadow .3s ease-out;
}
   
</style>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NRN6ZP4');</script>
<!-- End Google Tag Manager -->

</head>
<body>
<div class="main">
 <div class="image-box" style="--image-url: url(images/bg-image.jpg)">    
<div class="container">
<form method="GET" action="step3.php" id="signup-form" class="signup-form" enctype="multipart/form-data">
<h3></h3>

	<fieldset>
<span class="step-current display"><span class="step-current-content display"><span class="step-number display"><span>02</span>/04</span></span></span>
<span class="step-current mobilenav step-right"><span class="step-current-content mobilenav step-right"><span class="step-number mobilenav step-right"><span>02</span>/04</span></span></span>
<div class="fieldset-flex">
<figure style="margin-bottom: 28px;">
<img src="images/mymoneyline_logo.png" alt="" height="80px;">
</figure>

<?php 

   
   

if(isset($_GET['btn-submit'])) 
{

$first_name= $_GET['first_name'];
$last_name= $_GET['last_name'];
$phone_number= $_GET['phone_number'];
$email= $_GET['email'];
$day=$_GET['day'];
$month=$_GET['month'];
$year=$_GET['year'];
$birth_day=$year.'-'.$month.'-'.$day;
$address= $_GET['address'];
$state= $_GET['state'];
$city= $_GET['city'];
$zip= $_GET['zip'];
$member_military = $_GET['member_military'];

}

$first_name= $_GET['first_name'];
$last_name= $_GET['last_name'];
$phone_number= $_GET['phone_number'];
$email= $_GET['email'];
$day=$_GET['day'];
$month=$_GET['month'];
$year=$_GET['year'];
$birth_day=$year.'-'.$month.'-'.$day;
$address= $_GET['address'];
$state= $_GET['state'];
$city= $_GET['city'];
$zip= $_GET['zip'];
$member_military = $_GET['member_military'];
?>


<div class="fieldset-content" style="margin-left:50px">
<input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" style="display:none"/>
<input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" style="display:none"/>
<input type="text" name="phone_number" id="phone_number" value="<?php echo $phone_number; ?>" style="display:none"/>
<input type="text" name="email" id="email" value="<?php echo $email; ?>" style="display:none"/>
<input type="text" name="member_military" id="member_military" value="<?php echo $member_military; ?>" style="display:none"/>
<input type="text" name="day" id="day" value="<?php echo $day; ?>" style="display:none"/>
<input type="text" name="month" id="month" value="<?php echo $month; ?>" style="display:none"/>
<input type="text" name="year" id="year" value="<?php echo $year; ?>" style="display:none"/>
<input type="text" name="birth_day" id="birth_day" value="<?php echo $birth_day; ?>" style="display:none"/>
<input type="text" name="address" id="address" value="<?php echo $address; ?>" style="display:none"/>
<input type="text" name="state" id="state" value="<?php echo $state; ?>" style="display:none"/>
<input type="text" name="city" id="city" value="<?php echo $city; ?>" style="display:none"/>
<input type="text" name="zip" id="zip" value="<?php echo $zip; ?>" style="display:none"/>
<input type="text" name="business_name" id="business_name" value="<?php echo $business_name; ?>" style="display:none"/>
<input type="text" name="business_phone" id="business_phone" value="<?php echo $business_phone; ?>" style="display:none"/>
<input type="text" name="business_address" id="business_address" value="<?php echo $business_address; ?>" style="display:none"/>
<input type="text" name="income" id="income" value="<?php echo $emp_city; ?>" style="display:none"/>
<input type="text" name="income" id="income" value="<?php echo $emp_state; ?>" style="display:none"/>
<input type="text" name="income" id="income" value="<?php echo $emp_zip; ?>" style="display:none"/>
<input type="text" name="income" id="income" value="<?php echo $emp_pay_amount; ?>" style="display:none"/>
<input type="text" name="income" id="income" value="<?php echo $direct_dep; ?>" style="display:none"/>
<input type="text" name="last_paycheck" id="last_paycheck" value="<?php echo $payment_free; ?>" style="display:none"/>
<input type="text" name="payment_free" id="payment_free" value="<?php echo $last_paycheck; ?>" style="display:none"/>


 <label class="form-label">Enter your Address Information</label>


<input type="text" name="address" id="address" placeholder="Street Address" value="<?php echo $_GET['address'];?>" required/>

<input type="text" name="city" id="city" placeholder="City" value="<?php echo $_GET['city'];?>" required/>

 <select name="state" id="state" style="height: 40px;margin-bottom: 4px;" required>
    <option value="">Select State</option>
<option value="CA" <?php if($_GET['state']=='CA'){ echo 'selected';} ?>>CA</option>

</select>

<input type="number" name="zip" id="zip" placeholder="Zip Code" value="<?php echo $_GET['zip'];?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;" required/>




<div class="form-row">
<div class="form-group" style="width: auto;">
    	<a href="index.php?first_name=<?php echo $first_name; ?>&last_name=<?php echo $last_name;?>&phone_number=<?php echo $phone_number;?>&email=<?php echo $email;?>&day=<?php echo $day; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&address=<?php echo $address; ?>&city=<?php echo $city; ?>&state=<?php echo $state; ?>&zip=<?php echo $zip; ?>&employer_name=<?php echo $business_name; ?>&emp_phone=<?php echo $business_phone; ?>&emp_address=<?php echo $business_address; ?>&emp_city=<?php echo $emp_city; ?>&emp_state=<?php echo $emp_state; ?>&emp_zip=<?php echo $emp_zip; ?>&emp_pay_amount=<?php echo $emp_pay_amount; ?>&emp_deposit=<?php echo $direct_dep; ?>&payment_free=<?php echo $payment_free; ?>&last_payday=<?php echo $last_paycheck; ?>&next_payday=<?php echo $next_paycheck; ?>" class="a">Prev</a>
</div>

<div class="form-group" style="width: auto;">
    	<button name="btn-submit" type="submit" class="button">Next</button>
</div>
</div>



</div>
</div>
</fieldset>




</form>
</div>
<br><br>
</div>
<iframe src="footer.php" width="100%"  height="1000px" style="overflow-x: hidden;" frameBorder="0" onload="resizeIframe(this)"></iframe>
</div>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157954806-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157954806-1');
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRN6ZP4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Global site tag (gtag.js) - Google Ads: 874870667 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-874870667"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-874870667');
</script>


</body>

</html>
