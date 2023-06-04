<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css" />
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/login.js"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <section id="formHolder">
        <div class="row">
          <!-- Brand Box -->
          <div class="col-sm-6 brand">
            <a href="#" class="logo"></a>

            <div class="heading">
              <h2>ASCOT</h2>
              <p>RFID Attendance System</p>
            </div>

            <div class="success-msg">
              <p>Great! You are one of our members now</p>
              <a href="#" class="profile">Your Profile</a>
            </div>
          </div>

          <!-- Form Box -->
          <div class="col-sm-6 form">
            <!-- Login Form -->
            <div class="login form-peice switched">
              <form class="login-form" action="#" method="post">
                <div class="form-group">
                  <label for="loginemail">Email Adderss</label>
                  <input
                    type="email"
                    name="loginemail"
                    id="loginemail"
                    required
                  />
                </div>

                <div class="form-group">
                  <label for="loginPassword">Password</label>
                  <input
                    type="password"
                    name="loginPassword"
                    id="loginPassword"
                    required
                  />
                </div>

                <div class="CTA">
                  <input type="submit" value="Login" />
                  <a href="#" class="switch">I'm New</a>
                </div>
              </form>
            </div>
            <!-- End Login Form -->

            <!-- Signup Form -->
            <div class="signup form-peice">
              <form class="signup-form" action="#" method="post">
                <div class="form-group">
                  <label for="name">Full Name</label>
                  <input type="text" name="username" id="name" class="name" />
                  <span class="error"></span>
                </div>

                <div class="form-group">
                  <label for="email">Email Adderss</label>
                  <input
                    type="email"
                    name="emailAdress"
                    id="email"
                    class="email"
                  />
                  <span class="error"></span>
                </div>

                <div class="form-group">
                  <label for="phone"
                    >Phone Number - <small>Optional</small></label
                  >
                  <input type="text" name="phone" id="phone" />
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    class="pass"
                  />
                  <span class="error"></span>
                </div>

                <div class="form-group">
                  <label for="passwordCon">Confirm Password</label>
                  <input
                    type="password"
                    name="passwordCon"
                    id="passwordCon"
                    class="passConfirm"
                  />
                  <span class="error"></span>
                </div>

                <div class="CTA">
                  <input type="submit" value="Signup Now" id="submit" />
                  <a href="#" class="switch">I have an account</a>
                </div>
              </form>
            </div>
            <!-- End Signup Form -->
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
