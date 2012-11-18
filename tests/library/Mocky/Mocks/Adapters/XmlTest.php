<?php
/**
 * Test Core adapter
 */
require_once('Mocky/Mocks/Adapters/Xml.php');
require_once('Mocks/User.php');
class Test_Mocky_Mock_Adapter_Xml extends BaseTestCase
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

        $this->_data          = new stdClass();
        $this->_data->example = 'test data';
    }

    /**
     * Test initialised objects
     */
    public function testObject()
    {
        $this->assertEquals(true, is_object($this->_target));
    }

    /**
     * Test load data
     */
    public function testLoadData()
    {
        // set file
        $response = $this->_target->setFile($this->_file);
        $this->assertEquals(true, $response instanceof Mocky_Mock_Adapter_Xml);

        // load file
        $response = $this->_target->loadData();
        $this->assertEquals(true, $response instanceof Mocky_Mock_Adapter_Xml);

        // get data & check for correct type & no data loss
        $data = $this->_target->getData();
        $mock = new Test_Mock_User();
        $user = $mock->getUser();

        foreach ($user->user as $k=>$v) {
            $this->assertEquals($data->user->{$k}, $v);
        }
    }


}