<?php


$code= $_GET['code'];
$lang= $_GET['lang'];

if($lang=='es')
{
    $message="<p>Tu pr���stamo est��� a unos minutos; est���s a solo UN paso. Verifique su cuenta bancaria para completar su solicitud.</p>";
   // echo $message;
}

else
{
     $message="<p>Your loan is moments away; you are only ONE step away. Please verify your bank account to complete your application.</p>";
    //echo $message;
}

?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="euc-jp">
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + "px";
  }
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="colorlib.com">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Payday Loan Application | Money Line</title>

<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


<link rel="stylesheet" href="css/style.css">

<style>

 .image-box {
  
  box-shadow: inset 0 0 0 100vw rgba(0,0,0,0.5);

  /* Basic background styles */
  background: var(--image-url) center center;
  background-size: cover;

  /* Heres the same styles we applied to our content-div earlier */
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

<form method="GET" action="step2.php" id="signup-form" class="signup-form" enctype="multipart/form-data">
<h3></h3>

	<fieldset>
	    <h3 style="margin-left:-8%;" class="display"><a href="../index.php" style="text-decoration:none;color:#0f602d">English</a></h3>
<span class="step-current display"><span class="step-current-content display"><span class="step-number display"><span>01</span>/04</span></span></span>
<span class="step-current mobilenav step-right"><span class="step-current-content mobilenav step-right"><span class="step-number mobilenav step-right"><span>01</span>/04</span></span></span>
<div class="fieldset-flex">
<figure style="margin-bottom: 28px;">
<img src="images/Money-Line-Logo.JPG" alt="" height="100px;">
</figure>
<h3 style="" class="mobilenav"><a href="../index.php" style="text-decoration:none;color:#0f602d">English</a></h3>
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
?>

<div class="fieldset-content">
 <label class="form-label">Ingrese su información personal</label>
 
 <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" style="display:none"/>
<input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" style="display:none"/>
<input type="text" name="phone_number" id="phone_number" value="<?php echo $phone_number; ?>" style="display:none"/>
<input type="text" name="email" id="email" value="<?php echo $email; ?>" style="display:none"/>
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

<input type="text" name="first_name" id="first_name" placeholder="Primer Nombre" value="<?php echo $_GET['first_name'];?>" required/>

<input type="text" name="last_name" id="last_name" placeholder="Última Name" value="<?php echo $_GET['last_name'];?>" required/>

<input type="text" name="phone_number" id="phoneNumber" placeholder="Teléfono: 123-456-7890" value="<?php echo $_GET['phone_number'];?>" required/>

<input type="email" name="email" id="email" placeholder="Email" value="<?php echo $_GET['email'];?>" required/>

<label class="form-label" style="font-size:12px;padding-bottom:0px;color:#0f602d">Fecha de nacimiento</label>
<div class="form-row">
    
    <div class="form-group" style="width:30%">
<select name="month" id="month" style="height: 40px;margin-bottom: 4px;color:#0f602d" required>
    <option disabled="disabled" value="" selected="selected">MM</option>
<option value="01" <?php if($_GET['month']=='01'){ echo 'selected';} ?>>01</option>
<option value="02" <?php if($_GET['month']=='02'){ echo 'selected';} ?>>02</option>
<option value="03" <?php if($_GET['month']=='03'){ echo 'selected';} ?>>03</option>
<option value="04" <?php if($_GET['month']=='04'){ echo 'selected';} ?>>04</option>
<option value="05" <?php if($_GET['month']=='05'){ echo 'selected';} ?>>05</option>
<option value="06" <?php if($_GET['month']=='06'){ echo 'selected';} ?>>06</option>
<option value="07" <?php if($_GET['month']=='07'){ echo 'selected';} ?>>07</option>
<option value="08" <?php if($_GET['month']=='08'){ echo 'selected';} ?>>08</option>
<option value="09" <?php if($_GET['month']=='09'){ echo 'selected';} ?>>09</option>
<option value="10" <?php if($_GET['month']=='10'){ echo 'selected';} ?>>10</option>
<option value="11" <?php if($_GET['month']=='11'){ echo 'selected';} ?>>11</option>
<option value="12" <?php if($_GET['month']=='12'){ echo 'selected';} ?>>12</option>

</select>
</div>
<div class="form-group" style="width:30%">
<select name="day" id="day" style="height: 40px;margin-bottom: 4px;color:#0f602d" required>
    <option disabled="disabled" value="" selected="selected">DD</option>
<option value="01" <?php if($_GET['day']=='01'){ echo 'selected';} ?>>01</option>
<option value="02" <?php if($_GET['day']=='02'){ echo 'selected';} ?>>02</option>
<option value="03" <?php if($_GET['day']=='03'){ echo 'selected';} ?>>03</option>
<option value="04" <?php if($_GET['day']=='04'){ echo 'selected';} ?>>04</option>
<option value="05" <?php if($_GET['day']=='05'){ echo 'selected';} ?>>05</option>
<option value="06" <?php if($_GET['day']=='06'){ echo 'selected';} ?>>06</option>
<option value="07" <?php if($_GET['day']=='07'){ echo 'selected';} ?>>07</option>
<option value="08" <?php if($_GET['day']=='08'){ echo 'selected';} ?>>08</option>
<option value="09" <?php if($_GET['day']=='09'){ echo 'selected';} ?>>09</option>
<option value="10" <?php if($_GET['day']=='10'){ echo 'selected';} ?>>10</option>
<option value="11" <?php if($_GET['day']=='11'){ echo 'selected';} ?>>11</option>
<option value="12" <?php if($_GET['day']=='12'){ echo 'selected';} ?>>12</option>
<option value="13" <?php if($_GET['day']=='01'){ echo 'selected';} ?>>13</option>
<option value="14" <?php if($_GET['day']=='14'){ echo 'selected';} ?>>14</option>
<option value="15" <?php if($_GET['day']=='15'){ echo 'selected';} ?>>15</option>
<option value="16" <?php if($_GET['day']=='16'){ echo 'selected';} ?>>16</option>
<option value="17" <?php if($_GET['day']=='17'){ echo 'selected';} ?>>17</option>
<option value="18" <?php if($_GET['day']=='18'){ echo 'selected';} ?>>18</option>
<option value="19" <?php if($_GET['day']=='19'){ echo 'selected';} ?>>19</option>
<option value="20" <?php if($_GET['day']=='20'){ echo 'selected';} ?>>20</option>
<option value="21" <?php if($_GET['day']=='21'){ echo 'selected';} ?>>21</option>
<option value="22" <?php if($_GET['day']=='22'){ echo 'selected';} ?>>22</option>
<option value="23" <?php if($_GET['day']=='23'){ echo 'selected';} ?>>23</option>
<option value="24" <?php if($_GET['day']=='24'){ echo 'selected';} ?>>24</option>
<option value="25" <?php if($_GET['day']=='25'){ echo 'selected';} ?>>25</option>
<option value="26" <?php if($_GET['day']=='26'){ echo 'selected';} ?>>26</option>
<option value="27" <?php if($_GET['day']=='27'){ echo 'selected';} ?>>27</option>
<option value="28" <?php if($_GET['day']=='28'){ echo 'selected';} ?>>28</option>
<option value="29" <?php if($_GET['day']=='29'){ echo 'selected';} ?>>29</option>
<option value="30" <?php if($_GET['day']=='30'){ echo 'selected';} ?>>30</option>
<option value="31" <?php if($_GET['day']=='31'){ echo 'selected';} ?>>31</option>

</select>
</div>

<div class="form-group" style="width:30%">
<select name="year" id="year" style="height: 40px;margin-bottom: 4px;;color:#0f602d" required>
    <option disabled="disabled" value="" selected="selected">YYYY</option>
<option value="2020" <?php if($_GET['year']=='2020'){ echo 'selected';} ?>>2020</option>
<option value="2019" <?php if($_GET['year']=='2019'){ echo 'selected';} ?>>2019</option>
<option value="2018" <?php if($_GET['year']=='2018'){ echo 'selected';} ?>>2018</option>
<option value="2017" <?php if($_GET['year']=='2017'){ echo 'selected';} ?>>2017</option>
<option value="2016" <?php if($_GET['year']=='2016'){ echo 'selected';} ?>>2016</option>
<option value="2015" <?php if($_GET['year']=='2015'){ echo 'selected';} ?>>2015</option>
<option value="2014" <?php if($_GET['year']=='2014'){ echo 'selected';} ?>>2014</option>
<option value="2013" <?php if($_GET['year']=='2013'){ echo 'selected';} ?>>2013</option>
<option value="2012" <?php if($_GET['year']=='2012'){ echo 'selected';} ?>>2012</option>
<option value="2011" <?php if($_GET['year']=='2011'){ echo 'selected';} ?>>2011</option>
<option value="2010" <?php if($_GET['year']=='2010'){ echo 'selected';} ?>>2010</option>
<option value="2009" <?php if($_GET['year']=='2009'){ echo 'selected';} ?>>2009</option>
<option value="2008" <?php if($_GET['year']=='2008'){ echo 'selected';} ?>>2008</option>
<option value="2007" <?php if($_GET['year']=='2007'){ echo 'selected';} ?>>2007</option>
<option value="2006" <?php if($_GET['year']=='2006'){ echo 'selected';} ?>>2006</option>
<option value="2005" <?php if($_GET['year']=='2005'){ echo 'selected';} ?>>2005</option>
<option value="2004" <?php if($_GET['year']=='2004'){ echo 'selected';} ?>>2004</option>
<option value="2003" <?php if($_GET['year']=='2003'){ echo 'selected';} ?>>2003</option>
<option value="2002" <?php if($_GET['year']=='2002'){ echo 'selected';} ?>>2002</option>
<option value="2001" <?php if($_GET['year']=='2001'){ echo 'selected';} ?>>2001</option>
<option value="2000" <?php if($_GET['year']=='2000'){ echo 'selected';} ?>>2000</option>
<option value="1999" <?php if($_GET['year']=='1999'){ echo 'selected';} ?>>1999</option>
<option value="1998" <?php if($_GET['year']=='1998'){ echo 'selected';} ?>>1998</option>
<option value="1997" <?php if($_GET['year']=='1997'){ echo 'selected';} ?>>1997</option>
<option value="1996" <?php if($_GET['year']=='1996'){ echo 'selected';} ?>>1996</option>
<option value="1995" <?php if($_GET['year']=='1995'){ echo 'selected';} ?>>1995</option>
<option value="1994" <?php if($_GET['year']=='1994'){ echo 'selected';} ?>>1994</option>
<option value="1993" <?php if($_GET['year']=='1993'){ echo 'selected';} ?>>1993</option>
<option value="1992" <?php if($_GET['year']=='1992'){ echo 'selected';} ?>>1992</option>
<option value="1991" <?php if($_GET['year']=='1991'){ echo 'selected';} ?>>1991</option>
<option value="1990" <?php if($_GET['year']=='1990'){ echo 'selected';} ?>>1990</option>
<option value="1989" <?php if($_GET['year']=='1989'){ echo 'selected';} ?>>1989</option>
<option value="1988" <?php if($_GET['year']=='1988'){ echo 'selected';} ?>>1988</option>
<option value="1987" <?php if($_GET['year']=='1987'){ echo 'selected';} ?>>1987</option>
<option value="1986" <?php if($_GET['year']=='1986'){ echo 'selected';} ?>>1986</option>
<option value="1985" <?php if($_GET['year']=='1985'){ echo 'selected';} ?>>1985</option>
<option value="1984" <?php if($_GET['year']=='1984'){ echo 'selected';} ?>>1984</option>
<option value="1983" <?php if($_GET['year']=='1983'){ echo 'selected';} ?>>1983</option>
<option value="1982" <?php if($_GET['year']=='1982'){ echo 'selected';} ?>>1982</option>
<option value="1981" <?php if($_GET['year']=='1981'){ echo 'selected';} ?>>1981</option>
<option value="1980" <?php if($_GET['year']=='1980'){ echo 'selected';} ?>>1980</option>
<option value="1979" <?php if($_GET['year']=='1979'){ echo 'selected';} ?>>1979</option>
<option value="1978" <?php if($_GET['year']=='1978'){ echo 'selected';} ?>>1978</option>
<option value="1977" <?php if($_GET['year']=='1977'){ echo 'selected';} ?>>1977</option>
<option value="1976" <?php if($_GET['year']=='1976'){ echo 'selected';} ?>>1976</option>
<option value="1975" <?php if($_GET['year']=='1975'){ echo 'selected';} ?>>1975</option>
<option value="1974" <?php if($_GET['year']=='1974'){ echo 'selected';} ?>>1974</option>
<option value="1973" <?php if($_GET['year']=='1973'){ echo 'selected';} ?>>1973</option>
<option value="1972" <?php if($_GET['year']=='1972'){ echo 'selected';} ?>>1972</option>
<option value="1971" <?php if($_GET['year']=='1971'){ echo 'selected';} ?>>1971</option>
<option value="1970" <?php if($_GET['year']=='1970'){ echo 'selected';} ?>>1970</option>
<option value="1969" <?php if($_GET['year']=='1969'){ echo 'selected';} ?>>1969</option>
<option value="1968" <?php if($_GET['year']=='1968'){ echo 'selected';} ?>>1968</option>
<option value="1967" <?php if($_GET['year']=='1967'){ echo 'selected';} ?>>1967</option>
<option value="1966" <?php if($_GET['year']=='1966'){ echo 'selected';} ?>>1966</option>
<option value="1965" <?php if($_GET['year']=='1965'){ echo 'selected';} ?>>1965</option>
<option value="1964" <?php if($_GET['year']=='1964'){ echo 'selected';} ?>>1964</option>
<option value="1963" <?php if($_GET['year']=='1963'){ echo 'selected';} ?>>1963</option>
<option value="1962" <?php if($_GET['year']=='1962'){ echo 'selected';} ?>>1962</option>
<option value="1961" <?php if($_GET['year']=='1961'){ echo 'selected';} ?>>1961</option>
<option value="1960" <?php if($_GET['year']=='1960'){ echo 'selected';} ?>>1960</option>
<option value="1959" <?php if($_GET['year']=='1959'){ echo 'selected';} ?>>1959</option>
<option value="1958" <?php if($_GET['year']=='1958'){ echo 'selected';} ?>>1958</option>
<option value="1957" <?php if($_GET['year']=='1957'){ echo 'selected';} ?>>1957</option>
<option value="1956" <?php if($_GET['year']=='1956'){ echo 'selected';} ?>>1956</option>
<option value="1955" <?php if($_GET['year']=='1955'){ echo 'selected';} ?>>1955</option>
<option value="1954" <?php if($_GET['year']=='1954'){ echo 'selected';} ?>>1954</option>
<option value="1953" <?php if($_GET['year']=='1953'){ echo 'selected';} ?>>1953</option>
<option value="1952" <?php if($_GET['year']=='1952'){ echo 'selected';} ?>>1952</option>
<option value="1951" <?php if($_GET['year']=='1951'){ echo 'selected';} ?>>1951</option>
<option value="1950" <?php if($_GET['year']=='1950'){ echo 'selected';} ?>>1950</option>
<option value="1949" <?php if($_GET['year']=='1949'){ echo 'selected';} ?>>1949</option>
<option value="1948" <?php if($_GET['year']=='1948'){ echo 'selected';} ?>>1948</option>
<option value="1947" <?php if($_GET['year']=='1947'){ echo 'selected';} ?>>1947</option>
<option value="1946" <?php if($_GET['year']=='1946'){ echo 'selected';} ?>>1946</option>
<option value="1945" <?php if($_GET['year']=='1945'){ echo 'selected';} ?>>1945</option>
<option value="1944" <?php if($_GET['year']=='1944'){ echo 'selected';} ?>>1944</option>
<option value="1943" <?php if($_GET['year']=='1943'){ echo 'selected';} ?>>1943</option>
<option value="1942" <?php if($_GET['year']=='1942'){ echo 'selected';} ?>>1942</option>
<option value="1941" <?php if($_GET['year']=='1941'){ echo 'selected';} ?>>1941</option>
<option value="1940" <?php if($_GET['year']=='1940'){ echo 'selected';} ?>>1940</option>
<option value="1939" <?php if($_GET['year']=='1939'){ echo 'selected';} ?>>1939</option>
<option value="1938" <?php if($_GET['year']=='1938'){ echo 'selected';} ?>>1938</option>
<option value="1937" <?php if($_GET['year']=='1937'){ echo 'selected';} ?>>1937</option>
<option value="1936" <?php if($_GET['year']=='1936'){ echo 'selected';} ?>>1936</option>
<option value="1935" <?php if($_GET['year']=='1935'){ echo 'selected';} ?>>1935</option>
<option value="1934" <?php if($_GET['year']=='1934'){ echo 'selected';} ?>>1934</option>
<option value="1933" <?php if($_GET['year']=='1933'){ echo 'selected';} ?>>1933</option>
<option value="1932" <?php if($_GET['year']=='1932'){ echo 'selected';} ?>>1932</option>
<option value="1931" <?php if($_GET['year']=='1931'){ echo 'selected';} ?>>1931</option>
<option value="1930" <?php if($_GET['year']=='1930'){ echo 'selected';} ?>>1930</option>
</select>
</div>
</div>

<!--<div class="form-group">-->
<!--<input type="text" name="address" id="address" placeholder="Address" value="<?php //echo $_GET['address'];?>" required/>-->
<!--</div>-->


<!--<div class="form-row">-->
<!--<div class="form-group">-->
<!--<input type="text" name="city" id="city" placeholder="City" value="<?php //echo $_GET['city'];?>" required/>-->
<!--</div>-->
<!--<div class="form-group">-->
<!-- <select name="state" id="state" style="height: 50px;" required>-->
<!--    <option value="">Select State</option>-->
<!--<option value="CA">CA</option>-->
<!--<option value="AZ">AZ</option>-->
<!--<option value="NV">NV</option>-->
<!--<option value="IL">IL</option>-->

<!--</select>-->
<!--</div>-->
<!--</div>-->

<!--<div class="form-row">-->
<!--<div class="form-group">-->
<!--<input type="text" name="zip" id="zip" placeholder="Zip Code" value="<?php //echo $_GET['zip'];?>" required/>-->
<!--</div>-->
<!--</div>-->




<!--<div class="form-group" style="width: auto;">-->
<!--    	<a href="index.php?amount=<?php //echo $amount;?>&payback=<?php //echo $payback;?>" class="a">Prev</a>-->
<!--</div>-->

<div class="form-group" style="width: auto;">
    	<button name="btn-submit" type="submit" class="button">Próxima</button>
</div>




</div>
</div>
</fieldset>




</form>
</div>
<br><br>
</div>
<iframe src="footer_es.php" width="100%"  height="1000px" frameBorder="0" style="overflow-x: hidden;"  onload="resizeIframe(this)"></iframe>
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

<script>
    
    const isNumericInput = (event) => {
	const key = event.keyCode;
	return ((key >= 48 && key <= 57) || // Allow number line
		(key >= 96 && key <= 105) // Allow number pad
	);
};

const isModifierKey = (event) => {
	const key = event.keyCode;
	return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
		(key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
		(key > 36 && key < 41) || // Allow left, up, right, down
		(
			// Allow Ctrl/Command + A,C,V,X,Z
			(event.ctrlKey === true || event.metaKey === true) &&
			(key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
		)
};

const enforceFormat = (event) => {
	// Input must be of a valid number format or a modifier key, and not longer than ten digits
	if(!isNumericInput(event) && !isModifierKey(event)){
		event.preventDefault();
	}
};

const formatToPhone = (event) => {
	if(isModifierKey(event)) {return;}

	// I am lazy and don't like to type things more than once
	const target = event.target;
	const input = event.target.value.replace(/\D/g,'').substring(0,10); // First ten digits of input only
	const zip = input.substring(0,3);
	const middle = input.substring(3,6);
	const last = input.substring(6,10);

	if(input.length > 6){target.value = `(${zip}) ${middle} - ${last}`;}
	else if(input.length > 3){target.value = `(${zip}) ${middle}`;}
	else if(input.length > 0){target.value = `(${zip}`;}
};

const inputElement = document.getElementById('phoneNumber');
inputElement.addEventListener('keydown',enforceFormat);
inputElement.addEventListener('keyup',formatToPhone);
</script>

</body>

</html>



