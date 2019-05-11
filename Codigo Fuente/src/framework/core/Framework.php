<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 10/5/2019
 * Time: 19:59
 */

class Framework
{
    public static function run()
    {

//        echo "run()";

        self::init();

        self::autoload();

        self::dispatch();

    }


    // Initialization

    private static function init()
    {
        // Defino los PATH constantes

        define("DS", DIRECTORY_SEPARATOR);

        define("ROOT", getcwd() . DS);

        define("APP_PATH", ROOT . 'application' . DS);

        define("FRAMEWORK_PATH", ROOT . "framework" . DS);

        define("PUBLIC_PATH", ROOT . "public" . DS);


        define("CONFIG_PATH", APP_PATH . "config" . DS);

        define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);

        define("MODEL_PATH", APP_PATH . "models" . DS);

        define("VIEW_PATH", APP_PATH . "views" . DS);


        define("CORE_PATH", FRAMEWORK_PATH . "core" . DS);

        define('DB_PATH', FRAMEWORK_PATH . "database" . DS);

        define("LIBRARY_FRAMEWORK_PATH", FRAMEWORK_PATH . "libraries" . DS);

        define("HELPER_PATH", FRAMEWORK_PATH . "helpers" . DS);

        define("UTIL_PATH", FRAMEWORK_PATH . "utils" . DS);

        define("DTO_PATH", FRAMEWORK_PATH . "dto" .  DS);

        define("UPLOAD_PATH", PUBLIC_PATH . "uploads" . DS);

        define("JS_PATH", PUBLIC_PATH . "js" . DS);

        define("LIB_PATH", PUBLIC_PATH . "lib" . DS);

        define("CSS_PATH", PUBLIC_PATH . "css" . DS);

        define("IMAGE_PATH", PUBLIC_PATH . "images" . DS);

        define("PDF_PATH", PUBLIC_PATH . "pdfs" . DS);

        define("JSON_PATH", PUBLIC_PATH . "json" . DS);


        // Defino plataforma, controlador y acción... Por ejemplo:

        // index.php?p=admin&c=Goods&a=add

        // Se tendrá que armar una función en JS que arme todos los links de esta forma

        define("PLATFORM", isset($_REQUEST['p']) ? $_REQUEST['p'] : 'home');

        define("CONTROLLER", isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Index');

        define("ACTION", isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index');


        define("CURR_CONTROLLER_PATH", CONTROLLER_PATH . PLATFORM . DS);

        define("CURR_VIEW_PATH", VIEW_PATH . PLATFORM . DS);


        // Cargo las clases de CORE

        require_once CORE_PATH . "Controller.php";

        require_once CORE_PATH . "Loader.php";

        require_once DB_PATH . "Mysql.php";

        require_once CORE_PATH . "Model.php";

        // Start session

        session_start();
    }


    // Autoloading

    private static function autoload()
    {
        spl_autoload_register(array(__CLASS__,'load'));
    }

    // Defino una carga personalizada

    private static function load($classname){


        // Aquí simplemente auto carga los modelos o los controladores correspondientes

        if (substr($classname, -10) == "Controller"){

            // Controller

            require_once CURR_CONTROLLER_PATH . "$classname.php";

        } elseif (substr($classname, -5) == "Model"){

            // Model

            require_once  MODEL_PATH . "$classname.php";

        }

        //Este framework debe respetar que los controladores se escriben de esta forma: HomeController, SeguridadController, etc...

        //Los modelos se escriben de la siguiente manera: UsuarioModel, PokemonModel, etc...
    }


    // Routing and dispatching

    private static function dispatch()
    {

        // Instanciamos la clase controlador y llamados a su acción correspondiente

        $controller_name = CONTROLLER . "Controller";

        $action_name = ACTION . "Action";

        $controller = new $controller_name;

        $controller->$action_name();

    }
}