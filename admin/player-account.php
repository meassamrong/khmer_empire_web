<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Khmer Empire Player Account</title>
  <link rel="icon" type="image/x-icon" href=".././admin/img/fav-icon.webp">
  <link rel="stylesheet" href="css/side-bar.css">
  <link rel="stylesheet" href="css/player-accounts.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <?php require'library/get-lib.php'; ?>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <?php require'components/memu-side.php'; ?>
    <div class="container">
      <div class="title text-center text-white bg bg-primary"><h1>Player Accont</h1></div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <form action="#">
        <thead class="bg bg-success text-white">
            <tr>
                <th>Avatar</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Discord</th>
                <th>Genger</th>
                <th>National</th>
                <th>City Job</th>
                <th>Social</th>
                <th>IP</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
          include'php/connection.php';
          $sql = "SELECT * FROM members";
          $result = $conn->query($sql);

           if ($result-> num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                $imagedeir = "/../img/memberprofile/".$row["profile_img"];
                $membersName = $row["firstname"] ." ". $row['lastname'];
                $membersEmail = $row["email"];
                $membersDiscord = $row["discordid"];
                $membersGenger = $row["gender"];
                $membersNation = $row["country"];
                $membersCityJob = $row["cityjob"];
                $membersSocial = $row["profile_url"];
                $membersIP = $row["ip"];
                $membersStatus = $row["statusd"];
                $memberid = $row["id"];
              echo "<tr>";
              echo "<td><a href='.$imagedeir'><img class='player-avatar' src='.$imagedeir'></a></td>";
              echo    "<td>$membersName</td>";
              echo    "<td>$membersEmail</td>";
              echo    "<td>$membersDiscord</td>";
              echo    "<td>$membersGenger</td>";
              echo    "<td>$membersNation</td>";
              echo    "<td>$membersCityJob</td>";
              echo    "<td><a href='$membersSocial'>Click</a></td>";
              echo    "<td>$membersIP</td>";
              echo    "<td>$membersStatus</td>";
              echo    "<td><a href='?$memberid'><button type'button' class='btn btn-primary'>UPDATE</button></a></td>";
              echo  "</tr>";
            }}
            
            if(isset($_GET["$memberid"])){
              $sql = "UPDATE members SET statusd ='Approved' WHERE id = $memberid";
              if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Player $membersDiscord has been Approved');</script>";
              } else {
                echo "<script>alert('Player <b>$membersDiscord</b> has been Approved');</script>";
              }
            }
            $conn->close();
        ?>
        </tbody>
        </form>
        <tfoot class="bg bg-success text-white">
          <tr>
            <th>Avatar</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Discord</th>
            <th>Genger</th>
            <th>National</th>
            <th>City Job</th>
            <th>Social</th>
            <th>IP</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </tfoot>
    </table>
    </div>
    <script>
      $(document).ready(function () {
          $('#example').DataTable();
      });
    </script>
</body>
</html>