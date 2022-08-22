<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./oncourse/bootstrap/css/bootstrap.css">
    <title>Document</title>
    <style>
        .fom {
            display: flex;
            justify-content: center;
            justify-self: center;
            justify-items: center;
        }

        form {
            width: 80%;
        }

        input {
            width: 90%;
            background: #ecf7fc;
            padding: 2px;
            border: none;
            border-bottom: 1px solid blue;
            border-left: 1px solid blue;
            border-radius: 5px;
        }

        .all {
            padding: 10px;
        }

        .fo {
            left: 35%;
            top: 25%;
            transform: translate(-50% -50%);
            position: absolute;
        }

        .body {
            background-image: url("./project/1660581698595.jpg");
            background-position: center;
            background-size: cover;
        }

        .pic {
            left: 30%;
        }

        input {
            width: 100%;
            background: rgba(128, 128, 128, 0.1);
            border: none;
        }

        .both {
            background: rgba(0, 0, 0, 0.3)
        }
    </style>
</head>

<body style="width: 100%; background:rgba(128,128,128,0.8)">
    <?php include "header.php"; ?>



    <div class="body" style="height: 90vh; width:100%; ">
        <div class="both">
            <!-- <div class="pic" style="width: 100px; background:yellowgreen">1</div> -->
            <div class="fo shadow" style="width: 30%; background:white;">
                <form style="width: 100%; padding:20px;" action="soongrad97@gmail.com" method="POST">
                    <h2>Contact Us</h2>
                    <input type="text" name="name" placeholder="Name" required>
                    <br>
                    <br>
                    <input type="email" name="name" placeholder="Email" required>
                    <br>
                    <br>
                    <textarea name="complaint" id="complaint" cols="30" rows="10" style="width: 100%;" placeholder="Type your message here...."></textarea>
                    <br>
                    <input style="color: white; background:blue; padding:5px 10px;" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </div>
    <div class="down" style="height: 30vh; text-align:center; width:100%; background:#333; color:white; padding: 50px">
        <h3><span>☎</span>call us on: +234 234 876</h3>
        or
        <h3><span>📧</span>Send us an email on Tonia Republic.gmail.com</h3>
    </div>

    <!-- <div class="head" style="text-align: center; color:white;">Group Members</div>
    <div class="body" style=" background:brown; width:100%;">
        <div class="all" style="padding: 20px;">
            <div class="team" style="text-align: left; width:50%; left:25%; position:relative; height:30vh;">
                <img style="float: left;" src="./ourteam/profile 1.svg" alt="" height="100px">
                <div class="name">Tari Salami </div>
                <div class="design">developer</div>
                <div class="about">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    Ut enim ad minim veniam,
                </div>
                <div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>

            <div class="team" style="text-align: right;width:50%; left:25%; position:relative;height:30vh">
                <img style="float: right;" src=" ./ourteam/profile 1.svg" alt="" height="100px">
                <div class="name">Ayinde Peter </div>
                <div class="design">developer</div>
                <div class="about">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    Ut enim ad minim veniam,
                </div>
                <div class="social-links">
                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-instagram-i"></i></a>
                    <a href="#"><i class="fa fa-twitter-t"></i></a>
                    <a href="#"><i class="fa fa-github-g"></i></a>
                </div>
            </div>

            <div class="team" style="text-align: left;width:50%; left:25%; position:relative;height:30vh">
                <img style="float: left;" src="./ourteam/profile 1.svg" alt="" height="100px">
                <div class="name">Tari Salami </div>
                <div class="design">developer</div>
                <div class="about">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    Ut enim ad minim veniam,
                </div>
                <div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
            <div class="team" style="text-align: right;width:50%; left:25%; position:relative;height:30vh">
                <img style="float: right;" src="./ourteam/profile 1.svg" alt="" height="100px">
                <div class="name">Tari Salami </div>
                <div class="design">developer</div>
                <div class="about">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    Ut enim ad minim veniam,
                </div>
                <div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
        </div> -->

    <!-- <div class="all " style="padding: 20px; position:relative; left:25%;">
        <div class="fom shadow" style="background: whitesmoke; width:50%; display:flex; justify-items:center; padding:30px 40px; transform:translate(-50% -50%); position:relative;">
            <br>
            <form action="submit-form.php" method="post">
                <legend style="background: rgba(0,0,0,0.1); border-radius:10px; text-align:center;"><img style="width:30%;" src="/oncourse/image1.png" alt=""></legend>
                <legend style="color: brown; font-weight:bold;">Order</legend>
                <div class="all">
                    <label for="name">Name</label><br>
                    <input type="text" name="name" placeholder="name..." required><br>
                    <label for="name">Email</label><br>
                    <input type="text" name="email" placeholder="email." required><br>
                    <label for="name">Phone</label><br>
                    <input type="text" name="phone" placeholder="phone number." required><br>
                    <label for="name">State</label><br>
                    <input type="text" name="state" placeholder="state." required><br>
                    <label for="name">Local Government</label><br>
                    <input type="text" name="localGovernment" placeholder="" required><br>
                    <label for="menu">Menu</label><br>
                    <select name="menu" id="menu"><br>
                        <option value="jollof-rice">Jollof rice and Chicken: #1500</option>
                        <option value="pounded-yam">Pounded Yam and Vegetable Soup: #1500</option>
                        <option value="goat-meat-pepper-soup">Pepper Soup(goat meat): #2000</option>
                    </select><br>
                    <label for="pizza">Pizza</label><br>
                    <select name="pizza" id="pizza">
                        <option value="complete-pizza">Complete pizza: #3500</option>
                        <option value="pizza-slice">pizza slice: #550</option>
                    </select><br>
                    <label for="beverages">Beverages</label><br>
                    <select name="drinks" id="drinks">
                        <option value="fanta">Fanta: #300</option>
                        <option value="coke">Coke: #300</option>
                        <option value="malt">Malt: #400</option>
                        <option value="malt">wine(Non-alcoholic): #2400</option>
                        <option value="malt">Bottle water: #200</option>
                    </select><br> <br>
                    <input type="submit" value="Place Order" style="width: 25%; border-radius:10px;border:none; padding:5px 10px; background:red; color:white;">
                </div>
        </div>
        <div class="main"></div>
        </form>
    </div> -->
    <?php include "footer.php"; ?>
    <script src="./oncourse/bootstrap/css/bootstrap.js">
    </script>
</body>

</html>