<h1>This is the profile of <?=$user->first_name?> <?=$user->last_name?>.</h1>

<p>Location: <?=$user->location?></p>

<p>Biography: <?=$user->biography?></p>

<p>You have posted a total of <?=$user->post_total?> woofs.</p>

<p>You are currently followed by <?=$user->follower_total?> users.</p>

<p>Your last login was on <?=Time::display($user->modified,'Y-m-d G:i')?>.</p>