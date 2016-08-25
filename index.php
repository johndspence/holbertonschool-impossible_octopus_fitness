<?php
    $login = $_POST['login'];
    $password = $_POST['password'];
    $users = [
    array("id" => 1, "login" => "user1", "password" => "password1", "full_name" => "User 1"),
    array("id" => 2, "login" => "user2", "password" => "password2", "full_name" => "User 2"),
    array("id" => 3, "login" => "user3", "password" => "password3", "full_name" => "User 3"),
  ];
  function userExists($login, $password, $users) {
    foreach ($users as &$array) {
        if (($array["login"] == $login) && ($array["password"] == $password)) {
            return $array["full_name"];
        }
    return false;
    }
  }

?>

<!--
The problem is that, in php you can’t return inside of a for loop.
It doesnt’ work.
In this case the solution is to asign the value you want to return to a variable and return it outside of the loop.
If you try to connect using credentials from user2 or user3 it will not work because of that.
instead of return the variable inside of the loop you asign the variable and return it at the end.
If the condition not true will return `''` that is empty or false.
function userExists($login, $password, $users) {
   $ret = '' ; //defining variable outside loop.
    foreach ($users as &$array) {
        if (($array["login"] == $login) && ($array["password"] == $password)) {
            $ret =  $array["full_name"];
        }
    return $ret;
    }
  }
-->


<!DOCTYPE html>
<html lang="en">

<!--This is a beta website created for Holberton School designed to demonstrate Impossible Octopus Fitness and the creation of a twitter clone.  The site is structured with a home page and subpages and is designed to be responsive to different screen sizes -->


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
                <?php
                    if ($login == NULL){
                        echo "Hello there!";
                    } else {
                        $full_name = userExists($login, $password, $users);
                        if ($full_name == false) {
                            echo "Hello there!";
                            echo nl2br("\n");
                            echo "<h2 class='error'>Invalid credentials</h2>";
                        }
                        else {
                            echo "Hello ";
                            echo $full_name;
                            echo "!";
                            $encode = str_rot13($login);
                            echo nl2br("\n");
                            echo "Your rot13’d login is: ";
                            echo ($encode);
                            echo nl2br("\n");
                            echo "The length of your login is: ";
                            echo strlen($login);
                        }
                    }
                ?>
            </div>


<!--Content-->

            <section>
                <h1><a href="aboutus.html">The Twitter Clone</a></h1>
<!--This is where Post status button and the text area reside-->
                <div class="button_and_form">
                    <div class="post_status_button" data-index="post1">
                        <input type="button" value="Post a status">
                    </div>
                    <form id="post1" title="Post_Status">
                        <textarea title="Post_Status">
                        </textarea>
                        <div class="check">
                            <input type="checkbox" id="Location" name="Location">
                            <label for="Location">Location</label>
                            <input type="submit" value="Post">
                        </div>
                    </form>
                </div>
<!--HTML which has to be applied when JS is disabled-->
                <noscript>
                    <form id="post1_nojs" title="Post_Status_nojs">
                        <textarea title="Post_Status_nojs">
                        </textarea>
                        <div class="check_nojs">
                            <input type="checkbox" id="Location_nojs" name="Location_nojs">
                            <label for="Location">Location</label>
                            <input type="submit" value="Post">
                        </div>
                    </form>
                </noscript>
