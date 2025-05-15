<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FliX Sign Up</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #333;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: rgba(0, 0, 0, 0.8);
      padding: 3rem;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
      width: 100%;
      max-width: 500px;
      color: white;
    }
    .form-group {
      margin-bottom: 1.5rem;
    }
    .form-group label {
      display: block;
      margin-bottom: 0.75rem;
      font-size: 1.2rem;
    }
    .form-group input {
      width: 100%;
      padding: 0.75rem;
      font-size: 1.1rem;
      border: none;
      border-radius: 6px;
      background: #333;
      color: white;
    }
    .form-group input:focus {
      outline: none;
      border: 2px solid #e50914;
    }
    button[type="submit"] {
      width: 100%;
      padding: 1rem;
      background: #e50914;
      border: none;
      border-radius: 6px;
      color: white;
      font-size: 1.2rem;
      cursor: pointer;
      transition: background 0.3s;
    }
    button[type="submit"]:hover {
      background: #f40612;
    }
    .toggle-page {
      text-align: center;
      margin-top: 1.5rem;
      color: #bbb;
      font-size: 1.1rem;
    }
    .toggle-page a {
      color: #e50914;
      text-decoration: none;
    }
    .toggle-page a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <form id="signup" class="form">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Sign Up</button>
      <div class="toggle-page">
        Already have an account? <a href="/">Sign In</a>
      </div>
    </form>
  </div>
</body>
</html>