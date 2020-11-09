<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatures</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <a class="navbar-brand" href="#">Temperature</a>
        <!--
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#100">100°F to °c</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#60">60°F to °C</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#20">20°F to °C</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#0">0°C to °F</a>
                </li>
            </ul>
        </div>
        -->
    </nav>
    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-4">Temperature</h1>
            <hr class="my-4">
            <p class="lead">The formula to convert degrees Fahrenheit to degrees Celsius is: <strong>(X °F − 32) × 5/9 = Y °C</strong></p>
        </div>

        <?php
            $fahrenheitoriginal = 50;
            $celsiusresult = round(((($fahrenheitoriginal - 32) * 5)/9), 2);
            echo "<h3 class='text-center'>It is ". $celsiusresult ." degrees Celsius<h3>";

            if ($celsiusresult <= 5)
                echo '<div class="alert alert-primary text-center" role="alert"><p>From 0°C to 5°C: <strong>Very cold!</strong></p><p><img src="assets\01-freezing.jpg" class="img-fluid rounded-lg"></p></div>';

            elseif ($celsiusresult > 5 && $celsiusresult <= 10 )
                echo '<div class="alert alert-info text-center" role="alert"><p>From 6°C to 10°C: <strong>Cold!</strong></p><p><img src="assets\02-cold.jpg" class="img-fluid rounded-lg"></p></div>';

            elseif ($celsiusresult >= 11 && $celsiusresult <= 15 )
                echo '<div class="alert alert-success text-center" role="alert"><p>From 11°C to 15°C: <strong>Pleasant!</strong></p><p><img src="assets\03-pleasant.jpg" class="img-fluid rounded-lg"></p></div>';

            elseif ($celsiusresult >= 16 && $celsiusresult <= 20 )
                echo '<div class="alert alert-warning text-center" role="alert"><p>From 16°C to 20°C: <strong>Warm!</strong></p><p><img src="assets\04-warm.jpg" class="img-fluid rounded-lg"></p></div>';
            
            elseif ($celsiusresult >= 21 )
                echo '<div class="alert alert-danger text-center" role="alert"><p>Above 21°C: <strong>Hot!</strong></p><p><img src="assets\05-hot.jpg" class="img-fluid rounded-lg"></p></div>';
        ?>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>