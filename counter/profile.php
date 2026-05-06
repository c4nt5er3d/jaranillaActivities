<?php
require_once 'classes/Counter.php';

// ANALOGY: Think of the Counter as a shared "Like Counter" at the mall.
// No matter which store you visit (article.php, profile.php, index.php),
// it's the SAME physical counter. Everyone adds to it, everyone sees the same total.
// Counter::getInstance() is like asking the mall manager for THE shared counter.
// There's only ONE instance—multiple pages don't create multiple counters.
$counter = Counter::getInstance();

if (isset($_GET['action']) && $_GET['action'] == 'increment') {
    // When someone clicks "Like" from this page, increment the shared counter.
    // This same counter was potentially incremented from article.php or index.php too.
    // All pages read and modify THE SAME shared counter object.
    $counter->increment();
    header("Location: profile.php");
    exit();
}

include 'header.php';
?>

<h2>User Profile View</h2>

<img src="userprofile.png" alt="User Profile Screenshot" class="feature-img">

<p>You have navigated to the author's user profile page, which displays their recent posts.</p>
<p>Try liking the post here and then navigate back to the Full Article or News Feed to see that the total like value remains perfectly consistent across the entire platform.</p>

<div class="counter-box">
    <!-- The counter value is ALWAYS the same here because we're reading from the single shared instance.
         Like checking the shared mall counter: no matter which store displays it, everyone sees the same number. -->
    Total Global Likes: <strong><?php echo $counter->getCount(); ?></strong><br>
    <a href="profile.php?action=increment" class="btn">Like Post from User Profile</a>
</div>

<?php include 'footer.php'; ?>
