<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 400px;
        }
        .login-container h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .login-container .form-group {
            width: 100%;
            margin-bottom: 15px;
        }
        .login-container .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .login-container .btn {
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            transition: all 0.3s;
            width: 100%;
        }
        .login-container .btn:hover {
            background-color: #fff;
            color: black;
            border: 2px solid black;
        }
        .password-toggle {
            position: relative;
        }
        .password-toggle .fa-eye, .password-toggle .fa-eye-slash {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>login/authenticate">
            <?= csrf_field(); ?>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username/email" name="username" required>
            </div>
            <div class="form-group password-toggle">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <i class="fa fa-eye" id="togglePassword"></i>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('input[name="password"]');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
