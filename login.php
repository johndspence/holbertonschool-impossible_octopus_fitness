<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>The Twitter Clone</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="impossible octopus fitness">
        <meta name="author" content="impossible octopus fitness, John, Praylin">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen and (max-width: 768px)">
        <script src="post_a_status.js"></script>
        <script src="toggle.js"></script>
        <script src="reply.js"></script>
        <script src="load_more.js"></script>
        <script src="ajax.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="header">
                <div id="logolinks">
<!--Logo-->
                    <img id="logo" src="https://www.holbertonschool.com/assets/holberton-logo-simplified-71b02868461c07d54553e4a7cc05d1926681a6755cc19030b0458f2d70ae9909.png" alt="Holberton_Symbol" >


<!--Links on the right-->
                    <div>
                        <ul id="links">
                            <li><a href="#">Edit my profile</a> </li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
    		    <div class="tagline">
    			    <p>Impossible octopus fitness...</p>
    		    </div>


<!--Horizontal menu bar-->
                <div id="menubar">
    		        <ul id="menu">
    			        <li><a href="#">Home</a></li>
                        <li><a href="#">My Statuses</a></li>
                        <li><a href="allusers.html">All Users</a></li>
    		        </ul>
                </div>
            </div>
        </div>

        <form action="index.php" method="POST">
  			Login: <input type="text" name="login" id="login"><br>
  			Password: <input type="password" name="password"><br>
  			<input type="submit" value="Submit">
		</form>

		</body>
</html>