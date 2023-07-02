<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT</title>
    <link rel="stylesheet" type="text/css" href="css/chatBox.css">
    <style>
        body{
            background-color:rgba(255, 255, 255, 0)
        }
    </style>
</head>
<body>
    <div id="main">
        <div class="chat-box">
            <!-- <div class="message">
            <p class="user">User1:</p>
            <p class="text">Hello!</p>
        </div> -->
        </div>
        <div class="input-box">
            <input text="type" id="input-type" onkeydown="Enterkey()">
            <button onclick="sendMessage()">Go</button>
        </div>
    </div>
    <script src="js/chatBox.js"> </script>
    <script src="js/dianji.js"> </script>
</body>

</html>