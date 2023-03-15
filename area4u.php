<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Check the user credentials
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Replace these hardcoded credentials with your actual credentials
  $valid_email = 'ai@area4u.ro';
  $valid_password = 'area4u.ro';

  if ($email == $valid_email && $password == $valid_password) {
    // Redirect to Google
    header('Location: https://only1.ai?cui=38911092');
    exit;
  } else {
    // Show an error message
    echo '<div class="alert alert-danger">Invalid email or password.</div>';
  }
}
?>

<?php include('partial/header.php'); ?>

<script>
  localStorage.removeItem('dataObj');
</script>

<div class="container-fluid p-0">
  <div class="row m-0">
    <div class="col-12 p-0">
      <div class="login-card">
        <div>
          <div><a class="logo" href="index.php"><img class="img-fluid for-light" src="assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
          <div class="login-main">
            <form class="theme-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <h4>Sign in to account</h4>
              <p>Enter your email & password to login</p>
              <div class="form-group">
                <label class="col-form-label">Email Address</label>
                <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
              </div>
              <div class="form-group">
                <label class="col-form-label">Password</label>
                <div class="form-input position-relative">
                  <input class="form-control" type="password" name="password" required="" placeholder="*********">
                  <div class="show-hide"><span class="show"> </span></div>
                </div>
              </div>
              <div class="form-group mb-0">
                <div class="checkbox p-0">
                  <input id="checkbox1" type="checkbox">
                  <label class="text-muted" for="checkbox1">Remember password</label>
                </div><a class="link" href="forget-password.html">Forgot password?</a>
                <div class="text-end mt-3">
                  <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                </div>
              </div>
              <h6 class="text-muted mt-4 or">Or Sign in with</h6>
              <div class="social mt-4">
                <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
              </div>
              <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('partial/scripts.php'); ?>
</div>

<?php include('partial/footer-end.php'); ?>