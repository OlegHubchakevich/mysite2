<h2>Sign in</h2>
%message_auth%
<form class="form-horizontal" name="auth" action="functions.php" method="post">
    <div class="form-group">
      <label for="inputLogin3" class="col-sm-2 control-label">Login:</label>
      <div class="col-sm-10">
        <input type="text" name="login" class="form-control" id="inputLogin3" placeholder="Login">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
      <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Sign in</button>
        <p><a href="#">Registration</a></p>
      </div>
    </div>
</form>