<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'minecraftfont';
            src: url('minecraftfont.woff');
        }
        body {
            font-family: 'minecraftfont', sans-serif;
            background-image: url('bg.png');
        }
        #chat {
            width: 40%;
            background-color: rgba(0, 0, 0, 0.7);
    </style>
</head>

<body>
   <div id="chat">
    <?php require 'MinecraftColors.php'; $text = file_get_contents('messages_en.properties'); echo MinecraftColors::convertToHTML($text, true); ?>
    </div>
</body>

</html>