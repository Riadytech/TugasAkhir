<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Wisata360</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            background: #fff;
            padding: 2.5rem;
            width: 100%;
            max-width: 400px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 1.8rem;
            color: #333;
        }

        .login-box input[type="email"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 0.5rem 0 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s;
        }

        .login-box input:focus {
            border-color: #3498db;
            outline: none;
        }

        .login-box button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-box button:hover {
            background-color: #2980b9;
        }

        .login-footer {
            text-align: center;
            margin-top: 1rem;
            font-size: 14px;
            color: #666;
        }

        .login-footer a {
            color: #3498db;
            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Login</h2>

        <form method="POST" action="{{ url('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <div class="login-footer">
            Belum punya akun? <a href="{{ url('/register') }}">Daftar di sini</a>
        </div>
    </div>

</body>
</html>
