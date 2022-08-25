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
      padding: 20px;
      margin-top: 40px;
    }

    .container {
      margin-top: 20px;
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

    input {
      width: 90%;
      background: #ecf7fc;
      padding: 2px;
      border: none;
      border-bottom: 1px solid blue;
      border-left: 1px solid blue;
      border-radius: 5px;
      /* margin-top: 20px; */
    }

    .form {
      position: relative;
      left: 35%;
      top: 5%;
      transform: translate(-50% -50%);
      z-index: 100;
    }

    /* #this {
      box-shadow: red 2px 8px 4px;
    } */
    @media screen and (max-width: 768px) {
      .specialties {
        display: block;
        padding: 50px;
      }

      .specialties div {
        margin-top: 50px;
        margin-bottom: 50px;
      }
    }
  </style>
</head>

<body style="background: #333;">
  <?php include "header.php" ?>
  <div class="ish" id="oform" style="width: 100%; display:none; z-index:10; position:absolute; height:100vh; background:rgba(8, 8, 8, 0.7)">
    <h1 id="hide" style="text-align:center; color:red; cursor:pointer">&times;</h1>
    <div class="form" style="width: 30%; background:rgba(255, 255, 255, 0.5);">
      <h4 style="text-align: center;">Order</h4>
      <form style="width: 100%; padding:20px;" name="formz" action="process.php" method="POST">
        <input style="margin-top: 5px;" placeholder="🙍‍♂️First Name" name="first_name" type="text" required><span style="color:red">* </span><br>
        <input placeholder="🙍‍♂️Last Name" style="margin-top: 5px;" name="last_name" type="text" required><span style="color:red">* </span><br>
        <input type="text" placeholder="☎Phone" name="phone" style="margin-top: 5px;" required><span style="color:red">* </span><br>
        <input style="margin-top: 5px;" placeholder="🚩State" name="state" type="text"><span style="color:red">* </span><br><br>
        <input style="margin-top: 5px;" placeholder="🚩Local Government" name="localGovernment" type="text" required><span style="color:red">* </span><br>
        Pickup: <input type="radio" style="margin-top: 5px;" name="delivery" value="pickup" required><br> Delivery: <input type="radio" name="delivery" value="door delivery" style="margin-top: 5px;" required><span style="color:red">* </span>
        <br>
        <input style="margin-top: 5px;" id="item" placeholder="🎁Item" type="text" value="" name="item">* <span style="color:red">* </span>
        <br>
        <br>
        <input style="left: 10px;" style="margin-top: 5px;" placeholder="Quantity" id="quant" type="text" value="" name="quantity"><span style="color:red">* </span>
        <br>
        <br>
        <input style="padding:5px 10px; background:blue; color:white; border:none; border-radius:10px;" type="submit" value="Submit">
      </form>
    </div>
  </div>
  <div id="this" class="this shadow" style="width: 50px; position:fixed; bottom:50px; right:5%; z-index:50;">
    <button id="show" style="background:red; border-radius:5px; padding:5px 10px; color:whitesmoke">Order</button>
  </div>
  <div class="container">
    <h1 style="text-align: center; color:goldenrod">MENU</h1>
    <div class="specialties">
      <div class="one">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="./pictures/1651861390764.png" style="width: 100%;" alt=""></div>
        <div class="text">
          <h3 style="color: whitesmoke;">Sandwich <span style="color:red">$5</span></h3>
          <br>
          <p style="color: whitesmoke;">Dish often consist of fish, pickled vegetables and steamed vegetables.</p>
          <br>
        </div>
      </div>
      <div class="two">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="./pictures/1651861390728.png" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Chips <span style="color:red">$7</span></h3>
          <br>
          <p>Generally characterized of red meat, oysters, lobsters and processed meat.</p>
        </div>
      </div>
      <div class="three">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="./pictures/1651861390792.png" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Steak <span style="color:red">$10</span></h3>
          <br>
          <p>Dish often consist of fish, pork meat, hot soup, pickled and steamed vegetables.</p>
        </div>
      </div>
      <div class="four">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="./pictures/1651861390817.png" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Steak <span style="color:red">$10</span></h3>
          <br>
          <p>Most dishes consist of layers of meat, vegetables, sauce, nuts or curry</p>
        </div>
      </div>
      <div class="four">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Greens <span style="color:red">$10</span></h3>
          <br>
          <p>Most dishes consist of layers of meat, vegetables, sauce, nuts or curry</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h1 style="text-align: center; color:red">Drinks</h1>
    <div class="specialties">
      <div class="one">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="./pictures/1651861390612.png" style="width: 100%;" alt=""></div>
        <div class="text">
          <h3 style="color: whitesmoke;">Fizzup <span style="color:red">$2</span></h3>
          <br>
          <p style="color: whitesmoke;">Dish often consist of fish, pickled vegetables and steamed vegetables.</p>
        </div>
      </div>
      <div class="two">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="./pictures/1651861390667.png" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Pepsi <span style="color:red">$2</span></h3>
          <br>
          <p>Generally characterized of red meat, oysters, lobsters and processed meat.</p>
        </div>
      </div>
      <div class="three">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="./pictures/1651861390706.png" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Water <span style="color:red">$1</span></h3>
          <br>
          <p>Dish often consist of fish, pork meat, hot soup, pickled and steamed vegetables.</p>
        </div>
      </div>
      <div class="four">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="./pictures/1660680321274.png" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Water <span style="color:red">$1</span></h3>
          <br>
          <p>Most dishes consist of layers of meat, vegetables, sauce, nuts or curry</p>
        </div>
      </div>
      <div class="four">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Cocacola <span style="color:red">$2.5</span></h3>
          <br>
          <p>Most dishes consist of layers of meat, vegetables, sauce, nuts or curry</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h1 style="text-align: center;color:whitesmoke;">Special Dishes</h1>
    <div class="specialties">
      <div class="one">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
        <div class="text">
          <h3 style="color: whitesmoke;">Hamburger <span style="color:red">$7</span></h3>
          <br>
          <p style="color: whitesmoke;">Dish often consist of fish, pickled vegetables and steamed vegetables.</p>
        </div>
      </div>
      <div class="two">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="./pictures/pizza_PNG44077.png" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Jollof <span style="color:red">$10</span></h3>
          <br>
          <p>Generally characterized of red meat, oysters, lobsters and processed meat.</p>
        </div>
      </div>
      <div class="three">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="./pictures/1660680321334.jpg" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Chicken <span style="color:red">$10</span></h3>
          <br>
          <p>Dish often consist of fish, pork meat, hot soup, pickled and steamed vegetables.</p>
        </div>
      </div>
      <div class="four">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="./pictures/1660680321303.jpg" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Pizza <span style="color:red">$7</span></h3>
          <br>
          <p>Most dishes consist of layers of meat, vegetables, sauce, nuts or curry</p>
        </div>
      </div>
      <div class="four">
        <div class="pic" style="width: 50%; position:relative; left:25%;"><img src="/oncourse/pictures/1651861390845.png" style="width: 100%;" alt=""></div>
        <div class="text" style="color: whitesmoke;">
          <h3>Pizza<span style="color:red">$20</span></h3>
          <br>
          <p>Most dishes consist of layers of meat, vegetables, sauce, nuts or curry</p>
        </div>
      </div>
    </div>
  </div>
  <script>
    let show = document.getElementById("show");
    let close = document.getElementById("hide");
    let formEl = document.getElementById("oform");

    show.addEventListener("click", function() {
      formEl.style.display = "initial";
      formEl.style.position = "fixed";
      show.style.display = "none"
    })
    close.addEventListener("click", function() {
      formEl.style.display = "none";
      show.style.display = "initial";
    })
  </script>
  <?php include "footer.php" ?>
</body>

</html>