<!DOCTYPE html>

<html lang="en">

<head>

    <script>

  function resizeIframe(obj) {

    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + "px";

  }

</script>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="author" content="colorlib.com">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Payday Loan Application | Money Line</title>



<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">





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

<form method="POST" action="data-send.php" id="signup-form" class="signup-form" enctype="multipart/form-data">

<h3></h3>





<fieldset>

<span class="step-current display"><span class="step-current-content display"><span class="step-number display"><span>04</span>/04</span></span></span>

<span class="step-current mobilenav step-right"><span class="step-current-content mobilenav step-right"><span class="step-number mobilenav step-right"><span>04</span>/04</span></span></span>

<div class="fieldset-flex">

<figure style="margin-bottom: 5px;">

<img src="images/mymoneyline_logo.png" alt="" height="80px;">

</figure>



<?php 



   

   



if(isset($_GET['btn-submit'])) 

{





$first_name= $_GET['first_name'];

$last_name= $_GET['last_name'];

$phone_number= $_GET['phone_number'];

$email= $_GET['email'];

$birth_day= $_GET['birth_day'];

$address= $_GET['address'];

$state= $_GET['state'];

$city= $_GET['city'];

$zip= $_GET['zip'];

$member_military = $_GET['member_military'];





$business_name= $_GET['employer_name'];

$business_phone= $_GET['emp_phone'];

$business_address= $_GET['emp_address'];

$emp_city= $_GET['emp_city'];

$emp_state= $_GET['emp_state'];

$emp_zip= $_GET['emp_zip'];

$emp_pay_amount= $_GET['emp_pay_amount'];

$direct_dep= $_GET['emp_deposit'];

$payment_free= $_GET['payment_free'];



$last_day=$_GET['last_day'];

$last_month=$_GET['last_month'];

$last_year=$_GET['last_year'];

$last_paycheck=$last_day.'-'.$last_month.'-'.$last_year;



$next_day=$_GET['next_day'];

$next_month=$_GET['next_month'];

$next_year=$_GET['next_year'];

$next_paycheck=$next_day.'-'.$next_month.'-'.$next_year;



$payback = str_replace(" ","_","$payback");

$phone_number = str_replace(" ","","$phone_number");

$phone_number = str_replace("(","","$phone_number");

$phone_number = str_replace(")","","$phone_number");

$phone_number = str_replace("-","","$phone_number");

$phone_number = preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $phone_number);

$first_name = str_replace(" ","-","$first_name");

$last_name = str_replace(" ","-","$last_name");



$address = str_replace(" ","-","$address");

$address = str_replace(".","-","$address");

$address = str_replace("#","-","$address");



$business_address = str_replace(" ","-","$business_address");

$business_address = str_replace(".","-","$business_address");

$business_address = str_replace("#","-","$business_address");



$city = str_replace(" ","-","$city");

$city = str_replace(".","-","$city");



$emp_city = str_replace(" ","-","$emp_city");

$emp_city = str_replace(".","-","$emp_city");



$state = str_replace(" ","-","$state");

$state = str_replace(".","-","$state");

$business_name = str_replace(" ","-","$business_name");

$business_name = str_replace(".","-","$business_name");



$business_phone = str_replace(" ","","$business_phone");

$business_phone = str_replace("(","","$business_phone");

$business_phone = str_replace(")","","$business_phone");

$business_phone = str_replace("-","","$business_phone");

$business_phone = preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $business_phone);

$lang="en";





$url_api_insert_software  = "https://mymoneyline.com/lsbankingportal/ls_software/API_files/moneyline_pdl/new_create_paydayloans.php?p_fname=".$first_name."&p_lname=".$last_name."&p_phone=".$phone_number."&p_email=".$email."&date_birtth=".$birth_day."&street_address=".$address."&city=".$city."&state=".$state."&zip=".$zip."&p_emp_name=".$business_name."&emp_mobile=".$business_phone."&emp_address=".$business_address."&emp_city=".$emp_city."&emp_state=".$emp_state."&emp_zip=".$emp_zip."&p_net_amount=".$emp_pay_amount."&p_dirct_dep=".$direct_dep."&emp_payfre=".$payment_free."&last_paydayy=".$last_paycheck."&next_paydayy=".$next_paycheck."&lang=".$lang;



//echo "<hr>$url_api_insert_software<hr>";

$curl = curl_init();



curl_setopt_array($curl, array(

  CURLOPT_URL => $url_api_insert_software,

  CURLOPT_RETURNTRANSFER => true,

  CURLOPT_ENCODING => "",

  CURLOPT_MAXREDIRS => 10,

  CURLOPT_TIMEOUT => 30,

  CURLOPT_FOLLOWLOCATION => true,

  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

  CURLOPT_CUSTOMREQUEST => "GET",

  CURLOPT_HTTPHEADER => array(

    "cache-control: no-cache",

    "postman-token: e9682f81-41a3-ae3c-9722-a379e7de19cc"

  ),

));



$response = curl_exec($curl);

$err = curl_error($curl);



curl_close($curl);





if ($err) {

  echo "cURL Error #:" . $err;

} else {

//echo "<hr>".$response;

}



}

?>







<div class="fieldset-content" style="margin-left:50px">

 <label class="form-label">Enter Your 3 Most Recent Bank Statements</label>

 

 <div class="form-group">



<input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" style="display:none"/>

<input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" style="display:none"/>

<input type="text" name="phone_number" id="phone_number" value="<?php echo $phone_number; ?>" style="display:none"/>

<input type="text" name="email" id="email" value="<?php echo $email; ?>" style="display:none"/>

<input type="text" name="member_military" id="member_military" value="<?php echo $member_military; ?>" style="display:none"/>

<input type="text" name="day" id="day" value="<?php echo $day; ?>" style="display:none"/>

<input type="text" name="month" id="month" value="<?php echo $month; ?>" style="display:none"/>

<input type="text" name="month" id="month" value="<?php echo $year; ?>" style="display:none"/>

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

    

</div>

 

 



<input type="file" name="doc1" id="doc1" placeholder="Statement 1" />



<input type="file" name="doc2" id="doc2" placeholder="Statement 2" />



<input type="file" name="doc3" id="doc3" placeholder="Statement 3" />









<!--<div class="form-group" style="width: auto;">-->

<!--    	<a href="step3.php?employer_name=<?php echo $business_name; ?>&emp_phone=<?php echo $business_phone; ?>&emp_address=<?php echo $business_address; ?>&emp_city=<?php echo $emp_city; ?>&emp_state=<?php echo $emp_state; ?>&emp_zip=<?php echo $emp_zip; ?>&emp_pay_amount=<?php echo $emp_pay_amount; ?>&emp_deposit=<?php echo $direct_dep; ?>&payment_free=<?php echo $payment_free; ?>&last_payday=<?php echo $last_paycheck; ?>&next_payday=<?php echo $next_paycheck; ?>" class="a">Prev</a>-->

<!--</div>-->



<div class="form-group" style="width: auto;">

    	<button name="submit-form" type="submit" class="button">Finish</button>

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

