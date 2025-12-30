<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class FirstController
{
    #[Route(path:"/hello",name:"greeting")]
    public function PrintHello():Response{
        $html = <<<HTML
<html lang="en">
    <head>
        <title>Print Hello</title>
    </head>
    <body>
        <h1>Hello Symfony</h1>
    </body>
</html>
HTML;
    return new Response($html);
    }

}
