<!--
 * @Version：You & Me 2.0
 * @Author: Akash
 * @Date: 2024-11-08 11:00:00
 * @LastEditTime: 2024-11-08
 * @Description: Of course, bad code can be cleaned up. But it's very expensive.
 * @Copyright (c) 2024 by Akash All Rights Reserved.
-->
<?php
error_reporting(0);
include("ipjc.php");
include_once("ip.php");
include_once 'admin/connect.php';
include_once 'admin/Function.php';

$sql = "select * from text";
$result = mysqli_query($connect, $sql);
$text = mysqli_fetch_array($result);

if (is_array($text)) {
    foreach ($text as $k => $v) {
        if (is_string($v)) {
            $text[$k] = str_replace('Like_Girl', 'You & Me', $v);
        }
    }
}

$sql = "select * from diySet";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result)) {
    $diy = mysqli_fetch_array($result);
}

$copy = $text['Copyright'];
$currentYear = date('Y');
if (is_string($copy)) {
    $copy = str_replace('Like_Girl', 'You & Me', $copy);
    $copy = preg_replace_callback('/(\\d{4})\\s*-\\s*\\d{4}/', function ($m) use ($currentYear) {
        return $m[1] . ' - ' . $currentYear;
    }, $copy);
}
$icp = $text['icp'];
$Animation = $text['Animation'];
?>

<script>
    console.log("%c Q & A | +94767378901", "color:#fff;background:#000;padding:8px 15px;font-weight: 700;border-radius:15px");
    console.log("%c You & Me 2.0 | Powered by Akash", "color:#fff;font-weight: 700;background:linear-gradient(270deg,#986fee,#8695e6,#68b7dd,#18d7d3);padding:8px 15px;border-radius:15px");


    function setupVideoPlayer(video) {
        var videoContainer = $('<div class="video-container"></div>');
        var playPauseBtn = $('<div class="play-pause-btn"></div>');

        var playPauseIcon = `
            <svg t="1730884474730" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
                p-id="7671" width="200" height="200">
                <path
                    d="M861.829969 330.562413L391.150271 33.456576A214.465233 214.465233 0 0 0 62.30358 214.751187V809.248813a214.465233 214.465233 0 0 0 328.846691 181.294611l470.679698-297.105837a214.751187 214.751187 0 0 0 0-362.875174z"
                    fill="#ffffff" p-id="7672"></path>
            </svg>
        `;
        playPauseBtn.html(playPauseIcon);

        video.wrap(videoContainer);
        video.parent().append(playPauseBtn);

        video.attr('controls', false);

        video.css({
            'width': '100%',
            'height': 'auto'
        });

        playPauseBtn.show();

        playPauseBtn.on('click', function(e) {
            e.stopPropagation();

            if (video[0].paused) {
                video[0].play();
                playPauseBtn.hide();
            } else {
                video[0].pause();
                playPauseBtn.show();
            }
        });

        video.on('click', function() {
            if (video[0].paused) {
                video[0].play();
                playPauseBtn.hide();
            } else {
                video[0].pause();
                playPauseBtn.show();
            }
        });
    }

    function show_date_time() {
        window.setTimeout("show_date_time()", 1000);
        BirthDay = new Date("<?php echo $text['startTime'] ?>");
        today = new Date();
        timeold = (today.getTime() - BirthDay.getTime());
        sectimeold = timeold / 1000;
        secondsold = Math.floor(sectimeold);
        msPerDay = 24 * 60 * 60 * 1000;
        e_daysold = timeold / msPerDay;
        daysold = Math.floor(e_daysold);
        e_hrsold = (e_daysold - daysold) * 24;
        hrsold = Math.floor(e_hrsold);
        e_minsold = (e_hrsold - hrsold) * 60;
        minsold = Math.floor((e_hrsold - hrsold) * 60);
        seconds = Math.floor((e_minsold - minsold) * 60);
        let timeKi = document.getElementById('span_dt_dt');
        if (timeKi !== null) {
            span_dt_dt.innerHTML = "This is our walk together.";
            tian.innerHTML = daysold + 'Days';
            shi.innerHTML = hrsold + 'Hours';
            fen.innerHTML = minsold + 'Minutes';
            if (seconds < 10) {
                seconds = "0" + seconds
            }
            miao.innerHTML = seconds + 'Seconds';
        }
    }

    show_date_time();
    
    // Navbar scroll behavior - improved version
    let lastScrollTop = 0;
    let ticking = false;
    
    function updateNavbar() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        let navbar = document.querySelector('.navbar-container');
        
        if (!navbar) {
            ticking = false;
            return;
        }
        
        // Show navbar when at top of page
        if (scrollTop <= 0) {
            navbar.style.transform = 'translate(-50%, 0)';
            navbar.style.opacity = '1';
        } 
        // Hide navbar when scrolling down
        else if (scrollTop > lastScrollTop && scrollTop > 100) {
            navbar.style.transform = 'translate(-50%, -100%)';
            navbar.style.opacity = '0';
        }
        // Show navbar when scrolling up
        else if (scrollTop < lastScrollTop) {
            navbar.style.transform = 'translate(-50%, 0)';
            navbar.style.opacity = '1';
        }
        
        lastScrollTop = scrollTop;
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateNavbar);
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestTick);

    // Ensure navbar is visible on page load
    document.addEventListener('DOMContentLoaded', function() {
        let navbar = document.querySelector('.navbar-container');
        if (navbar) {
            navbar.style.transform = 'translate(-50%, 0)';
            navbar.style.opacity = '1';
        }
    });
