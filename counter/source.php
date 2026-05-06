<?php
include 'header.php';

// Helper function to render a code block with an ID
function renderCodeBlock($filePath, $id, $title) {
    echo "<div id='$id' class='code-section'>";
    echo "<h3>$title</h3>";
    echo "<div class='code-container'>";
    $code = file_get_contents($filePath);
    highlight_string($code);
    echo "</div>";
    echo "</div>";
}
?>

<h2>System Source Code</h2>
<p>Below is the complete implementation of the Singleton pattern. Use the navigation links in the report to jump to specific logic blocks.</p>

<div class="source-nav">
    Jump to: 
    <a href="#counter-class">Counter Class</a> | 
    <a href="#index-logic">Index Logic</a> | 
    <a href="#article-logic">Article Logic</a>
</div>

<?php
renderCodeBlock('classes/Counter.php', 'counter-class', '1. The Singleton (classes/Counter.php)');
renderCodeBlock('index.php', 'index-logic', '2. Entry Point (index.php)');
renderCodeBlock('article.php', 'article-logic', '3. Consistency Check (article.php)');
?>

<style>
    .code-section {
        margin-top: 40px;
        padding-top: 20px;
        border-top: 2px solid #eee;
    }
    .code-container {
        background: #fdfdfd;
        padding: 15px;
        border-radius: 8px;
        border: 1px solid #ddd;
        overflow-x: auto;
        font-size: 14px;
        line-height: 1.5;
    }
    /* highlight_string output tweaks */
    .code-container code {
        background: transparent !important;
        padding: 0 !important;
    }
    .source-nav {
        background: #f1f3f5;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .source-nav a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }
    h3 {
        color: #343a40;
    }
</style>

<?php include 'footer.php'; ?>
