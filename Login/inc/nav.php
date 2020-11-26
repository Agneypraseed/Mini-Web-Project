<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FACULTY BASE</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>home.php?id=<?php echo $id;?>">HOME</a></li>
            <li><a href="<?php echo ROOT_URL;?>change.php?id=<?php echo $id;?>">CHANGE CREDENTIALS</a></li>
            <li><a>PROFILE</a></li>
            <li><a>ATTENDENCE</a></li>
            <li><a>MARK</a></li>
            <li><a href="<?php echo ROOT_URL;?>logout.php">LOG OUT</a></li>
          </ul>
        </div>
      </div>
    </nav>
