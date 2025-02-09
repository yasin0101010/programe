<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سایت اشتراک ویدئو</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="moves styles.css">
</head>
<body>
<?php
        include 'footer.html';
    ?>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>بهترین ویدئوهای را از ما تماشا کنید</h1>
            <p>با اشتراک در سایت ما، به جهان ویدئوهای فوق العاده دسترسی پیدا کنید.</p>
            <a href="register.html">
                <button class="cta-btn">شروع کنید</button> 
            </a>
            
        </div>
    </section>

    <!-- Video Section -->
    <section id="videos" class="video-section">
        <h2>ویدئوهای پرطرفدار</h2>
        <div class="video-grid">
            <div class="video-card">
                <a href="film1.php">
                    <img src="film 1.png" alt="Video Thumbnail">
                    <h3>Humen VS Nuture</h3>
                    
                </a>
            </div>
            <div class="video-card">
                <a href="film2.php">
                    <img src="film 2.png" alt="Video Thumbnail">
                    <h3>Help people</h3>
                    
                </a>
            </div>
            <div class="video-card">
                <a href="film3.php">
                    <img src="film 3.jpg" alt="Video Thumbnail">
                    <h3>Future of Humen</h3>
                    
                </a>
                
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <p>&copy; 2023 phoonix moves. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>