<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <style>
    /* General Styles */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f5f7;
      margin: 0;
      padding: 0;
    }

    .auth {
      min-height: 100vh;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .auth-form-light {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 100%;
      max-width: 400px;
    }

    .brand-logo {
      text-align: center;
      margin-bottom: 20px;
    }

    h4 {
      color: #333333;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
    }

    h6 {
      color: #777777;
      text-align: center;
      margin-bottom: 30px;
    }

    .form-control {
      border-radius: 5px;
      border: 1px solid #dcdcdc;
      padding: 10px 15px;
      font-size: 16px;
      width: 100%;
    }

    .btn-primary {
      background-color: #6a11cb;
      border-color: #6a11cb;
      color: #ffffff;
      border-radius: 5px;
      padding: 10px;
      font-size: 18px;
      transition: all 0.3s ease;
      width: 100%;
    }

    .btn-primary:hover {
      background-color: #2575fc;
      border-color: #2575fc;
    }

    .auth-link {
      color: #6a11cb;
      font-size: 14px;
    }

    .auth-link:hover {
      color: #2575fc;
      text-decoration: underline;
    }

    .form-check-label {
      font-size: 14px;
      color: #333333;
    }

    @media (max-width: 768px) {
      .auth-form-light {
        padding: 30px;
      }
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <!-- Add your logo here -->
              </div>
              <h4>Hello! Let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="" method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <p><br></p>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <p><br></p>
                <div class="mt-3">
                  <button class="btn btn-primary" type="submit">Sign In</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</body>
</html>
