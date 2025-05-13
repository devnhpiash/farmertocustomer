<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light background */
        }
        .container {
            max-width: 400px; /* Reduced max-width for a smaller form */
            margin: auto; /* Center the container */
            padding-top: 5rem; /* Increased padding at the top */
        }
        .card {
            border: none; /* Remove border for a cleaner look */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
            border-radius: 0.5rem; /* Add rounded corners to the card */
        }
        .card-title {
            text-align: center;
            margin-bottom: 1.5rem; /* Increased margin below the title */
            font-weight: 500; /* Make the title a bit bolder */
            color: #343a40; /* Darker title color */
        }
        .form-label {
            margin-bottom: 0.5rem; /* Reduced margin below the label */
            color: #495057; /* Slightly darker label color */
            font-weight: 400;
        }
        .form-control {
            border-radius: 0.375rem; /* Rounded corners for form controls */
            border: 1px solid #ced4da; /* Slightly darker border */
            padding: 0.75rem; /* Increased padding inside form controls */
        }
        .form-control:focus {
            border-color: #007bff; /* Highlight border on focus */
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25); /* Add focus shadow */
        }
        .btn-primary {
            width: 100%; /* Make the button full-width */
            padding: 0.75rem; /* Increased button padding */
            border-radius: 0.375rem; /* Rounded corners for buttons */
            background-color: #007bff; /* Primary button color */
            border-color: #007bff; /* Primary button border color */
            font-weight: 500; /* Make button text a bit bolder */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker hover color */
            border-color: #004085; /* Darker hover border color */
        }
        .btn-primary:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.5); /* Add focus shadow to button */
        }

        .mt-3 {
            margin-top: 1.5rem !important;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Admin Sign In</h2>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <div class="mt-3 text-center">
                        <a href="#">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
