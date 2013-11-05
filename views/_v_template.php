<!DOCTYPE html>
<html>
<head>
    <!-- populates title if set in object -->
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>

    <!-- Twitter Bootstrap framework (minified) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">    
	
</head>

<body>  
    <!-- left margin of page -->
    <div class="col-sm-2 col-md-2"></div>

    <!-- middle content of page -->
    <div class="col-sm-8 col-md-8">

        <div id='menu'>
            <div>
                <header>
                    <!-- navigation bar -->
                    <nav class="navbar navbar-default" role="navigation">
                        <!-- main site navigation bar -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>

                                <!-- menu for users who are logged in -->
                                <?php if($user): ?>

                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                <?php endif; ?>

                            </button>
                        </div>

                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">

                                <!-- menu for users who are logged in -->
                                <?php if($user): ?>
                                    <li><span class="glyphicon glyphicon-home"></span> <a href="/">Home</a></li>
                                    <li><span class="glyphicon glyphicon-log-out"></span> <a href="/users/logout">Logout</a></li>
                                    <li><span class="glyphicon glyphicon-cog"></span> <a href="/users/profile">Profile</a></li>
                                    <li><span class="glyphicon glyphicon-list"></span> <a href="/posts">Posts</a></li>
                                    <li><span class="glyphicon glyphicon-user"></span> <a href="/posts/users">Users</a></li>

                                <!-- menu for users who are not logged in -->
                                <?php else: ?>
                                    <li><span class="glyphicon glyphicon-home"></span> <a href="/">Home</a></li>
                                    <li><span class="glyphicon glyphicon-check"></span> <a href="/users/signup">Sign up</a></li>
                                    <li><span class="glyphicon glyphicon-log-in"></span> <a href="/users/login">Log in</a></li>
                                <?php endif; ?>     
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>
        </div>

        <?php if(isset($content)) echo $content; ?>

        <!-- page footer -->
        <footer>
            <!-- details for site -->
            <p>Woof Woof Woof is project #2 for <a href="http://www.dwa15.com" target="_blank">CSCI E-15 </a> as part of the <a href="http://www.extension.harvard.edu" target="_blank">Harvard Extension School</a>. The logo was obtained for non-commercial use from <a href="http://jamiesale-cartoonist.com/blog-of-cartoons/free-cartoon-dog-vector-clip-art/" target="_blank">this page</a>.</p>

            <!-- copyright for site -->
            <p>This web page is the copyright of Edward Chik, Fall 2013.</p>
        </footer>

    </div>

    <!-- right margin of page -->
    <div class="col-sm-2 col-md-2"></div>

    <!-- jQuery leveraged by Bootstrap for selected display elements -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $('.show_tooltip').tooltip();
    </script>
</body>
</html>