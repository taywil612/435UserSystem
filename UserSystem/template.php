<!DOCTYPE html>
<html>
<head>
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .article {
            width: 70%;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        h1 {
            text-align: center;
            width: 70%; 
            margin-top: 20px;
        }

        p {
            text-align: center;
            width: 70%; 
            margin: 0 auto; 
            word-break: break-all;
        }
    </style>
</head>
<body>
<nav class="navtop">
        <div>
            <h1>Website Title</h1>
            <a href="../profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class = "article">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $content; ?></p>
    </div>
</body>
</html>