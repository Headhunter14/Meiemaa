<div class="col-3">
    <div class="menu">
        <div class="panel-header text-center"><h3>Menüü</h3></div>
        <ul>
            <li><a href="home.php">Kodu</a></li>
            <?php
            $rights = getRights($_SESSION['username'], $mysqli);
            if($rights == "admin"){
                ?>
                <li><a class="not-active" href="admin">Admini paneel</a></li>
                <?php
            }
            ?>
            <li><a href="logout.php">Logi välja</a></li>
        </ul>
    </div>
</div>