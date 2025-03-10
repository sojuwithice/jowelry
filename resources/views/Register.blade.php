<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Jowley’s Crafts</title>
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
            flex-direction: column;
        }

        .header-bar, .footer-bar {
            width: 100%;
            height: 8px;
            background-color: #E32C89;
            position: fixed;
            left: 0;
        }

        .header-bar { top: 0; }
        .footer-bar { bottom: 0; }

        /* Header Styles */
        .header {
            position: absolute;
            top: 20px;
            left: 100px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .brand-name {
            font-family: 'Oleo Script Swash Caps', cursive;
            font-size: 37px;
            color: #E32C89;
            margin-right: 70px
        }

        .signin-text {
            font-family: 'Gabarito', sans-serif;
            font-size: 32px;
            color: black;
            font-weight: 400;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            padding: 40px;
            border-radius: 30px;
            border: 1px solid black; 
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 1300px;
            max-width: 90%;
            height: 550px;
        }

        .left-content img {
            width: 260px;
        }

        .left-content {
            width: 50%;
            text-align: left;
            padding-right: 10px;
            padding-left: 30px;
            font-family: 'Gabarito', sans-serif;
        }

        .signin-message {
             color: #E32C89;
             font-family: 'Gabarito', sans-serif;
             font-size: 24px;
        }

        .new-text {
            font-size: 60px;
            font-weight: 500;
        }

        .right-content {
            width: 50%;
            text-align: left;
            padding-left: 90px;
            padding-right: 30px;
            font-family: 'Gabarito', sans-serif;
        }

        .right-content h2 {
            font-size: 37px;
            font-weight: 500;
            margin-bottom: 30px;
            color: #E32C89;
            text-align: center;
            width: 100%;
        }

        .right-content p {
            font-size: 32px;
            color: #666;
            margin-bottom: 20px;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 15px 12px 40px;
            border-radius: 8px;
            border: 1px solid black;
            height: 60px;
            font-size: 15px;
            font-weight: 400;
            font-family: 'Gabarito', sans-serif;
            outline: none;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            border-color: #E32C89;
            box-shadow: 0 0 5px rgba(227, 44, 137, 0.3);
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }

        .btn {
            width: 100%;
            background: #E32C89;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 20px;
            cursor: pointer;
            font-weight: 300;
            transition: background 0.3s;
            margin-top: 20px;
        }

        .btn:hover {
            background: #c92473;
        }

        .social-signin {
            display: flex;
            align-items: center;
            text-align: center;
            font-size: 16px;
            font-family: 'Gabarito', sans-serif;
            color: black;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .social-signin::before,
        .social-signin::after {
            content: "";
            flex: 1;
            height: 1px; 
            background-color: #666; 
            margin: 0 10px; 
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }

        .social-icons i {
            font-size: 30px;
            color: #E32C89;
            cursor: pointer;
            transition: color 0.3s;
        }

        .social-icons i:hover {
            color: #c92473;
        }

        .register-link {
            text-align: center;
            font-family: 'Gabarito', sans-serif;
            font-size: 15px;
            margin-top: 20px;
        }

        .register-link a {
            color: #E32C89;
            font-weight: 500;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .terms-container {
            text-align: center;
            font-size: 14px;
            margin-top: 50px;
        }

        .terms-container input {
            margin-right: 5px;
        }

        .terms-container a {
            color: #E32C89;
            text-decoration: none;
        }

        .terms-container a:hover {
            text-decoration: underline;
}

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
                padding: 30px;
            }

            .left-content img {
                width: 200px;
                margin-bottom: 20px;
            }

            .right-content {
                width: 100%;
                padding: 0;
            }

            .input-group input {
                padding: 12px 15px;
            }
        }
    </style>
</head>
<body>

    <div class="header-bar"></div>

    <!-- Header with "Jowley's Craft" and "Log In" -->
    <div class="header">
        <span class="brand-name">Jowley's Craft</span>
        <span class="signin-text">Sign In</span>
    </div>

    <div class="container">
        <div class="left-content">
            <h1 class="new-text">Are you new here?</h1>
            <p class="signin-message">Create an account to start.</p>
            <img src="shopping-cart.png" alt="Shopping Illustration">
        </div>

        <div class="right-content">
        <h2>Sign In</h2>
            <form action="#">
                <div class="input-group">
                    <i class="fa fa-mobile"></i>
                    <input type="text" placeholder="Enter your Phone Number" required>
                </div>
                <button class="btn">Send code via SMS</button>

                <div class="social-signin">Or sign in with</div>
                <div class="social-icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-tiktok"></i>
                </div>

                <div class="register-link">
                    Already have an account? <a href="#">Log in</a>
                </div>
                <div class="terms-container">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">By Signing In, you agree to Jowley’s Crafts <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</label>
                </div>
            </form>
        </div>
    </div>

    <div class="footer-bar"></div>
</body>
</html>
