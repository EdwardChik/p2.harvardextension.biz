<form method='POST' action='/posts/p_add'>

    <label for='content'>Write a New Woof:</label><br>
    <textarea name='content' id='content'></textarea>

    <br><br>
    <input type='submit' value='New woof!'>
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
			        Woofed on <?=Time::display($post['created'])?> / 
			    </time>

			    <!-- creates link to delete post -->
	    		<a href='/posts/delete/<?=$post['post_id']?>'>Delete Woof</a>

			</div>
		</div>

	</article>

<?php endforeach; ?>