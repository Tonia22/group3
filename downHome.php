<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/oncourse/bootstrap/css/bootstrap.css">
    <title>Document</title>
    <style>
        .specialties {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            text-align: center;
            grid-gap: 30px;
        }

        .specialties div:hover {
            background: rgba(218, 165, 32, 0.2);
            color: #333;
            margin-left: 10px;
            transition: linear 0.5s;
        }

        .one {
            /* background: blue; */
            background: rgba(8, 8, 8, 0.5);
            justify-content: center;
            justify-self: center;
            justify-items: center;
            text-align: center;
            padding: 20px;
            border-radius: 30px;
        }

        .one:hover {
            background: rgba(218, 165, 32, 0.2);
            color: #333;
        }

        .two {
            /* background: red; */
            background: rgba(8, 8, 8, 0.5);
            padding: 20px;
            border-radius: 30px;
        }

        .three {
            /* background: green; */
            background: rgba(8, 8, 8, 0.5);
            padding: 20px;
            border-radius: 30px;
        }

        .four {
            /* background: yellow; */
            background: rgba(8, 8, 8, 0.5);
            padding: 20px;
            border-radius: 30px;
        }

        .this {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 20px;
        }

        .second {
            height: 70vh;
            background: url('./project/1660504299290.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            filter: blur(0.5);
        }

        #inner {
            /* background: rgba(0, 0, 0, 0.7); */
            background: rgba(218, 165, 32, 0.6);
        }
    </style>
</head>

<body>
    <div class="first" style="background: #333; height: 70vh;">
        <div class="container" style="padding: 10px;">
            <div class="heading" style="color: goldenrod; font-style:italic; text-align:center;  padding: 10px;">
                <h4>Special</h4>
            </div>
            <div class="heading" style="color: whitesmoke; text-align:center; padding: 15px;">
                <h3>Our Special Cuisine</h3>
                <hr>
            </div>
            <!-- <br> -->
            <div class="specialties">
                <div class="one">
                    <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
                    <div class="text">
                        <h3 style="color: whitesmoke;">African</h3>
                        <br>
                        <p style="color: whitesmoke;">Dish often consist of fish, pickled vegetables and steamed vegetables.</p>
                    </div>
                </div>
                <div class="two">
                    <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
                    <div class="text" style="color: whitesmoke;">
                        <h3>Western</h3>
                        <br>
                        <p>Generally characterized of red meat, oysters, lobsters and processed meat.</p>
                    </div>
                </div>
                <div class="three">
                    <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
                    <div class="text" style="color: whitesmoke;">
                        <h3>Asian</h3>
                        <br>
                        <p>Dish often consist of fish, pork meat, hot soup, pickled and steamed vegetables.</p>
                    </div>
                </div>
                <div class="four">
                    <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
                    <div class="text" style="color: whitesmoke;">
                        <h3>Middle Eastern</h3>
                        <br>
                        <p>Most dishes consist of layers of meat, vegetables, sauce, nuts or curry</p>
                    </div>
                </div>
                <div class="four">
                    <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
                    <div class="text" style="color: whitesmoke;">
                        <h3>Middle Eastern</h3>
                        <br>
                        <p>Most dishes consist of layers of meat, vegetables, sauce, nuts or curry</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second">
        <div id="inner" style="height: 70vh; padding:50px; text-align:center">
            <div class="container">
                <div class="heading" style="color: whitesmoke; text-align:center; padding: 10px;">
                    <h3 style="color: white;">Meet our Top Notch Team</h3>
                    <hr>
                </div>
                <div class="this" style="padding: 50px;">
                    <div class="Antonia">
                        <div class="pic" style="width: 50%; position:relative; left:25%; border-radius:360px; padding:20px; background:white;">
                            <span style="font-size:40px">🙍‍♂️</span>
                            <!-- <img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""> -->
                        </div>
                        <div class="text" style="color: #333;">
                            <h3>Antonia</h3>
                            <!-- <br> -->
                            <p style="color:white">The head of operations at Tonia Republic. She's incharge of the day to day running of our restaurant</p>
                        </div>
                    </div>
                    <div class="Philemon">
                        <div class="pic" style="width: 50%; position:relative; left:25%; border-radius:360px; padding:20px; background:white;">
                            <span style="font-size:40px">🙍‍♂️</span>
                            <!-- <img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""> -->
                        </div>
                        <div class="text" style="color: #333;">
                            <h3>Philemon</h3>
                            <!-- <br> -->
                            <p style="color:white">The head of research, planning and Statistics at Tonia Republic.</p>
                        </div>
                    </div>
                    <div class="Biplang">
                        <div class="pic" style="width: 50%; position:relative; left:25%; border-radius:360px; padding:20px; background:white;">
                            <span style="font-size:40px">🙍‍♂️</span>
                            <!-- <img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""> -->
                        </div>
                        <div class="text" style="color: #333;">
                            <h3>Biplang</h3>
                            <!-- <br> -->
                            <p style="color:white">The chief accountant at Tonia Republic</p>
                        </div>
                    </div>
                    <div class="David">
                        <div class="pic" style="width: 50%; position:relative; left:25%; border-radius:360px; padding:20px; background:white;">
                            <!-- <img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""> -->
                            <span style="font-size:40px">🙍‍♂️</span>
                        </div>
                        <div class="text" style="color: #333;">
                            <h3>David</h3>
                            <!-- <br> -->
                            <p style="color:white">Just a regular guy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>