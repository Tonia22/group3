<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="land.css">
</head>

<body>
    <div id="all" class="all">
        <div class="nav">
            <div style=" display:inline-flex; margin-top: 25px;" class="logo">
                <img style="width: 20%;" src="./pictures/1651861390764.png" alt="Logo">
                <h3 style="color: whitesmoke; font-style:italic;"><span style="color: red; font-style:oblique;">TONIA</span> REPUBLIC</h3>
            </div>
            <div style="margin-top: 25px;" class="links">
                <a href="land.php">Home</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="#"><span class="book" style="color: red;">Make a Table Reservation</span></a>
            </div>
            <div style="margin-top: 25px;" class="btn">
                <button>Order Now</button>
            </div>

        </div>

        <div class="body" style="height: 70vh;">

            <div class="text">
                <h5 style="color: gray;">🍜 EASY WAY TO ORDER FOOD</h5>
                <h1 style="font-weight:bold; font-size:50px; color:whitesmoke; line-height:60px;">Order Delicious, Tasty & Fresh Food With <br><span style="color: red; font-weight:bold;">The Click Of a Button!</span></h1>
                <h6 style="color: whitesmoke; line-height:30px;">Just confirm your order and enjoy our special delicacies, <br>will be swiftly delivered to your doorstep . </h6>
                <br>
                <button class="order" style="filter:brightness(200%)">Order Now</button>
                <br>
                <br>
                <div class="flow">
                    <img class="slide" id="ish" src="./pictures/1651861390728.png" alt="">
                    <!-- <img class="slide" style="animation-delay: 5s" src="./pictures/1651861390764.png" alt=""> -->
                    <!-- <img class="slide" style="animation-delay: 10s" src="./pictures/1651861390792.png" alt="">
                    <img class="slide" style="animation-delay: 15s" src="./pictures/1651861390817.png" alt="">
                    <img class="slide" style="animation-delay: 20s" src="./pictures/1651861390845.png" alt=""> -->
                </div>
                <br>
                <p>Antonia-Beplang-Philemon-David &copy; 2022</p>
            </div>
            <div class="image">
                <img id="big" src="./pictures/1651861390792.png" alt="">
            </div>
        </div>
    </div>
    </div>
    <!--TABLET DISPLAY-->
    <div class="tablet">
        <div class="nav2" style="background: whitesmoke; text-align:center;">
            <div style=" display:inline; text-align:center;  " class="log">
                <h3 style="color: black; font-style:italic; padding:10px;"><img style="width: 5%;" src="./pictures/1651861390764.png" alt="Logo"><span style="color: red; font-style:oblique;">TONIA</span> REPUBLIC</h3>
            </div>
            <div class="three">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="menu">
            <div class="close" id="close" style="font-size: 50px; color:red; ">&times;</div>
            <br>
            <a href="land.php">☎Home</a>
            <a href="about.php">❔About</a>
            <a href="contact.php">🏛Contact</a>
            <a href="#">Make a Table Reservation</a>
        </div>
        <br>
        <br>
        <br>
        <div class="pic" style="text-align: center;">
            <img id="big" src="./pictures/1651861390792.png" alt="">
        </div>
        <br>
        <div class="write" style="text-align: center;">
            <h5 style="color: gray;">🍜 EASY WAY TO ORDER FOOD</h5>
            <h1 style="font-weight:bold; font-size:50px; color:whitesmoke;">Order Delicious, Tasty & Fresh Food With <span style="color: red; font-weight:bold;">The Click Of a Button!</span></h1>
            <h6 style="color: whitesmoke; line-height:30px;">Just confirm your order and enjoy our special delicacies, will be swiftly delivered to your doorstep . </h6>
            <br>
            <button class="order">Order Now</button>
            <br>
            <br>
        </div>
    </div>
    <script>
        function changePic() {
            const all = [
                'url("./pictures/1651861390764.png")',
                'url("./pictures/1651861390792.png")',
                'url("./pictures/1651861390817.png")',
                'url("./pictures/1651861390845.png")',
                'url("./pictures/1651861390667.png")',
            ];

            const roll = document.getElementById("ish");
            const now = all[Math.floor(Math.random() * all.length)];
            roll.style.content = now;
        }
        setInterval(changePic, 1500);
    </script>
</body>

</html>