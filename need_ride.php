<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $start_place=$_POST['start_place'];
    $destination=$_POST['destination'];
    $sql=" select * from `ride_info` where start_place='$start_place' and destination='$destination'  ";
    $result=mysqli_query($con,$sql);
    if($result)
    {$num=mysqli_num_rows($result);
        if($num>0)
        {
        $success=1;}
        else{
        $user=1;
    }
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var jsonData = '[]';
            var list;
            $.ajax({
                url: '/ride/getRide',
                type: 'GET',
                data: {
                    json: jsonData
                },
                success: function (response) {
                    list = response;
                    var trHTML = '';
                    $('#records_table').html('');
                    trHTML += '<tr><th>Vehicle Type </th><th>Vehicle Number </th><th>Vacancy </th><th>Start Place</th><th>Destination </th><th>Departure Time</th><th>Arrival Time</th><th>Phone Number</th><th>Fare per Seat</th></tr>';
                    $.each(response, function (i, item) {
                        trHTML += '<tr><td>' + item.vtype + '</td><td>' + item.vnum + '</td><td>' + item.vacancy + '</td><td>' + item.start + '</td><td>' + item.dest + '</td><td>' + item.departTime + '</td><td>' + item.arrivalTime + '</td><td>' + item.phone + '</td><td>' + item.fare + '</td></tr>';
                    });
                    $('#records_table').append(trHTML);
                }
            });
            $('#submitButton').click(() => {
                var start = $("#start").val();
                var dest = $("#dest").val();
                var trHTML = '';
                $('#records_table').html('');
                trHTML += '<tr><th>Vehicle Type </th><th>Vehicle Number </th><th>Vacancy </th><th>Start Place</th><th>Destination </th><th>Departure Time</th><th>Arrival Time</th><th>Phone Number</th><th>Fare per Seat</th></tr>';
                $.each(list, function (i, item) {
                    if(start.toLowerCase()==item.start.toLowerCase() && dest.toLowerCase()==item.dest.toLowerCase())
                        trHTML += '<tr><td>' + item.vtype + '</td><td>' + item.vnum + '</td><td>' + item.vacancy + '</td><td>' + item.start + '</td><td>' + item.dest + '</td><td>' + item.departTime + '</td><td>' + item.arrivalTime + '</td><td>' + item.phone + '</td><td>' + item.fare + '</td></tr>';
                });
                $('#records_table').append(trHTML);
            });
        });
    </script>

<style>
        <?php include "style.css" ?>
        </style>

    <style type="text/css">
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
            background-color: white;
            color: black;
            border: 2px solid #f5cd7f;
        }

        .button2:hover {
            background-color: #f5cd7f;
            color: white;
        }

        body {
            background-image: url('images/boy.png');
            background-repeat: no-repeat;
            margin-top: 50px;
            background-size: 20%;
            background-position-y: center;
            background-position-x: left;
        }

        .inner-wrap {
            margin-top: 20px;
        }
    </style>

    <!---->
</head>
<body>    
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
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>
    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
</header>
    <div class="form-style-10">
        <span><br><br><br><br></span>
        <h1>ENTER YOUR TRIP DETAILS<span></span></h1>
        <form method="POST" action=" need_ride.php">

        <div class="section"><span>1</span>Trip Locations</div>
        <div class="inner-wrap" style="color: darkgrey;">
            <label>Start place *</label>
            <select id="start" name="start_place">
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
            <select id="dest"name= "destination">
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
        <span class="" style="font-size: 14px; color: black;">
            <span style="color: red">* </span> fields are Required
        </span>
        <div class="text-center">
            <button class="button button2" type="submit" id="submitButton">Search for Vehicle</button>
        </div>
    </div>
    </form>
    </div>

    <div class="table">
        <h1 id="test" style="margin-bottom: 20px; color:white ;background-color:black ;"><span style="color: #ffa500;">R</span>ides <span style="color: #ffa500;">F</span>or <span style="color: #ffa500;">Y</span>ou</h1>
        <table class="table" id="records_table">
            <?php
            echo "<table border='1'> <tr>
            <th> Vehicle Type</th>
            <th>vehicle number</th>
            <th>vacancy</th>
            <th> start place</th>
            <th>destination</th>
            <th>departure time</th>
            <th>arrival time</th>
            <th>phone number</th>
            <th>fare</th>
            </tr>";
            if($success)
            {
                while($row=mysqli_fetch_assoc($result)) 
                {
                   echo "<tr>";
                   echo"<td>" .$row['vehicletype']. "</td>";
                   echo"<td>" .$row['vnum']. "</td>"; 
                   echo"<td>" .$row['vacancy']. "</td>"; 
                   echo"<td>" .$row['start_place']. "</td>"; 
                   echo"<td>" .$row['destination']. "</td>"; 
                   echo"<td>" .$row['departure_time']. "</td>"; 
                   echo"<td>" .$row['arrival_time']. "</td>"; 
                   echo"<td>" .$row['phone_number']. "</td>"; 
                   echo"<td>" .$row['fare']. "</td>"; 
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