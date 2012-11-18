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
    public $_file = 'testfile.xml';

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

    /**
     * Test set data method
     */
    public function testSetGetData()
    {
        // set data
        $response = $this->_target->setData($this->_data);
        $this->assertEquals(true, $response instanceof Mocky_Mock_Adapter_Xml);

        // get data
        $response = $this->_target->getData();
        $this->assertEquals(true, $response instanceof stdClass);
        $this->assertEquals($this->_data, $response);
    }

    /**
     * Test set data method
     */
    public function testSetGetFile()
    {
        // set file
        $response = $this->_target->setFile($this->_file);
        $this->assertEquals(true, $response instanceof Mocky_Mock_Adapter_Xml);

        // get data
        $response = $this->_target->getFile();
        $this->assertEquals(true, is_string($response));
        $this->assertEquals($this->_file, $response);
    }

    /**
     * Test get data method throws exception
     */
    public function testGetDataException()
    {
        try {
            $response = $this->_target->getData();
        } catch (Mocky_Mock_Adapter_Exception_NoData $e) {
            return true;
        }
        $this->fail('No Exception thrown. Expecting \'Mocky_Mock_Adapter_Exception_NoData\'');
    }

    /**
     * Test get file method throws exception
     */
    public function testGetFileException()
    {
        try {
            $response = $this->_target->getFile();
        } catch (Mocky_Mock_Adapter_Exception_NoFile $e) {
            return true;
        }
        $this->fail('No Exception thrown. Expecting \'Mocky_Mock_Adapter_Exception_NoFile\'');
    }

    /**
     * Test is valid is true
     */
    public function testIsValidTrue()
    {
        // set data
        $response = $this->_target->setData($this->_data);
        $this->assertEquals(true, $response instanceof Mocky_Mock_Adapter_Xml);

        // get data
        $response = $this->_target->isValid();
        $this->assertEquals(true, $response);
    }

    /**
     * Test is valid is false
     */
    public function testIsValidFalse()
    {
        // get data
        $response = $this->_target->isValid();
        $this->assertEquals(false, $response);
    }

}