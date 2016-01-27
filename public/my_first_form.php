<!DOCTYPE html>
<html>
    <head>
        <title>My First HTML Form</title>
        <link rel="stylesheet" href="/css/site.css">
        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<?php
  var_dump($_GET);
  var_dump($_POST);
?>

        <style>



        </style>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/hello_world.html">Hello World</a></li>
                <li><a href="/my_first_form.php">My First Form</a></li>
                <li><a href="/multipl_choice_test.php">Multiple Choice Test</a></li>
                <li><a href="/css_intro.html">CSS Intro</a></li>
            </ul>
        </nav>  
        <main>
            <section class="user_login">
                <h2>Login Information</h2>
                <form method="POST" action="/my_first_form.php">
                    <p>
                        <input id="username" name="username" type="text" placeholder="User Name">
                    </p>
                    <p>
                        <input id="password" name="password" type="password" placeholder="Password">
                    </p>
                    <p>
                        <button type="submit">Login</button>
                    </p>
                </form>
            </section>
            <hr>
            <section class="create_account">
                <h2>Create an Account</h2>
                <form>
                    <p>
                        <label for="first_name">First Name</label>
                        <input id="first_name" name="first_name" type="text">
                    </p>
                    <p>
                        <label for="last_name">Last Name</label>
                        <input id="last_name" name="last_name" type="text">
                    </p>
                    <p>
                        <label for="user_name">User Name</label>
                        <input id="user_name" name="user_name" type="text" placeholder="email address">
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password">
                    </p>
                    <p>
                        <label for="password">Retype Password</label>
                        <input id="password" name="password" type="password">
                    </p>
                </form>
            </section>
            <hr>
            <section class="send_email">
                <h2>Send a Message</h2>
                <form method="POST" action="/my_first_form.php">
                    <p>
                        <label for="to">To</label>
                        <input id="to" name="to" type="text" placeholder="Email Address">
                    </p>
                    <p>
                        <label for="from">From</label>
                        <input id="from" name="from" type="text" placeholder="Your Name">
                    </p>
                    <p>
                        <label for="subject">Subject</label>
                        <input id="subject" name="subject" type="text">
                    </p>
                    <p>
                        <textarea id="body" name="body" placeholder="Type message here..."></textarea>
                    </p>
                    <button type="submit">Send</button>
                    <p>
                        <input type="checkbox" id="sent_folder" name="sent_folder" checked>
                        <label for="sent_folder">Save a copy to your sent folder?</label>

                </p>
            </form>
        </section>
        </main> 
    </body>
</html>