<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILM 1</title>
    
    <!-- <link rel="stylesheet" href="bootstrap.css"> -->
    <link rel="stylesheet" href="moves styles.css">
</head>
<body>
    <div id="header"  class="flex-container">
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
                    if (isset($_SESSION['login_check'])){?>
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
    <div id="movie_space">
        <!-- قسمت ویدیو و پلی لیست -->

        <div id="movie_text">
            <!--  خود ویدیو و متن زیر ان-->
            
            <div id="movie">
                <!-- ویدیو -->
                <video controls>
                    <source src="film 1.mp4" type="video/mp4">
                </video>
                
            </div>
            <div id="text">
                <!-- اسم یا عنوان ویدیو -->
                
                <h5>
                    &nbsp;&nbsp;&nbsp;&nbsp; Humen VS Nuture
                </h5>
            </div>
        </div>
        <div class="playlist-container">
            <h1>Playlist</h1>
    
            <div class="video-item">
                <a href="film1.php">
                    <img src="film 1.png" alt="Video Thumbnail">
                    <div class="video-info">
                        <h2>Humen VS Nuture</h2>
                        <p>Duration: 3:35</p>
                        
                    </div>
                </a>
            </div>
    
            <div class="video-item">
                <a href="film2.php">
                    <img src="film 2.png" alt="Video Thumbnail">
                    <div class="video-info">
                        <h2>Help people</h2>
                        <p>Duration: 1:25</p>
                        
                    </div>
                </a>
            </div>
    
            <div class="video-item">
                <a href="fime3.php">
                    <img src="film 3.jpg" alt="Video Thumbnail">
                    <div class="video-info">
                        <h2>Futur of Humen</h2>
                        <p>Duration: 6:24</p>
                        
                    </div>
                </a>
            </div>
    
            <div class="video-item">
                <a href="film4.php">
                    <img src="film 4.png" alt="Video Thumbnail">
                    <div class="video-info">
                        <h2>Family</h2>
                        <p>Duration: 7:15</p>
                        
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="account_under_move" >
        <!-- قسمت زیر ویدیو  -->
        <p>
            
        </p>
        <div class="profile-container-user">
            <a id="profile-link1" href="#">
                <img id="profile-image1" src="user.jpg" alt="Profile Image">
            </a>
        </div>
        <div id="header_space_3"> </div>
        
        <div id="button_downloud">
            <!-- دکمه دانلود ویدیو -->
            <button id="download-button" onclick="downloadVideo()">⬇️ download</button>
        </div>
        
        
        
            
        <div id="button-like" onclick="toggleLike(this)">
            <span id="like-icon">❤️like</span>
        </div>
        
        
        
        <div id="button_subscribe">
            <!-- دکمه دنبال کردن -->
            <button id="subscribe-button" onclick="subscribeChannel()">🔔 subscribe</button>
            
        </div>
        <script>
            // عملکرد دکمه دانلود
            function downloadVideo() {
                const button = document.getElementById('download-button');
                const burst = document.createElement('div');
                burst.className = 'burst';
                button.appendChild(burst);
            
                // حذف افکت انفجار پس از اتمام انیمیشن
                setTimeout(() => burst.remove(), 500);
            
                // عملکرد دانلود ویدیو
                const videoUrl = 'film 1.mp4'; // مسیر ویدیو
                const a = document.createElement('a');
                a.href = videoUrl;
                a.download = "film 1.mp4";
                a.click();
            }
            
            // عملکرد دکمه دنبال کردن
            function subscribeChannel() {
                const button = document.getElementById('subscribe-button');
                const burst = document.createElement('div');
                burst.className = 'burst';
                button.appendChild(burst);
            
                // حذف افکت انفجار پس از اتمام انیمیشن
                setTimeout(() => burst.remove(), 500);
            
                // پیام دنبال کردن
                
            }
            
            
            function toggleLike(button) {
                button.classList.toggle('liked');
                if (button.classList.contains('liked')) {
                    const burst = document.createElement('div');
                    burst.className = 'burst';
                    button.appendChild(burst);
            
                    // حذف افکت انفجار پس از اتمام انیمیشن
                    setTimeout(() => burst.remove(), 500);
                    
                }
            }
            
            
        </script>
        
        
        <div id="header_space_6"> </div>
    </div> 
    <div class="comment-container">
        <h2>Comments</h2>
        <div class="comment-form">
            <div class="user-avatar">
                <img src="default-user.jpg" alt="User Avatar">
            </div>
            <div class="input-group">
                <textarea id="comment-input" placeholder="Write your comment here..." required></textarea>
                <button onclick="submitComment()">Submit</button>
            </div>
        </div>
        <div class="comments-list" id="comments-list">
            <!-- Comments will be dynamically added here -->
        </div>
    </div>

    <script>
        function submitComment() {
            const commentInput = document.getElementById('comment-input');
            const commentsList = document.getElementById('comments-list');
            const commentText = commentInput.value.trim();

            if (commentText === '') {
                alert('Comment cannot be empty!');
                return;
            }

            // Create a new comment element
            const commentItem = document.createElement('div');
            commentItem.className = 'comment-item';

            const avatar = document.createElement('div');
            avatar.className = 'avatar';
            avatar.innerHTML = '<img src="default-user.jpg" alt="User Avatar">';

            const content = document.createElement('div');
            content.className = 'content';

            const author = document.createElement('div');
            author.className = 'author';
            author.textContent = 'Anonymous'; // Replace with the user's name if available

            const text = document.createElement('div');
            text.className = 'text';
            text.textContent = commentText;

            content.appendChild(author);
            content.appendChild(text);
            commentItem.appendChild(avatar);
            commentItem.appendChild(content);

            // Add the new comment to the list
            commentsList.appendChild(commentItem);

            // Clear the input field
            commentInput.value = '';
        }
    </script>
    <div id="copy_write">
        <!-- کپی رایت  -->
        <p>© 2024 تمامی حقوق محفوظ است.</p>
    </div>
    <script src="bootstrap.bundle.js"></script>
</body>
</html>