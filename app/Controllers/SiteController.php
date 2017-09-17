<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\StreamInterface as Stream;

class SiteController extends BaseController
{

    public function home(Request $request, Response $response)
    {
        $data = [
            'hero' => [
                'title' => 'Club Burrito',
                'image' => 'https://www.bestofengland.com/wp-content/uploads/2016/02/ClubBurrito-5.jpg'
            ],

            'callToAction' => [
                'text' => 'Know a great place to eat?',
                'button' => [
                    'text' => 'Suggest',
                    'href' => '#'
                ]
            ]
        ];

        $body = $response->getBody();
        $body->write($this->twig->render('templates/home.twig', $data));

        return $response;
    }

}
