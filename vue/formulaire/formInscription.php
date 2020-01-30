<link href="css/formstyle.css" rel="stylesheet">
<style type="text/css">
body {
       background-color: white; 
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form .btn {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,
.form button:active,
.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .login-form {
  display: none;
}
.infoo {
  margin: 50px auto;
  text-align: center;
}
.infoo h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.infoo span {
  color: #4d4d4d;
  font-size: 12px;
}
.infoo span a {
  color: #000000;
  text-decoration: none;
}
.infoo span .fa {
  color: #EF3B3A;
}
</style>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="login_page" class="login-page">
  <div class="form">
    <form id="register_form" method="POST" class="register-form">
      <input name="Prenom" id="Prenom" type="text" placeholder="Prenom" />
      <input name="login" id="login" type="text" placeholder="Login" />
      <input name="mdp" id="password" type="password" placeholder="password" />
      <input type="date"  id="date_naiss" name="date_naiss" placeholder="date de naissance">
      <input type="submit" class="btn" name ="sinscrir" value="S'inscrire" />
    </form>
  </div>
</div>
</body>
<script>
$('.message a').click(function() {
  $('form').animate({
    height: "toggle",
    opacity: "toggle"
  }, "slow");
});
   </script>