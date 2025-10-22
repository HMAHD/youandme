<?php
// Include database connection for fetching real data
include_once 'admin/connect.php';

// Fetch message count
$message_count = 0;
$message_query = "SELECT COUNT(id) as count FROM leaving";
$message_result = mysqli_query($connect, $message_query);
if ($message_result) {
    $message_row = mysqli_fetch_assoc($message_result);
    $message_count = $message_row['count'];
}

// Fetch gallery count
$gallery_count = 0;
$gallery_query = "SELECT COUNT(id) as count FROM loveImg";
$gallery_result = mysqli_query($connect, $gallery_query);
if ($gallery_result) {
    $gallery_row = mysqli_fetch_assoc($gallery_result);
    $gallery_count = $gallery_row['count'];
}
?>

<?php
// Include the modern footer component
include_once 'components/footer.php';
?>

<?php echo htmlspecialchars_decode($diy['footerCon'], ENT_QUOTES) ?>