<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.rtl.css">
    <link rel="stylesheet" href="style_moves.css">
</head>
<body dir="rtl" style="background-color: rgb(255, 255, 255);">
<?php
    include 'footer.html';
?>
        
        <div class="row">
            <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12 " style="padding-right: 2% ;">
                <div class="row">
                    <div class="col-12">
                        <video src="video/film 2.mp4" class="video_user" controls></video>
                    </div>
                    <div class="col " style="background-color: whitesmoke; border-radius: 10px;">
                        <h1 class="video-title">کمک به مردم</h1>
                    </div>
                    <div class="col-auto" style="background-color: whitesmoke; border-radius: 10px;">
                        <div class="d-block">
                                    <!-- دکمه ذخیره -->
                            <button type="button" class="btn botten_save" onclick="saveItem()"><svg class="aparat-icon icon icon-save icon-start" viewBox="0 0 24 25" width="1em" height="1em" focusable="false" style="width: 1em; height: 1em;"><path d="M17.25 3.12524H6.75C6.35218 3.12524 5.97064 3.28328 5.68934 3.56458C5.40804 3.84589 5.25 4.22742 5.25 4.62524V21.1252C5.25007 21.2591 5.28595 21.3905 5.35393 21.5058C5.42191 21.6211 5.5195 21.7161 5.63659 21.7809C5.75367 21.8458 5.88598 21.8781 6.01978 21.8746C6.15358 21.8711 6.284 21.8318 6.3975 21.7609L12 18.2593L17.6034 21.7609C17.7169 21.8316 17.8472 21.8706 17.9809 21.874C18.1146 21.8774 18.2467 21.8451 18.3636 21.7802C18.4806 21.7154 18.5781 21.6205 18.646 21.5053C18.7139 21.3902 18.7498 21.2589 18.75 21.1252V4.62524C18.75 4.22742 18.592 3.84589 18.3107 3.56458C18.0294 3.28328 17.6478 3.12524 17.25 3.12524ZM17.25 19.7724L12.3966 16.7396C12.2774 16.6651 12.1396 16.6256 11.9991 16.6256C11.8585 16.6256 11.7208 16.6651 11.6016 16.7396L6.75 19.7724V4.62524H17.25V19.7724Z"></path></svg></button>
                            
                                    <!-- دکمه لایک -->
                            <button type="button" class="btn botten_like" onclick="likeItem()"><svg class="aparat-icon icon icon-favorite icon-start" viewBox="0 0 24 25" width="1em" height="1em" focusable="false" style="width: 1em; height: 1em;"><path d="M16.6875 3.5022C14.7516 3.5022 13.0566 4.3347 12 5.74188C10.9434 4.3347 9.24844 3.5022 7.3125 3.5022C5.77146 3.50393 4.29404 4.11688 3.20436 5.20656C2.11468 6.29624 1.50174 7.77366 1.5 9.3147C1.5 15.8772 11.2303 21.1891 11.6447 21.4084C11.7539 21.4672 11.876 21.498 12 21.498C12.124 21.498 12.2461 21.4672 12.3553 21.4084C12.7697 21.1891 22.5 15.8772 22.5 9.3147C22.4983 7.77366 21.8853 6.29624 20.7956 5.20656C19.706 4.11688 18.2285 3.50393 16.6875 3.5022ZM12 19.8897C10.2881 18.8922 3 14.3481 3 9.3147C3.00149 8.17141 3.45632 7.07537 4.26475 6.26694C5.07317 5.45851 6.16921 5.00369 7.3125 5.0022C9.13594 5.0022 10.6669 5.97345 11.3062 7.53345C11.3628 7.67101 11.4589 7.78866 11.5824 7.87146C11.7059 7.95426 11.8513 7.99847 12 7.99847C12.1487 7.99847 12.2941 7.95426 12.4176 7.87146C12.5411 7.78866 12.6372 7.67101 12.6937 7.53345C13.3331 5.97063 14.8641 5.0022 16.6875 5.0022C17.8308 5.00369 18.9268 5.45851 19.7353 6.26694C20.5437 7.07537 20.9985 8.17141 21 9.3147C21 14.3406 13.71 18.8913 12 19.8897Z"></path></svg></button>
                            
                                    <!-- دکمه دانلود -->
                            <button type="button" class="btn botten_download" onclick="downloadVideo()"><svg class="aparat-icon icon icon-download icon-start" viewBox="0 0 24 25" width="1em" height="1em" focusable="false" style="width: 1em; height: 1em;"><path d="M21 14.1072V19.2501C21 19.5911 20.8645 19.9181 20.6234 20.1592C20.3823 20.4003 20.0553 20.5358 19.7143 20.5358H4.28571C3.94472 20.5358 3.6177 20.4003 3.37658 20.1592C3.13546 19.9181 3 19.5911 3 19.2501V14.1072C3 13.7662 3.13546 13.4392 3.37658 13.1981C3.6177 12.957 3.94472 12.8215 4.28571 12.8215H7.5C7.6705 12.8215 7.83401 12.8892 7.95457 13.0098C8.07513 13.1303 8.14286 13.2939 8.14286 13.4644C8.14286 13.6349 8.07513 13.7984 7.95457 13.9189C7.83401 14.0395 7.6705 14.1072 7.5 14.1072H4.28571V19.2501H19.7143V14.1072H16.5C16.3295 14.1072 16.166 14.0395 16.0454 13.9189C15.9249 13.7984 15.8571 13.6349 15.8571 13.4644C15.8571 13.2939 15.9249 13.1303 16.0454 13.0098C16.166 12.8892 16.3295 12.8215 16.5 12.8215H19.7143C20.0553 12.8215 20.3823 12.957 20.6234 13.1981C20.8645 13.4392 21 13.7662 21 14.1072ZM11.5452 13.9192C11.6049 13.9789 11.6758 14.0264 11.7538 14.0587C11.8319 14.0911 11.9155 14.1077 12 14.1077C12.0845 14.1077 12.1681 14.0911 12.2462 14.0587C12.3242 14.0264 12.3951 13.9789 12.4548 13.9192L16.312 10.062C16.4326 9.94141 16.5004 9.7778 16.5004 9.60721C16.5004 9.43662 16.4326 9.27302 16.312 9.15239C16.1913 9.03176 16.0277 8.964 15.8571 8.964C15.6866 8.964 15.5229 9.03176 15.4023 9.15239L12.6429 11.9127V5.10721C12.6429 4.93672 12.5751 4.7732 12.4546 4.65264C12.334 4.53208 12.1705 4.46436 12 4.46436C11.8295 4.46436 11.666 4.53208 11.5454 4.65264C11.4249 4.7732 11.3571 4.93672 11.3571 5.10721V11.9127L8.59768 9.15239C8.47705 9.03176 8.31345 8.964 8.14286 8.964C7.97227 8.964 7.80866 9.03177 7.68804 9.15239C7.56741 9.27302 7.49964 9.43662 7.49964 9.60721C7.49964 9.7778 7.56741 9.94141 7.68804 10.062L11.5452 13.9192ZM17.7857 16.6786C17.7857 16.4879 17.7292 16.3015 17.6232 16.1429C17.5172 15.9843 17.3666 15.8607 17.1904 15.7878C17.0142 15.7148 16.8204 15.6957 16.6333 15.7329C16.4463 15.7701 16.2744 15.8619 16.1396 15.9968C16.0047 16.1316 15.9129 16.3035 15.8757 16.4905C15.8385 16.6776 15.8576 16.8715 15.9305 17.0477C16.0035 17.2239 16.1271 17.3745 16.2857 17.4804C16.4443 17.5864 16.6307 17.6429 16.8214 17.6429C17.0772 17.6429 17.3224 17.5413 17.5033 17.3605C17.6841 17.1797 17.7857 16.9344 17.7857 16.6786Z"></path></svg></button>
                        </div>
                        <script>
                           // دکمه ذخیره
                            function saveItem() {
                            const btn = document.querySelector('.botten_save');
                            btn.classList.add('pulse');
                            setTimeout(() => btn.classList.remove('pulse'), 600);
                            
                            // شبیه سازی ذخیره سازی
                            localStorage.setItem('savedItem', 'true');
                            alert('محتوا با موفقیت ذخیره شد!');
                            }

                            // دکمه لایک
                            let isLiked = false;
                            function likeItem() {
                            const btn = document.querySelector('.botten_like');
                            isLiked = !isLiked;
                            
                            btn.classList.toggle('liked', isLiked);
                            btn.style.background = isLiked ? '#ff1744' : '#FF4081';
                            
                            // ارسال درخواست به سرور
                            fetch('/like', {
                                method: isLiked ? 'POST' : 'DELETE',
                                body: JSON.stringify({ itemId: 123 })
                            });
                            }

                            // دکمه دانلود
                            function downloadVideo() {
                            const btn = document.querySelector('.botten_download');
                            btn.classList.add('pulse');
                            setTimeout(() => btn.classList.remove('pulse'), 600);

                            // شبیه سازی دانلود
                            const link = document.createElement('a');
                            link.href = 'video/film 1.mp4';
                            link.download = 'video.mp4';
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                            
                            // آمار دانلود
                            console.log('دانلود انجام شد');
                            }

                            // افزودن افکت ریپل
                            document.querySelectorAll('.btn').forEach(btn => {
                            btn.addEventListener('click', function(e) {
                                let ripple = document.createElement('div');
                                ripple.style.cssText = `
                                position: absolute;
                                background: rgba(255,255,255,0.5);
                                border-radius: 50%;
                                transform: translate(-50%, -50%);
                                pointer-events: none;
                                animation: ripple 1s ease-out;
                                `;
                                
                                const rect = btn.getBoundingClientRect();
                                const size = Math.max(rect.width, rect.height);
                                ripple.style.width = ripple.style.height = size + 'px';
                                ripple.style.left = e.clientX - rect.left + 'px';
                                ripple.style.top = e.clientY - rect.top + 'px';
                                
                                btn.appendChild(ripple);
                                setTimeout(() => ripple.remove(), 1000);
                            });
                            });
                        </script>
                    
                    </div>
                </div>
                
                
            </div>
            <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12" style="background: whitesmoke;" >
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item p-1 mx-2">
                            <h2 class="accordion-header" id="headingOne" >
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-1" aria-expanded="true" aria-controls="collapseOne">
                                    لیست ویدیو ها
                                </button>
                            </h2>
                            <div id="accordion-1" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body ">
                                    <div class="video_item_bar">
                                    <div class="col-12 video_item p-4 m-2">
                                            <a href="film2.php">
                                                <img src="image/film 2.png" alt="Video Thumbnail">
                                                <div class="video_info">
                                                    <h2>Help people</h2>
                                                    <p>Duration: 1:25</p>
                                                    
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 video_item p-4 m-2">
                                            <a href="film3.php">
                                                <img src="image/film 3.jpg" alt="Video Thumbnail">
                                                <div class="video_info">
                                                    <h2>Futur of Humen</h2>
                                                    <p>Duration: 6:24</p>
                                                    
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 video_item p-4 m-2">
                                            <a href="film4.php">
                                                <img src="image/film 4.png" alt="Video Thumbnail">
                                                <div class="video_info">
                                                    <h2>Family</h2>
                                                    <p>Duration: 7:15</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 video_item p-4 m-2">
                                            <a href="film1.php" class="d-black h-100">
                                                <img src="image/film 1.png" alt="Video Thumbnail">
                                                <div class="video_info">
                                                    <h2>Humen VS Nuture</h2>
                                                    <p>Duration: 3:35</p>
                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
            <div class="col-auto">
                <p>&nbsp;</p>
            </div>

        </div>
        <div class="comment-container">
            <h2>Comments</h2>
            <div class="comment-form row">
                <div class="input-group col">
                    <textarea id="comment-input" placeholder="Write your comment here..." required></textarea>
                </div>
                <div class="input-group ">
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
                avatar.innerHTML = '<img src="image/default-user.jpg" alt="User Avatar">';
    
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

</body>
<script src="bootstrap.bundle.js"></script>
</html>