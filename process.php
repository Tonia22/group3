

<?php
// echo $fistname = $_REQUEST["firstName"] . "<br>";
// echo $lastname = $_REQUEST["lastName"] . "<br>";
// echo $phone = $_REQUEST["phone"] . "<br>";
// echo $state = $_REQUEST["state"] . "<br>";
// echo $localGovernment = $_REQUEST["localGovernment"] . "<br>";
// echo $delivery = $_REQUEST["delivery"] . "<br>";
// echo $item = $_REQUEST["item"] . "<br>";
// echo $quantity = $_REQUEST["quantity"] . "<br>";
// echo $sandwich = $_REQUEST["sandwich"] . "<br>";
////
////
////
////
// echo $chips = $_REQUEST["chips"] . "<br>";
// echo $sandwich = $_REQUEST["sandwich"] . "<br>";
// echo $greens = $_REQUEST["greens"] . "<br>";
// echo $steak = $_REQUEST["steak"] . "<br>";
// echo $steak = $_REQUEST["steak"] . "<br>";
// echo $fizzup = $_REQUEST["fizzup"] . "<br>";
// echo $pepsi = $_REQUEST["pepsi"] . "<br>";
// echo $cocacola = $_REQUEST["cocacola"] . "<br>";
// echo $water = $_REQUEST["water"] . "<br>";
// echo $hamburger = $_REQUEST["hamburger"] . "<br>";
// echo $pizza = $_REQUEST["pizza"] . "<br>";
// echo $jollof = $_REQUEST["jollof"] . "<br>";
// echo $grilledChicken = $_REQUEST["grilledChicken"] . "<br>";



// $link = mysqli_connect("localhost", "root", "", "toniaRepublic");

// if ($link === false) {
//     die("ERROR: Could not connect. please try again" . mysqli_connect_error());
// }

// $sql = "INSERT INTO orders (firstName, lastName, phoneNumber, delivery, item, quantity) VALUES (?,?,?,?,?,?)";

// if ($stmt = mysqli_prepare($link, $sql)) {
//     mysqli_stmt_bind_param($stmt, "ssissi", $firstName, $last_name, $phoneNumber, $delivery, $item, $quantity);

//     $firstName = $_POST["first_name"];
//     $last_name = $_REQUEST["last_name"];
//     $phoneNumber = $_REQUEST['phone'];
//     $state = $_REQUEST['state'];
//     $localGovernment = $_REQUEST['localGovernment'];
//     $delivery = $_REQUEST['delivery'];
//     $item = $_REQUEST['item'];
//     $quantity = $_REQUEST['quantity'];

//     if (mysqli_stmt_execute($stmt)) {
//         echo "Record inserted successfully.";
//     } else {
//         echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
//     }
// } else {
//     echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
// }

// mysqli_stmt_close($stmt);
// mysqli_close($link);

$firstName = $lastName = $phone = $state = $localGovernment = $delivery = $item = $quantity = "";
$fnameErr = $lnameErr = $phoneErr = $stateErr = $localGovernmentErr = $deliveryErr = $itemErr = $quantityErr = "";

function cleanInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}


if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    if (empty($_POST["first_name"])) {
        $fnameErr = "first name is required";
    } else {
        $firstName = cleanInput($_POST["first_name"]);
        if (!preg_match("/^[a-zA-Z']+$/ ", $firstName)) {
            $fnameErr = "Only letters and white spaces allowed";
        }
    }
    if (empty($_POST["last_name"])) {
        $lnameErr = "last name is required";
    } else {
        $last_name = cleanInput($_POST["last_name"]);
        if (!preg_match("/^[a-zA-Z-']*$/ ", $lastName)) {
            $lnameErr = "Only letters and white spaces allowed";
        }
    }
}
if (empty($_POST["phone"])) {
    $phoneErr = "phone number is required";
} else {
    $phone = cleanInput($_POST["phone"]);
    if (!preg_match('/^[0-9]{10}+$/ ', $phone)) {
        $phoneErr = "Invalid Phone Number";
    }
}
if (empty($_POST["state"])) {
    $stateErr = "state is required";
} else {
    $state = cleanInput($_POST["state"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/ ", $state)) {
        $fnameErr = "Only letters and white spaces allowed";
    }
}
if (empty($_POST["localGovernment"])) {
    $localGovernmentErr = "Local government area is required";
} else {
    $localGovernment = cleanInput($_POST["localGovernment"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/ ", $state)) {
        $fnameErr = "Only letters and white spaces allowed";
    }
}
if (empty($_POST["delivery"])) {
    $deliveryErr = "field required is required";
} else {
    $delivery = cleanInput($_POST["delivery"]);
}
if (empty($_POST["item"])) {
    $itemErr = "specify item from the menu below";
} else {
    $item = cleanInput($_POST["item"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/ ", $state)) {
        $fnameErr = "Only letters and white spaces allowed";
    }
}
if (empty($_POST["quantity"])) {
    $quantityErr = "quantity is required";
} else {
    $quantity = cleanInput($_POST["quantity"]);
    if (!preg_match('/^[0-9]{10}+$/ ', $phone)) {
        $phoneErr = "Invalid Phone Number";
    }
}







$link = mysqli_connect("localhost", "root", "", "toniaRepublic_d");

if ($link === false) {
    die("ERROR: Could not connect. please try again" . mysqli_connect_error());
}

$sql = "INSERT INTO orders (firstName, lastName, phone, provine_state, localGovernment, delivery, item, quantity) VALUES (?,?,?,?,?,?,?,?)";

if ($stmt = mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, "ssissssi", $firstName, $last_name, $phone, $state, $localGovernment, $delivery, $item, $quantity);

    $firstName = $_POST["first_name"];
    $last_name = $_REQUEST["last_name"];
    $phone = $_REQUEST['phone'];
    $state = $_REQUEST['state'];
    $localGovernment = $_REQUEST['localGovernment'];
    $delivery = $_REQUEST['delivery'];
    $item = $_REQUEST['item'];
    $quantity = $_REQUEST['quantity'];
    // $firstName = $_REQUEST['firstName'];

    if (mysqli_stmt_execute($stmt)) {
        echo "Record inserted successfully✔✔✔.";
    } else {
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }
} else {
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}

mysqli_stmt_close($stmt);
mysqli_close($link);
?>