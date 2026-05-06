<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Likes Tracker (Singleton Pattern)</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-color: #f8f9fa; color: #495057; }
        header { background-color: #343a40; color: #ffffff; padding: 25px; text-align: center; }
        header h1 { margin: 0; font-size: 28px; font-weight: 500; }
        nav { background-color: #e9ecef; border-bottom: 1px solid #dee2e6; display: flex; justify-content: center; }
        nav a { display: block; color: #495057; text-align: center; padding: 15px 25px; text-decoration: none; font-weight: 500; transition: background-color 0.2s; }
        nav a:hover { background-color: #dee2e6; color: #212529; }
        .container { padding: 40px; max-width: 750px; margin: 30px auto; background: #ffffff; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border-radius: 8px; border: 1px solid #e9ecef; }
        .counter-box { background-color: #fdfdfe; border: 1px solid #e2e8f0; padding: 30px; text-align: center; font-size: 22px; margin-top: 35px; border-radius: 8px; }
        .btn { background-color: #007bff; color: white; padding: 12px 24px; border: none; cursor: pointer; font-size: 16px; margin-top: 15px; border-radius: 6px; text-decoration: none; display: inline-block; font-weight: 500; transition: background-color 0.2s; }
        .btn:hover { background-color: #0056b3; }
        .btn-danger { background-color: #dc3545; margin-left: 10px; }
        .btn-danger:hover { background-color: #c82333; }
        h2, h3 { color: #212529; }
        h3 { margin-top: 35px; border-bottom: 1px solid #e9ecef; padding-bottom: 8px; }
        p { line-height: 1.6; color: #6c757d; }
        code { font-family: Consolas, monospace; background: #f1f3f5; padding: 2px 6px; border-radius: 4px; color: #d63384; }
        .feature-img { width: 100%; height: auto; border-radius: 8px; margin: 20px 0; border: 1px solid #dee2e6; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

<header>
    <h1>Global Likes Tracker</h1>
</header>

<nav>
    <a href="index.php">News Feed (Report)</a>
    <a href="article.php">Full Article</a>
    <a href="profile.php">User Profile</a>
    <a href="source.php">Source Code</a>
</nav>

<div class="container">
