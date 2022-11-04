<?php 
session_start();
include('../../config/config.php');
error_reporting(0);
include('../../config/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<script>
function showA() {
    alert("Your booking is almost done but not confirmed !! Wait for the confirmation mail..");
}
</script>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="style.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="roomservices.css" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <!-- Glidejs StyleSheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap"
        rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <?php include('../section/includes.php'); ?>

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <link href="pricing.css" rel="stylesheet">
</head>
<?php include('../section/header.php');?>

<body data-new-gr-c-s-check-loaded="14.1007.0" data-gr-ext-installed="">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
            </path>
        </symbol>
    </svg>
    <h2 class="display-6 text-center mb-4">Default Plans</h2>

    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>
                    <th style="width: 34%;"></th>
                    <th style="width: 16.5%;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marrige
                    </th>
                    <th style="width: 16.5%;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engagement
                    </th>
                    <th style="width: 16.5%;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birthday
                        Party</th>
                    <th style="width: 16.5%;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conference Meeting
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="text-start">Main Hall</th>
                    <td><svg class="bi" width="24" height="24">
                            <use xlink:href="#check"></use>
                        </svg></td>
                    <td><svg class="bi" width="24" height="24">
                            <use xlink:href="#check"></use>
                        </svg></td>
                    <td><svg class="bi" width="24" height="24">
                            <use xlink:href="#check"></use>
                        </svg></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Lawn Ground</th>
                    <td><svg class="bi" width="24" height="24">
                            <use xlink:href="#check"></use>
                        </svg></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <th scope="row" class="text-start">Conference Room</th>
                    <td><svg class="bi" width="24" height="24">
                            <use xlink:href="#check"></use>
                        </svg></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Room</th>
                    <td><svg class="bi" width="24" height="24">
                            <use xlink:href="#check"></use>
                        </svg></td>
                    <td><svg class="bi" width="24" height="24">
                            <use xlink:href="#check"></use>
                        </svg></td>
                    <td></td>
                    <td><svg class="bi" width="24" height="24">
                            <use xlink:href="#check"></use>
                        </svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start"></th>
                    <td>1,05,000&#x20B9</td>
                    <td>80,000&#x20B9+1500/Room&#x20B9</td>
                    <td>10,000&#x20B9</td>
                    <td>10,000&#x20B9</td>
                </tr>
            </tbody>
        </table>
    </div>
    <h5 style="margin-left: 10px;">*Custom plans will be possible.</h5>
    </main>
    </div>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">

                        <div class="form-header">
                            <h1>Book a plot</h1>
                        </div>

                        <form action="payscript.php" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Name</span>
                                        <input class="form-control" name="Name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Email</span>
                                        <input class="form-control" name="email" placeholder="Enter your email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Phone</span>
                                <input class="form-control" name="Phone" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Eventname</span>
                                <select class="form-control" name="Eventname" placeholder="Enter eventname">
                                    <option value="select">select</option>
                                    <option value="BirthDay Party">BirthDay Party</option>
                                    <option value="Corporate Events">Corporate Events</option>
                                    <option value="Event Management">Event Management</option>
                                    <option value="Wedding Ceremony">Wedding Ceremony</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Time</span>
                                <select class="form-control" name="Time" placeholder="Enter eventname">
                                    <option value="select">select</option>
                                    <option value="Morning">Morning</option>
                                    <option value="AfterNoon">AfterNoon</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Booking For</span>
                                <select class="form-control" name="Booking" placeholder="Enter eventname">
                                    <option value="select">select</option>
                                    <option value="Rooms">Rooms</option>
                                    <option value="Hall">Hall</option>
                                    <option value="Shree party plot lawns">Shree party plot lawns</option>
                                    <option value="Rooms+Hall+party plot lawns">Rooms+Hall+party plot lawns</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <span class="form-label">From Date</span>
                                        <input class="form-control" name="FromDate" type="date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <span class="form-label"> To Date</span>
                                        <input class="form-control" name="ToDate" type="date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button src='payscript.php' class="submit-btn" name="BookNow" onclick="showA()">Book
                                    Now</button>
                            </div>
                            <script type="text/javascript">
                            $('#button-confirm-s').bind('click', function() {
                                $.ajax({
                                    type: 'get',
                                    url: 'roomservices.php?route=payment/bank_transfer/confirm',
                                    success: function() {
                                        location = '<?php echo $continue; ?>';
                                    }
                                });
                            });
                            </script>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/slick.min.js"></script>
    <script src="../../assets/js/j3.js"></script>
</body>
<?php include('../section/footer.php');?>

</html>