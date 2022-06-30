<?php
declare(strict_types=1);
?>


<?php
include_once('view/header.php');
include_once("controller/Controller.php");

?>

<body>
    <div class="container">
        <header class="border-bottom ">
            <h1 class="text-center">Blackjack Using Php MVC</h1>
        </header>
        
        <div class="section">
            <?php
                if(!isset($_SESSION['controller'])){
                    $controller = new Controller();
                    $_SESSION['controller'] = $controller;
                }
                $_SESSION['controller']->invoke();
            ?>
        </div>
    </div>
</body>
</html>