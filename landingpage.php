<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/oncourse/bootstrap/css/bootstrap.css">
    <style>
        .nav {
            display: grid;
            grid-template-columns: 2fr 5fr 1fr;
        }

        .all {
            background: url('./project/1660581698595.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .this {
            background: rgba(0, 0, 0, 0.6);
        }
    </style>
</head>

<body>
    <?php include "header.php" ?>
    <div class="all" style="height: 90vh; width:100%;">
        <div class="this" style="width: 100%; height:90vh">
            <!-- <div class="container"> -->
            <!-- <div class="nav">
            <div class="one" style="background: red;">1</div>
            <div class="two" style="background: yellow;">1</div>
            <div class="three" style="background: blue;">1</div>
            <div class="three" style="background: green;">1</div>
        </div> -->
            <!-- </div> -->
            <div class="welcome" style="position:absolute; left:20%; top:30%;transform:translate(-50% -50%); text-align:center; ">
                <h1 style="color: white; border:dotted white; padding:20px">Welcome To <span style="color: red;">Tonia</span> Republic Restaurant</h1>
                <br>
                <br>
                <h3 style="color: red;">We offer a variety of dishes to satisfy your taste buds</h3>
                <br>
                <br>
                <h6 style="color: white;">You can get your desired meals delivered to your doorstep with the click of a button</h6>
            </div>
        </div>
    </div>
    <div class="body" style="width: 100%; height:auto; background:rgba(238, 238, 238, 0.8);">
        <div class="Ourservices">
            <h2 style="text-align: center; padding:20px">Our Services</h2>
        </div>
        <br>
        <br>
        <h3 style="text-align: center; color:red">Fast Delivery</h3>
        <div class="container " style="width: 100%;  display:grid; grid-template-columns:repeat(2, 1fr); padding:50px">
            <div style="float: left; " class="img">
                <img style="float: left; border-top-left-radius:30px;border-bottom-left-radius:30px;" src="./project/delivery1first.jpg" width="100%" alt="">
            </div>
            <div class="text shadow" style="background:white; border-top-right-radius:30px;border-bottom-right-radius:30px;">
                <p style="height:330px; line-height:50px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium sint voluptatum dolores accusamus rerum aperiam necessitatibus sequi tenetur molestiae magni atque, laborum molestias in sit libero illo qui deleniti excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, labore nulla inventore repellat aliquid aut quasi veritatis tenetur temporibus cumque doloribus quod enim nemo praesentium aliquam eum a aperiam commodi.</p>
            </div>
            <!-- <img src=".project/delivery1first.jpg" alt=""> -->
        </div>
        <br>
        <br>
        <br>
        <h3 style="text-align: center; color:red">Customer Satisfaction</h3>
        <div class="container " style="width: 100%;  display:grid; grid-template-columns:repeat(2, 1fr); padding:50px">
            <div style=" background:white; border-top-left-radius:30px; border-bottom-left-radius:30px" class="img shadow">
                <p style="height:330px; line-height:50px; ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium sint voluptatum dolores accusamus rerum aperiam necessitatibus sequi tenetur molestiae magni atque, laborum molestias in sit libero illo qui deleniti excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, labore nulla inventore repellat aliquid aut quasi veritatis tenetur temporibus cumque doloribus quod enim nemo praesentium aliquam eum a aperiam commodi.</p>
            </div>
            <div class="text " style="border-top-right-radius:30px;border-bottom-right-radius:30px;">
                <img style="border-top-right-radius:30px;border-bottom-right-radius:30px;" src="./project/satisfaction.jpg" width="100%" alt="">
            </div>
            <!-- <img src=".project/delivery1first.jpg" alt=""> -->
        </div>
        <h3 style="text-align: center; color:red">Fast Delivery</h3>
        <div class="container " style="width: 100%;  display:grid; grid-template-columns:repeat(2, 1fr); padding:50px">
            <div style="float: left; " class="img">
                <img style="float: left; border-top-left-radius:30px; border-bottom-left-radius:30px" src="./project/delivery1first.jpg" width="100%" alt="">
            </div>
            <div class="text shadow" style="background:white; border-top-right-radius:30px;border-bottom-right-radius:30px;">
                <p style="height:330px; line-height:50px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium sint voluptatum dolores accusamus rerum aperiam necessitatibus sequi tenetur molestiae magni atque, laborum molestias in sit libero illo qui deleniti excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, labore nulla inventore repellat aliquid aut quasi veritatis tenetur temporibus cumque doloribus quod enim nemo praesentium aliquam eum a aperiam commodi.</p>
            </div>
            <!-- <img src=".project/delivery1first.jpg" alt=""> -->
        </div>
    </div>
    <?php include "footer.php" ?>
</body>

</html>