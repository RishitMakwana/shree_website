<?php 
session_start();
include('../../config/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plot Service</title>
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
    <link rel="stylesheet" href="index.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <?php include('../section/includes.php'); ?>
</head>
<?php include('../section/header.php');?>
<body>

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Party Plot service</h1>
                    <p class="lead text-muted">
                        Shree Party Plot is a place where time transforms into treasure and adds magic to every moment
                        by making the events of life memorable and enriching. It is known for making all the difference
                        with unmatched ambiance and fascinating luxuries at one place. It is an experience that will
                        transcend and blend with your world and imagination- making it reality!

                    </p>
                    <p>
                        <a href="roomservices.php" class="btn btn-primary my-2">Book Now</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="gallery">
            <h1>Party plot Gallery</h1>
            <div class="gfb">
                <a href="../../assets/images/f1.jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f1.jpg"></a>
                <a href="../../assets/images/f2.jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f2.jpg"></a>
                <a href="../../assets/images/f3 (1).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (1).jpg"></a>
                <a href="../../assets/images/f3 (3).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (3).jpg"></a>
                <a href="../../assets/images/f3 (6).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (6).jpg"></a>
                <a href="../../assets/images/f3 (7).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (7).jpg"></a>
                <a href="../../assets/images/f3 (9).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (9).jpg"></a>
                <a href="../../assets/images/f3 (10).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (10).jpg"></a>
                <a href="../../assets/images/f3 (11).JPG" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (11).jpg"></a>
                <a href="../../assets/images/f3 (12).JPG" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (12).jpg"></a>
                <a href="../../assets/images/f5.jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f5.jpg"></a>
                <a href="../../assets/images/f6.jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f6.jpg"></a>
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

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/slick.min.js"></script>
    <script src="../../assets/js/j3.js"></script>
</body>
<?php include('../section/footer.php');?>
</html