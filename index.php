<?php
// You can define variables for dynamic content
$title = "Welcome to My Websitessssssss";
$greeting = "Hello, Welcome to My Site!";
$introText = "This is a simple introduction page created using PHP. We can add dynamic content easily with PHP to make the page more interactive.";
$aboutText = "This site showcases how PHP can be integrated with HTML to create a dynamic web page. You can use PHP to interact with databases, process forms, and customize content based on user input.";

// Current date and time (for dynamic content)
$currentDate = date("l, F j, Y");  // Example: Wednesday, December 26, 2024
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .content {
            margin: 20px;
        }
        .intro {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .about {
            font-size: 1em;
            line-height: 1.6;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $title; ?></h1>
</header>

<div class="content">
    <p class="intro"><?php echo $greeting; ?></p>
    <p><?php echo $introText; ?></p>
    
    <h2>About This Website</h2>
    <p class="about"><?php echo $aboutText; ?></p>

    <p><strong>Current Date:</strong> <?php echo $currentDate; ?></p>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> My Website. All Rights Reserved.</p>
</footer>

</body>
</html>

