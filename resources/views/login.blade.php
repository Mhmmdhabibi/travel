<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Global reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form_wrapper {
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
        }
        .title_container {
            text-align: center;
            margin-bottom: 20px;
        }
        .title_container h2 {
            color: #f35525;
            font-size: 24px;
            margin: 0;
        }
        .form_container form {
            display: flex;
            flex-direction: column;
        }
        .input_field {
            position: relative;
            margin-bottom: 20px;
        }
        .input_field input {
            width: 100%;
            padding: 10px;
            border: 1px solid #f35525;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        .input_field input:focus {
            border-color: #f35525;
        }
        .input_field span {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #f35525;
        }
        .button {
            background-color: #f35525;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
        }
        .button:hover {
            background-color: #f35525;
        }
        .bottom_row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .remember_me, .forgot_pw {
            font-size: 14px;
            color: #666;
            display: flex;
            align-items: center;
        }
        .remember_me input[type="checkbox"] {
            margin-right: 5px;
        }
        .forgot_pw a {
            color: #f35525;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .forgot_pw a:hover {
            color: #E5584F;
        }
        .credit {
            text-align: center;
            margin-top: 20px;
            color: #999;
            font-size: 12px;
        }
        .credit a {
            color: #FF6F61;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .credit a:hover {
            color: #E5584F;
        }
    </style>
</head>
<body>

<div class="form_wrapper">
    <div class="form_container">
        <div class="title_container">
            <h2>User Login    </h2>
        </div>
        <form action="/login" method="POST">
            @csrf
            <div class="input_field">
                <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="input_field">
                <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <input class="button" type="submit" value="Login">
            <div class="bottom_row">

                <div class="forgot_pw">
                    <a href="/register">Register</a>
                </div>
            </div>
        </form>
    </div>
    <p class="credit">
        <a href="#">Design the way</a>
    </p>
</div>

</body>
</html>
