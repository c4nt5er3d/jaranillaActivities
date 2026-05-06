<?php
require_once 'classes/Counter.php';
// We access the counter from the Article View
$counter = Counter::getInstance();

if (isset($_GET['action']) && $_GET['action'] == 'increment') {
    $counter->increment();
    header("Location: article.php");
    exit();
}

include 'header.php';
?>

<h2>Full Article View</h2>

<img src="fullarticle.png" alt="Full Article Screenshot" class="feature-img">

<p>You are currently viewing the full text of the article.</p>
<p>Notice that the "Like" counter value below is exactly the same as it was on the News Feed page.</p>

<p>Because we use the <strong>Singleton Pattern</strong>, calling <code>Counter::getInstance()</code> here retrieves the exact same counter state, ensuring our tracking is global and consistent across all pages.</p>

<div class="counter-box">
    Total Global Likes: <strong><?php echo $counter->getCount(); ?></strong><br>
    <a href="article.php?action=increment" class="btn">Like Post from Full Article</a>
</div>

<?php include 'footer.php'; ?>
