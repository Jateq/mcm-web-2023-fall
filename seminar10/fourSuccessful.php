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
        }

        div{
            display: flex;
            flex-direction: column;
        }
        button{
            padding: 5px 10px;
            background-color: #1d4b8f;
            color:white;
            border: solid 1px white;
            border-radius: 5px;
            margin-top: 10px;
            transition: 0.4s;
            font-size: 15px;

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

        .logout{
            color: red;

        }
        .logout:hover{
            text-decoration: underline;
        }

    </style>
</head>
<body>
<div class="message">
    <div class="auth">
        <?php include 'fourPage.php'; ?>
    </div>
    <a href="./fourData.php"><button>What is in database</button></a>
    <a class="logout" href="./fourLogout.php"><h2>Logout</h2>

</div>
</body>
</html>
