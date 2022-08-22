<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="land.css">
    <style>
        #bi {
            animation-name: bi;
            animation-duration: 10s;
            animation-iteration-count: 1;
            animation-play-state: running;
            transition: linear 5s;
        }

        #ti {
            animation-name: ti;
            animation-duration: 10s;
            animation-delay: 1s;
            animation-iteration-count: 1;
            animation-play-state: running;
            transition: ease-in-out 5s all;
        }

        #ti:hover {
            position: relative;
            left: -50px;
            transition: linear 10s;
        }

        #ni:hover {
            position: relative;
            right: -50px;
            transition: linear 10s;
        }

        #bi:hover {
            position: relative;
            left: -50px;
            transition: linear 10s;
        }

        #ni {
            animation-name: ti;
            animation-duration: 20s;
            animation-delay: 0s;
            animation-iteration-count: 1;
            animation-play-state: running;
            transition: linear 5s;
            opacity: 1;
        }

        @keyframes ni {
            0% {
                /* position: relative; */
                /* right: -500px; */
                right: -500px;
                opacity: 0;
            }

            100% {
                /* right: 0px; */
                opacity: 1;
            }
        }


        @keyframes ti {
            0% {
                position: relative;
                right: -500px;
                opacity: 0.1;
            }

            100% {
                right: 0px;
                opacity: 1;
            }
        }

        @keyframes bi {
            0% {
                position: relative;
                left: -200px;
            }

            100% {
                left: 0px;
            }
        }
    </style>
</head>

<body>
    <div id="all" class="all" style="background-image: url('./project/1660581698595.jpg'); background-size:cover; background-position:center;">
        <div class="ha" style="background: rgb(0,0,0,0.6); height:100vh; width:100%;">
            <div class="nav">
                <div style=" display:inline-flex; margin-top: 25px;" class="logo">
                    <img style="width: 20%;" src="./pictures/1651861390764.png" alt="Logo">
                    <h3 style="color: whitesmoke; font-style:italic;"><span style="color: red; font-style:oblique;">TONIA</span> REPUBLIC</h3>
                </div>
                <div style="margin-top: 25px;" class="links">
                    <a href="home.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="contact.php">Contact</a>
                    <a href="appreciation.php"><span class="book" style="color: red;">Appreciation</span></a>
                </div>
                <div style="margin-top: 25px;" class="btn">
                    <button><a style="color: white; text-decoration:none" href="cont.php">Order Now</a></button>
                </div>

            </div>

            <div class="body" style="height: 70vh;">

                <div class="text">
                    <h5 style="color: gray;">🍜 EASY WAY TO ORDER FOOD</h5>
                    <h1 id="bi" style="font-weight:bold; font-size:50px; color:whitesmoke; line-height:60px;">Order Delicious, Tasty & Fresh Food With <br><span style="color: red; font-weight:bold;">The Click Of a Button!</span></h1>
                    <h6 id="ti" style="color: whitesmoke; line-height:30px;">Just confirm your order and enjoy our special delicacies. <br>Orders will be swiftly delivered to your doorstep . </h6>
                    <br>
                    <button id="ni" class="order" style="filter:brightness(200%); border:none;"><a style="color: white; text-decoration:none" href="cont.php">Order Now</a> </button>
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
                    <p style="color: white;">Antonia-Biplang-Philemon-David &copy; 2022</p>
                </div>
                <div class="image">
                    <img id="big" style="width: 100%;" src="./pictures/1651861390792.png" alt="">
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
            <a href="contact.php">☎Home</a>
            <a href="about.php">❔About</a>
            <a href="contact.php">🏛Contact</a>
            <a href="appreciation.php">Appreciation</a>
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
            <button class="order"><a style="color: white; text-decoration:none" href="cont.php">Order Now</a> </button>
            <br>
            <br>
        </div>
    </div>
    </div>
    <br>
    <script>
        function changeP() {
            const all = [
                'url("./pictures/1651861390764.png")',
                'url("./pictures/1651861390792.png")',
                // 'url("./pictures/1651861390817.png")',
                'url("./pictures/1651861390845.png")',
                // 'url("./pictures/1651861390728.png")',
            ];

            const roll = document.getElementById("big");
            const now = all[Math.floor(Math.random() * all.length)];
            roll.style.content = now;
            now.style.width = "20%"
        }
        setInterval(changeP, 2500);





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