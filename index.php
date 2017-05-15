<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Permanent+Marker" rel="stylesheet">
        <meta charset="utf-8">
        <title>Lali's Kitchen</title>
    </head>
    <body>
        <div class="header">
            <?php include("header.html") ?>
        </div>
        <img id="hero" src="wireframes/Banner2x.png" alt="Simgaporean Cuisine"></img>
        <div class="inner">
            <br>
            <div class="inner-inner">
                <p>Singaporean cuisine history… Singapore dates back centuries before as a major port in the region; and where there are ships, there will be a traders from all over the world. Over these centuries, foreign immigrants have helped shape the population; Chinese, Malaysian, Indonesian, Indian, European and Japanese influences are just the main contributors to what is now the Singaporean population of today.</p>
                <p>Making desserts (kuih) takes time, patience and love of doing it. Every dessert I make tastes like its made in the homeland. Each bite brings pleasant memories of Singapore. -Lali</p>
            </div>

            <div class="row">
                    <img class="prod" src="assets/1.jpg" alt="dessert">
                    <img class="prod" src="assets/2.jpg" alt="dessert">
                    <img class="prod" src="assets/3.jpg" alt="dessert">
            </div>
            <div class="row">
                    <img class="prod" src="assets/4.jpg" alt="dessert">
                    <img class="prod" src="assets/5.jpg" alt="dessert">
                    <img class="prod" src="assets/6.jpg" alt="dessert">
            </div>
            <div class="row">
                    <img class="prod" src="assets/7.jpg" alt="dessert">
                    <img class="prod" src="assets/8.jpg" alt="dessert">
                    <img class="prod" src="assets/9.jpg" alt="dessert">
            </div>

        </div>
        <div class="ad">
            <div class="inner">
                <h1>Satisfy Your Cravings!</h1>
                <a class="button"; href="order.php">Place an Order</a>
            </div>
        </div>
        <div class="inner">
        <div class="email">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <form class="email" action="mailto:amandabukur11@gmail.com" method="post" enctype="text/plain" onsubmit="window-alert('Woosh, the message was sent. Thanks!')">
                <fieldset id="msg">
                    <legend>Say Hello!</legend>
                    <ul>
                        <li><label for="Name: ">Name: </label><input type="text" name="name" id="name" class="text-input"></li>
                    </ul>
                </fieldset>

            </form>

        </div>
    </div>

<?php include("footer.html") ?>
