<?php
require_once 'classes/Counter.php';
// Get the single global instance of our Counter class
$counter = Counter::getInstance();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'increment') {
        $counter->increment();
    } elseif ($_GET['action'] == 'reset') {
        $counter->reset();
    }
    header("Location: index.php");
    exit();
}

include 'header.php';
?>

<h2>Project Report: Global Likes System</h2>

<h3>Problem Statement</h3>
<p>You are building a program that counts how many times a function is called. Different parts of the program call the counter. The count should always be shared and updated globally. No matter where you access it, the value must stay consistent. That's why we chose the Singleton pattern for this 'Global Likes' example to ensure that the count remains unified across the entire application.</p>

<p>This example perfectly illustrates the Singleton pattern because it requires a <strong>single source of truth</strong>. In a real-world social media app, 'likes' are not local to a single page; they are a global property of a post. By using a Singleton, we ensure that whether you are on the News Feed, the Article View, or the User Profile, you are interacting with the exact same counter instance, preventing data duplication and inconsistency.</p>

<h3>#Design Pattern Used</h3>
<p><strong>Singleton Design Pattern</strong></p>

<h3>#Why this matters?</h3>
<p>The Singleton pattern is like a <strong>Global Brain</strong>. Instead of every page having its own tiny memory, they all check in with this one instance. If you didn't use a Singleton, liking a post on the News Feed wouldn't update your Profile.</p>

<h3>#The Code</h3>
<p>Check out <code><a href="source.php#counter-class">classes/Counter.php</a></code> to see how we 'locked the door' with a <strong>Private Constructor</strong>. This ensures no one can accidentally create a second, conflicting counter.</p>

<div class="counter-box">
   
    <img src="newsfeed.png" alt="News Feed Screenshot" class="feature-img">
    <br>
    Total Global Likes: <strong style="font-size: 32px; color: #007bff;"><?php echo $counter->getCount(); ?></strong><br>
    <a href="index.php?action=increment" class="btn">Like from News Feed</a>
    <a href="index.php?action=reset" class="btn btn-danger">Reset</a>
    <p style="font-size: 12px; color: #adb5bd; margin-top: 10px;">The Reset button clears the <strong>Global State</strong> across all pages.</p>
</div>

<?php include 'footer.php'; ?>
