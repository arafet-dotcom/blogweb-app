<html>
<head>
    <title> https://github.com/arafet-dotcom/blogweb-app </title>
</head>
<body>
    <img src='storage/my-excellent-blog.png'>
    <h1>Welcome to my excellent blog</h1>

    <?php
    $dbserver = "192.168.237.133";       // Remplace par l'IP de ta VM MySQL
    $dbuser = "blogdbuser";  // Remplace par ton utilisateur MySQL
    $dbpassword = "motdepasse123"; // Remplace par ton mot de passe MySQL

    try {
        $conn = new PDO("mysql:host=$dbserver;dbname=mysql", $dbuser, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }
    ?>
</body>
</html>

