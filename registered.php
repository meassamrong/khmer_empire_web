<?php
include 'php/php_config.php';
if(isset($_POST['btnsubmit'])){
    $firstname          = $_POST["firstname"];
    $lastname           = $_POST["lastname"];
    $pemail             = $_POST["pemail"];
    $pdiscordid         = $_POST["pdiscordid"];
    $gender             = $_POST["gender"];
    $reason             = $_POST["reason"];
    $cityjob            = $_POST["cityjob"];
    $pprofileurl        = $_POST["pprofileurl"];
    $country            = $_POST["country"];
    $clientip           = $_POST["clientip"];
    
    $uploadderect = '/members';
    $filename   = uniqid() . "-" . time();
    $extension  = pathinfo($uploadderect . $_FILES["playerprofileimage"]["name"], PATHINFO_EXTENSION );
    $basename   = $filename . "." . $extension;
    $source       = $_FILES["playerprofileimage"]["tmp_name"];
    $destination  = "img/memberprofile/{$basename}";
    move_uploaded_file( $source, $destination );
    $sql = "INSERT INTO members (firstname, lastname, email, discordid, gender, reason, cityjob, profile_url, country, profile_img, ip)
    VALUES ('$firstname', '$lastname', '$pemail', '$pdiscordid', '$gender', '$reason', '$cityjob', '$pprofileurl','$country', '$basename', '$clientip')";

    if ($conn->query($sql) === TRUE) {
        $regiterationStat = 1;
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $regiterationStat = 0;

}}
if($regiterationStat == 0){
    echo "<h1>Your registeration is failed..!</h1>";
    header("Location: http://khmerempire.servegame.com/index.php");
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member card</title>
    <link rel="icon" type="image/x-icon" href="./img/fav-icon.webp">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/membercard_registered.css">
    <?php require'library/bootstrap.php';?>
</head>
<body>
    <div class="backgroun-image"><img src="img/player-background.jpg" alt=""></div>
    <div class="page">
        <div class="container">
        <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Well Done</h4>
                <p>You're successfully registered .</p>
                <hr>
                <p class="mb-0">Pls go to check member chanel <b>(#check-member)</b> in discord server <b>KHMER EMPIRE CITY RP</b></p>
                
                <div class="btnBack">
                    <a href="index.php" class="btn btn-primary">BACK</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>