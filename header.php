<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./header.css">
</head>

<body>
    <div class="top">
        <div class="logo">
            <img style="width: 50%;" src="./image1.png" alt="">
        </div>
        <div class="links">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact </a>
            <a href="appreciation.php" style="color: red;">Appreciation</a>
        </div>
        <div class="buttons">
            <button id="order"><a style="color: white; text-decoration:none;" href="cont.php">Order</a></button>
        </div>
        <div id="three" class="three">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="tablet shadow">
        <a href="home.php">🏛Home</a>
        <a href="about.php">❔About</a>
        <a href="contact.php">☎contact</a>
        <a href="appreciation.php" style="color: red;font-weight:bold;">Appreciation</a>
    </div>
    <div id="menu" class="menu">
        <span style="color: red; font-size:20px; text-align:right;">
            <h3 id="close">&times;</h3>
        </span>
        <div class="items">
            <a href="home.php">🏛Home</a>
            <a href="about.php">❔About</a>
            <a href="contact.php">☎contact</a>
            <a href="appreciation.php" style="color: red;font-weight:bold;">Appreciation</a>
            <br>
            <button id="ord"><a href="cont.php">Order</a></button>
            <br>
            <br>
            <br>
            Antonia-Philemon-Biplang-David &copy; 2022.
        </div>
    </div>
    <script>
        let openEl = document.getElementById("three");
        let closeEl = document.getElementById("close");
        let menuEl = document.getElementById("menu");

        openEl.addEventListener("click", function() {
            menuEl.style.left = "0px";
            openEl.style.display = "none";
        })
        closeEl.addEventListener("click", function() {
            menuEl.style.left = "-200px";
            openEl.style.display = "initial";
            if (!window >= "560px") {
                openEl.style.display = "initial";
            }

        })
    </script>
</body>

</html>