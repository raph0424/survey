<div id="signin_div">

<form action="" method="post">
<div class="field">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" autocomplete="off">
</div>

<div class="field">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" autocomplete="off">
</div>

<div class="field">
    <label for="remember">
    <input type="checkbox" name="remember" id="remember"> Remember me
    </label>
</div>
<input type="submit" value="Log in" class="login__submit">
<p class="login__signup">Don't have an account? &nbsp;<a href="javascript:void(0)" id="showSignUp">Sign up</a></p>
</form>

</div>

<div id="signup_div">

<form action="" method="post">
    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php  echo escape(Input::get('username')); //this is for sticky form ?>" autocomplete="off">
    </div>

    <div class="field">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <div class="field">
        <label for="password_again">Password again</label>
        <input type="password" name="password_again" id="password_again">
    </div>

    <div class="field">
        <label for="name">Name</label>
        <input type="name" name="name" id="name" value="<?php echo escape(Input::get('name')); ?>">
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Register">
</form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#showSignUp").click(function(){
        $("#signin_div").hide();
        $("#signup_div").show();
    });
});
</script>