<?php

namespace app\core;

enum Layout: string
{
    case Main = "main";
    case Auth = "auth";
}

class Controller
{
    public Layout $layout = Layout::Main;
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function setLayout(Layout $layout)
    {
        $this->layout = $layout;
    }
}