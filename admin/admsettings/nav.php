<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../admin.php" style="margin-left: 10%;">Главная</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href=""><span class="glyphicon glyphicon-user"></span> Привет, <?= $_SESSION["name"]?></a></li>
      <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span>  Выйти</a></li>
    </ul>
  </div>
</nav>