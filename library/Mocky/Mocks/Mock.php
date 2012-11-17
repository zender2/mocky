<?php
/**
 * Mocky Mock
 */
class Mocky_Mock
{
    /**
     * @var Mocky_Mock_Adapter_Interface
     */
    private $_adapter;

    /**
     * @param Mocky_Mock_Adapter_Interface $adapter
     */
    public function __construct($adapter)
    {
        $this->setAdapter($adapter);
    }

    /**
     * @param Mocky_Mock_Adapter_Interface $adapter
     * @return Mocky_Mock
     */
    public function setAdapter($adapter)
    {
        $this->_adapter = $adapter;
        return $this;
    }

    /**
     * @return Mocky_Mock_Adapter_Interface
     */
    public function getAdapter()
    {
        return $this->_adapter;
    }

}