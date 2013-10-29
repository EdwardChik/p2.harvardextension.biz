<?php foreach($posts as $post): ?>

<article>

    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        Created on <?=Time::display($post['created'])?>
    </time>

<!--

	    # if the user wrote this post, display edit option
		$poster = "SELECT user_id 
            FROM users
            WHERE token = '".$_COOKIE['token']."'";

        if(!$poster) {

            # display post edit option
			

            Router::redirect("/users/posts/edit");
		}

-->

</article>

<?php endforeach; ?>