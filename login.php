<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        :root{
            --h2width:50px;
            --inputwidth:200px;
        }
        h5{
            width: var(--h2width);
            display: inline-block;
        }
        #in{
            width:calc(var(--h2width) + var(--inputwidth) + 10px);
            /* background-color: aqua; */
            display: flex;
            justify-content: center;
            margin: 0 auto;
        }
        .put{
            width: var(--inputwidth);
            border-radius: 5px;
        }
        .login{
            width: 400px;
            /* height: 500px; */
            padding: 60px 0;
            background-color: aqua;
            border-radius: 5px;
            margin: 0 auto;
        }
        .submit{
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="login">
        <div id="in">
            <form action="login.php" method="POST">
                <h5>用户名:</h5><input type = "text" name = "username" class="put">
                <h5>密码:</h5><input type = "password" name = "password" class="put">
                <input type = "submit" value = "提交" class="submit">
            </form>
        </div>
    </div>
</body>
</html>

<?php
    //$_POST用户名和密码
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if ($password == 'aaaa') {
        echo "成功！";
    }
?>