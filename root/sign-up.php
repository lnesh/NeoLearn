<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Sign Up to NeoLearn for free!
  </title>


  <!-- Favicon SEO -->
  <link rel="icon" href="media/favicon.ico" type="image/icon" />

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <link
    href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap"
    rel="stylesheet">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body style=" font-family: 'Epilogue', sans serif; background-color: #6F4B96;
  ">

  <div class="container py-5 h-70">
    <div class="row d-flex justify-content-center align-items-center h-70">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 15px;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./media/pexels-liza-summer-6347976.jpg" alt="signup form" class="img-fluid"
                style="border-radius: 15px 0 0 15px;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-3 p-lg-5 text-black">

                <form action="./backend/signup.php" method="POST">

                  <div class="d-flex justify-content-center align-items-center mb-2 ">
                    <img src="./media/NeoLearnLogo.png" alt="logo" width="200">
                  </div>

                  <h5 class="fw-normal mb-3 pb-3"
                    style="letter-spacing: 0.2px; font-family: 'Epilogue', sans serif; color:#6F4B96; text-align: center;">
                    Let's create your account!
                  </h5>

                  <div class="form-outline mb-4">
                    <input type="text" name="fullname" id="form3Example1cg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example1cg">Full Name</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="username" id="form3Example1cg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example1cg">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" name="mail" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example1=27">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="passwordRpt" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Confirm password</label>
                  </div>

                  <div style="display: flex; gap: 10px; ">
                    <div class="pt-1 mb-4">
                      <input class="btn btn-dark btn-lg btn-block" name="student-register" type="submit"
                        style="font-size: 15px; background-color: #6F4B96; border: none;" value="Register as student">
                    </div>

                    <div class="pt-1 mb-4">
                      <input class="btn btn-dark btn-lg btn-block" name="teacher-register" type="submit"
                        style="font-size: 15px; background-color: #401e65; border: none;" value="Register as teacher">
                    </div>
                  </div>
                  <div style="color: #6F4B96;">

                    <p>Already have an account? <a href="./login.php"
                        style="text-decoration: none; color: #6F4B96; font-weight: 500;">Login here</a></p>
                    <a href="terms-of-use.html" class="small text-muted">Terms of use.</a>
                    <a href="privacy-policy.html" class="small text-muted">Privacy policy</a>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>