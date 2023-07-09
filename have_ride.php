<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $vehicletype=$_POST['vehicletype'];
    $vnum=$_POST['vnum'];
    $vacancy=$_POST['vacancy'];
    $start_place=$_POST['start_place'];
    $destination=$_POST['destination'];
    $departure_time=$_POST['departure_time'];
    $arrival_time=$_POST['arrival_time'];
    $phone_number=$_POST['phone_number'];
    $fare=$_POST['fare'];

    
    $sql=" insert into `ride_info`(vehicletype,vnum,vacancy,start_place,destination,departure_time,arrival_time,phone_number,fare) values('$vehicletype','$vnum','$vacancy','$start_place','$destination','$departure_time','$arrival_time','$phone_number','$fare')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo " signup successful";
        $success=1;
    }else{
        $user=1;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWP project</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <!---->
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <style>
        <?php include "style.css" ?>
        </style>
    <style type="text/css">

        .form-style-10 {
            width: 450px;
            padding: 30px;
            margin: 40px auto;
            background: #ffa500;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
        }
        
        .form-style-10 .inner-wrap {
            padding: 30px;
            background: #f8f8f8;
            border-radius: 6px;
            margin-bottom: 15px;
            color: #ffa500;
        }
        
        .text-center {
            text-align: center;
        }
        
        .form-style-10 h1 {
            background: #ffa500;
            padding: 30px 30px 10px 30px;
            margin: -30px -30px 30px -30px;
            border-radius: 10px 10px 0 0;
            color: white;
            font: normal 30px "Nunito", sans-serif; 
            border: 1px solid #ffa500;
        }
        
        .form-style-10 h1>span {
            display: block;
            margin-top: 2px;
            font: 13px Arial, Helvetica, sans-serif;
        }
        
        .form-style-10 label {
            display: block;
            font: 13px Arial, Helvetica, sans-serif;
            color: #888;
            margin-bottom: 15px;
        }
        .form-style-10 input[type="text"],
        .form-style-10 input[type="date"],
        .form-style-10 input[type="datetime"],
        .form-style-10 input[type="email"],
        .form-style-10 input[type="number"],
        .form-style-10 input[type="search"],
        .form-style-10 input[type="time"],
        .form-style-10 input[type="url"],
        .form-style-10 input[type="password"],
        .form-style-10 textarea,
        .form-style-10 select {
            display: block;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border: 2px solid #fff;
            box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
        }
        
        .form-style-10 .section {
            font: normal 30px "Nunito", sans-serif;   
            color: black;
            margin-bottom: 5px;
            text-align: center;
        }
        
        .form-style-10 .section span {
            background: #ffa500;
            padding: 5px 10px 5px 10px;
            position: absolute;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border: 4px solid #fff;
            font-size: 14px;
            margin-left: -45px;
            color: #fff;
            margin-top: -3px;
        }
        
        .form-style-10 input[type="button"],
        .form-style-10 input[type="submit"] {
            background: #ffa500;
            padding: 8px 20px 8px 20px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
            font: normal 30px "Bitter", serif;
            border: 1px solid #ffa500;
            font-size: 15px;
        }
        
        .form-style-10 input[type="button"]:hover,
        .form-style-10 input[type="submit"]:hover {
            background: #ffa500;
        }
        
        .form-style-10 .privacy-policy {
            padding-left: 20px;
            width: 250px;
            font: 12px Helvetica;
            margin-top: 10px;
        }
        
        h1 {
            text-align: center;
        }
        
        .button {
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        
        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #f5cd7f;
        }
        
        .button1:hover {
            background-color: #f5cd7f;
            color: white;
        }
        
        .button2 {
            background-color: black;
            color:#ffa500 ;
            border: 2px solid #ffa500;
        }
        
        .button2:hover {
            background-color: white;
            color: #ffa500;
        }
        
        body {
            background-image: url('images/boy.png');
            background-repeat: no-repeat;
            margin-top: 50px;
            background-size: 35%;
            background-position-y: center;
        }
        
        .inner-wrap {
            margin-top: 20px;
        }
    </style>


    <!---->
</head>
<body >
<?php 
        if($user)
        {
            echo '<div class="alert alert-danger alert-dimissible fade show" role="alert">
            <strong>ohh snap!</strong> couldnot store ride details<button type="button" class="close">
            <spanaria-hidden="true">&times;</span>
            </button>
            </div> ';
        }
        ?>
        <?php 
        if($success)
        {
            echo '<div class="alert alert-success alert-dimissible fade show" role="alert">
            <strong>success </strong>ride info added <button type="button" class="close">
            <spanaria-hidden="true">&times;</span>
            </button>
            </div> ';
        }
        ?>    
 <!-- header section starts  -->
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>T</span>ravel<span> P</span>lanner</a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>
    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
    <span><br><br><br><br></span>
</header>
    <div class="form-style-10">
        <span><br><br><br><br></span>
        <h1>ENTER YOUR RIDE DETAILS<span></span></h1>

        <form method="POST" action="have_ride.php">


            <div class="section" style="text-emphasis-color:black ;"><span>1</span> Contact Details </div>
            <div class="inner-wrap">

                <label>Phone Number *<input type="number" name="phone_number" pattern="[1-9]{1}[0-9]{9}" required/></label>
            </div>


            <div class="section"><span>2</span>Vehicle Details</div>
            <div class="inner-wrap">
                <style>
                    .vehicletype {
                        padding-left: 150px;
                        margin-left: 20px;
                    }
                </style>
                <label>Vehicle Type *<input type="radio" class="vehicletype" value="Bike" style="margin-left: 25px;" name="vtype"
                        required />Bike
                    <input type="radio" class="vehicletype" name="vtype" value="Sedan" required />Sedan
                    <input type="radio" class="vehicletype" name="vtype" value="SUV" required />SUV
                    <input type="radio" class="vehicletype" name="vtype" value="Mini Van" required />Mini Van
                </label>
                <label>Vehicle Number *<input type="text" name="vnum"
                        pattern="[A-Z]{2}[-]{1}[0-9]{2}[-]{1}[A-Z]{2}[-]{1}[0-9]{4}" placeholder="AB-01-CP-1234"
                        required /></label>
                <label>Number of Vacancy *<input type="number" name="vacancy" min="1" max="7"
                        placeholder="Enter between 1 to 7" required /></label>
            </div>

            <div class="section"><span>3</span>Trip Locations</div>
            <div class="inner-wrap" style="color: darkgrey;">
                <label>Start place *</label>
                <select name="start_place">
                    <option value="Select City"> Select City : </option>
                    <option value="Ahmedabad"> Ahmedabad </option>
                    <option value="Allahabad"> Allahabad </option>
                    <option value="Amritsar"> Amritsar </option>
                    <option value="Aligarh"> Aligarh </option>
                    <option value="Bangalore"> Bangalore </option>
                    <option value="Bareilly"> Bareilly </option>
                    <option value="Bhiwandi"> Bhiwandi </option>
                    <option value="Bhubaneswar"> Bhubaneswar </option>
                    <option value="Bikaner"> Bikaner </option>
                    <option value="Bhavnagar"> Bhavnagar </option>
                    <option value="Belgaum"> Belgaum </option>
                    <option value="Bongaigaon"> Bongaigaon </option>
                    <option value="Chennai"> Chennai </option>
                    <option value="Chandigarh"> Chandigarh </option>
                    <option value="Delhi"> Delhi </option>
                    <option value="Dhanbad"> Dhanbad </option>
                    <option value="Kolkata"> Kolkata </option>
                    <option value="Hyderabad"> Hyderabad </option>
                    <option value="Pune"> Pune </option>
                    <option value="Visakhapatnam"> Visakhapatnam </option>
                    <option value="Kanpur"> Kanpur </option>
                    <option value="Mumbai"> Mumbai </option>
                    <option value="Surat"> Surat </option>
                    <option value="Patna"> Patna </option>
                    <option value="Jaipur"> Jaipur </option>
                    <option value="Coimbatore"> Coimbatore </option>
                    <option value="Nagpur"> Nagpur </option>
                    <option value="Madurai"> Madurai </option>
                    <option value="Jodhpur"> Jodhpur </option>
                    <option value="Tirupati"> Tirupati </option>
                    <option value="Salem"> Salem </option>
                    <option value="Vellore"> Vellore </option>
                    <option value="Coimbatore"> Coimbatore </option>
                    <option value="Indore"> Indore </option>
                    <option value="Ludhiana"> Ludhiana </option>
                    <option value="Faridabad"> Faridabad </option>
                    <option value="Varanasi"> Varanasi </option>
                    <option value="Srinagar"> Srinagar </option>
                    <option value="Noida"> Noida </option>
                    <option value="Kochi"> Kochi </option>
                    <option value="Udaipur"> Udaipur </option>
                    <option value="Vellore"> Vellore </option>
                    <option value="Gangtok"> Gangtok </option>
                    <option value="Silchar"> Silchar </option>
                    <option value="Patiala"> Patiala </option>
                    <option value="Pondicherry"> Pondicherry </option>



                </select>
                <label>Destination place *</label>
                <select name="destination">
                    <option value="Select City"> Select City : </option>
                    <option value="Ahmedabad"> Ahmedabad </option>
                    <option value="Allahabad"> Allahabad </option>
                    <option value="Amritsar"> Amritsar </option>
                    <option value="Aligarh"> Aligarh </option>
                    <option value="Bangalore"> Bangalore </option>
                    <option value="Bareilly"> Bareilly </option>
                    <option value="Bhiwandi"> Bhiwandi </option>
                    <option value="Bhubaneswar"> Bhubaneswar </option>
                    <option value="Bikaner"> Bikaner </option>
                    <option value="Bhavnagar"> Bhavnagar </option>
                    <option value="Belgaum"> Belgaum </option>
                    <option value="Bongaigaon"> Bongaigaon </option>
                    <option value="Chennai"> Chennai </option>
                    <option value="Chandigarh"> Chandigarh </option>
                    <option value="Delhi"> Delhi </option>
                    <option value="Dhanbad"> Dhanbad </option>
                    <option value="Kolkata"> Kolkata </option>
                    <option value="Hyderabad"> Hyderabad </option>
                    <option value="Pune"> Pune </option>
                    <option value="Visakhapatnam"> Visakhapatnam </option>
                    <option value="Kanpur"> Kanpur </option>
                    <option value="Mumbai"> Mumbai </option>
                    <option value="Surat"> Surat </option>
                    <option value="Patna"> Patna </option>
                    <option value="Jaipur"> Jaipur </option>
                    <option value="Coimbatore"> Coimbatore </option>
                    <option value="Nagpur"> Nagpur </option>
                    <option value="Madurai"> Madurai </option>
                    <option value="Jodhpur"> Jodhpur </option>
                    <option value="Tirupati"> Tirupati </option>
                    <option value="Salem"> Salem </option>
                    <option value="Vellore"> Vellore </option>
                    <option value="Coimbatore"> Coimbatore </option>
                    <option value="Indore"> Indore </option>
                    <option value="Ludhiana"> Ludhiana </option>
                    <option value="Faridabad"> Faridabad </option>
                    <option value="Varanasi"> Varanasi </option>
                    <option value="Srinagar"> Srinagar </option>
                    <option value="Noida"> Noida </option>
                    <option value="Kochi"> Kochi </option>
                    <option value="Udaipur"> Udaipur </option>
                    <option value="Vellore"> Vellore </option>
                    <option value="Gangtok"> Gangtok </option>
                    <option value="Silchar"> Silchar </option>
                    <option value="Patiala"> Patiala </option>
                    <option value="Pondicherry"> Pondicherry </option>
                </select>
            </div>

            <div class="section"><span>4</span>Expected Duration</div>
            <div class="inner-wrap">
                <label for="birthdaytime">Departure time (Date and Time): *</label>
                <input type="datetime-local" id="birthdaytime" name="departure_time" style="color: rgba(0, 0, 0, 0.842);" required />
                <label for="birthdaytime">Arrival time (Date and Time): *</label>
                <input type="datetime-local" id="birthdaytime" name="arrival_time" style="color: rgba(0, 0, 0, 0.842);" required />
            </div>

            <div class="section"><span>5</span>Expected Charge/per Seat</div>
            <div class="inner-wrap">
                <label>Fare for the Trip *<input type="number" name="fare" required /></label>
            </div>
            <div>
                <span class="" style="font-size: 14px; color: black;">
                    <span style="color: #f5cd7f"> * </span> fields are Required
                </span>
            </div>
            <div class="text-center">
                <button class="button button2" type="submit">Submit Data</button>
            </div>
        </form>
    </div>
</body>

</html>
