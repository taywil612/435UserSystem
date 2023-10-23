<?php
session_start();

//Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'usertest';

// Try and connect using the info above.
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ( mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}



    // Set the number of articles per page
    $articlesPerPage = 10;

    // Get the current page from the query string, default to page 1
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Calculate the starting point for the query
    $start = ($page - 1) * $articlesPerPage;

    // Query to retrieve a page of news articles
    $sql = "SELECT * FROM news_articles LIMIT $start, $articlesPerPage";
    $result = $conn->query($sql);

    $articles = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $articles[] = $row;
        }
    }

    // Query to count the total number of news articles
    $countSql = "SELECT COUNT(*) as total FROM news_articles";
    $countResult = $conn->query($countSql);
    $totalArticles = $countResult->fetch_assoc()['total'];

    // Close the database connection
    $conn->close();
?>
       
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>News Articles</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>Website Title</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>

    <div class="content">
        <h2>News Articles</h2>
        <?php
        //Display table records
        foreach ($articles as $article) {
            echo "<h3>{$article['title']}</h3>";
            echo "<p>{$article['content']}</p>";
        }

        // Pagination, show page number in link
        $totalPages = ceil($totalArticles / $articlesPerPage);
        echo "<div class='pagination'>";
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<a href='news_article.php?page=$i'>$i</a>";
        }
        echo "</div>";
       ?>
    </div>

</body>
</html>




