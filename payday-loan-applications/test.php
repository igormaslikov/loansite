<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="colorlib.com">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Get Payday Loan - Landing Page | Money Line</title>

<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


<link rel="stylesheet" href="css/style.css">

<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + "px";
  }
</script>
<style>
    
 .radio-toolbar {
  margin: 10px;
  margin-left: -2px;
}

.radio-toolbar input[type="radio"] {
  opacity: 0;
  position: fixed;
  width: 0;
}

.radio-toolbar label {
    display: inline-block;
    background-color: #43d7ba;
    padding: 10px 80px;
    font-family: sans-serif, Arial;
    font-size: 16px;
    border: 2px solid #444;
    border-radius: 4px;
    color:white;
    cursor: pointer;
}

.radio-toolbar label:hover {
  background-color: #76AD46;
}

.radio-toolbar input[type="radio"]:focus + label {
    
}

.radio-toolbar input[type="radio"]:checked + label {
    background-color: #76AD46;
    border-color: #76AD46;
}

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

</head>
<body>
<div class="main">
    <div class="image-box" style="--image-url: url(images/bg-image.jpg)">
<div class="container">
<form method="POST" action="step3.php" id="signup-form" class="signup-form" enctype="multipart/form-data">
<h3></h3>
<fieldset>
<span class="step-current"> <span class="step-current-content"><span class="step-number"><span>02</span>/07</span></span> </span>
<div class="fieldset-flex">
<figure style="margin-bottom: 28px;">
<img src="images/Money-Line-Logo.JPG" alt="" height="100px;">
</figure>
<?php 

   
   

if(isset($_POST['btn-submit'])) 
{
    
$amount= $_POST['amount'];
 //echo $amount;
}
$payback=$_GET['payback'];
?>
<input type="text" name="amount" id="amount" value="<?php echo $amount; ?>" style="display:none"/>

<div class="fieldset-content">
 <label class="form-label">How long do you need to pay it back?</label>

  <div class="radio-toolbar">
    <input type="radio" id="threemonths" name="payback" value="1-3 Months" <?php if($payback=='1-3 Months'){ echo 'checked';} ?> required>
    <label for="threemonths" style="width: 30%;text-align: center;">1-3 Months</label><br><br>

    <input type="radio" id="sixmonths" name="payback" value="3-6 Months" <?php if($payback=='3-6 Months'){ echo 'checked';} ?> required>
    <label for="sixmonths" style="width: 30%;text-align: center;">3-6 Months</label><br><br>

    <input type="radio" id="twmonths" name="payback" value="6-12 Months" <?php if($payback=='6-12 Months'){ echo 'checked';} ?> required>
    <label for="twmonths" style="width: 30%;text-align: center;">6-12 Months</label><br><br>
    <input type="radio" id="twoyears" name="payback" value="1-2 Years" <?php if($payback=='1-2 Years'){ echo 'checked';} ?> required>
    <label for="twoyears" style="width: 30%;text-align: center;">1-2 Years</label><br>
</div>
<p>&nbsp;</p>  
  
 

<div class="form-row">
<div class="form-group" style="width: auto;">
    	<a href="index.php?amount=<?php echo $amount;?>" class="a">Prev</a>
</div>



<div class="form-group" style="width: auto;">
    	<button name="btn-submit" type="submit" class="button">Next</button>
</div>

</div>

</div>

</div>

</fieldset>



</form>
</div><br><br>
</div>
<iframe src="footer.php" width="99.5%"  height="1000px" frameBorder="0" onload="resizeIframe(this)"></iframe>
</div>


</body>

</html>
