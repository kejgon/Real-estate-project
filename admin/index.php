<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>


  <div class="container loginform">

    <h2>Login</h2>
    <div class="row">
      <form class="col s12" method="post" action="index.php">

        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="username" class="form-control" placeholder="Username" value="" />

          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="password" name="password" class="form-control" placeholder="password" value="" />

          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <button class="waves-effect waves-light btn" type="submit" name="login">Login</button>

          </div>
          <div class="input-field col s6">
            <a class="waves-effect waves-light btn" href="register_form.php">Register</a>

          </div>
        </div>

      </form>
    </div>

  </div>


</body>

</html>
<?php
if (isset($_POST['login'])) {
  $usr = $_POST['username'];
  $pwd = $_POST['password'];

  include 'dbconn.php';
  $sql = "SELECT * FROM users WHERE username = '$usr' AND password = '$pwd'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $_SESSION['user'] = $usr;
    header('Location: admin.php');
  } else {
    header('Location: index.php');
  }
}
?>