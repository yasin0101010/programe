<?php
session_start();
$key = mysqli_connect   ('localhost','root','','moves');
$show = mysqli_query($key,"SELECT * FROM `move` WHERE 1");
mysqli_close($key);
$row = mysqli_fetch_array($show);
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویدیوگرین | سرویس اشتراک ویدیو</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="bootstrap.rtl.css" rel="stylesheet">
    <link rel="stylesheet" href="style_moves.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #8BC34A;
            --secondary-color: #f8fff3;
        }
        
        body {
            background: #fff;
            font-family: 'Vazir', sans-serif;
        }
        
        /* Header Styles */
        .navbar {
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }
        
        .brand-logo {
            width: 150px;
            transition: transform 0.3s ease;
        }
        
        .brand-logo:hover {
            transform: rotate(-5deg);
        }
        
        /* Hero Section */
        .hero-section {
            background: var(--secondary-color);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 500 100" xmlns="http://www.w3.org/2000/svg"><path d="M0 70 Q 250 100 500 70 L 500 0 L 0 0 Z" fill="%23ffffff"></path></svg>');
        }
        
        /* Video Card */
        .video-card {
            border: none;
            transition: transform 0.3s ease;
            margin-bottom: 30px;
        }
        
        .video-card:hover {
            transform: translateY(-10px);
        }
        
        .video-thumbnail {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
        }
        
        .video-thumbnail img {
            transition: transform 0.3s ease;
        }
        
        .video-thumbnail:hover img {
            transform: scale(1.1);
        }
        
        /* Custom Button */
        .btn-custom {
            background: var(--primary-color);
            color: #fff;
            padding: 12px 30px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(139, 195, 74, 0.3);
        }
        
        /* Animated Upload Button */
        .upload-btn {
            position: fixed;
            bottom: 30px;
            left: 30px;
            z-index: 1000;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>

<?php
    include ("footer.html");
?>
<!-- Hero Section -->
<section class="hero-section" data-aos="fade-up">
    <div class="container text-center">
        <h1 class="display-4 mb-4">کشف کنید، لایک کنید، به اشتراک بگذارید</h1>
        <p class="lead mb-4">به بزرگترین جامعه اشتراک گذاری ویدیو در ایران بپیوندید</p>
        <button class="btn btn-custom">شروع کنید</button>
    </div>
</section>

<!-- Video Grid -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php
                while($row){ 
                    ?>
                    <div class="col-md-4" data-aos="zoom-in">
                        <a href="film?id=<?php echo($row['id']);?>.php" style="color: black;text-decoration: none;">
                            <div class="video-card">
                                <div class="video-thumbnail">
                                    <img src="<?php print($row['pic_move'])?>" class="img-fluid" alt="ویدیو">
                                    <div class="play-btn"></div>
                                </div>
                                <div class="card-body">
                                    <h5><?php print($row['name_move'])?></h5>
                                    <p class="text-muted">Duration: <?php print($row['time_move'])?></p>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                    $row = mysqli_fetch_array($show);
                }


                ?>
        </div>
    </div>
</section>


<!-- Scripts -->
<script src="bootstrap.bundle.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 120,
        duration: 800,
        once: true
    });
</script>

</body>
</html>