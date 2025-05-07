<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign Up Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f1f1f1;
    }
    .signup-container {
      max-width: 500px;
      margin: 60px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .form-title {
      text-align: center;
      margin-bottom: 25px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="signup-container">
    <h2 class="form-title">User Registration</h2>
    <form>
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Create a password" required>
      </div>

      <div class="mb-3">
        <label for="nid" class="form-label">National ID (NID)</label>
        <input type="text" class="form-control" id="nid" placeholder="Enter your NID number" required>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
      </div>

      <div class="mb-3">
        <label class="form-label">User Type</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="userType" id="farmer" value="Farmer" required>
          <label class="form-check-label" for="farmer">Farmer</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="userType" id="partTime" value="Part-time Job">
          <label class="form-check-label" for="partTime">Part-time Job</label>
        </div>
      </div>

      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-success">Register</button>
      </div>
    </form>
  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
