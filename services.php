<?php
include('config/config.php');
$sql = "SELECT * FROM tbl_shreeimages";
$res = mysqli_query($conn,$sql);
?><?php include('config/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Service</title>
    <link rel="stylesheet" href="lightbox.min.css">
    <script src="lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,400;0,500;1,300;1,400;1,500&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />      
    <!-- <link rel="stylesheet" href="response.css" media="screen and (max-width:1170px)"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="services.css">
    <?php include('includes.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<?php include('header.php');?>
<body>

    <main>
        
        <div class="services">
            <div class="room-service">
                <h1>Room Services</h1>
                <p>We will provide rooms services according to the celebration event. Rooms are only valid
                        throughout the
                        event duration & will not availible after event is over. The price is 5000&#x20B9(can be differ)
                        for 24hours.</p>
            </div>
            <hr>
            <div class="plot-service">
                <h1>Plot Services</h1>
                <p>Shree Party Plot is a place where time transforms into treasure and adds magic to every moment
                        by making the events of life memorable and enriching. It is known for making all the difference
                        with unmatched ambiance and fascinating luxuries at one place. It is an experience that will
                        transcend and blend with your world and imagination- making it reality!
</p>
            </div>
        </div>

        <div class="gallery">
            <h1>Gallery</h1>
            <div class="gfb">
            <?php $output=""; 
                if (mysqli_num_rows($res) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($res)) {                                               
                        $output .="                                                        
                        <a href='../../../shree-admin/Asserts/images/{$row['image']}' data-lightbox='mygallery' 
                        data-aos='fade-up'><img src='../../../shree-admin/Asserts/images/{$row['image']}' ></a>";
                    }
                    echo $output;
                } ?>             
            </div>
        </div>
        <script>
        document.querySelector(".hamburger-menu").addEventListener("click", () => {
            document.querySelector(".containerx").classList.toggle('change');
        });

        const dropdownItems = document.querySelectorAll('.dropdown-hover')

        dropdownItems.forEach(dropdownItems => {
            dropdownItems.addEventListener('mouseover', () => {
                dropdownItems.lastElementChild.style.cssText = 'opacity:1;visibility:visible'
            })
            dropdownItems.addEventListener('mouseout', () => {
                dropdownItems.lastElementChild.style.cssText = 'opacity:0;visibility:hidden'
            })
        })
        </script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            duration: 1000
        });
        </script>

    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/j3.js"></script>
</body>
<?php include('footer.php');?>
</html>