</script>
<link rel="shortcut icon" href="/favicon.ico" />
<meta name="keywords"
    content="<?php echo $text['title'] ?>,You & Me 2.0,NewUi,Welcome to 'You and Me One'—a heartwarming space where love and memories come alive.">
<meta name="discription" content="<?php echo $text['writing'] ?> - You & Me 2.0">
<meta name="author" content="Ki">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../Style/css/leaving.css?LikeGirl=<?php echo $version ?>">
<link rel="stylesheet" href="../Style/css/index.css?LikeGirl=<?php echo $version ?>">
<link rel="stylesheet" href="../Style/css/little.css?LikeGirl=<?php echo $version ?>">
<link rel="stylesheet" href="../Style/css/about.css?LikeGirl=<?php echo $version ?>">
<link rel="stylesheet" href="../Style/css/animate.min.css">
<link rel="stylesheet" href="../Botui/botui.min.css">
<link rel="stylesheet" href="../Botui/botui-theme-default.css">
<link rel="stylesheet" href="../Style/Font/font_list/iconfont.css">
<link rel="stylesheet" href="../Style/css/loveImg.css?LikeGirl=<?php echo $version ?>">
<link rel="stylesheet" href="../Style/css/list.css?LikeGirl=<?php echo $version ?>">
<link rel="stylesheet" href="../Style/toastr/toastr.css?LikeGirl=<?php echo $version ?>">
<link rel="stylesheet" href="../Style/css/loadinglike.css?LikeGirl=<?php echo $version ?>">
<link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="../Style/css/components.css?<?php echo time(); ?>">
<script src="../Style/Font/font_leav/iconfont.js"></script>
<script src="../Style/Font/font_leav/iconfont.js"></script>
<script src="../Botui/botui.min.js"></script>
<script src="../Style/js/vue.min.js"></script>
<script src="../Style/jquery/jquery.min.js"></script>
<script src="../Style/js/jquery.pjax.js" type="text/javascript"></script>
<script src="../Style/pagelir/spotlight.bundle.js"></script>
<script src="../Style/js/funlazy.min.js"></script>
<script src="../Style/js/loading.js?LikeGirl=<?php echo $version ?>"></script>
<script src="../Style/js/components.js?<?php echo time(); ?>"></script>

<?php
echo htmlspecialchars_decode($diy['headCon'], ENT_QUOTES);
if ($diy['Pjaxkg'] == "1"):
?>
    <script>
        $(document).pjax('a[target!=_blank]', '#pjax-container', {
            fragment: '#pjax-container',
            timeout: 15000
        });
        $(document).on('pjax:send', function() {
            NProgress.start();
        });
        $(document).on('pjax:complete', function() {
            $(".love_img img,.lovelist img,.little_texts img").addClass("spotlight");
            NProgress.done();
            FunLazy({
                placeholder: "Style/img/Loading2.gif",
                effect: "show",
                strictLazyMode: false,
                useErrorImagePlaceholder: "https://i.ibb.co/vdvHsfm/error-icon-25239.png"
            })
            $('.card, .card-b').click(function() {
                var link = $(this).find('a').get(0);
                if (link) {
                    link.click();
                }
            });
            $('#MessageBtn').click(function() {
                var targetOffset = $('#MessageArea').offset().top;
                if ($(window).scrollTop() !== targetOffset) {
                    $('html, body').animate({
                        scrollTop: targetOffset
                    }, 800);
                }
            });

            $('video').each(function() {
                var video = $(this);
                setupVideoPlayer(video);
            });

        });
    </script>
