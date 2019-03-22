
<h1>Connexion</h1><br>
<form method="post">
    Login <input type="text" name="login"/><br><br>
    Mdp <input type="password" name="mdp"/><br>
    <input type="hidden" name="id_u"/><br>
    <input type="submit" name="submit"/>
</form>
<br>

<a href="#" id="btn" role="button" data-toggle="modal" data-target="">Pas de compte? Inscrivez-vous ici</a>


<!-- BEGIN # MODAL ADD -->
<!-- Modal add-->
<div class="modal fade" id="register_modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>S'inscrire</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form method="POST" role="form">
            <br>Email : <input type="email" name="email" ><br/>
           <br>Login : <input type="text" name="login" ><br/>
            <br>MDP: <input type="password" name="mdp" ><br/>
            <br>Confirmez mdp: <input type="password" name="mdp2" ><br/>
            <br><input type="submit" name="submit_ins"><br/>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END # MODAL ADD -->