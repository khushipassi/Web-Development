<?php
include("check.php");
error_reporting(0);
$fn = $_GET['fn'];
$em = $_GET['em'];
$mn = $_GET['mn'];
$add = $_GET['add'];
$cty = $_GET['cty'];
$stt = $_GET['stt'];
$cnty = $_GET['cnty'];
$don = $_GET['don'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="images/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/allStyle.css">
    <title>We Donate - Update</title>

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



                        <label for="fullName"><span><b>Full Name</b></span></label>
                        <input type="text" placeholder="Enter full name" id="fullName" value="<?php echo "$fn" ?>" name="fullName" required=""><br />

                        <label for="emailId"><b>E-mail Id</b></label>
                        <input type="text" placeholder="Enter email Id" id="emailId" value="<?php echo "$em" ?>" name="emailId"><br />

                        <label for="mobileNum"><b>Mobile Number</b></label>
                        <input type="text" placeholder="Enter mobile number" id="mobileNum" value="<?php echo "$mn" ?>" name="mobileNum" required><br />

                        <label for="address"><b>Address</b></label>
                        <input type="text" placeholder="Enter address" id="address" value="<?php echo "$add" ?>" name="address" required><br />

                        <label for="city"><b>City</b></label>
                        <input type="text" placeholder="Enter city" id="city" name="city" value="<?php echo "$cty" ?>" required>

                        <label for="state"><b>State</b></label>
                        <input type="text" placeholder="Enter state" id="state" name="state" value="<?php echo "$stt" ?>" required><br />

                        <label for="country"><b>Country</b></label>
                        <input type="text" placeholder="Enter country" name="country" value="<?php echo "$cnty" ?>" id="country"><br />

                        <label for="donation"><b>Donation</b></label>
                        <input type="text" placeholder="Enter donation" id="donation" value="<?php echo "$don" ?>" name=donation required><br />

                        <input type="submit" value="Update" id="buttons" name="submit" onclick="onDonatePressed()">

                        <button type="clear" id="buttons" name="clear" onclick="onClearPressed()">Clear</button>


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
                //echo $total;
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

        <td><input type='submit' value='Edit' id='button'></td>
        
        <td><a href='delete.php?fn=$result[fullName]' onclick='return checkdelete()'><input type='submit' value='Delete' id='button'></a></td>
        </tr>
        ";
                    }
                } else {
                    echo "No records found";
                }
                ?>


            </table>
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



    $query = "UPDATE assist SET fullName='$fn',emailId='$em', mobileNum='$mn',address='$add',city='$cty',state='$stt',country='$cnty',donation='$don' WHERE fullName='$fn'";

    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Record Updated')</script>";
?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=donors.php">
<?php
    } else {
        echo "failed to update record";
    }
}

?>