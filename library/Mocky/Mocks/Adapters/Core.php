<?php
/**
 * Mocky Mock Adapter Core
 */
abstract class Mocky_Mock_Adapter_Core
{

    /**
     * @var stdClass
     */
    protected $_data;

    /**
     * @var string
     */
    protected $_file;

    /**
     *
     * @throws Mocky_Mock_Adapter_Exception_NoData
     * @return stdClass
     */
    public function getData()
    {
        if (empty($this->_data)) {
            require_once('Mocky/Mocks/Adapters/Exceptions/NoData.php');
            throw new Mocky_Mock_Adapter_Exception_NoData('Must set data first, use $adapter->setData($data) or
            $adapter->loadData()');
        }
        return $this->_data;
    }

    /**
     * @param $data
     *
     * @return Mocky_Mock_Adapter_Interface
     */
    public function setData($data)
    {
        $this->_data = $data;
        return $this;
    }

    /**
     *
     * @throws Mocky_Mock_Adapter_Exception_NoFile
     * @return stdClass
     */
    public function getFile()
    {
        if (empty($this->_file)) {
            require_once('Mocky/Mocks/Adapters/Exceptions/NoFile.php');
            throw new Mocky_Mock_Adapter_Exception_NoFile('Must set file first, use $adapter->setFile(\'file path\')');
        }
        return $this->_file;
    }

    /**
     * @param string $file
     *
     * @return Mocky_Mock_Adapter_Interface
     */
    public function setFile($file)
    {
        $this->_file = (string) $file;
        return $this;
    }

    /**
     * Is valid, if data loaded then must be valid
     *
     * @return bool
     */
    public function isValid()
    {
        if (!empty($this->_data)) {
            return true;
        }
    }


}