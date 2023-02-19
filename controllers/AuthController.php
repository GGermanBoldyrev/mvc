<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Layout;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login(): array|bool|string
    {
        $this->setLayout(Layout::Auth);
        return $this->render('login');
    }

    public function register(Request $request): array|bool|string
    {
        $this->setLayout(Layout::Auth);
        $registerModel = new RegisterModel();
        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->register()) {
                return 'Success';
            }
            return $this->render('register', [
                'model' => $registerModel
            ]);
        }
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }
}