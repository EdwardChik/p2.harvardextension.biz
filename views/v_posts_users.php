<?php foreach($users as $user): ?>

    <div class="panel panel-default">
        <div class="panel-body">

            <!-- Print this user's name -->
            <?=$user['first_name']?> <?=$user['last_name']?> 

            <!-- displays user stats -->
            (<?=$user['post_total']?> posts / <?=$user['follower_total']?> followers)

            <!-- If there exists a connection with this user, show a unfollow link -->
            <?php if(isset($connections[$user['user_id']])): ?>
                <a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>

            <!-- Otherwise, show the follow link -->
            <?php else: ?>
                <a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
            <?php endif; ?>

        </div>
    </div>

<?php endforeach; ?>