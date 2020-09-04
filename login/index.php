<?php 
// hacer el formulario
include '../header.php';
?>
<div class="container">
<form class="form-signin" method='post'action='autenticacion.php'>
      
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="email" class="sr-only">Email address</label>
      <input
        name="email"
        type="email"
        id="email"
        class="form-control"
        placeholder="Email address"
        required
        autofocus
      />
      <label for="password" class="sr-only">Password</label>
      <input
        name="password"
        type="password"
        id="password"
        class="form-control"
        placeholder="Password"
        required
      />
     
      <button class="btn btn-lg btn-primary btn-block mb-5" type="submit">
        Sign in
      </button>
    </form>
    </div>

<?php
include '../footer.php';



?>