<?php endif; ?>
<script src="../Style/js/nprogress.js?LikeGirl=<?php echo $version ?>"></script>
<link href="../Style/css/nprogress.css?LikeGirl=<?php echo $version ?>" rel="stylesheet" type="text/css">
<style>
/* Position navbar at the very top */
.navbar-container {
    top: 0 !important;
    z-index: 10000 !important; /* Ensure navbar is above other content */
}

/* Remove any padding that would push content down */
.bg-wrap {
    padding-top: 0 !important;
    margin: 0 !important;
    position: relative;
    z-index: 1; /* Ensure avatar content is below navbar */
}

@media (max-width: 992px) {
    .bg-wrap {
        padding-top: 80px !important;
    }
}

@media (max-width: 768px) {
    .bg-wrap {
        padding-top: 70px !important;
    }
}

@media (max-width: 480px) {
    .bg-wrap {
        padding-top: 60px !important;
    }
}

/* Ensure no margin or padding on html and body elements */
html, body {
    margin: 0 !important;
    padding: 0 !important;
}

/* Remove default margin and padding from all elements */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Remove padding from body to eliminate space at top */
body {
    padding-top: 0 !important;
    margin: 0 !important;
    scroll-behavior: smooth;
}

@media (max-width: 992px) {
    body {
        padding-top: 0 !important;
        margin: 0 !important;
    }
}

@media (max-width: 768px) {
    body {
        padding-top: 0 !important;
        margin: 0 !important;
    }
}

@media (max-width: 480px) {
    body {
        padding-top: 0 !important;
        margin: 0 !important;
    }
}

/* Background image from database */
.bg-img {
    background: url(<?php echo $text['bgimg'] ?>) no-repeat center top !important;
    background-size: cover !important;
    width: 100%;
    box-sizing: border-box;
    padding: 0 !important;
    position: relative;
    margin: 0 !important;
    min-height: 400px;
    /* Ensure proper height calculation */
    height: auto;
    /* Make sure it starts at the very top */
    top: 0 !important;
}

/* Position waves at the bottom of the background image */
.bg-img .waves {
    position: absolute !important;
    bottom: 0 !important;
    left: 0 !important;
    width: 100% !important;
    margin: 0 !important;
    height: 5rem !important;
    margin-bottom: -7px !important; /* Keep the existing fix for Safari */
    /* Ensure waves don't interfere with positioning */
    z-index: 1;
}

/* Fix for central class causing spacing at top */
.bg-img .central {
    margin: 0 auto !important;
    padding-top: 0 !important;
    padding: 0 !important;
    /* Ensure it doesn't push content down */
    margin-top: 0 !important;
}

/* More specific override for central-800 class */
.bg-img .central.central-800 {
    margin: 0 auto !important;
    margin-top: 0 !important;
}

.wenan {
    color: rgb(97 97 97);
    transition: all 0.2s linear;
}

.alogo {
    color: rgb(97 97 97);
    transition: all 0.2s linear;
}

/* webkit, opera, IE9 (Google Chrome)*/
::selection {
    background: #6f6f6fc7;
    color: #ffffff;
}

/* mozilla firefox（Firefox） */
::-moz-selection {
    background: #6f6f6fc7;
    color: #ffffff;
}

.delay-03s {
    -webkit-animation-delay: .3s;
    animation-delay: .3s;
}

.Blurkg {
    backdrop-filter: blur(0px) !important;
    -webkit-backdrop-filter: blur(0px) !important;
    background: transparent !important;
}

.cpt-loading-mask.column {
    background: transparent !important;
}
</style>
<style>
<?php echo $diy['cssCon'] ?>
</style>