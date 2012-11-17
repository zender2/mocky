<?php
set_include_path(
    implode(PATH_SEPARATOR, array(
            realpath(dirname(__FILE__) . '/../library'),
            realpath(dirname(__FILE__) . '/../tests'),
            get_include_path(),
        )
    )
);

defined('APPLICATION_ENV') || define('APPLICATION_ENV', 'testing');
defined('APPLICATION_LIBRARY') || define('APPLICATION_LIBRARY', realpath(dirname(__FILE__) . '/../library'));
defined('APPLICATION_TESTS') || define('APPLICATION_TESTS', realpath(dirname(__FILE__) . '/../tests'));

require_once 'Zend/Loader/Autoloader.php';
$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader->registerNamespace(array('Mocky_'));

/**
 * Base Test Class
 */
abstract class BaseTestCase extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {

    }

}