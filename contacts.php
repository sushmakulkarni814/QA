<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title> Quora for Engineers </title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/material.css">
    <link type="text/css" rel="stylesheet" href="fonts/font.css">
    <link rel="icon" href="images/qa.png">
</head>

<body id="_4">
    <!-- navigation bar -->
    <a href="index.php">
        <div id="log">
            <div id="ntro">Quora for Engineers</div>
        </div>
    </a>
    <ul id="nav-bar">
        <a href="index.php">
            <li>Home</li>
        </a>
        <a href="categories.php">
            <li>Categories</li>
        </a>
        <a href="contacts.php">
            <li id="home">Contact</li>
        </a>
        <a href="ask.php">
            <li>Ask Question</li>
        </a>
        <?php
        if (!isset($_SESSION['user'])) {
        ?>
            <a href="login.php">
                <li>Log In</li>
            </a>
            <a href="signup.php">
                <li>Sign Up</li>
            </a>
        <?php
        } else {
        ?>
            <a href="profile.php">
                <li>Hi, <?php echo $_SESSION["user"]; ?></li>
            </a>
            <a href="logout.php">
                <li>Log Out</li>
            </a>
        <?php
        }
        ?>
    </ul>
    <!-- content -->
    <div id="content" class="clearfix">

        <div id="box-1">
            <div class="heading">
                <center>
                    <h1 class="logo">
                        <div id="ntro">Tech Aliens</div>
                    </h1>
                    <p id="tag-line">where questions are themselves the answers</p>
                </center>
            </div>
        </div>
        <div id="box-2">
            <div id="text">
                <h1>Tech Aliens</h1>
                <p style="line-height: 20px;">
                    <a href="sushmakulkarni1818@gmail.com">sushmakulkarni1818@gmail.com</a><br>
                    Contact: +91 (***) ***-****<br>
                    Github: <a href="https://github.com/RakshaTiwari921">Github@RakshaTiwari921</a><br>
                    LinkedIn: <a href="https://www.linkedin.com/in/raksha-tiwari-425a73218/">Raksha Tiwari</a><br>
                </p>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div id="footer">
        &copy; 2022 &bull; Tech Aliens
    </div>

</body>

</html>