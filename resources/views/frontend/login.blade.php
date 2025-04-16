<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | {{ env('APP_NAME') }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #baf6ff, #8f94fb);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            width: 450px; /* Adjust as needed */
        }

        .login-container h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .login-container p {
            font-size: 14px;
            color: #666;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }


        .btn {
    display: inline-block;
    width: 50%;
    max-width: 300px;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    background: linear-gradient(135deg, #000000, #434343);
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    margin: 20px auto;
}

.btn:hover {
    background: linear-gradient(135deg, #434343, #000000);
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0,0,0,0.4);
}

.form-group {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px; /* optional spacing */
}


        .text-danger {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h3>Login</h3>
        <p>Enter your email and password to login:</p>
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="E-mail">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
