<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payday Loan Application | Money Line</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Thank you for applying at MoneyLine. We received your application. A team member will contact you shortly.
If you have any questions you can always contact us at support@mymoneyline.com</p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2020 | All Rights Reserved</p>
	</footer>
</body>
</html>
<?php

if(isset($_POST['submit-form'])) 
{
    
$name= $_POST['first_name'];
$l_name= $_POST['last_name'];
$phone= $_POST['phone_number'];
$email= $_POST['email'];
$member_military = $_GET['member_military'];
$date_birth= $_POST['birth_day'];
$address= $_POST['address'];
$state= $_POST['state'];
$city= $_POST['city'];
$zip= $_POST['zip'];
$net_amount = $_POST['income']; 
$emp_name = $_POST['business_name'];
$emp_phone = $_POST['business_phone'];
$business_address = $_POST['business_address'];
$last_payday = $_POST['last_paycheck'];
$pay_free = $_POST['payment_free'];
$direct_dep = "No";
$doc1 = $_POST['doc1'];


        $imgFile = $_FILES['doc1']['name'];
        $tmp_dir = $_FILES['doc1']['tmp_name'];
        $imgSize = $_FILES['doc1']['size'];
        
        // Upload doc1 Starts
    
            $upload_dir = 'Bank_Statements/'; // upload directory
    
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
        
            // valid image extensions
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); // valid extensions
        
            // rename uploading image
            $userpic = "Statement1-"."$name-$phone-".rand(1000,1000000).".".$imgExt;
             
            
                if($imgSize > 0000000)  {
                    // Nothing
                }
                else {
                    $final_File = "";
                }
            // allow valid image file formats
            if(in_array($imgExt, $valid_extensions)){            
                // Check file size '5MB'
                
                if($imgSize < 5000000)                {
                    move_uploaded_file($tmp_dir,$upload_dir.$userpic);
                }
                else{
                    $errMSG = "Sorry, your file is too large.";
                }
            }
            else{
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
            }
            
            
    // Upload doc1 Ends
    
    //********************************************************************* Upload doc2 Starts
    
    
    
    
        $imgFilee = $_FILES['doc2']['name'];
        $tmp_dirr = $_FILES['doc2']['tmp_name'];
        $imgSizee = $_FILES['doc2']['size'];
        
       
    
            $upload_dirr = 'Bank_Statements/'; // upload directory
    
            $imgExtt = strtolower(pathinfo($imgFilee,PATHINFO_EXTENSION)); // get image extension
        
            // valid image extensions
            $valid_extensionss = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); // valid extensions
        
            // rename uploading image
            $userpicc = "Statement2-"."$name-$phone-".rand(1000,1000000).".".$imgExtt;
             
            
                if($imgSizee > 0000000)  {
                    // Nothing
                }
                else {
                    $final_Filee = "";
                }
            // allow valid image file formats
            if(in_array($imgExtt, $valid_extensionss)){            
                // Check file size '5MB'
                
                if($imgSizee < 5000000)                {
                    move_uploaded_file($tmp_dirr,$upload_dirr.$userpicc);
                }
                else{
                    $errMSG = "Sorry, your file is too large.";
                }
            }
            else{
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
            }
            
            
    
    
    
    
    
    
    
    //********************************************************************* Upload doc2 Ends




//********************************************************************* Upload doc3 Starts
    
    
    
    
        $imgFileee = $_FILES['doc3']['name'];
        $tmp_dirrr = $_FILES['doc3']['tmp_name'];
        $imgSizeee = $_FILES['doc3']['size'];
        
       
    
            $upload_dirrr = 'Bank_Statements/'; // upload directory
    
            $imgExttt = strtolower(pathinfo($imgFileee,PATHINFO_EXTENSION)); // get image extension
        
            // valid image extensions
            $valid_extensionsss = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); // valid extensions
        
            // rename uploading image
            $userpiccc = "Statement3-"."$name-$phone-".rand(1000,1000000).".".$imgExttt;
             
            
                if($imgSizeee > 0000000)  {
                    // Nothing
                }
                else {
                    $final_Fileee = "";
                }
                        
                
                
                if($imgSizeee < 10000000)                {
                    move_uploaded_file($tmp_dirrr,$upload_dirrr.$userpiccc);
                }
                else{
                    $errMSG = "Sorry, your file is too large.";
                }
           
            
            
    
    
    
    
    
    
    
    //********************************************************************* Upload doc3 Ends





$payback = str_replace(" ","_","$payback");
$phone = preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $phone);
$name = str_replace(" ","-","$name");
$l_name = str_replace(" ","-","$l_name");

$address = str_replace(" ","-","$address");
$address = str_replace(".","-","$address");
$address = str_replace("#","-","$address");

$business_address = str_replace(" ","-","$business_address");
$business_address = str_replace(".","-","$business_address");
$business_address = str_replace("#","-","$business_address");

$city = str_replace(" ","-","$city");
$city = str_replace(".","-","$city");
$state = str_replace(" ","-","$state");
$state = str_replace(".","-","$state");
$emp_name = str_replace(" ","-","$emp_name");
$emp_name = str_replace(".","-","$emp_name");


$emp_phone = preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $emp_phone);


/*echo "Loan Amount: ". $amount."<br>";
echo "Payback Period: ". $payback."<br>";

echo "First Name: ". $name."<br>";
echo "Last Name: ". $l_name."<br>";

echo "Phone: ". $phone."<br>";
echo "email: ". $email."<br>";
echo "DOB: ". $date_birth."<br>";
echo "Address: ". $address."<br>";
echo "City: ". $city."<br>";
echo "State: ". $state."<br>";
echo "Zip: ". $zip."<br>";

echo "emp_name: ". $emp_name."<br>";
echo "emp_phone: ". $emp_phone."<br>";
echo "net_amount: ". $net_amount."<br>";
echo "direct_dep: ". $direct_dep."<br>";
echo "pay_free: ". $pay_free."<br>";
echo "last_payday: ". $last_payday."<br>";
echo "business_address: ". $business_address."<br><hr><br>";*/


if($imgExt!="")
{
$statement1="http://mymoneyline.com/payday-loan-applications/Bank_Statements/$userpic";
}

if($imgExtt!="")
{
    $statement2="http://mymoneyline.com/payday-loan-applications/Bank_Statements/$userpicc";
}
if($imgExttt!="")
{
   $statement3="http://mymoneyline.com/payday-loan-applications/Bank_Statements/$userpiccc"; 
}

if($statement1!="" || $statement2!="" || $statement3!="")
{
$url_api_insert_software  = "https://www.mymoneyline.com/lsbankingportal/ls_software/API_files/moneyline_pdl/new_create_paydayloans_docs.php?amount=".$amount."&payback=".$payback."&p_fname=".$name."&p_lname=".$l_name."&p_phone=".$phone."&p_email=".$email."&member_military=".$member_military."&date_birtth=".$date_birth."&address_line=".$address."&city=".$city."&state=".$state."&zip=".$zip."&p_emp_name=".$emp_name."&emp_mobile=".$emp_phone."&p_net_amount=".$net_amount."&p_dirct_dep=".$direct_dep."&emp_payfre=".$pay_free."&last_paydayy=".$last_payday."&business_address=".$business_address."&statement1=".$statement1."&statement2=".$statement2."&statement3=".$statement3;

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

<?php

}
?>