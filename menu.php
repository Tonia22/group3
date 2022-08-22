<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
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
        .specialties{
            padding: 30px;
            margin-top:50px;
        }
    </style>
</head>
<body>
<div class="specialties">
                <div class="one" >
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
                <!-- <div class="four">
                    <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
                    <div class="text" style="color: whitesmoke;">
                        <h3>Middle Eastern</h3>
                        <br>
                        <p>Most dishes consist of layers of meat, vegetables, sauce, nuts or curry</p>
                    </div> -->
</div>
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
                <!-- <div class="four">
                    <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
                    <div class="text" style="color: whitesmoke;">
                        <h3>Middle Eastern</h3>
                        <br>
                        <p>Most dishes consist of layers of meat, vegetables, sauce, nuts or curry</p>
                    </div> -->
</div>
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
                <!-- <div class="four">
                    <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
                    <div class="text" style="color: whitesmoke;">
                        <h3>Middle Eastern</h3>
                        <br>
                        <p>Most dishes consist of layers of meat, vegetables, sauce, nuts or curry</p>
                    </div> -->
</div>
</body>
</html>