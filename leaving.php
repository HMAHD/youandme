<?php
include_once 'admin/connect.php';
include_once 'admin/Database.php';

$nub = "select count(id) as shu from leaving";
$res = mysqli_query($connect, $nub);
$leav = mysqli_fetch_array($res);
$shu = $leav['shu'];
$leavSet = "select * from leavSet order by id desc";
$Set = mysqli_query($connect, $leavSet);
$Setinfo = mysqli_fetch_array($Set);
$jiequ = $Setinfo['jiequ'];

$liuyan = "SELECT * FROM leaving order by id desc limit ?";
$stmt = $conn->prepare($liuyan);
$stmt->bind_param("i", $jiequ);
$jiequ = $Setinfo['jiequ'];
$stmt->bind_result($id, $name, $qq, $text, $time, $ip, $city);
$result = $stmt->execute();
if (!$result)
    echo "Error message:" . $stmt->error;

include_once 'head.php';
?>

<head>
    <meta charset="utf-8" />
    <title><?php echo $text['title'] ?> — <?php echo $text['card2'] ?></title>
    <!-- Gravatar script for profile pictures -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.19.0/js/md5.min.js"></script>
</head>

<body>

    <div id="pjax-container">
        <div class="MessageButtonCard" id="MessageBtn">
            <svg t="1730880204691" class="Message-Icon icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="13875" width="200" height="200">
                <path d="M512 96C229.2 96 0 282.3 0 512c0 92.1 36.8 177.1 99.1 246 4 4.5 5.3 10.9 3.1 16.5-5.7 14.7-12 29.2-19 43.3-12.9 26.3-28.2 51.7-45.3 75.5-6.2 8.6-7.7 19.7-4.1 29.6 3.6 10 11.9 17.5 22.2 20.1 9.4 2.4 25.2 5.4 44.8 5.4 26 0 58.7-5.4 91.5-25 21.4-12.8 37.5-28.6 49.3-44 4.5-5.9 12.5-7.9 19.3-4.8 74.2 34 159.8 53.4 251 53.4 282.8 0 512-186.3 512-416S794.8 96 512 96z m192 464c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z m-440-56c0-30.9 25.1-56 56-56s56 25.1 56 56-25.1 56-56 56-56-25.1-56-56z m192 0c0-30.9 25.1-56 56-56s56 25.1 56 56-25.1 56-56 56-56-25.1-56-56z" p-id="13876"></path>
            </svg>
        </div>
        <div class="central central-800 bg">
            <div class="title mt-2rem">
                <h1><?php echo $text['deci2'] ?></h1>
            </div>
            <h3>Received <b><?php echo $leav['shu'] ?></b> blessing messages <i class="jiequ"> (Display the latest <?php echo $jiequ ?> messages) </i></h3>

            <div class="row">
                <div class="card col-lg-12 col-md-12 col-sm-12 col-sm-x-12">
                    <?php
                    while ($stmt->fetch()) {
                    ?>
                        <div class="leavform <?php if ($Animation == "1") { ?>animated fadeInUp delay-03s<?php } ?>">
                            <div class="textinfo">
                                <div class="MsgTopInfo">
                                    <i class="time">
                                        <?php echo time_tran($time) ?> <b class="yuan"></b>
                                        <?php echo $city ? $city : 'unknown'; ?>
                                    </i>
                                </div>

                                <div class="user_info">
                                    <!-- Generate profile picture using Gravatar based on IP -->
                                    <img src="" class="gravatar" data-ip="<?php echo $ip; ?>" data-name="<?php echo htmlspecialchars($name); ?>">
                                    <span class="name"><?php echo $name ?></span>
                                </div>
                                <div class="text"><?php echo $text ?></div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <form action="admin/leavingPost.php" method="post">
                        <div class="inputbox" id="MessageArea">
                            <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y" alt="" class="avatar">
                            <input id="nickname" type="text" name="name" placeholder="Enter your name" class="let" required>
                        </div>
                        <textarea name="text" id="wenben" rows="8" placeholder="Please enter your message..." required></textarea>
                        <div class="input-sub">
                            <button type="button" id="leavingPost" class="tijiao">Submit Message
                                <svg style="width:1.3em;height: 1.3em;" t="1717899795089" class="icon"
                                    viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    p-id="28276" width="200" height="200">
                                    <path
                                        d="M620.8 179.2c12.8 12.8 6.4 32-6.4 44.8-19.2 6.4-38.4 6.4-44.8-12.8-44.8-70.4-128-115.2-217.6-115.2-140.8 0-256 115.2-256 256 0 89.6 44.8 166.4 115.2 217.6 19.2 6.4 19.2 25.6 12.8 38.4-12.8 19.2-32 19.2-44.8 12.8C89.6 563.2 32 460.8 32 352c0-179.2 140.8-320 320-320 108.8 0 211.2 57.6 268.8 147.2zM326.4 332.8l243.2 601.6 83.2-243.2c6.4-19.2 19.2-32 38.4-38.4L934.4 576 326.4 332.8z m25.6-57.6L960 518.4c32 12.8 51.2 51.2 38.4 83.2-6.4 19.2-19.2 32-38.4 38.4l-243.2 83.2L633.6 960c-12.8 32-44.8 51.2-83.2 38.4-19.2-6.4-32-19.2-38.4-38.4L268.8 358.4c-12.8-32 6.4-70.4 38.4-83.2 12.8-6.4 32-6.4 44.8 0z"
                                        fill="#ffffff" p-id="28277"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            // Generate Gravatar URL based on IP hash
            function generateGravatar(ip, name) {
                // Create a hash of the IP address
                var hash = md5(ip);
                // Return Gravatar URL with fallback to identicon
                return 'https://www.gravatar.com/avatar/' + hash + '?d=identicon&s=100';
            }

            // Set profile pictures for existing messages
            $(document).ready(function() {
                $('.gravatar').each(function() {
                    var ip = $(this).data('ip');
                    var name = $(this).data('name');
                    var gravatarUrl = generateGravatar(ip, name);
                    $(this).attr('src', gravatarUrl);
                });
            });

            $("#leavingPost").click(function() {
                let name = $("input[name='name']").val().trim();
                if (name.length == 0) {
                    toastr["warning"]("Please provide your name!", "You & Me");
                    return false;
                }

                let text = $("textarea[name='text']").val().trim();
                if (text.length == 0) {
                    toastr["warning"]("Please enter your message content!", "You & Me");
                    return false;
                } else if (text.length <= 2) {
                    toastr["warning"]("Please enter more than two characters!", "You & Me");
                    return false;
                }

                let nonub = /^[0-9]+$/;
                let weifan = new RegExp("[<?php echo $Setinfo['lanjiezf'] ?>]");
                if (nonub.test(text)) {
                    toastr["warning"]("The content is pure numbers and has been blocked!", "You & Me");
                    return false;
                } else if (weifan.test(text)) {
                    toastr["warning"]("You have entered forbidden words, please refrain from inappropriate language.", "You & Me");
                    return false;
                }

                if (!(name && text)) {
                    toastr["warning"]("Form information cannot be empty. Please complete the form first!", "You & Me");
                    return false;
                }

                $('#leavingPost').text('Submitting message...');
                $("#leavingPost").attr("disabled", "disabled");
                $.ajax({
                    url: "admin/leavingPost.php",
                    data: {
                        name: name,
                        text: text,
                    },
                    type: "POST",
                    dataType: "text",
                    success: function(res) {
                        setInterval(() => {
                            $('#leavingPost').removeAttr("disabled");
                        }, 5000);
                        if (res == 1) {
                            toastr["success"]("Message submitted successfully. Please refresh the page to view!", "You & Me");
                            $('#leavingPost').text('Message sent');
                            // Clear form
                            $("input[name='name']").val('');
                            $("textarea[name='text']").val('');
                        } else if (res == 0) {
                            toastr["error"]("Message submission failed!", "You & Me");
                            $('#leavingPost').text('Message failed');
                        } else if (res == 5 || res == 50) {
                            toastr["error"]("Message submission failed — Parameter error", "You & Me");
                            $('#leavingPost').text('Message failed');
                        } else if (res == 8) {
                            toastr["error"]("Message submission failed — You have already submitted a message today!", "You & Me");
                            $('#leavingPost').text('Message failed');
                        } else {
                            toastr["error"]("Unknown error!", "You & Me");
                        }
                    },
                    error: function(err) {
                        toastr["error"]("Network error, please try again later!", "You & Me");
                    }
                })
            });
        </script>
    </div>

    <?php
    include_once 'footer.php';
    ?>
</body>
</html>