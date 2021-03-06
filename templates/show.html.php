<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to Music PHPlayer</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/sticky.css">
</head>
<body>
    <div id="wrap">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Music PHPlayer</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="container">
            <div class="page-header">
                <h1><?php echo $song['name'] ?></h1>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
		            <div class="media">
					  <a class="pull-left" href="#">
		                <img class="media-object" width="120" height="120" src="https://1.gravatar.com/avatar/628c00ce4eb4fc595256048dfb9fcfd8?d=https%3A%2F%2Fidenticons.github.com%2F16726ad93e762e7f706daef979ca1c48.png&r=x&s=440">
					  </a>
					  <div class="media-body">
					    <h2 class="media-heading"><?php echo $song['artist'] ?></h2>
					    <p class="lead">Listen now</p>
					    <audio src="<?php echo $song['file_path'] ?>" controls></audio>
					  </div>
					</div>
				</div>
				<div class="panel-footer">
				    <form>
					    <button type="button" class="btn btn-danger">
					        <span class="glyphicon glyphicon-trash"></span>
					        Delete
				        </button>
			        </form>
                </div>
			</div>
        </div>
    </div>

    <footer id="footer">
      <div class="container">
        <p class="text-muted credit">Comunidad PHP Puebla</p>
      </div>
    </footer>

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</body>
</html>
