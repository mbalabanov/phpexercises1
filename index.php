<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Hello, world!</title>
    </head>
    <body class="bg-light">

    <div class="container">

        <div class="row mt-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#ex1" role="tab" aria-controls="home" aria-selected="true">Exercise 1</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ex2" role="tab" aria-controls="profile" aria-selected="false">Exercise 2</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ex3" role="tab" aria-controls="contact" aria-selected="false">Exercise 3</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ex4" role="tab" aria-controls="contact" aria-selected="false">Exercise 4</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ex5" role="tab" aria-controls="contact" aria-selected="false">Exercise 5</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ex6" role="tab" aria-controls="contact" aria-selected="false">Exercise 6</a>
                    </li>
                </ul>
                <div class="tab-content border-left border-right border-bottom p-4 bg-white" id="myTabContent">
                    <div class="tab-pane fade show active" id="ex1" role="ex4" aria-labelledby="home-tab">
                        <h2>Exercise 1</h2>
                        <p>Print your name in an h1 HTML element using PHP (define the variable and store your name into it). Use external CSS to position your name in the middle of the screen (horizontal, vertical).</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php
                            /* Exercise 1 */
                            $greeting = "<h1>Welcome to the site by<br>Marin Balabanov!</h1>";
                            echo $greeting;
                        ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex2" role="tabpanel" aria-labelledby="profile-tab">
                        <h2>Exercise 2</h2>
                        <p>Create an if statement which will be based on the current day. Output a message - if it is Monday it will return: "Happy Monday!" If it is not a Monday it should return: "Have a nice day!"</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php
                            /* Exercise 2 */
                            $todayname=date("D");
                            if ($todayname=="Mon" )
                            echo "<h2>Happy Monday!</h2>";
                            else
                            echo "<h2>Have a nice day!</h2>" ;
                        ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex3" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 3</h2>
                        <p>Create an else if statement which will be based on the current day. Output a message - if it is Monday, it will return: "Today is Monday!" if it is Tuesday, it will return: "Today is Tuesday!" etc. for every day in the week.</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php
                            $week = array( "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                            $todaycount=date("w");
                            echo "<h3>Today is $week[$todaycount]!</h3>";
                        ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex4" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 4</h2>
                        <p>Create a <strong>for</strong> loop which will print your name 50 times on the screen. Do the same with <strong>while</strong> and <strong>do while</strong> loop.</p>
                        <h3>Solution</h3>
                        <div class="row">
                            <div class="col-4 p-2">
                                <div class="alert alert-info text-center" role="alert">
                                    <h3>For</h3>
                                    <?php
                                        for( $indexfor = 0; $indexfor < 50; $indexfor++ )
                                        {
                                            echo "<p>Marin (iteration no. $indexfor) </p>\n";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-4 p-2">
                                <div class="alert alert-warning text-center" role="alert">
                                    <h3>While</h3>
                                    <?php
                                        $indexwhile = 0;
                                        while( $indexwhile <  50)
                                        {
                                            $indexwhile++;
                                            echo "<p>Marin (iteration no. $indexwhile) </p>\n";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-4 p-2">
                                <div class="alert alert-secondary text-center" role="alert">
                                    <h3>Do While</h3>
                                    <?php
                                        $indexdowhile = 0;
                                        do
                                        {
                                            echo "<p>Marin (iteration no. $indexdowhile) </p>\n";
                                            $indexdowhile++;
                                        } while( $indexdowhile < 50 );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex5" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 5</h2>
                        <p>Define a numeric array with 10 elements. Use a <strong>foreach</strong> loop to output the value of every array's element.</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php
                            $pokemon = array("Bulbasaur", "Ivysaur", "Venusaur", "Charmander", "Charmeleon", "Charizard", "Squirtle", "Wartortle", "Blastoise", "Caterpie", "Metapod");
                            foreach( $pokemon as  $pokename )
                            {
                                echo "<p>The Pokémon is called $pokename </p>";
                            }
                        ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex6" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 6</h2>
                        <p>Define an associative array and output array elements on the screen. Use for this cartoon/anime/game characters (like Mickey Mouse, Super Mario, Goku, Pokemon etc.).</p>
                        <p>Transform this code into a solution done with multidimensional arrays to track different properties of the characters. (Hint: remember the logic used for the automated creation of HTML).</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>
