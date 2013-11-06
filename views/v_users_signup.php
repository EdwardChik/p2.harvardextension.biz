<form method='POST' action='/users/p_signup'>

    <div class="input-group">

    First Name: <br>
    <input type='text' class='form-control'name='first_name'>
    <br><br>

    Last Name: <br>
    <input type='text' class='form-control' name='last_name'>
    <br><br>

    E-mail Address: <br>
    <input type='text' class='form-control' name='email'>
    <br><br>

    Location: <br>
    <input type='text' class='form-control' name='location'>
    <br><br>

    Biography: <br>
    <input type='text' class='form-control' name='biography'>
    <br><br>

    Password: <br>
    <input type='password' class='form-control' name='password'>
    <br><br>

    <!-- checks if form hsa been submitted -->
    <input type='hidden' name='submitted' value='1'>

    <button type="submit" class="btn btn-default navbar-btn">Sign up!</button>
    <br><br>

</form>