<?php 
include('config/config.php');
$sql = "SELECT * FROM tbl_shreevideos";
$res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lightbox.min.css">
    <script src="lightbox-plus-jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,400;0,500;1,300;1,400;1,500&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="video.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
    <?php include('includes.php'); ?>
    <title>Video Gallery</title>
</head>
    <?php include('header.php');?>
        <body>                
            <div class="container">
                <div class="heading">Video Gallery</div>
                    <div class="video-container">
                        <?php $output=""; if (mysqli_num_rows($res) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($res)) {                                               
                                $output .="                                                        
                                <iframe class='videos' width='500' height='300'
                                src={$row['video_link']} >
                                </iframe>";
                            }
                            echo $output;
                        } ?> 
                    </div>
                </div>
            </div>
        </body>
    <?php include('footer.php');?>    
</html>