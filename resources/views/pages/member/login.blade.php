<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/rw-core.css">
    <link rel="stylesheet" href="/assets/css/rw-colors.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script src="/assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/owl.carousel.min.js" type="text/javascript"></script>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body style="background:url('/assets/img/background/background-1.jpg')">
    <div class="container" style="margin-top:100px;">
      <div class="row justify-content-center mt-5">
        <div class="col-8" style="text-align:center;">
          <img src="/assets/img/logo/logo.png" alt="logo">
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-8" style="padding:20px; background-color:rgba(0,0,0,0.5); border-radius:20px; color:white;">
          @if (session('login_err'))
              <div class="alert alert-danger">
                  {{ session('login_err') }}
              </div>
          @endif
          <form action="/login-process" method="post">
            <div class="form-group">
              <label>อีเมลล์</label>
              <input class="form-control" type="email" name="user_email" placeholder="อีเมลล์">
            </div>
            <div class="form-group">
              <label>พาสเวิร์ด</label>
              <input class="form-control" type="password" name="user_password" placeholder="พาสเวิร์ด">
            </div>
            @csrf
            <button class="form-control btn btn-success" type="submit" name="button">ล๊อกอิน</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
