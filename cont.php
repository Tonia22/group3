<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/oncourse/bootstrap/css/bootstrap-grid.css">
    <title>Document</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 50px;
        }

        .container2 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 50px;
        }

        .big {
            justify-content: center;
            justify-self: center;
            justify-items: center;
            align-items: end;
            align-self: end;
            align-content: end;
            padding: 10px;
        }

        #form {
            text-align: center;
            position: relative;
            left: 25%;
        }

        @media screen and (max-width: 768px) {
            .sum {
                display: block;
            }

            .all {
                display: block;
            }

            .all div {
                display: grid;
                grid-template-columns: 1fr;
            }
        }

        .fo input {
            border: none;
            border-bottom: 2px solid black;
            width: 50%;
        }
    </style>
</head>

<body>
    <?php include "header.php" ?>
    <div class="fill" style="width: 100%; height:100vh; margin-top:-20px; background:url('./project/1660581698595.jpg');background-position: center; background-size: cover;">
        <form id="form" style="background: white; margin-top:20px; padding:10px; width:50%; border-radius:20px;" name="formz" action="process.php" method="POST">
            <div class="card">
                <h3>Order</h3>
            </div>
            <div class="fo" style="padding: 20px;">
                <span style="color:red">* </span><input placeholder="🙍‍♂️First Name" name="first_name" type="text" required> <span style="color:red">* </span><input placeholder="🙍‍♂️Last Name" name="last_name" type="text" required><br><br>
                <input type="text" placeholder="☎Phone" name="phone" required><span style="color:red">* </span> <br><br>
                <input placeholder="🚩State" name="state" type="text"><span>* </span> <input placeholder="🚩Local Government" name="localGovernment" type="text" required><span>* </span><br><br>
                Pickup: <input type="radio" name="delivery" value="pickup" required> Delivery: <input type="radio" name="delivery" value="door delivery" required><span style="color:red">* </span>
                <br>
                Item:<input id="item" placeholder="🎁" type="text" value="" name="item">* <span></span>
                <!-- <h1 id="item">Item</h1> -->
                <br>
                <br>
                Quantity:<input style="left: 10px;" id="quant" type="text" value="" name="quantity"><span>* </span>
                <!-- <h1 id="quant">Quantity</h1> -->
                <br>
                <br>
                <br>
                <input style="padding:5px 10px; background:blue; color:white; border:none; border-radius:10px;" type="submit" value="Submit">
            </div>
        </form>
    </div>
    </div>
    <div class="sum">
        <div class="all">
            <h1 style="text-align: center;">MENU</h1>
            <div class="container" style="padding: 40px;">
                <div class="big shadow" style="width: 100%; text-align:center;">
                    <img src="./pictures/1651861390764.png" style="width: 100%;" alt="">
                    <h4 style="background: gray;">Sandwich <span style="color:red">$20</span></h4>
                    <div class="this" style="background:orangered;padding:5px;border-radius:20px; color:white; font-style:italic">
                        <div class="txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="process.php" method="POST"> -->
                        <input id="sandwich" type="checkbox" name="sandwich" value="sandwich">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="sandwichin" type="number" name="qty" style="width: 20%;"><br>
                        <br>
                        <button id="sandwichorder">select</button>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="big shadow" style="width: 100%; text-align:center;">
                    <img src="./pictures/1651861390728.png" style="width: 54%;" alt="">
                    <h4 style="background: gray;">Chips <span style="color:red">$20</span></h4>
                    <div class="this" style="background:orangered;padding:5px;border-radius:20px; color:white; font-style:italic">
                        <div class="txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="process.php" method="POST"> -->
                        <input id="chips" type="checkbox" name="greens" value="chips">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="chipsin" type="number" style="width: 20%;"><br>
                        <br>
                        <button id="chipsorder">Ord</button>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="big shadow" style="width: 100%; text-align:center;">
                    <img src="./pictures/1651861390792.png" style="width: 54%;" alt="">
                    <h4 style="background: gray;">Greens <span style="color:red">$20</span></h4>
                    <div class="this" style="background:orangered;padding:5px;border-radius:20px; color:white; font-style:italic">
                        <div class="txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="process.php" method="POST"> -->
                        <input id="greens" type="checkbox" name="greens" value="greens">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="greensin" type="number" style="width: 20%;"><br>
                        <br>
                        <button id="greensorder">Ord</button>
                        <!-- <input style="background: yellowgreen; padding:5px 10px; color:white; border:none; border-radius:5px;" type="submit" value="Order"> -->
                        <!-- </form> -->
                    </div>
                </div>
                <div class="big shadow" style="width: 100%; text-align:center;">
                    <img src="./pictures/1651861390817.png" style="width: 55%;" alt="">
                    <h4 style="background: gray;">Steak <span style="color:red">$20</span></h4>
                    <div class="this" style="background:orangered;padding:5px; border-radius:20px; color:white; font-style:italic">
                        <div class="txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="process.php" method="POST"> -->
                        <input id="steak" type="checkbox" name="greens" value="steak">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="steakin" type="number" style="width: 20%;"><br>
                        <br>
                        <button id="steakorder">Ord</button>
                        <!-- </form> -->
                    </div>
                </div>
                <!-- <div class="big">
                <form action="">1</form>
            </div>
            <div class="big">
                <form action="">1</form>
            </div>
            <div class="big">
                <form action="">1</form>
            </div> -->
            </div>
        </div>
        <div class="all" style="padding: 20px;">
            <h1 style="text-align: center;">Drinks</h1>
            <div class="container">
                <div class="big shadow" style="width: 100%; text-align:center;">
                    <img src="./pictures/1651861390612.png" style="width: 42%;" alt="">
                    <h4 style="background: gray;">Fizzup <span style="color:red">$5</span></h4>
                    <div class="this" style="background:orangered;padding:5px;border-radius:20px; color:white; font-style:italic">
                        <div class="txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="process.php" method="POST"> -->
                        <input id="fizzup" type="checkbox" name="greens" value="fizzup">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="fizzupin" type="number" style="width: 20%;"><br>
                        <br>
                        <button id="fizzuporder">Ord</button>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="big shadow" style="width: 100%; text-align:center;">
                    <img src="./pictures/1651861390667.png" style="width: 80%;" alt="">
                    <h4 style="background: gray;">Pepsi <span style="color:red">$5</span></h4>
                    <div class="this" style="background:orangered;padding:5px; border-radius:20px; color:white; font-style:italic">
                        <div class="txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="process.php" method="POST"> -->
                        <input id="pepsi" type="checkbox" name="greens" value="pepsi">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="pepsiin" type="number" style="width: 20%;"><br>
                        <br>
                        <button id="pepsiorder">Ord</button>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="big shadow" style="width: 100%; text-align:center;">
                    <img src="./pictures/1651861390706.png" style="width: 32%;" alt="">
                    <h4 style="background: gray;">Cocacola <span style="color:red">$7</span></h4>
                    <div class="this" style="background:orangered; padding:5px; border-radius:20px; color:white; font-style:italic">
                        <div class=" txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="process.php" method="POST"> -->
                        <input id="cocacola" type="checkbox" name="greens" value="cocacola">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="cocacolain" type="number" style="width: 20%;"><br>
                        <br>
                        <button id="cocacolaorder">Ord</button>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="big shadow" style="width: 100%; text-align:center; border-radius:20px;">
                    <img src="./pictures/1660680321274.png" style="width: 68%;" alt="">
                    <h4 style="background: gray;">Bottle Water <span style="color:red">$4</span></h4>
                    <div class="this" style="background:orangered; padding:5px; border-radius:20px; color:white; font-style:italic">
                        <div class=" txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="process.php" method="POST"> -->
                        <input id="water" type="checkbox" name="greens" value="water">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="waterin" type="number" style="width: 20%;"><br>
                        <br>
                        <button id="waterorder">Ord</button>
                        <!-- </form> -->
                    </div>
                </div>
                <!-- <div class="big">
                <form action="">1</form>
            </div>
            <div class="big">
                <form action="">1</form>
            </div>
            <div class="big">
                <form action="">1</form>
            </div> -->
            </div>
        </div>
        <div class="all" style="padding: 30px;">
            <h1 style="text-align: center;">Special Treat</h1>
            <div class="container">
                <div class="big shadow" style="width: 100%; text-align:center;">
                    <img src="./pictures/1651861390845.png" style="width: 80%;" alt="">
                    <h4 style="background: gray;">Hamburger <span style="color:red">$10</span></h4>
                    <div class="this" style="background:orangered;padding:5px;border-radius:20px; color:white; font-style:italic">
                        <div class="txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="process.php" method="POST"> -->
                        <input id="hamburger" type="checkbox" name="greens" value="hamburger">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="hamburgerin" type="number" style="width: 20%;"><br>
                        <br>
                        <button id="hamburgerorder">Ord</button>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="big shadow" style="width: 100%; text-align:center;">
                    <img src="./pictures/pizza_PNG44077.png" style="width: 59%;" alt="">
                    <h4 style="background: gray;">Pizza <span style="color:red">$15</span></h4>
                    <div class="this" style="background:orangered;padding:5px;border-radius:20px; color:white; font-style:italic">
                        <div class="txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="proces.php" method="POST"> -->
                        <input id="pizza" type="checkbox" name="greens" value="pizza">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="pizzain" type="number" style="width: 20%;"><br>
                        <br>
                        <button id="pizzaorder">Ord</button>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="big shadow" style="width: 100%; text-align:center;">
                    <img src="./pictures/1660680321334.jpg" style="width: 62%;" alt="">
                    <h4 style="background: gray;">Jollof Rice <span style="color:red">$13</span></h4>
                    <div class="this" style="background:orangered;padding:5px;border-radius:20px; color:white; font-style:italic">
                        <div class="txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="process.php" method="POST"> -->
                        <input id="jollof" type="checkbox" name="greens" value="jollof">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="jollofin" type="number" style="width: 20%;"><br>
                        <br>
                        <button id="jolloforder">Ord</button>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="big shadow" style="width: 100%; text-align:center;">
                    <img src="./pictures/1660680321303.jpg" style="width: 53%;" alt="">
                    <h4 style="background: gray;">Grilled Chicken <span style="color:red">$20</span></h4>
                    <div class="this" style="background:orangered;padding:5px;border-radius:20px; color:white; font-style:italic">
                        <div class="txt">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <!-- <form action="process.php" method="POST"> -->
                        <input id="chicken" type="checkbox" name="greens" value="grilled-chicken">:Pick<br>
                        <!-- Price: $10 <br> -->
                        Qty:<input id="chickenin" type="number" style="width: 20%;"><br>
                        <br>
                        <button id="chickenorder">Ord</button>
                        <!-- </form> -->
                    </div>
                </div>
                <!-- <div class="big">
                <form action="">1</form>
            </div>
            <div class="big">
                <form action="">1</form>
            </div>
            <div class="big">
                <form action="">1</form>
            </div> -->
            </div>
        </div>
    </div>
    <script>
        alert("Please select an item and the quantity, before proceeding to fill the order form. You can only pick one product at a time.");
        let fPro = document.getElementById("item");
        let fQua = document.getElementById("quant");
        let pQua = document.getElementById("sandwichin");
        let pQuaOne = document.getElementById("greensin");
        let pQuaChipsOne = document.getElementById("chipsin");
        let pQuaSteakOne = document.getElementById("steakin");
        let pQuaFizzupOne = document.getElementById("fizzupin");
        let pQuaPepsiOne = document.getElementById("pepsiin");
        let pQuaCocacolaOne = document.getElementById("cocacolain");
        let pQuaWaterOne = document.getElementById("waterin");
        let pQuaHamburgerOne = document.getElementById("hamburgerin");
        let pQuaPizzaOne = document.getElementById("pizzain");
        let pQuaJollofOne = document.getElementById("jollofin");
        let pQuaChickenOne = document.getElementById("chickenin");
        // let pQuaOne = document.getElementById("greensin");
        let pPro = document.getElementById("sandwich");
        let pProOne = document.getElementById("greens");
        let pChipsOne = document.getElementById("chips");
        let pSteakOne = document.getElementById("steak");
        let pFizzupOne = document.getElementById("fizzup");
        let pPepsiOne = document.getElementById("pepsi");
        let pCocacolaOne = document.getElementById("cocacola");
        let pWaterOne = document.getElementById("water");
        let pHamburgerOne = document.getElementById("hamburger");
        let pPizzaOne = document.getElementById("pizza");
        let pJollofOne = document.getElementById("jollof");
        let pChickenOne = document.getElementById("chicken");
        // let pProOne = document.getElementById("greens");
        let pushEl = document.getElementById("sandwichorder");
        let pushOne = document.getElementById("greensorder");
        let chipsOne = document.getElementById("chipsorder");
        let steakOne = document.getElementById("steakorder");
        let fizzupOne = document.getElementById("fizzuporder");
        let pepsiOne = document.getElementById("pepsiorder");
        let cocacolaOne = document.getElementById("cocacolaorder");
        let waterOne = document.getElementById("waterorder");
        let hamburgerOne = document.getElementById("hamburgerorder");
        let pizzaOne = document.getElementById("pizzaorder");
        let jollofOne = document.getElementById("jolloforder");
        let chickenOne = document.getElementById("chickenorder");
        // let pushOne = document.getElementById("greensorder");
        // let pushOne = document.getElementById("greensorder");


        pushEl.addEventListener("click", function() {
            // let qua = pQua.value;
            // let pro = pPro.value;
            fQua.value = pQua.value;
            fPro.value = pPro.value;
        });
        pushOne.addEventListener("click", function() {
            let qua = pQuaOne.value;
            let pro = pProOne.value;
            fQua.value = pQuaOne.value;
            fPro.value = pProOne.value;
        });
        chipsOne.addEventListener("click", function() {
            let qua = pQuaChipsOne.value;
            let pro = pChipsOne.value;
            fQua.value = pQuaChipsOne.value;
            fPro.value = pChipsOne.value;
        });
        steakOne.addEventListener("click", function() {
            fQua.value = pQuaSteakOne.value;
            fPro.value = pSteakOne.value;
        });
        fizzupOne.addEventListener("click", function() {
            // let qua = pQuaChipsOne.value;
            // let pro = pChipsOne.value;
            fQua.value = pQuaFizzupOne.value;
            fPro.value = pFizzupOne.value;
        });
        pepsiOne.addEventListener("click", function() {
            // let qua = pQuaChipsOne.value;
            // let pro = pChipsOne.value;
            fQua.value = pQuaPepsiOne.value;
            fPro.value = pPepsiOne.value;
        });
        cocacolaOne.addEventListener("click", function() {
            let qua = pQuaChipsOne.value;
            let pro = pChipsOne.value;
            fQua.value = pQuaCocacolaOne.value;
            fPro.value = pCocacolaOne.value;
        });
        waterOne.addEventListener("click", function() {
            let qua = pQuaChipsOne.value;
            let pro = pChipsOne.value;
            fQua.value = pQuaWaterOne.value;
            fPro.value = pWaterOne.value;
        });
        hamburgerOne.addEventListener("click", function() {
            let qua = pQuaChipsOne.value;
            let pro = pChipsOne.value;
            fQua.value = pQuaHamburgerOne.value;
            fPro.value = pHamburgerOne.value;
        });
        pizzaOne.addEventListener("click", function() {
            let qua = pQuaChipsOne.value;
            let pro = pChipsOne.value;
            fQua.value = pQuaPizzaOne.value;
            fPro.value = pPizzaOne.value;
        });
        jollofOne.addEventListener("click", function() {
            // let qua = pQuaChipsOne.value;
            // let pro = pChipsOne.value;
            fQua.value = pQuaJollofOne.value;
            fPro.value = pJollofOne.value;
        });
        chickenOne.addEventListener("click", function() {
            let qua = pQuaChipsOne.value;
            let pro = pChipsOne.value;
            fQua.value = pQuaChickenOne.value;
            fPro.value = pChickenOne.value;
        });
    </script>
    <?php include "footer.php" ?>
</body>

</html>