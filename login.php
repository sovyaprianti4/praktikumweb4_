<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>

    <style>
        body{
            margin:0;
            padding:0;
            font-family:Arial, Helvetica, sans-serif;
            background:linear-gradient(135deg,#6a11cb,#2575fc);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-box{
            width:380px;
            background:#fff;
            padding:35px;
            border-radius:15px;
            box-shadow:0 10px 30px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
            margin-bottom:25px;
            color:#333;
        }

        .form-group{
            margin-bottom:18px;
        }

        label{
            display:block;
            margin-bottom:6px;
            font-weight:bold;
        }

        input{
            width:100%;
            padding:12px;
            border:1px solid #ccc;
            border-radius:8px;
            box-sizing:border-box;
        }

        button{
            width:100%;
            padding:12px;
            border:none;
            border-radius:8px;
            background:#6a11cb;
            color:white;
            font-size:16px;
            cursor:pointer;
        }

        button:hover{
            background:#4d0ea8;
        }

        .alert{
            background:#ffdddd;
            color:#c00;
            padding:10px;
            border-radius:8px;
            margin-bottom:15px;
        }
    </style>

</head>
<body>

<div class="login-box">

    <h2>Login Admin</h2>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('user/login'); ?>" method="post">

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>
</html>