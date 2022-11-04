<?php 
session_start();
include('config/config.php');
error_reporting(0);
$sql = "SELECT * FROM tbl_shreevideos";
$res = mysqli_query($conn,$sql);
$sql1 = "SELECT * FROM tbl_shreeimages";
$res1 = mysqli_query($conn,$sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shree cottages</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="lightbox.min.css">
    <script src="lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,400;0,500;1,300;1,400;1,500&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap"
        rel="stylesheet">
                    
<?php include('includes.php'); ?>
</head>

<body>

    <?php include('header.php');?>

    <!-- Meta Section -->

    <div class="cc" data-aos="zoom-in">

        <h1>Shree Party Plot & Banquet Hall - Many Celebrations… One Destination
            The finest celebration venue in the city</h1>

        <b class="bld"> location… lush landscape… stunning décor… premium facilities… experienced staff and much
            more.</b>

        <p>Marriages they say are made in heaven. That's why, we do everything we can to make your special day truly
            heavenly for you and your loved ones. It's certainly the perfect wedding destination.</p>

    </div>
    </div>
    <!-- ------------>




    <!-- Bookevent Section -->

    <div class="bookevent">
        <h2>Want to celebrate your best day at best place !!</h2>
        <!-- <a href="#" class="btn" data-aos="fade-up"
            style="font-family: 'Yesteryear', cursive;font-size:2.5rem">Book Your Event</a> -->
        <div class="pics">
            <div class="block" data-aos="fade-up">
                <img class="pic" src="assets/images/crpevnt.jpg" class="responsive" alt="" srcset="" height="27rem" ;
                    width="34rem" ;>
                <h3>Corporate Events</h3>
            </div>
            <div class="block" data-aos="fade-up">
                <img class="pic" src="assets/images/cnrst.jpg" class="responsive" alt="" srcset="" height="27rem" ;
                    width="34rem" ;>
                <h3>Event managment</h3>
            </div>
            <div class="block" data-aos="fade-up">
                <img class="pic" src="assets/images/wddingpic.jpg" class="responsive" alt="" srcset="" height="27rem" ;
                    width="34rem" ;>
                <h3>Wedding ceremony</h3>
            </div>
            <div class="block" data-aos="fade-up">
                <img class="pic" src="assets/images/birthday.jpg" class="responsive" alt="" srcset="" height="27rem" ;
                    width="34rem" ;>
                <h3>Birthday Parties</h3>
            </div>
        </div>
    </div>

    <!-- ---------------- -->

    <!-- Services Section -->

    <div class="serv">
        <h1 class="center" data-aos="zoom-in">Our Services</h1>
        <div class="fb">

            <div class="box" data-aos="fade-left">
                <div class="photo"><img src="assets/images/room1.JPG" alt=""></div>
                <h2>Room Services</h2>
                <p>We will execute every little detail of your event to perfection, while you and your family can simply
                    relax in the spacious, fully furnished, air conditioned rooms.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="photo"><img src="assets/images/pp.JPG" alt=""></div>
                <h2>Party plot</h2>
                <p>Spread across 65,000 sq. ft. with a capacity to easily accommodate 3000 people, our party plot is
                    known for its wonderful service and facilities.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="photo"><img src="assets/images/dcr.jpg" alt=""></div>
                <h2>Decoration</h2>
                <p>Indian wedding is a perfect showcase of the beauty and grandeur of our culture. Vibrant colors, rich
                    textures, gorgeous artefacts and sparkling lighting comes together to create a mesmerizingly
                    spectacular setting for a magical event.</p>
            </div>

        </div>
    </div>
    </div>

    <!-- Gallery Section -->

    <div class="gallery">
        <h1>Gallery</h1>
        <hr style="margin-left:50rem;margin-right:50rem">
        <div class="glryflex">
            <div class="pglry">
                <h4>Photo Gallery</h4>
                
                <?php $output=""; if (mysqli_num_rows($res1) > 0) {                            
                    $row = mysqli_fetch_assoc($res1);
                    $output .="<img class='responsive-img-video' src=../../../shree-admin/Asserts/images/{$row['image']} width='460' height='300' alt='' srcset=''/>";
                    echo $output;
                } ?>
                <a href="images.php">Click here for more...</a>
            </div>
            <div class="vglry">
                <h4>Video Gallery</h4>              
                <?php $output=""; if (mysqli_num_rows($res) > 0) {                            
                    $row = mysqli_fetch_assoc($res);
                        $output .="                                                        
                        <iframe control='controls' width='460' height='300' src={$row['video_link']} >
                        </iframe>";
                    echo $output;
                } ?> 
                <a href="video.php">Click here for more...</a>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.609828612716!2d70.52531429999999!3d21.0482922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be2ca27bd28f1d1%3A0xe609e025f726b7c6!2sShree%20cottage!5e0!3m2!1sen!2sin!4v1653757676857!5m2!1sen!2sin" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- -------------------- -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>    

    <!--Footer -->
    <?php include('footer.php');?>
    <!-- <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/slick.min.js"></script>
    <script src="../../assets/js/j3.js"></script> -->
</body>

</html>