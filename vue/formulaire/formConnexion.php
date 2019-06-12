<body>
<div id="login_page" class="login-page">
  <div class="form">
        <center>
            <form class="form-group" action="" method="post">
                <table>
                    <tr><td>Email ou Acronyme :</td><td><input  class="form-control" type="text" name="email"></td></tr>
                    <tr><td>Mdp :</td><td><input  class="form-control" type="password" name="mdp"></td></tr>
                    <tr>
                        <td><input class ='btn btn-primary' type="submit" name="Seconnecter" value="Se connecter"></td>
                        <td><input class ='btn btn-primary' type="reset" name="Annuler" value="Annuler"></td>
                    </tr>
                </table>
            </form>
        </center>
    </div>
</div>
</body>
<style>
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
</style>