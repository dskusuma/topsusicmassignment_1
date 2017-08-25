<!DOCTYPE html>
<html>
<head>
    <title> Chat Application</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="wrapper">
        <div id="menu">
            <p class="welcome">Welcome, <b></b></p>
            <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            <div style="clear:both"></div>
        </div>

        <div id="chatbox"></div>

        <form name="message"action="">
            <input type="text" name="usermsg" id="usermsg" size"63" />
            <input type="submit" name="submitmsg"id="submitmsg" value="Send">
        </form>
    </div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript">
        // jQuery Document
        $(document).ready(function(){

        });
    </script>        
</body>
    
</html>