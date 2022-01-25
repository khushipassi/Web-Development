<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="images/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/allStyle.css">
    <title>We Donate - NGO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/NGO.css">

</head>

<body>
    <header class="toop">
        <h1>WE DONATE</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="donors.php">Donors</a>
            <a href="NGO.php" class="active">NGOs</a>
            <a href="aboutUs.php">About Us</a>
        </nav>
    </header>

    <section class="right" style="overflow-x:auto;">
        <table id="regtable">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th id="email">E-mail Id</th>
                    <th id="mn">Mobile Number</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Country</th>
                    <th id="don">Donation</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

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
        <td><a href='delete.php?fn=$result[fullName]' onclick='return checkdelete()'><input type='submit' value='Book' id='button'></a></td>
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
                return confirm('Are you sure you want to book this donation?');
            }
        </script>

    </section>

    <footer class="footer text-center text-white" id="contact" style="background: #3D108C;">
        <div style="background: #3D108C;">
            <h1>CONTACT</h1>
            <div style="background: #3D108C; text-align:center">
                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-3x text-warning m-5"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube fa-3x text-warning m-4"></i></a>
                <a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-3x text-warning m-5"></i></a>
            </div>

            <h6 style="text-align:center">Copyright © 2022, Designed by We Donate</h6>
        </div>
    </footer>

</body>

</html>