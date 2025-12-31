<?php

declare(strict_types = 1);
namespace App\Controller;

use App\DTO\Credentials;
use App\DTO\Pagination;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;


final class DefaultController extends AbstractController
{
    //Test1/2//4
    #[Route('/default', name: 'app_default')]

    //Test3
    //#[Route('api',name:'app_api')//
    public function index(#[MapRequestPayload] Credentials $credentials): Response
    //public function index(#[MapQueryString] Pagination $pagination): Response

        {
        //Test1
        ////dump($requestObject->query->all(), $requestObject->request->all());

        //Test2
        /*$page1 = $requestObject->query->get('page',1);
        $page = $requestObject->query->getInt('page',1);

        $clientIpAddress = $requestObject->server->get('REMOTE_ADDR');
        dump($page,$clientIpAddress);
*/
            dump($credentials);
        //dump($pagination);

    /*dd(
            $requestObject->request->all(),
            $requestObject->getPayload(),
        );
    */
/*dd(
            $requestObject->request->all(),
            $requestObject->getPayload(),
            $requestObject->getContent(),
            $requestObject->toArray(),
        );
*/
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
