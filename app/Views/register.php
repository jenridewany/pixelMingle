<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arial&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial'; 
        }
        .register-container {
            display: flex;
            /* max-width: 300vh; */
            width: 140vh;
            height: 80vh;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .register-left {
            background-color: black;
            color: #fff;
            padding: 40px;
            width: 45%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .register-left h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .register-left p {
            font-size: 16px;
            margin-bottom: 30px;
        }
        .register-left .btn {
            background-color: transparent;
            border: 2px solid #fff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            transition: all 0.3s;
        }
        .register-left .btn:hover {
            background-color: white;
            color: black;
        }
        .register-right {
            padding: 100px 20px 100px 20px;
            width: 60%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .register-right h2 {
            font-size: 28px;
            margin-bottom: 30px;
        }
        .register-right .form-group {
            width: 100%;
            margin-bottom: 15px;
        }
        .register-right .form-group input {
            width: 50vh;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .register-right .btn {
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            transition: all 0.3s;
            width: 100%;
        }
        .register-right .btn:hover {
            background-color: #fff;
            color: black;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-left">
            <h2>WELCOME BACK!</h2>
            <p>To keep connected with us please login with your personal info</p>
            <button class="btn">SIGN IN</button>
        </div>
        <div class="register-right">
            <h2>CREATE ACCOUNT</h2>
            <form method="post" action="<?= base_url(); ?>/register/process">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="NAME" name="name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="EMAIL" name="email" required>
                </div>
                <div class="form-group">
                    <input type="phone" class="form-control" placeholder="PHONE" name="phone" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="PASSWORD" name="password" required>
                </div>
                <button type="submit" class="btn">SIGN UP</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
