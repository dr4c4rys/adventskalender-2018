<?php

// src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
   /**
    * @Route("/")
    */
    public function startpage()
    {
        return new Response(
            '<html><body>Have fun: Chadha, Denis, Stefan</body></html>'
        );
    }
}

