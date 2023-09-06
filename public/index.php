<?php 

    require "../boostrap.php";

    dd(app\classes\Uri::uri());

    $controller = new Controller;
    $controller = $controller->getController();

    // $method = new Method;
    // $method = $method->getMethod();

    // $parameters = new Parameters;
    // $controller = $controller->getParameters();

    // $controller->getMethod($parameters);



?>