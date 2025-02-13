<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Campus Online</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body style="background-color:#f2f2f4 !important;">
    <?php include "header.php"; ?>
    <div class="body">

        <div id="token-container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-width-3 border-radius-0 border-color-success">
                        <div class="card-body text-center">
                            <p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-check text-color-success me-1"></i> Thank You. Your Order has been received.</p>
                            <br>
                            <p>Please Reach Out Our Xeorox Shop Collect Your Xerox Papers</p>
                        </div>

                    </div>
                    <?php
                    // Include your connect.php file
                    include 'connect.php';

                    // Assuming you have established a database connection in connect.php

                    // Perform the query to retrieve data
                    $query = "SELECT * FROM xorders;";


                    $result = mysqli_query($conn, $query);

                    // Check if query was successful
                    if (!$result) {
                        die('Query failed: ' . mysqli_error($conn));
                    }

                    // Display the HTML structure with retrieved data
                    ?>

                    <div class="d-flex flex-column flex-md-row justify-content-between py-3 px-4 my-4">
                        <?php
                        // Loop through the result set
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="text-center">
                                <span>
                                    Payment ID <br>
                                    <strong class="text-color-dark"><?php echo $row['payment_id']; ?></strong>
                                </span>
                            </div>
                            

                            <div class="text-center mt-4 mt-md-0">
                                <span>
                                    Orderd Date<br>
                                    <strong class="text-color-dark"><?php echo $row['added_date']; ?></strong>
                                </span>
                            </div>
                            <div class="text-center mt-4 mt-md-0">
                                <span>
                                    Payment Method <br>
                                    <strong class="text-color-dark"> Online Payment</strong>
                                </span>
                            </div>
                        <?php
                        }
                        // Free result set
                        mysqli_free_result($result);

                        // Close connection
                        mysqli_close($conn);
                        ?>
                    </div>
                    <div class="card border-width-3 border-radius-0 border-color-hover-dark mb-4">
                        <div class="card-body">
                            <h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
                            <table class="shop_table cart-totals mb-0">
                                <tbody>
                                    <?php
                                    // Include your connect.php file
                                    include 'connect.php';

                                    // Execute the SQL query to retrieve product name and sale price
                                    $query = "SELECT * FROM `xeorx`";


                                    // Execute the query and handle errors
                                    $result = mysqli_query($conn, $query);
                                    if (!$result) {
                                        die('Query failed: ' . mysqli_error($conn));
                                    }

                                    // Check if any rows are returned
                                    if (mysqli_num_rows($result) > 0) {
                                        // Loop through the result set and retrieve product details
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <span class="text-1">File name</span>
                                                    <strong class="d-block text-color-dark line-height-1 font-weight-semibold"><span class="product-qty"></span></strong>

                                                </td>
                                                <td class="text-end align-top">
                                                    <span class="amount font-weight-medium text-color-grey"><?php echo $row['file']; ?></span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="text-1">Category</span>
                                                    <strong class="d-block text-color-dark line-height-1 font-weight-semibold"><span class="product-qty"></span></strong>

                                                </td>
                                                <td class="text-end align-top">
                                                    <span class="amount font-weight-medium text-color-grey"><?php echo $row['category']; ?></span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="text-1">Printing Sides</span>
                                                    <strong class="d-block text-color-dark line-height-1 font-weight-semibold"><span class="product-qty"></span></strong>

                                                </td>
                                                <td class="text-end align-top">
                                                    <span class="amount font-weight-medium text-color-grey"><?php echo $row['category1']; ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="text-1">Cover</span>
                                                    <strong class="d-block text-color-dark line-height-1 font-weight-semibold"><span class="product-qty"></span></strong>

                                                </td>
                                                <td class="text-end align-top">
                                                    <span class="amount font-weight-medium text-color-grey"><?php echo $row['category2']; ?></span>
                                                </td>

                                            </tr>

                                            <tr class="shipping">
                                                <td class="border-top-0">
                                                    <strong class="text-color-dark">Shipping</strong>
                                                </td>
                                                <td class="border-top-0 text-end">
                                                    <strong><span class="amount font-weight-medium">Free Shipping</span></strong>
                                                </td>
                                            </tr>
                                            <tr class="total">
                                                <td>
                                                    <strong class="text-color-dark text-3-5">Total</strong>
                                                </td>
                                                <td class="text-end">
                                                    <strong class="text-color-dark"><span class="amount text-color-dark text-5">₹<?php echo $row['total']; ?></span></strong>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='2'>No records found.</td></tr>";
                                    }

                                    // Free result set
                                    mysqli_free_result($result);

                                    // Close connection
                                    mysqli_close($conn);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <input type="submit" name="update" value="Print" class="btn btn-primary" style="width: 130px; margin-left:640px" onclick="downloadContent()">
    </div>

    </div>


    </div>


    <!-- Vendor -->
    <script src="vendor/plugins/js/plugins.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="js/views/view.shop.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>
    <script>
        function downloadContent() {
            // Get the HTML content of the token-container
            var tokenContainerHTML = document.getElementById('token-container').outerHTML;
            // Create a new window to print the content
            var printWindow = window.open('', '', 'height=400,width=600');
            // Write the HTML content to the new window
            printWindow.document.write('<html><head><title>Print</title></head><body>' + tokenContainerHTML + '</body></html>');
            // Print the window
            printWindow.print();
            // Close the new window
            printWindow.close();
        }
    </script>
    <?php include 'footer.php'; ?>
</body>

</html>
<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
// To set up environmental variables, see http://twil.io/secure
$account_sid = "AC5c473de347005dcc885efd5affed455b";
$auth_token = "c3d1b0569a58c66e9c5b55cb79324038";
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+16598883893";
$message = "Your Order has been placed in Campus Online Successfully.
Thank you for shopping with us";
$mobilenum = "+919494410554";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    $mobilenum,
    array(
        'from' => $twilio_number,
        'body' => $message
    )
);
?>