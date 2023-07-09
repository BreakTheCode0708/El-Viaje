<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $place=$_POST['place'];
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $services=$_POST['services'];
    $address=$_POST['address'];
   
    
    $sql=" select * from `local` where place='$place'";
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
        .form-style-10 {
            width: 450px;
            padding: 30px;
            margin: 40px auto;
            background: #ffa500;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            color: black;
        }

        .form-style-10 .inner-wrap {
            padding: 30px;
            background: #f8f8f8;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .text-center {
            text-align: center;
        }

        .form-style-10 h1 {
            margin-top: 20px;
            background: #ffa500;
            padding: 30px 30px 10px 30px;
            margin: -30px -30px 30px -30px;
            border-radius: 10px 10px 0 0;
            color: white;
            font: normal 30px "Bitter", serif;
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
            font: normal 20px "Bitter", serif;
            color: white;
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
            border: 1px solid #f5cd7f;
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
    </style>
</head>
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
            <strong>success </strong>local travel info request recived <button type="button" class="close">
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
        <a href="index.php">home</a>
        <a href="index.php">book</a>
        <a href="index.php">packages</a>
        <a href="index.php">services</a>
        <a href="index.php">gallery</a>
        <a href="index.php">review</a>
        <a href="index.php">contact</a>
    </nav>
</header>
<section class="home" id="home">
    <div class="content">
        <h3 style="color:#ffa500">Local Travel</h3>
    </div>
    <div class="video-container">
        <video src="images/Traffic - 3184.mp4" id="video-slider" loop autoplay muted></video>
    </div>
</section> 
<section class="book" id="book">
    <h1 class="heading">
        <span>L</span>
        <span>o</span>
        <span>c</span>
        <span>a</span>
        <span>l</span>
        <span class="space"></span>
        <span>T</span>
        <span>r</span>
        <span>a</span>
        <span>v</span>
        <span>e</span>
        <span>l</span>
    </h1>
</section> 
<section>
    <div class="form-style-10">
        <span><br><br><br><br></span>
        <h1>ENTER YOUR TRIP DETAILS<span></span></h1>
        <form method="POST" action="localtravel.php">

        <div class="section"><span>1</span>select your Trip Location</div>
        <div class="inner-wrap" style="color: darkgrey;">
            <select id="start" name="place">
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
            <div class="text-center">
            <button class="button button2" type="submit" id="submitButton">Search for Vehicle</button>
        </div>
    </form>
</section> 
<div class="table">
        <h1 id="test" style="margin-bottom: 20px; color:white ;background-color:black ; text-alignment:center; "><span style="color: #ffa500;">L</span>ocal <span style="color: #ffa500;">T</span>ravels</h1>
        <table class="table" id="records_table" style="padding:20px;">
            <?php
            echo "<table border='1' padding='20px'> <tr>
            <th>Place </th>
            <th>Travels Name </th>
            <th>Contact</th>
            <th>Services</th>
            <th>Address</th>
            </tr>";
            if($success)
            {
                while($row=mysqli_fetch_assoc($result)) 
                {
                   echo "<tr>";
                   echo"<td>" .$row['place']. "</td>";
                   echo"<td>" .$row['name']. "</td>"; 
                   echo"<td>" .$row['contact']. "</td>";
                   echo"<td>" .$row['services']. "</td>"; 
                   echo"<td>" .$row['address']. "</td>"; 
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