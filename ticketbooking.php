<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $fromplace=$_POST['fromplace'];
    $toplace=$_POST['toplace'];
    $departure_date=$_POST['departure_date'];
    $return_date=$_POST['return_date'];
    //$round=$_POST['round'];
    $flightname=$_POST['flightname'];
    $flightid=$_POST['flightid'];
    $arrivaltime=$_POST['arrivaltime'];
    $departuretime=$_POST['departuretime'];
    $booknow=$_POST['booknow'];
    

    
    $sql=" select * from `flight` where fromplace='$fromplace' and toplace='$toplace' and departure_date='$departure_date'";
    $sql1=" select * from `flight` where toplace='$fromplace' and fromplace='$toplace' and return_date='$departure_date'";
    $result=mysqli_query($con,$sql);
    $result1=mysqli_query($con,$sql);
    if($result && $result1)
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
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="#" class="logo"><span>T</span>ravel<span> P</span>lanner</a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="index.php">book</a>
            <a href="index.php">packages</a>
            <a href="index.php">services</a>
            <a href="index.php">gallery</a>
            <a href="index.php">review</a>
            <a href="index.php">contact</a>
        </nav>
    </header>
    
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="temp/css/bootstrap.min.css">
        <link rel="stylesheet" href="temp/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="temp/css/fontAwesome.css">
        <link rel="stylesheet" href="temp/css/hero-slider.css">
        <link rel="stylesheet" href="temp/css/owl-carousel.css">
        <link rel="stylesheet" href="temp/css/datepicker.css">
        <link rel="stylesheet" href="temp/css/tooplate-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="temp/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
            .table {
            width: 100%;
            padding: 20px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            background: #ffa500;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            color: black;
            /* table-align: center; */
            border: 2px solid #ffa500;
        }

        .table th {
            text-align: center;
        }
        .table th, td {
  padding: 20px;
}
            </style>
</head>   
 <!-- header section starts  -->

<body>
<?php 
        if($user)
        {
            echo '<div class="alert alert-danger alert-dimissible fade show" role="alert">
            <strong>ohh snap!</strong> couldnot cosider your request<button type="button" class="close">
            <spanaria-hidden="true">&times;</span>
            </button>
            </div> ';
        }
        ?>
        <?php 
        if($success)
        {
            echo '<div class="alert alert-success alert-dimissible fade show" role="alert">
            <strong>success </strong>flight info request recived <button type="button" class="close">
            <spanaria-hidden="true">&times;</span>
            </button>
            </div> ';
        }
        ?> 
<section class="book" id="book">
    <h1 class="heading">
        <span>B</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </h1>
</section> 
<section class="banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="left-side">
                    <div class="logo">
                        <img src="temp/img/logo.png" alt="Flight Template">
                    </div>
                    <div class="tabs-content">
                        <h4>Choose Your Direction:</h4>
                        <ul class="social-links">
                            <li><a href="http://facebook.com">Find us on <em>Facebook</em><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://youtube.com">Our <em>YouTube</em> Channel<i class="fa fa-youtube"></i></a></li>
                            <li><a href="http://instagram.com">Follow our <em>instagram</em><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="page-direction-button">
                        <a href="#" style= "color: black; background:#ffa500;" ><i class="fa fa-phone"></i>Contact Us Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <section id="first-tab-group" class="tabgroup">
                    <div id="tab1">
                        <div class="submit-form">
                            <h4>Check availability for <em>direction</em>:</h4>
                            <form id="form-submit" action="ticketbooking.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="from">From:</label>
                                            <select required name="fromplace" onchange='this.form'>
                                                <option value="">Select a location...</option>
                                                <option value="Select City" > Select City : </option>
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
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="to">To:</label>
                                            <select required name='toplace' onchange='this.form'>
                                                <option value="">Select a location...</option>
                                                <option value="Select City" > Select City : </option>
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
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="departure">Departure date:</label>
                                            <input name="departure_date" type="date" class="form-control date" id="deparure" placeholder="Select date..." required="" onchange='this.form'>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="return">Return date:</label>
                                            <input name="return_date" type="date" class="form-control date" id="return" placeholder="Select date..." required="" onchange='this.form'>
                                        </fieldset>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="radio-select">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <label for="round">Round</label>
                                                    <input type="radio" name="round" id="round" value="round" required="required"onchange='this.form.()'>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <label for="oneway">Oneway</label>
                                                    <input type="radio" name="round" id="oneway" value="one-way" required="required"onchange='this.form.()'>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="btn" style= "color: black; background:#ffa500;">Order Ticket Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<div class="table">
        <h1 id="test" style="margin-bottom: 20px; color:white ;background-color:black ; text-alignment:center; "><span style="color: #ffa500;">F</span>lights <span style="color: #ffa500;">F</span>or <span style="color: #ffa500;">Y</span>ou</h1>
        <table class="table" id="records_table" style="padding:20px;">
            <?php
            echo "<table border='1' padding='20px'> <tr>
            <th> FROM </th>
            <th>TO </th>
            <th>DEPARTURE</th>
            <th> FLIGHT NAME </th>
            <th>FLIGHT ID</th>
            <th>ARRIVAL TIME</th>
            <th>DEPARTURE TIME</th>
            <th>BOOK NOW</th>
            </tr>";
            if($success)
            {
                while($row=mysqli_fetch_assoc($result)) 
                {
                   echo "<tr>";
                   echo"<td>" .$row['fromplace']. "</td>";
                   echo"<td>" .$row['toplace']. "</td>"; 
                   echo"<td>" .$row['departure_date']. "</td>";
                   echo"<td>" .$row['flightname']. "</td>"; 
                   echo"<td>" .$row['flightid']. "</td>";
                   echo"<td>" .$row['arrivaltime']. "</td>"; 
                   echo"<td>" .$row['departuretime']. "</td>";
                   echo"<td>" .$row['booknow']. "</td>";  
                   echo "</tr>";
                }
    
            }
            echo "</table>";

            ?>
            <?php
            if($user)
            {
                echo "Sorry , No rides available";
            }
            ?>
        </table>


</body>
</html>