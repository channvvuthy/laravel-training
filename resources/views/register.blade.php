<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin-bottom: 2rem;
        }

        .form-container h1 {
            margin-bottom: 1rem;
            text-align: center;
            color: #333;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container label {
            margin-bottom: 0.5rem;
            color: #555;
        }

        .form-container input {
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        .form-container button {
            padding: 0.75rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .toggle-link {
            text-align: center;
            margin-top: 1rem;
        }

        .toggle-link a {
            color: #007bff;
            text-decoration: none;
        }

        .toggle-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="register-form" class="form-container">
        <h1>Register</h1>
        <form method="POST" action="/register">
            @csrf
            <label for="full-name">Full Name</label>
            <input type="text" id="name" name="name">
            <div style="color:red;">{{ $errors->first('name') }}</div>
            
            <label for="register-email">Email</label>
            <input type="email" id="register-email" name="email">
            <div style="color:red;">{{ $errors->first('email') }}</div>
            
            <label for="register-password">Password</label>
            <input type="password" id="register-password" name="password">
            <div style="color:red;">{{ $errors->first('password') }}</div>
            
            <button type="submit">Register</button>
        </form>
        <div class="toggle-link">
            <a href="#" onclick="toggleForms()">Already have an account? Login</a>
        </div>
    </div>

    <script>
        function toggleForms() {
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');
            
            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
            }
        }
    </script>
</body>
</html>
