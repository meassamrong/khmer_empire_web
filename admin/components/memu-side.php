<?php 
  session_start();

?>
<div class="control-sidebbar">
    <div class="side-haead">
        <div class="title">Khmer Empire</div>
        <div class="user-account">
        <div class="min-max">
            <i class="bi bi-caret-left-square"></i>
        </div>
            <div class="row">
                <div class="user-profile-img">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/000/439/863/small/Basic_Ui__28186_29.jpg" alt="">
                </div>
                <div class="user-name">
                    <?php
                    if(!isset($_SESSION["EMAIL_SESSION"])){
                        header("Location: ../member.php");
                    }
                        if(isset($_SESSION["EMAIL_SESSION"])){
                            echo $_SESSION["EMAIL_SESSION"];
                        }
                        if(isset($_GET["logout"])){
                            session_destroy();
                            header("Location: ../");
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="control-memu">
        <ul>
            <li><a href="#"><i class="bi bi-bar-chart-line"></i> Dashboard</a></li>
            <li><a href="player-account.php"><i class="bi bi-person-circle"></i> Player-Account</a></li>
            <li><a href="#"><i class="bi bi-person-rolodex"></i> Player-Data </a></li>
            <li><a href="#"><i class="bi bi-person-lines-fill"></i> Player-Registeration</a></li>
        </ul>
    </div>
    <div class="sidebar-footer">
        <a href="?logout"><i class="bi bi-indent"></i> Logout</a>
    </div>
</div>