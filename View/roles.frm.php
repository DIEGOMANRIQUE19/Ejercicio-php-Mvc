<?php include_once "header.php"; ?>
<! -- //Formulario Roles -->
    <h1 class="text-center">Formulario Roles</h1>
    <form id="roles.frm">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="col-3 align-self-end">
    <input onclick="Create()" class="btn btn-primary" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="button" class="btn btn-primary">Registrar</button>
</form>
<! -- //Fin Formulario Roles -->
<?php include_once "footer.php"; ?>
<script src="./Assets/js/roles.js"></script>

