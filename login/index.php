<!DOCTYPE html>
<html lang="en">
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Web | Vehicle Rental Service</title> 
      <link rel="stylesheet" href="../assets/CSS/login.css">
      <div class="main-header">
          <div class="navbar-header">
              <div class="icon-header">
                  <h2 class="logo-header">VRS</h2>
              </div>
    </head>
   

<body>
  <div class="body-login">
    <div class="container-login">
        <h2>Login Account</h2>
        <form action="process_login.php" method="post">
            <div class="form-grouplogin">
                <label for="email">Username:</label>
                <input type="text" id="email" name="username" required>
            </div>
            <div class="form-grouplogin">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <select class="form-select" aria-label="Default select example" name="level">
                <option selected>Pilih Level</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <p> Don't have an account? <a href="../register/register.php">Create one</a> </p>
            <div class="form-grouplogin">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
    </div>
</body>