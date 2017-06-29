
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><svg class="Gnav-logo-image" xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 24 20" focusable="false">
                <path fill="#FF0000" d="M15.1,0H24v20L15.1,0z M8.9,0H0v20L8.9,0z M12,7.4L17.6,20h-3.8l-1.6-4H8.1L12,7.4z"></path>
            </svg> Adobe</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php
              if(isset($loggedIn)) {
              ?>
              <?php
                echo '<li><a href="images.php"><span class="glyphicon glyphicon-picture"></span> Saved Images</a></li>';
                echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
              } else {
                echo '<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
              }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
