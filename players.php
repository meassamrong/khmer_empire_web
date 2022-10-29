<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/fav-icon.webp">
    <title>Khmer Empire City RP Player</title>
    <img id="cursor" src="img/caret-left-fill.svg" />
    <link rel="stylesheet" href="css/headers.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/players.css">
    <link rel="stylesheet" href="library/css/datable.css">
    <?php require'library/bootstrap.php';?>
    <script src="library/jquery.dataTable.min.js"></script>
</head>
<body>
    <div id="loading"><img src="img/loading-scene1.gif" alt=""></div>
    <div class="background-image"><img src="img/player-background.jpg" alt=""></div>
    <div class="page">
    <?php require'components/headers.php';?>
        <div class="container">
        <div class="plsyer-title">
           <div class="container">
           <h1 class="text-white"><i class="bi bi-graph-down"></i> Player Leaderboard</h1>
           </div>
        </div>
        <div class="players-DataTable">
            <table id="playertable" class="display playertable" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Extn.</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Extn.</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
    </div>
    <script src="main.js"></script>
    <script src="js/player-leaderbords.js"></script>
</body>
</html>