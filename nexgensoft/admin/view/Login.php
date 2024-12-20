<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Signin Template · Bootstrap v5.3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-signin {
      max-width: 400px;
      margin: auto;
      padding: 20px;
    }
  </style>
</head>
<body>
  <main class="form-signin w-100 m-auto">
    <form action="<?=$action?>" method="POST">
      <h1 class="h3 mb-3 fw-normal text-center">Login In</h1>

      <!-- Username field -->
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingUsername" placeholder="Username">
        <label for="floatingUsername">Username</label>
      </div>

      <!-- Password field -->
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <!-- Submit Button -->
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </form>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
