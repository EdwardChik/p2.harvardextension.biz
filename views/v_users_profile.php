<h1>This is the profile of <?=$user->first_name?>.</h1>

<p>Location: <?=$user->location?></p>

<p>Biography: <?=$user->biography?></p>

<p>You have written a total of # total woofs.</p>

<p>You are followed by # users.</p>

<p>Your last login was on <?=Time::display($user->modified,'Y-m-d G:i')?>.</p>