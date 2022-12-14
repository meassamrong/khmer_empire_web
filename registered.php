
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
    <script src="library/jquery.3.3.js"></script>
</head>
<body>
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
    $registerStat       = "Padding";
    // check discordID

    $uploadderect = '/members';
    $filename   = uniqid() . "-" . time();
    $extension  = pathinfo($uploadderect . $_FILES["playerprofileimage"]["name"], PATHINFO_EXTENSION );
    $basename   = $filename . "." . $extension;
    $source       = $_FILES["playerprofileimage"]["tmp_name"];
    $destination  = "img/memberprofile/{$basename}";
    move_uploaded_file( $source, $destination );
    $sql = "INSERT INTO members (firstname, lastname, email, discordid, gender, reason, cityjob, profile_url, country, profile_img, ip, statusd)
    VALUES ('$firstname', '$lastname', '$pemail', '$pdiscordid', '$gender', '$reason', '$cityjob', '$pprofileurl','$country', '$basename', '$clientip', '$registerStat')";

?>
    <div class="backgroun-image"><img src="img/player-background.jpg" alt=""></div>
    <div class="page">
        <div class="container">
        <div class="alert alert-success" role="alert">
                <h4 id="statustitle" class="alert-heading"></h4>
                <p>You're successfully registered .</p>
                <hr>
                <p class="mb-0">Pls go to check member chanel <b>(#check-member)</b> in discord server <b>KHMER EMPIRE CITY RP</b></p>
                <div class="btnBack">
                    <a href="index.php" class="btn btn-primary">BACK</a>
                </div>
            </div>
        </div>
    </div>
    <?php 
    if ($conn->query($sql) === TRUE) {
        sleep(3);
        echo"<script>";
        echo"$('#statustitle').html('Your Registeration Well Done !')";
        echo"</script>";
    } else {
        echo"<script>";
        echo"$('#statustitle').html('Your Registeration Failed !')";
        echo"$('#statustitle').css('color','red');";
        echo"$('.alert').addClass('alert-warning')";
        echo"</script>";
}}
$conn->close();?>
</body>
</html>