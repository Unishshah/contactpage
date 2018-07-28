<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="dentalimages/favicon%20(1).ico" >
  <title>Yash Dental Clinic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    body{background-image: url(dentalimages/lightgreybackground.jpg);}
    .error {color: #FF0000;}
    .banner{text-align: center; margin-bottom: 40px; background-image:  url(dentalimages/brownbg.jpg); color: white;width: 90%;margin: auto; margin-bottom: 40px; }
    .banner1{text-align: center; margin-bottom: 40px;}
    .iconlabels{text-align: center;margin-bottom: 15px; font-size: 16px; }
    .infolabels{text-align: center;margin-bottom: 30px; margin-top: 30px; font-size: 16px; }
    .formcenter{text-align: center; color: white;}
    .imageicon{width: 200px; margin: auto; border: 1px solid black; border-radius: 50%;margin-left: 25%;margin-bottom: 30px;}
    .bg{background-image: url(dentalimages/brownbg.jpg); width: 80%; margin-bottom: 50px; }
}
</style>
    
</head>
<body> 
    
<div class="container-fluid">
    <div class="rows">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="banner"><h1 style="font-size: 6vw;">YASH DENTAL CLINIC</h1></div>
        </div>
    </div>
    </div> 
    
    <div class=" container-fluid">
    <div class="rows">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="banner1"><h2 style="margin-bottom:30px;margin:auto; width:400px;border:1px solid black;-webkit-box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75); box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75);">Services Provided</h2></div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <img class="imageicon" src="dentalimages/complete%20partial.png" alt="" style="width:180px;">
            <div class="iconlabels"><b> Complete / Partial Dentures Fixing</b></div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <img class="imageicon" src="dentalimages/dentalservice.jpg" alt="">
            <div class="iconlabels"> <b>Dental Services</b></div>
        </div>
   
        <div class="col-sm-4 col-md-4 col-lg-4">
            <img class="imageicon" src="dentalimages/filling.jpg" alt="" style="width:210px;">
            <div class="iconlabels"><b>Dental Fillings</b></div>
        </div>
        </div>
    </div>
    
        <div class=" container-fluid">
    <div class="rows">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <img class="imageicon" src="dentalimages/polishing.jpg" alt="" style="width:180px;">
            <div class="iconlabels"> <b>Scaling / Polishing</b></div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <img class="imageicon" src="dentalimages/implant.jpg" alt="" style="width:180px;">
            <div class="iconlabels"><b>Dental Implantation</b></div>
        </div>
         <div class="col-sm-4 col-md-4 col-lg-4">
        <img class="imageicon" src="dentalimages/toothextraction.jpg" alt="" style="width:160px;">
             <div class="iconlabels"><b>Tooth Extraction</b></div>
        </div>
        
    </div>
    </div> 
    
    <div class="infolabels container-fluid">
    <div class="rows">
    <div class="col-sm-4 col-md-4 col-lg-4">
        <div  style="border:1px solid black;-webkit-box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75); box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75);">
        <b>Doctor<br>
        Dr. Vaishali Parekh<br><br>
            <b>Specializations</b><br>
            Dentist<br></b>
        </div>
        </div>
        
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div style="border:1px solid black;-webkit-box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75); box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75);">
            <b>Number<br>
            +91 9879200440<br><br>
            Email<br>
                yashclinic@gmail.com<br></b>
        </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div style="border:1px solid black;-webkit-box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75); box-shadow: 0px 0px 5px 9px rgba(0,0,0,0.75);">
            <b>Address<br>
            #17, New Commercial Mill Society,<br>
            B H Lal Bunglow, Ellisbridge.<br>
            Landmark: Opp. Rajhans Society, <br>
                Ahmedabad</b>
            </div>
        </div>
    </div>
    </div>
    
    <div class="container-fluid">
    <div class="rows">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 style="font-size:4vw; text-align:center; margin-bottom:30px;">Contact Form</h1>
        </div>
        </div>
    </div>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $mobileErr = "";
$name = $email = $gender = $comment = $mobile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["mobile"])) {
    $mobile = "";
  } else {
    $mobile = test_input($_POST["mobile"]);
 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="bg container-fluid">
    <div class="rows">
        <div class="col-sm-12 col-md-12 col-lg-12">
<h2 style="color:white;">Send an Email</h2>
            </div>
        
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    <div class="col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label style="color:white;">Name </label><span class="error">* <?php echo $nameErr;?></span><br>
  <input type="text" placeholder="Enter your name" name="name" value="">
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
  <label style="color:white;">E-mail </label><span class="error">* <?php echo $emailErr;?></span><br>
  <input type="email" placeholder="Enter your e-mail" name="email" value="">
        </div>
    </div>
    
    <div class="col-sm-4 col-md-4 col-lg-4">
        <h3 class="formcenter">Yash Dental Clinic</h3><br>  
    </div>
    
    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="form-group">
    <label style="color:white;">Phone Number </label><span class="error"><?php echo $mobileErr;?></span><br>
  <input type="text" placeholder="Enter your phone number" name="mobile" value="">
        </div>
    </div>
        
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
    <label style="color:white;">Gender</label><span class="error">* <?php echo $genderErr;?></span><br>
  <input type="radio" name="gender"  value="female" style="color:white;"> <span style="color:white;"> Female</span>
  <input type="radio" name="gender"  value="male" style="color:white;">
                <span style="color:white;"> Male</span>
    </div>
        </div>
    
    <div class="col-sm-1 col-md-1 col-lg-1"></div>
    <div class="col-sm-3 col-md-3 col-lg-3">
        <span class="formcenter"><b>Address</b><br>#17, New Commercial Mill Society,<br> B H Lal Bunglow, Ellisbridge.<br>Landmark: Opp. Rajhans Society, <br>Ahmedabad</span>
    </div>
            
    <div class="col-sm-8 col-md-8 col-lg-8">
    <div class="form-group">
    <label style="color:white;">Comment</label><br>
  <textarea name="comment" placeholder="Comments" class="form-control" rows="5"></textarea>
    </div>        
    </div>
    
    <div class="col-sm-1 col-md-1 col-lg-1"></div>
    <div class="col-sm-3 col-md-3 col-lg-3">
        <span class="formcenter">
      <br><b>Timings</b><br>
        Mon - Sat<br>
        10:00 am - 12:00 pm<br>
        05:00 pm - 07:30 pm<br>
            </span>
    </div>
        
    
     <div class="form-group">
  <div class="col-sm-12 col-md-12 col-lg-12">
  <input type="submit"  class="btn btn-default" name="submit" value="Submit" style="margin-bottom:10px;">
    </div>
    </div>
</form>
        </div>
    </div>

<?php
$to = 'yashdentalclinic@gmail.com';
$subject = 'Message from' . $name;
$message = ' Email of customer ' .$email. ' Mobile of customer ' .$mobile. ' Comment of the customer ' .$comment. ' gender of the customer ' .$gender;
$headers = "From: unishshah@gmail.com";
if (mail($to, $subject, $message, $headers)) {
 
} else {
 
}
?>    
    

</body>
</html>



