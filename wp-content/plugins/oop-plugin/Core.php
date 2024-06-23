<?PHP

/*
Plugin Name:oop plugin
Description: پلاگین نمونه
Author:bahar-sh
Version:1.0.0
*/

defined(constant_name:'ABSPATH') || exit;
class Core
{
    public function __construct()
    {
        $this->define_constants();
        $this->init();

        
    }

    public function define_constants()
    {
        define('OOP_PLUGIN_DIR',plugin_dir_path(file:__FILE__));
        define('OOP_PLUGIN_URL',plugin_dir_url(file:__FILE__));
     

    }
    public function init()
    {
        register_activation_hook(__FILE__,[$this.'activation']);
        register_activation_hook(__FILE__,[$this.'deactivation']);
    }

    public function register_assets()
    {
        //Register CSS

        //Register JS

    }
    public function activation(){

    }
    public function deactivation(){

    }
    
}

$Core =new Core();
var_dump(value:OOP_PLUGIN_DIR);