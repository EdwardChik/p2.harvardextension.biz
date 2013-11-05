<form method='POST' action='/posts/p_add'>

    <label for='content'>Write a New Woof:</label><br>
    <textarea name='content' id='content'></textarea>

    <br><br>
    <input type='submit' value='New post'>
    <br><br>

</form>

<?php foreach($posts as $post): ?>

	<article>

		<!-- display each post in a panel, with poster name in title -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?=$post['first_name']?> <?=$post['last_name']?></h3>
			</div>
			<div class="panel-body">
				<?=$post['content']?>
			</div>
			<div class="panel-footer">
				<!-- timestamp of post -->
			    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
			        Woofed on <?=Time::display($post['created'])?>
			    </time>
			</div>
		</div>

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