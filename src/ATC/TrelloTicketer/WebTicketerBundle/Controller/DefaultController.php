<?php

namespace ATC\TrelloTicketer\WebTicketerBundle\Controller;

use InkApplications\TrelloApi\Board\BoardService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        /** @var BoardService $boards */
        $boards = $this->get('trello_api_board_service');
//        $response = $boards->createCard('54d13dfe806daed1637d9c0c', 'Hello Wald!!!!! Woo!', 'red');
        $response = $boards->getBoard('EuoldhBf');
        echo "<pre>";
        var_dump($response);
        echo "</pre>";
        exit;

//        return ['board_json' => $response];
    }
}
