<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Please note. - </strong> The current version is still on beta you may encounter bugs - 2024/12/09 <button type="button"
        id="myButton" class="btn btn-secondary btn-rounded" data-toggle='modal' data-target='#bs-example-modal-lg'>View presentation</button>
</div>

<?php if ($login['user'] == $adminuser): ?>
    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Warning - </strong> The current account is the default account Please change it as soon as possible!
    </div>
<?php endif; ?>

<?php if ($login['pw'] == md5($adminpw)): ?>
    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Warning - </strong> The current password is the default password Please change it as soon as possible!
    </div>
<?php endif; ?>


<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Welcome to You & Me Site!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>After a year of development and honing, the You & Me ushered in the extended version [NewUI] has developed many practical enhancements to meet the requirements of the couple's records. </p>
                <p>If you are interested in please click the button below [View Details] for further information If you are disturbed Please go to [admin/index.php] to delete the comment reminds the location of the code can be cleared all the prompt content!</p>
                <p>Thank you for your use of the current June 1 limited edition Original Price<span class="badge badge-danger-lighten"><s>50</s></span>Buy now for only<span class="badge badge-success-lighten">238.88/元</span> 凭学生证即可立减30元 功能详情可点击下方按钮了解</p>
                <div>
                    <h3>LG_NewUi Couple Station 2024 Fall Edition</h3>
                    <ul>
                        <li>Version 2.0.0 (2023050108), released on 2023-04-30</li>
                        <li>Version 2.2.0 (2023052018), released on 2023-05-20</li>
                        <li>Version 2.3.1 (2023071013), released on 2023-07-10</li>
                        <li>Version 2.3.3 (2023072320), released on 2023-07-23</li>
                        <li>Version 3.1x (2023092220), released on 2023-09-22</li>
                        <li>Spring Festival Edition (20240207), released on 2024-02-06</li>
                        <li>May Day Edition (20240501), released on 2024-04-29</li>
                        <li>Children's Day Edition (20240601), released on 2024-06-01</li>
                        <li>2024 Fall Edition (20241018), released on 2024-10-18</li>
                    </ul>

                    <h4>Latest Version Update Details</h4>
                    <ul>
                        <li>Added cloud storage integration for site media (AWS S3, COS, OSS, Qiniu Cloud, Upyun)</li>
                        <li>Added admin storage strategy management page (add, preview, delete storage strategies)</li>
                        <li>Added admin toggle for guestbook message approval</li>
                        <li>Added admin toggle for guest messages in the guestbook</li>
                        <li>Added admin toggle to limit the number of guestbook messages displayed on the front end</li>
                        <li>Added support for editing basic information of guest messages in the admin panel</li>
                        <li>Added options to skip media compression and watermarking during file uploads</li>
                        <li>Added a feature to set avatar frames (preset/custom) for couple avatars in the top banner</li>
                        <li>Added support for guests to draw random preset blessing messages</li>
                        <li>Added support for guests to leave messages with emojis (TikTok, QQ, Coolapk, Bubble, Aru)</li>
                        <li>Added configuration options for Ministry of Public Security and ICP content filing</li>
                        <li>Added custom SEO keywords configuration for the website</li>
                        <li>Added support for custom timestamps when editing blog posts</li>
                        <li>Added custom music settings (cover, title, artist, audio URL) for blog posts</li>
                        <li>Added custom height settings for PC/mobile carousel banners</li>
                        <li>Added custom titles for the love duration card (total days counter)</li>
                        <li>Added custom heart icon URL for the couple avatar banner</li>
                        <li>Added a back button for secondary pages</li>
                        <li>Added a new mobile tab bar template (three total, one new)</li>
                        <li>Added support for custom video cover thumbnails when uploading videos in the love album</li>
                        <li>Added admin custom height settings for the album top banner</li>
                        <li>Added random sorting toggle and minimum image height settings for sub-albums</li>
                        <li>Added a 404 guide page and a generic page for illegal access and IP ban notices</li>
                    </ul>
                    <img src="https://blog.kikiw.cn/usr/uploads/2024/10/2968335545.png" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">disable</button>
                <button type="button" class="btn btn-primary"><a target="_blank" style="color: #fff;"
                        href="https://diary.us.kg/youandme-v5">View Details</a></button>
            </div>
        </div>
    </div>
</div>


<style>
    .modal-body img {
        width: 100%;
    }

    .modal-body ul li {
        line-height: 2rem
    }
</style>