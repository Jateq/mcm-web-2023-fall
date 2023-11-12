<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection Status</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #e3e3e3;
            font-size: 20px;
        }

        div{
            display: flex;
            flex-direction: column;
        }
        button{
            padding: 10px 30px;
            background-color: #1d4b8f;
            color:white;
            border: solid 1px white;
            border-radius: 5px;
            margin-top: 10px;
            transition: 0.4s;
            font-size: 50px;

        }
        button:hover{
            background-color: white;
            color: #1d4b8f;
            border: solid 1px #1d4b8f;
        }
        a{
            text-decoration: none;
        }
        .message {
            text-align: center;
            
        }

        .auth{
            display: flex;
            justify-content: center;
            flex-direction: row;
        }

    </style>
</head>
<body>
<div class="message">
    <?php include 'fourConnect.php'; ?>
    <div class="message">
        <?php echo "Connected successfully"; ?>
    </div>
    <div class="auth">
        <a href="fourLogin.php"><button>Login</button></a>
        <a href="fourRegister.php"><button>Register</button></a>
    </div>
</div>
</body>
</html>
