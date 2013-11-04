<form method='POST' action='/posts/p_add'>

    <label for='content'>Write a New Woof:</label><br>
    <textarea name='content' id='content'></textarea>

    <br><br>
    <input type='submit' value='New post'>

</form>

<?php foreach($posts as $post): ?>

	<article>

	    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

	    <p><?=$post['content']?></p>

	    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
	        Created on <?=Time::display($post['created'])?>
	    </time>

	<!--

		    # if the user wrote this post, display delete option
			$poster = "SELECT user_id 
	            FROM users
	            WHERE token = '".$_COOKIE['token']."'";

	        if(!$poster) {

	            # display post delete option
				

	            Router::redirect("/users/posts");
			}

	-->

	</article>

<?php endforeach; ?>