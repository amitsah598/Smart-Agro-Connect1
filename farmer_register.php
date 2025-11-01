<!DOCTYPE html>
<html lang="en">
<head>
  <title>Farmer Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="bootstrap-4.4.1/css/bootstrap.min.css" />
  <script src="bootstrap-4.4.1/js/jquery_latest.js"></script>
  <script src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  <link href="CSS/style_02.css" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" />
  <style>
    body {
      background: url('images/farm.jpg') no-repeat center center fixed;
      background-size: cover;
    }
    .register-card {
      background: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      max-width: 500px;
      margin: 50px auto;
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #28a745;
    }
  </style>
  <script>
    function validateform() {
      let mobile = document.forms["myForm"]["mobile"].value;
      if (mobile.length != 10 || isNaN(mobile)) {
        alert("Mobile number must be exactly 10 digits.");
        return false;
      }

      let password = document.forms["myForm"]["password"].value;
      let specialChar = /[!@#$%^&*(),.?":{}|<>]/g;

      if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
      }
      if (!specialChar.test(password)) {
        alert("Password must contain at least one special character.");
        return false;
      }
    }
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Krishi Seva Management System</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="Services/aboutus.php">About Us</a></li>
      <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
    </ul>
  </nav>

  <div class="register-card">
    <h1>Farmer Registration</h1>
    <form name="myForm" action="register_connection.php" method="post" onsubmit="return validateform()">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input class="form-control" id="name" type="text" name="name" placeholder="Full Name" required>
      </div>

      <div class="form-group">
        <label for="category">Category</label>
        <input class="form-control" id="category" type="text" name="category" value="Farmer" readonly>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" id="email" type="email" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required>
        <small class="form-text text-muted">Minimum 8 characters, include at least 1 special character.</small>
      </div>

      <div class="form-group">
        <label for="mobile">Mobile Number</label>
        <input class="form-control" id="mobile" type="text" name="mobile" placeholder="Mobile No" required>
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <input class="form-control" id="address" type="text" name="address" placeholder="Address" required>
      </div>

      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="terms" required>
        <label class="form-check-label" for="terms">I agree to the Terms & Conditions</label>
      </div>

      <button type="submit" class="btn btn-success btn-block">Register</button>
    </form>
  </div>

  <footer class="text-center mt-4 text-light">
    <p>© 2078 B.S. Batch. Designed By BIT 7th Semester - T.R.M.C</p>
  </footer>
</body>
</html>