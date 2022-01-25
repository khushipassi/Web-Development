<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="images/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/allStyle.css">
    <title>We Donate - Donors</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/donors.css">

</head>

<body onload="init()">

    <header class="bgimg">

        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

            <div class="container">
                <a href="" class="navbar-brand text-warning font-weight-bold">WE DONATE</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link text-white">HOME</a>

                        </li>
                        <li class="nav-item">
                            <a href="donors.php" class="nav-link text-white">DONORS</a>

                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link text-white">NGOs</a>

                        </li>
                        <li class="nav-item">
                            <a href="aboutUs.php" class="nav-link text-white">ABOUT US</a>
                        </li>

                    </ul>

                </div>
            </div>

        </nav>

    </header>

    <div class="bartop">
        <h1>Donation</h1>
    </div>

    <div class="parent">
        <aside class="leftbar">
            <div>
                <form action="" method="GET">
                    <fieldset>
                        <select id="mylist">
                            <option value="1">Mr.</option>
                            <option value="2">Ms.</option>
                            <option value="3">Mrs.</option>
                            <option value="4">Dr.</option>
                        </select>

                        <label for="fullName"><span><b>Full Name</b></span></label>
                        <input type="text" placeholder="Enter full name" id="fullName" name="fullName" required=""><br />

                        <label for="emailId"><b>E-mail Id</b></label>
                        <input type="text" placeholder="Enter email Id" id="emailId" name="emailId"><br />

                        <label for="mobileNum"><b>Mobile Number</b></label>
                        <input type="text" placeholder="Enter mobile number" id="mobileNum" name="mobileNum" required><br />

                        <label for="address"><b>Address</b></label>
                        <input type="text" placeholder="Enter address" id="address" name="address" required><br />

                        <label for="city"><b>City</b></label>
                        <input type="text" placeholder="Enter city" id="city" name="city" required>

                        <label for="state"><b>State</b></label>
                        <input type="text" placeholder="Enter state" id="state" name="state" required><br />

                        <label for="country"><b>Country</b></label>
                        <input type="text" placeholder="Enter country" name="country" id="country"> <br />

                        <label for="donation"><b>Donation</b></label>
                        <input type="text" placeholder="Enter donation" id="donation" name=donation required><br />

                        <input type="Submit" id="buttons" name="submit" onclick="onDonatePressed()">
                        <button type="Clear" id="buttons" name="clear" onclick="onClearPressed()">Clear</button>

                    </fieldset>
                </form>
            </div>
        </aside>

        <aside class="rightbar" style="overflow-x:auto;">

            <table id=regtable>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>E-mail Id</th>
                        <th>Mobile Number</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Donation</th>
                        <th colspan="2" align="center">Action</th>
                    </tr>
                </thead>

                <tbody id="tablerows">

                </tbody>

                <?php
                include("check.php");
                error_reporting(0);
                $query = "SELECT * FROM ASSIST";
                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);

                echo $result['fullName'] . " " . $result['emailId'] . " " . $result['mobileNum'] . " " . $result['address'] . " " . $result['city'] . " " . $result['state'] . " " . $result['country'] . " " . $result['donation'];

                if ($total != 0) {

                    while ($result = mysqli_fetch_assoc($data)) {
                        echo "  
                                     <tr>
                                     <td>" . $result['fullName'] . "</td>
                                     <td>" . $result['emailId'] . "</td>
                                     <td>" . $result['mobileNum'] . "</td>
                                     <td>" . $result['address'] . "</td>
                                     <td>" . $result['city'] . "</td>
                                     <td>" . $result['state'] . "</td>
                                     <td>" . $result['country'] . "</td>
                                     <td>" . $result['donation'] . "</td>
        
                                  <td><a href='update.php?fn=$result[fullName]&em=$result[emailId]&mn=$result[mobileNum]&add=$result[address]&cty=$result[city]&stt=$result[state]&cnty=$result[country]&don=$result[donation]'><input type='submit' value='Edit' id='button'></a></td>
                                  <td><a href='delete.php?fn=$result[fullName]' onclick='return checkdelete()'><input type='submit' value='Delete' id='button'></a></td>
                                    </tr>    
                                     ";
                    }
                } else {
                    echo "No records found";
                }
                ?>
            </table>
            <script>
                function checkdelete() {
                    return confirm('Are you sure you want to delete this donation?');
                }
            </script>


        </aside>
    </div>

    <footer class="footer text-center text-white" style="background: #3D108C;" id="contact">
        <h1>CONTACT</h1>
        <div style="background: #3D108C;">
            <div class="jumbotron text-center" style="background: #3D108C;">
                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-3x text-warning m-5"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube fa-3x text-warning m-4"></i></a>
                <a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-3x text-warning m-5"></i></a>
            </div>

            <h6 class="text-center">Copyright © 2022, Designed by We Donate</h6>
        </div>
    </footer>

</body>

<!-- <style>
    .bartop {
        margin-top: 50px;
        height: 60px;
        background: #3D108C;
        color: #FFFFFF;
        text-align: center;
        padding: 8px;
    }

    .parent {
        display: flex;
        align-items: center;
    }

    .parent>div {
        flex: 1;
    }

    .leftbar {
        width: 42%;
        background: #009999;
        height: 650px;
        padding: 10px;
        padding-top: 20px;

    }

    .rightbar {
        width: 100%;
        background: #ccccff;
        height: 650px;
        padding: 10px;
        overflow: scroll;
        padding-top: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;

    }

    th,
    td {
        border: 2px solid black;
        padding: 4px;
    }

    tr {
        text-align: center;
    }

    th {
        background: #ff9999;
    }

    fieldset {
        background: #009999;
        height: 600px;
    }

    input {
        width: 43%;
        height: 5%;
        margin-bottom: 3%;
        margin-right: 2%;
        background-color: #FFFFFF;
    }

    select {
        height: 5%;
        margin-right: 2%;
        margin-bottom: 1%;
        margin-top: 1%;
        width: 20%;
    }

    #mylist {
        width: 10%;
        margin-right: 4%;
    }

    #fullName {
        width: 260px;
        margin-right: 20px;
    }

    #city,
    #state {
        width: 36%;
    }

    form {
        height: 16%;
        float: left;
        width: 100%;
    }

    #donation,
    #address,
    #emailId {
        width: 95%;
    }

    #donation {
        height: 6%;
    }

    button,
    #button,
    #buttons {
        background-color: #FF0000;
        color: #FFFFFF;
        float: right;
        margin-left: 0%;
        height: 6%;
        width: 100%;
        font-weight: bold;
        padding: 3px;
        border-radius: 2px;
    }

    button:hover,
    #button:hover,
    #buttons:hover {
        font-weight: bold;
        background-color: #FFFFFF;
        color: #FF0000;
    }

    #buttons {
        margin-left: 8%;
        width: 25%;
        padding: 0px;
    }

    #button {
        padding: 1px;
    }
</style> -->

</html>


<?php
if ($_GET['submit']) {
    $fn = $_GET['fullName'];
    $em = $_GET['emailId'];
    $mn = $_GET['mobileNum'];
    $add = $_GET['address'];
    $cty = $_GET['city'];
    $stt = $_GET['state'];
    $cnty = $_GET['country'];
    $don = $_GET['donation'];



    $query = "INSERT INTO assist VALUES ('$fn','$em','$mn','$add','$cty','$stt','$cnty','$don')";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "data inserted in database";
    } else {
        echo "failed to insert data inserted in database";
    }
}

?>