<!-- Avatar content -->
<div class="bg-img">
        <div class="central central-800">
            <div
                class="middle <?php if ($text['Animation'] == "1") { ?>animated fadeInDown<?php } ?> <?php if ($diy['Blurkg'] == "2") { ?>Blurkg<?php } ?>">
                <div class="img-male">
                    <img src="https://q1.qlogo.cn/g?b=qq&nk=<?php echo $text['boyimg'] ?>&s=640" draggable="false">
                    <span><?php echo $text['boy'] ?></span>
                </div>
                <div class="love-icon">
                    <img src="Style/img/like.svg" draggable="false">
                </div>
                <div class="img-female">
                    <img src="https://q1.qlogo.cn/g?b=qq&nk=<?php echo $text['girlimg'] ?>&s=640" draggable="false">
                    <span><?php echo $text['girl'] ?></span>
                </div>
            </div>
        </div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>