<!--This is where the status updates reside-->
                <div class ="article_aside">
                    <article>
                    <h2>Status Updates</h2>
                        <div class="updates">
                            <img class="status-updates-img" src="pics/Alexandro%20de%20Oliveira.jpg" alt="Alexandro de Oliveira"/>
                            <h3><a href="#">Alexandro de Oliveira</a></h3><br>
                            <div class="date">Posted on:  2016 Feb 2</div>
                            <p> Feverishly working on projects like impossible octopus fitness! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!--This is where the reply button and its form reside-->
                            <div class="reply_button_and_form">
                                <div class="reply_button" data-index="1" ><input type="button" value="Reply"></div>
                                <form class="reply" id="1" title="reply">
                                    <textarea title="reply">
                                    </textarea>
                                    <div class="check">
                                        <input type="checkbox" id="Location1" name="location">
                                        <label for="Location1">Location</label>
                                        <input type="submit" value="Reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="updates" >
                            <img class="status-updates-img" src="pics/Asaia%20Palacios.jpg" alt="pics/Asaia%20Palacios"/>
                            <h3><a href="userpage.html"> Asaia Palacios</a></h3><br>
                            <div class="date">Posted on:  2016 Feb 2</div>
                            <p> Feverishly working on projects! The project which I liked most was impossible octopus fitness. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="reply_button_and_form">
                                <div class="reply_button" data-index="2" ><input type="button" value="Reply"></div>
                                <form class="reply" id="2" title="reply">
                                    <textarea title="reply">
                                    </textarea>
                                    <div class="check">
                                        <input type="checkbox" id="Location2" name="location">
                                        <label for="Location2">Location</label>
                                        <input type="submit" value="Reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="updates">
                            <img class="status-updates-img" src="pics/Augustin%20Francis%20Boeuf.jpg" alt="Alexandro%20de%20Oliveira">
                            <h3><a href="#"> Alexandro de Oliveira</a></h3><br>
                            <div class="date">Posted on:   2016 Feb 2</div>
                            <p> Feverishly working on projects and hearing the song impossible octopus fitness. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                            <div class="reply_button_and_form">
                                <div class="reply_button" data-index="3" ><input type="button" value="Reply"></div>
                                <form class="reply" id="3" title="reply">
                                    <textarea title="reply">
                                    </textarea>
                                    <div class="check">
                                        <input type="checkbox" id="Location3" name="location">
                                        <label for="Location3">Location</label>
                                        <input type="submit" value="Reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="updates">
                            <img class="status-updates-img" src="pics/Jacob%20Ekanem.jpg" alt="Jacob%20Ekanem">
                            <h3><a href="#"> Jacob Ekanem</a></h3><br>
                            <div class="date">Posted on: 2016 Feb 2</div>
                            <p> Avid underwater basket-weaver, racecar driver, and Pulitzer Prize-winning novelist. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="reply_button_and_form">
                                <div class="reply_button" data-index="4" ><input type="button" value="Reply"></div>
                                <form class="reply" id="4" title="reply">
                                    <textarea title="reply">
                                    </textarea>
                                    <div class="check">
                                        <input type="checkbox" id="Location4" name="location">
                                        <label for="Location4">Location</label>
                                        <input type="submit" value="Reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="updates">
                            <img class="status-updates-img" src="pics/Naomi%20Veroczi.jpg" alt="Naomi Veroczi">
                            <h3><a href="#">Naomi Veroczi</a></h3><br>
                            <div class="date">Posted on: 2016 Feb 2</div>
                            <p> Avid underwater basket-weaver, racecar driver, impossible octopus fitness practiotioner and Pulitzer Prize-winning novelist.<br>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <div class="reply_button_and_form">
                                <div class="reply_button" data-index="5" ><input type="button" value="Reply"></div>
                                <form class="reply" id="5" title="reply">
                                    <textarea title="reply">
                                    </textarea>
                                    <div class="check">
                                        <input type="checkbox" id="Location5" name="location">
                                        <label for="Location5">Location</label>
                                        <input type="submit" value="Reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="updates">
                            <img class="status-updates-img" src="pics/Bennett%20Buchanan.jpg" alt="Bennett%20Buchanan.jpg">
                            <h3><a href="#">Bennett Buchanan</a></h3><br>
                            <div class="date">Posted on: 2016 Feb 2</div>
                            <p> Avid underwater basket-weaver, racecar driver, and Pulitzer Prize-winning novelist.<br>"Sed ut perspiciatis impossible octopus fitness unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                            <div class="reply_button_and_form">
                                <div class="reply_button" data-index="6" ><input type="button" value="Reply"></div>
                                <form class="reply" id="6" title="reply">
                                    <textarea title="reply">
                                    </textarea>
                                    <div class="check">
                                        <input type="checkbox" id="Location6" name="location">
                                        <label for="Location6">Location</label>
                                        <input type="submit" value="Reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="updates">
                            <img class="status-updates-img" src="pics/rudy-rigot.jpg" alt="rudy-rigot.jpg">
                            <h3><a href="#">Rudy Rigot</a></h3><br>
                            <div class="date">Posted on: 2016 Feb 2</div>
                            <p> Now a co-founder of Holberton School, a project-based alternative to college for the next generation of software engineers. Background: a lot of full-stack engineering stuff, but a lot of other stuff too back in the days (webmarketing, online brand protection, PM, sales, recruitment, ...)Practicing right now: Ruby, Go, front-end stuff, Node.js, Java, some Python. In a previous life, I also spoke in many conferences, and wrote a book in French language. That was tons of fun.</p>
                            <div class="reply_button_and_form">
                                <div class="reply_button" data-index="7" ><input type="button" value="Reply"></div>
                                <form class="reply" id="7" title="reply">
                                    <textarea title="reply">
                                    </textarea>
                                    <div class="check">
                                        <input type="checkbox" id="Location7" name="location">
                                        <label for="Location7">Location</label>
                                        <input type="submit" value="Reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="updates">
                            <img class="status-updates-img" src="pics/julien-barbier.jpg" alt="julien.jpg">
                            <h3><a href="#">Julien Barbier</a></h3><br>
                            <div class="date">Posted on: 2016 Feb 2</div>
                            <p> Today Microsoft and Docker took the opportunity to talk about and demonstrate some of the progress we have been able to make together over the past 6 months. This culminated in to showing for the first time at Microsoft Build the Docker Engine running successfully on Windows Server. Like many companies just starting to work with Microsoft, we had some reservations about what we could ultimately accomplish together.</p>
                            <div class="reply_button_and_form">
                                <div class="reply_button" data-index="8" ><input type="button" value="Reply"></div>
                                <form class="reply" id="8" title="reply">
                                    <textarea title="reply">
                                    </textarea>
                                    <div class="check">
                                        <input type="checkbox" id="Location8" name="location">
                                        <label for="Location8">Location</label>
                                        <input type="submit" value="Reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="updates">
                            <img class="status-updates-img" src="pics/steven_Gracia.jpg" alt="steven.jpg">
                            <h3><a href="#">Steven Garcia</a></h3><br>
                            <div class="date">Posted on: 2016 Feb 2</div>
                            <p> Understanding assembly code is definitely a challenge, but it can be easily understood if you spend enough time looking through documentation and communicating with your peers. In this blog I am going to attempt to explain a small part of assembly code, so that you don’t have to spend too much time looking for documentation.</p>
                            <div class="reply_button_and_form">
                                <div class="reply_button" data-index="9" ><input type="button" value="Reply"></div>
                                <form class="reply" id="9" title="reply">
                                    <textarea title="reply">
                                    </textarea>
                                    <div class="check">
                                        <input type="checkbox" id="Location9" name="location">
                                        <label for="Location9">Location</label>
                                        <input type="submit" value="Reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="updates">
                            <img class="status-updates-img" src="pics/kris.jpg" alt="kris.jpg">
                            <h3><a href="#">Kristine Bredemeier</a></h3><br>
                            <div class="date">Posted on: 2016 Feb 2</div>
                            <p> Art should be made with the heart and the hands. I work with my hands because they usually tell the truth better than my head does. I am an artist because it's my way of communicating with the world. I create art to create places and spaces of community. </p>
                            <div class="reply_button_and_form">
                                <div class="reply_button" data-index="10" ><input type="button" value="Reply"></div>
                                <form class="reply" id="10" title="reply">
                                    <textarea title="reply">
                                    </textarea>
                                    <div class="check">
                                        <input type="checkbox" id="Location10" name="location">
                                        <label for="Location10">Location</label>
                                        <input type="submit" value="Reply">
                                    </div>
                                </form>
                            </div>
                        </div>
