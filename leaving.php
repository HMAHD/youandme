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
                                    <img src="https://q1.qlogo.cn/g?b=qq&nk=<?php echo $qq ?>&s=100">
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
                            <img src="https://i.ibb.co/cJDcYS4/whatsapp-svgrepo-com.png" alt="" class="avatar">
                            <input id="Telegram" type="text" name="telegram" placeholder="Enter your Telegram username" class="rig">
                            <input id="nickname" type="text" name="name" placeholder="Input your Name" class="let">
                        </div>
                        <textarea name="text" id="wenben" rows="8" placeholder="Please enter your message..."></textarea>
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
            $('#Telegram').blur(function() {
                let telegramUsername = $("#Telegram").val().trim();
                if (telegramUsername.length <= 0) {
                    return false;
                }
                $.ajax({
                    url: "https://api.telegram.org/7929953001:AAGlOJthc2jo5g93AtFcEfYu9kA46yLqgmo/getChat?chat_id=" + telegramUsername,
                    type: "GET",
                    timeout: 5000,
                    dataType: "json",
                    statusCode: {
                        500: function(response) {
                            loadingname();
                            setTimeout(function() {
                                removeLoading('test');
                                toastr["warning"]("Failed to fetch Telegram profile! API request timeout, please contact support.", "You & Me");
                            }, 2000);
                        }
                    },
                    success: function(result) {
                        if (result.ok) {
                            loadingname();
                            let userInfo = result.result;
                            $("#nickname").val(userInfo.first_name);
                            if (userInfo.photo_url) {
                                $(".avatar").attr("src", userInfo.photo_url);
                            }
                            setTimeout(function() {
                                removeLoading('test');
                                toastr["success"]("Successfully fetched nickname and profile picture.", "You & Me");
                            }, 1200);
                        } else {
                            removeLoading('test');
                            toastr["warning"](result.description, "You & Me");
                        }
                    },
                    error: function(xhr, status, error) {
                        removeLoading('test');
                        toastr["error"]("Request failed: " + error, "You & Me");
                    }
                });
            });

            $("#leavingPost").click(function() {
                let telegramUsername = $("input[name='telegram']").val().trim();
                let name = $("input[name='name']").val().trim();
                if (telegramUsername.length == 0) {
                    toastr["warning"]("Please provide your Telegram username!", "You & Me");
                    return false;
                } else if (name.length == 0) {
                    toastr["warning"]("Please provide your nickname!", "You & Me");
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

                if (!(telegramUsername && name && text)) {
                    toastr["warning"]("Form information cannot be empty. Please complete the form first!", "You & Me");
                    return false;
                }

                $('#leavingPost').text('Submitting message...');
                $("#leavingPost").attr("disabled", "disabled");
                $.ajax({
                    url: "admin/leavingPost.php",
                    data: {
                        telegramUsername: telegramUsername,
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
                        } else if (res == 0) {
                            toastr["error"]("Message submission failed!", "You & Me");
                            $('#leavingPost').text('Message failed');
                        } else if (res == 3 || res == 30) {
                            toastr["error"]("Message submission failed — Invalid Telegram username", "You & Me");
                            $('#leavingPost').text('Message failed');
                        } else if (res == 4 || res == 40) {
                            toastr["error"]("Message submission failed — Invalid IP address format", "You & Me");
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

            function loadingname() {
                $('body').loading({
                    loadingWidth: 240,
                    title: 'Fetching Telegram profile...',
                    name: 'test',
                    discription: 'Please wait a moment',
                    direction: 'column',
                    type: 'origin',
                    originDivWidth: 40,
                    originDivHeight: 40,
                    originWidth: 6,
                    originHeight: 6,
                    smallLoading: false,
                    loadingMaskBg: 'rgba(0,0,0,0.2)'
                });
            }
        </script>
    </div>

    <?php
    include_once 'footer.php';
    ?>


</body>

</html>