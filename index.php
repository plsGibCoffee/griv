<?php
// namespace Phppot;
// use Phppot\CountryState;
// require_once __DIR__ . '/Model/CountryState.php';
// $countryState = new CountryState();
// $countryResult = $countryState->getAllCountry();
// $countryState1 = new CountryState();
// // $countryResult1 = $countryState->getAllCountry1();
// require_once "config.php";
//   require 'data.php';
//  session_start();
//   $cID=$_SESSION['accID'];
//    $us=$_SESSION['NAMEe'];
require_once "config.php";
// Define variables and initialize with empty values












?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File COmplaint</title>
    <script src="./vendor/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        .btn-danger {

            background-color: var(#E1E1E1);
            border-radius: var(#E1E1E1);
        }

        .btn-primary:hover {
            box-shadow: inset 0 0 0 20rem var(#675F5F);
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="card-header">
            <h1>Ateneo de Zamboanga University</h1>
        </div>
        <div class="card-body">
            
                <form id="frmComplaint" method="POST" action="https://8888.gov.ph/8888complaint/public/file-submit">
                    <input type="hidden" name="_token" value="YwAyJgxZ5iuH2pdEGYjKjddKQ1uRrHcpu8W6OgiQ">
                    <input type="hidden" name="type" value="complaint">
                    <!-- Input type checkbox -->
                    <div class="form-group">
                        <div>
                            <div class="form-check form-check-inline">
                                <h1>Application Phase</h1>
                            </div>
                        </div>
                    </div>

                    <!-- columns -->
                    <div class="form-group" id="divFullname">
                        <div class="form-row align-items-center">
                            <label for="first_name">Duration 30 days</label>
                            <div id="progressBar">
                                <div class="bar"></div>
                            </div>


                        </div>

                    </div>



            
            </form>
        </div>
    </div>





    <div class="container">
        <!-- Content Row -->

        <?php

        $db = mysqli_connect("localhost", "root", "", "db_griv");

        // Check connection
        if ($db === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Attempt select query execution
        $sql = "SELECT `app_id` as ID,CONCAT(`last_name`,' ,', `first_name`,' ',`middle_name`,' ',`suffix`) as Fullname,`date_birth`,`sex`,tbl_applicant.`email`as email,tbl_appstatus.status FROM `tbl_applicant` JOIN school_list ON tbl_applicant.hei_id=school_list.school_list_id JOIN tbl_appstatus ON tbl_applicant.status=tbl_appstatus.status_id where status_id=1";
        if ($result = mysqli_query($db, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table class='table table-bordered display' id='' width='100%' cellspacing='0'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th style='text-align: center;'>Id</th>";
                echo "<th style='text-align: center;'>Name</th>";

                echo "<th style='text-align: center;'>Sex</th>";

                echo "<th style='text-align: center;'>Status</th>";

                echo "</tr>";
                echo "</thead>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td style='text-align: center; width: auto;'>" . $row['ID'] . "</td>";
                    echo "<td style='text-align: center; width: auto;'>" . $row['Fullname'] . "</td>";

                    echo "<td style='text-align: center; width: auto;'>" . $row['sex'] . "</td>";

                    echo "<td style='text-align: center; width: auto;'>" . $row['status'] . "</td>";


                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else {
                echo "No records were found.";
            }
        } else {
            echo "ERROR: Could not execute $sql. " . mysqli_error($db);
        }

        // Close connection
        mysqli_close($db);
        ?>
    </div>



    <div class="card">
        <div class="card-header"><b>Selection Phase</b>
        
            <div class="container">
                <div class="d-flex justify-content-center"><h6>Not Yet Started</h6></div>    
            </div>


        </div>
        <div class="card-header"><b>Validation Phase</b>
            <div class="container">
                <div class="d-flex justify-content-center"><h6>Not Yet Started</h6></div>    
            </div>
        </div>
        <div class="card-body">

            <form id="frmComplaint" method="POST" action="https://8888.gov.ph/8888complaint/public/file-submit">
                <input type="hidden" name="_token" value="YwAyJgxZ5iuH2pdEGYjKjddKQ1uRrHcpu8W6OgiQ">
                <input type="hidden" name="type" value="complaint">
                <!-- Input type checkbox -->
                <div class="form-group">
                    <div>
                        <div class="form-check form-check-inline">
                            <h1>Validated list</h1>
                        </div>
                    </div>
                </div>

                <!-- columns -->
            </form>
        </div>
    </div>

    <div class="container">
        <?php

        $db = mysqli_connect("localhost", "root", "", "db_griv");

        // Check connection
        if ($db === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Attempt select query execution
        $sql = "SELECT `app_id` as ID,CONCAT(`last_name`,' ,', `first_name`,' ',`middle_name`,' ',`suffix`) as Fullname,`date_birth`,`sex`,tbl_applicant.`email`as email,tbl_appstatus.status FROM `tbl_applicant` JOIN school_list ON tbl_applicant.hei_id=school_list.school_list_id JOIN tbl_appstatus ON tbl_applicant.status=tbl_appstatus.status_id where status_id=2";
        if ($result = mysqli_query($db, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table class='table table-bordered display' id='' width='100%' cellspacing='0'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th style='text-align: center;'>Id</th>";
                echo "<th style='text-align: center;'>Name</th>";

                echo "<th style='text-align: center;'>Sex</th>";

                echo "<th style='text-align: center;'>Status</th>";

                echo "</tr>";
                echo "</thead>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td style='text-align: center; width: auto;'>" . $row['ID'] . "</td>";
                    echo "<td style='text-align: center; width: auto;'>" . $row['Fullname'] . "</td>";

                    echo "<td style='text-align: center; width: auto;'>" . $row['sex'] . "</td>";

                    echo "<td style='text-align: center; width: auto;'>" . $row['status'] . "</td>";


                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else {
                echo "No records were found.";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
        }

        // Close connection
        mysqli_close($db);
        ?>
    </div>





</body>

</html>

<style type="text/css">
    #progressBar {
        width: 90%;
        margin: 10px auto;
        height: 22px;
        background-color: #0A5F44;
    }

    #progressBar div {
        height: 100%;
        text-align: right;
        padding: 0 10px;
        line-height: 22px;
        /* same as #progressBar height if we want text middle aligned */
        width: 0;
        background-color: #CBEA00;
        box-sizing: border-box;
    }

    /* Do not take in account */
    html {
        padding-top: 30px
    }

    a.solink {
        position: fixed;
        top: 0;
        width: 100%;
        text-align: center;
        background: #f3f5f6;
        color: #cfd6d9;
        border: 1px solid #cfd6d9;
        line-height: 30px;
        text-decoration: none;
        transition: all .3s;
        z-index: 999
    }

    a.solink::first-letter {
        text-transform: capitalize
    }

    a.solink:hover {
        color: #428bca
    }
</style>