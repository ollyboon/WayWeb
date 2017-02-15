<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

class UsersController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 500,
        'maxLimit' => 15,
    ];

}