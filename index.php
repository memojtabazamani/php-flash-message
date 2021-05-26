<?php 
require("onTimeFlash.php");
$flash = new flash();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Example</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
        <div class="container p-5">
            <div>
                <h5>
                    use once flash!
                </h5>
                <p>
                    Use below code : 
                </p>
                <code>
                    $flash->onceFlash("Hey There!", "info");
                </code>
                <?php 
                /// Once flash!
                $flash->onceFlash("Hey There!", "info");
                flash::messageFlash();
                ?>
                <h5>
                    Multiple Flash
                </h5>
                <p>
                    Use below code : 
                </p>
                <code>
                    $flash->multipleFlash(array("Username must be entred!", "Password cannot be empty!"), "danger");
                </code>
                <?php 
                $flash->multipleFlash(array("Username must be entred!", "Password cannot be empty!"), "danger");
                flash::messageFlash();
                ?>
                <h5>
                    Warning Flash
                </h5>
                <p>
                    Use below code : 
                </p>
                <code>
                    $flash->warningFlash("Clear your cache as soon as possible !!");
                </code>
                <?php 
                $flash->warningFlash("Clear your cache as soon as possible !!");
                flash::messageFlash();
                ?>
                <h5>
                    Danger Flash
                </h5>
                <p>
                    Use below code : 
                </p>
                <code>
                    $flash->dangerFlash("You can not, because your name is on the block list");
                </code>
                <?php
                $flash->dangerFlash("You can not, because your name is on the block list");
                flash::messageFlash();
                ?>
                <h5>
                    Info Flash
                </h5>
                <p>
                    Use below code : 
                </p>
                <code>
                   $flash->infoFlash();
                </code>
                <?php
                // Here call a info flash by default argument!
                $flash->infoFlash();
                flash::messageFlash();
                ?>
                <h5>
                    Success Flash
                </h5>
                <p>
                    Use below code : 
                </p>
                <code>
                   $flash->successFlash("Your transaction was successful! congratulations!");
                </code>
                <?php
                // Here call a info flash by default argument!
                $flash->successFlash("Your transaction was successful! congratulations!");
                flash::messageFlash();
                ?>

            </div>
        </div>
    </body>
</html>