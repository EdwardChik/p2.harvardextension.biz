<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name.' '.$user->last_name; ?>!</h1>

<p>Here is an overview of what Woof Woof Woof has to offer:</p>

<ol>
	<li>Sign up</li>
	<li>Log in</li>
	<li>Log out</li>
	<li>Add posts (or woofs)</li>
	<li>See a list of all other users</li>
	<li>Follow and unfollow other users</li>
	<li>View a stream of posts from the users you are following</li>
</ol>

<ol start="8">
	<li>E-mail verification</li>
	<li>E-mail confirmation</li>
	<li>Reset password</li>
	<li>Delete posts (or woofs)</li>
	<li>View and edit profile</li>
</ol>