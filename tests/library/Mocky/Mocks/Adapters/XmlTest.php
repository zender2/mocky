<?php
/**
 * Test Core adapter
 */
require_once('Mocky/Mocks/Adapters/Xml.php');
class Test_Mocky_Mock_Adapter_Core extends BaseTestCase
{
    /**
     * @var Mocky_Mock_Adapter_Xml
     */
    public $_target;

    /**
     * @var stdClass
     */
    public $_data;

    /**
     * @var stdClass
     */
    public $_file = 'Mocks/User.xml';

    /**
     * Setup test class variables
     */
    public function setUp()
    {
        $this->_target = new Mocky_Mock_Adapter_Xml;

        $this->_data = new stdClass();
        $this->_data->example = 'test data';
    }

    /**
     * Test initialised objects
     */
    public function testObject()
    {
        $this->assertEquals(true, is_object($this->_target));
    }

    public function testLoadData()
    {
        // set file
        $response = $this->_target->setFile($this->_file);
        $this->assertEquals(true, $response instanceof Mocky_Mock_Adapter_Xml);

        // load file
        $response = $this->_target->loadData();
        $this->assertEquals(true, $response instanceof Mocky_Mock_Adapter_Xml);
    }

}