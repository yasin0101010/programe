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
    <!-- Navbar -->
    <div id="header" , class="flex-container">
        <!-- قسمت بالایی سایت -->
        <div id="header_menu">
            <button class="menu-button" onclick="toggleOffcanvas()">☰</button>
        </div>
        <!-- Offcanvas با محتوای RTL انگلیسی -->
        <div class="offcanvas" id="myOffcanvas">
            <div class="offcanvas-header">
                <h3>Menu</h3>
                <span class="close-btn" onclick="toggleOffcanvas()">&times;</span>
            </div>
            <div class="offcanvas-body">
                <ul>
                    <li><a href="index.html" style="color: black;">phoonix moves</a></li>
                    <?php
                    if (isset($_SESSION['login_check'])&&$_SESSION['login_check']){?>
                    <li><a href="logout.php" style="color: red;">logout</a></li>
                    <?php
                    }
                    else{?>
                    <li><a href="register.html" style="color: blue;">login/register</a></li>
                    <?php
                    }
                    ?>
                    
                </ul>
            </div>
        </div>
    
        <div class="overlay" id="overlay" onclick="toggleOffcanvas()"></div>
    
        <script>
            function toggleOffcanvas() {
                const offcanvas = document.getElementById('myOffcanvas');
                const overlay = document.getElementById('overlay');
                
                offcanvas.classList.toggle('active');
                overlay.classList.toggle('active');
                
                document.body.style.overflow = offcanvas.classList.contains('active') ? 'hidden' : 'auto';
            }
        </script>
        <div class="logo-container">
            <a href="index.php" class="logo-link">
                <img src="logo site.png" alt="Logo" class="logo">
            </a>
        </div>            
        <div id="header_space_1"> 5</div>
        <div id="header_search">
            <form action="/search" method="get">
                <input type="text" name="q" placeholder="Search here..." required>
                <button type="submit">Search</button>
            </form>
        </div>
        <div id="header_space_2"> </div>
        <div class="profile-container">
            <a id="profile-link" href="#">
                <img id="profile-image" src="default-user.jpg" alt="Profile Image">
            </a>
        </div>
    </div>

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