<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'usertest';

$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ( mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ($_POST) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Insert the news article into the database
    $sql = "INSERT INTO news_articles(title, content) VALUES ('$title', '$content')";
    $conn->query($sql);

    // Generate Static Page
    ob_start();
    include('template.php'); // Create a template file for the layout
    $pageContent = ob_get_contents();
    ob_end_clean();

    // filename for the static HTML page
    $staticFileName = 'news/' . strtolower(str_replace(' ', '_', $title)) .'.html';

    file_put_contents($staticFileName, $pageContent);

    header('Location: home.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create News Article</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
<nav class="navtop">
        <div>
            <h1>Website Title</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>

    <h1>Add News</h1>
    <form method="POST" action="add_news.php">
        <label for="title">Title:</label>
        <input type="text" name="title" required><br><br>

        <label for="content">Content:</label>
        <textarea name="content" rows="5" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>