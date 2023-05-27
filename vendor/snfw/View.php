<?php

namespace SNFW;

class View
{
    public string $content = '';

    public function __construct(
        public $route,
        public $layout = '',
        public $view = '',
        public $meta = []
    )
    {
        if (false !== $this->layout){
            $this->layout = $this->layout ?: LAYOUT;
        }
    }

    public function render($data)
    {
        if(is_array($data)){
            extract($data);
        }
        $prefix = str_replace("\\", "/", $this->route['admin_prefix']);
        $viewFile = APP . "/views/{$prefix}{$this->route['controller']}/{$this->view}.php";
        if(is_file($viewFile)){
            ob_start();
            require_once $viewFile;
            $this->content = ob_get_clean();
        } else {
            throw new \Exception("Не найден вид {$viewFile}", 500);
        }

        if(false !== $this->layout){
            $layoutFile = APP . "/views/layouts/{$this->layout}.php";
            if(is_file($layoutFile)){
                require_once $layoutFile;
            } else{
                throw new \Exception("Не найден шаблон {$layoutFile}");
            }
        }
    }
}