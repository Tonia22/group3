<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./about.css">

</head>

<body>
    <?php include "header.php"; ?>
    <div id="home" style="height: 90vh;">
        <div class="black" style="background: rgba(0,0,0,0.7); height:90vh;">
            <div class="about" style="display: flex; justify-content:center; align-items:center;">
                <h1 style="font-size: 6vw; text-align:center; width:50%;
  color: #000;
  background: #fff;
  padding: 20px 40px;
  mix-blend-mode: screen; margin-top:20px; font-weight:bolder; opacity:0.3;">What we do.</h1>
            </div>
            <div class="text" style="padding: 40px; text-align:center; font-size:2vw; color:whitesmoke;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt a ipsa corrupti nihil, optio sequi debitis sint provident hic id neque quisquam repellendus veniam exercitationem libero odio! Culpa similique autem, vel in consequuntur asperiores assumenda labore, non at sequi facilis dolorem consectetur error ducimus pariatur. Similique a amet aliquam facere?
            </div>
        </div>
    </div>
    <?php include "downHome.php"; ?>
    <?php include "footer.php"; ?>
    <script>
        function changeBg() {
            const images = [
                'url("./project/1660504299233.jpg")',
                // 'url("./project/1660504299255.jpg")',
                // 'url("./pictures/1651861390817.png")',
                'url("./project/1660504299273.jpg")',
                'url("./project/1660504299290.jpg")',

                'url("./project/image8.jpg")',
                // 'url("./pictures/big.jpg")',
                // 'url("./project/image10.jpg")',
                'url("./project/image3.jpg")',
                // "url(./project/image4.jpg)",
                // 'url("./project/image5.jpeg")',
                "url(./project/image6.jpg)",
                "url(./project/image7.jpg)",
                ///
                ///
                // "url(./project/image4.jpg)", 'url("./project/image5.jpeg")', "url(./project/image6.jpg)", "url(./project/image7.jpg)"
            ];

            const aboutEl = document.getElementById("home");
            const bg = images[Math.floor(Math.random() * images.length)];
            aboutEl.style.backgroundImage = bg;
            (aboutEl.style.transition = "linear"), "3s";
        }
        setInterval(changeBg, 1500);
    </script>
</body>

</html>