<!--This is where the Call to Action Button reside-->
                        <div id="extra_statuses">
                            <input class="button" id="extra_status_btn" onclick="ajaxGet('statuses-1.html', onSuccess)" type='button' value='See More Statuses'>
                        </div>
                    </article>
                    <aside>
<!--This is where the notable users bios reside-->
                        <div class="notable_users" >
                            <h2>Notable Users</h2>
                            <img class="notable-img" src="pics/Jacob%20Ekanem.jpg" alt="Jacob%20Ekanem"/>
                            <h3><a href="#">Jacob Ekanem</a></h3><br>
                            <div class="date">Last updated:  2016 Feb 2</div>
                            <p> Avid underwater basket-weaver, racecar driver, and Pulitzer Prize-winning novelist.<br></p>
                            <img class="notable-img" src="pics/Naomi%20Veroczi.jpg" alt="Naomi Veroczi"/>
                            <h3><a href="#">Naomi Veroczi</a></h3> <br>
                            <div class="date">Last updated:  2016 Feb 2</div>
                            <p>Avid underwater basket-weaver, racecar driver, impossible octopus fitness practiotioner and Pulitzer Prize-winning novelist.<br>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br></p>
                            <img class="notable-img" src="pics/Bennett%20Buchanan.jpg" alt="Bennett%20Buchanan.jpg">
                            <h3><a href="#">Bennett Buchanan</a></h3><br>
                            <div class="date">Last updated:  2016 Feb 2</div>
                            <p>Avid underwater basket-weaver, racecar driver, and Pulitzer Prize-winning novelist.<br>"Sed ut perspiciatis impossible octopus fitness unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.<br></p>
                        </div>
                        <div class="trending_status" >
                            <h2>Trending status</h2>
                            <p>Avid underwater basket-weaver, racecar driver, and Pulitzer Prize-winning novelist.</p>
                        </div>

<!--This is the beta warning and welcome message-->
                        <div class="welcomeversion">
                            <h2>Welcome to the Twitter Clone!
                            This application is in BETA!!!</h2>
                        </div>
                    </aside>
                </div>

            </section>
            <footer>
              <a href="#">Home</a>
              <br><a href="#">My Statuses</a>
              <br><a href="allusers.html">All Users</a>
              <h3>Praylin Diana</h3>
              <h3>John Spence</h3>
            </footer>
        </div>
    </body>
</html>
