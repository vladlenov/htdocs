<?php
/**
 * User: vladlenov
 */

class View {
    protected $data;
    protected $path;
/*
 * определяем путь к шаблону без создания объекта
 */
    protected static function getDefaultViewPath(){
        $router = App::getRouter();
        if (!$router){
            return false;
        }
        // записываем название контроллера и html-шаблона
        // (название метода контроллера, начиная с префикса метода)
        $controller_dir = $router->getController();
        $template_name = $router->getMethodPrefix().$router->getAction().'.html';
        // возврат полного пути к шаблону
        return VIEWS_PATH.DS.$controller_dir.DS.$template_name;
    }
/*
 * конструктор класса, получаем данные (либо создаём пустой массив) и определяем путь
 */
    public function __construct($data = array(), $path = null) {
        if(!$path){
            $path = self::getDefaultViewPath();
        }

        if(!file_exists($path)){
            throw new Exception('Template file is not found in path: '.$path);
        }
        $this->path = $path;
        $this->data = $data;
    }
/*
 * самая важная функция класса - осуществляет рендеринг и возвращает готовый HTML-код,
 * буферизируем готовый html-код
 */
    public function render() {
        $data = $this->data;

        ob_start();
        include ($this->path);
        $content = ob_get_clean();

        return $content;
    }
}