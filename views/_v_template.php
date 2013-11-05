<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>

    <!-- Twitter Bootstrap framework -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">    
	
</head>

<body>  

    <div id='menu'>
        <div>
            <header>
                <!-- navigation bar -->
                <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
                    <!-- main site navigation bar -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                            <!-- Menu for users who are logged in -->
                            <?php if($user): ?>

                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            <?php endif; ?>

                        </button>
                    </div>

                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">

                            <!-- Menu for users who are logged in -->
                            <?php if($user): ?>
                                <li><a href="/">Home</a></li>
                                <li><a href="/users/logout">Logout</a></li>
                                <li><a href="/users/profile">Profile</a></li>
                                <li><a href="/posts">Posts</a></li>
                                <li><a href="/posts/users">Users</a></li>
                            <!-- Menu options for users who are not logged in -->
                            <?php else: ?>
                                <li><a href="/">Home</a></li>
                                <li><a href="/users/signup">Sign up</a></li>
                                <li><a href="/users/login">Log in</a></li>
                            <?php endif; ?>     
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
    </div>

    <br>

    <?php if(isset($content)) echo $content; ?>


    <!-- jQuery leveraged by Bootstrap for selected display elements -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $('.show_tooltip').tooltip();
    </script>
</body>
</html>