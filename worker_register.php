<!DOCTYPE html>
<html lang="en">
<head>
  <title>Worker Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="bootstrap-4.4.1/css/bootstrap.min.css" />
  <script src="bootstrap-4.4.1/js/jquery_latest.js"></script>
  <script src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  <link href="CSS/style_02.css" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" />
  <style>
    body {
      background: url('images/farmer.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Roboto', sans-serif;
    }
    .register-card {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      max-width: 500px;
      margin: 60px auto;
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #007bff;
      font-weight: 700;
    }
    .btn-custom {
      background-color: #007bff;
      border: none;
    }
    .btn-custom:hover {
      background-color: #0056b3;
    }
  </style>
  <script>
    function validateform() {
      let mobile = document.forms["myForm"]["mobile"].value.trim();
      if (mobile.length != 10 || isNaN(mobile)) {
        alert("Mobile number must be exactly 10 digits.");
        return false;
      }

      let password = document.forms["myForm"]["password"].value.trim();
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
      <li class="nav-item"><a class="nav-link" href="worker_register.php">Register</a></li>
    </ul>
  </nav>

  <div class="register-card">
    <h1>Worker Registration</h1>
    <form name="myForm" action="register_connection.php" method="post" onsubmit="return validateform()">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input class="form-control" id="name" type="text" name="name" placeholder="Full Name" required>
      </div>

      <div class="form-group">
        <label for="category">Category</label>
        <input class="form-control" id="category" type="text" name="category" value="Worker" readonly>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" id="email" type="email" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required>
        <small class="form-text text-muted">Minimum 8 characters & at least 1 special character.</small>
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

      <button type="submit" class="btn btn-custom btn-block">Register</button>
    </form>
  </div>

  <footer class="text-center mt-4 text-light">
    <p>© 2078 B.S. Batch. Designed By BIT 7th Semester - T.R.M.C</p>
  </footer>
</body>
</html>