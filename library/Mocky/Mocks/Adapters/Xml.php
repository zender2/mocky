<?php
/**
 * Mocky Mock Adapter XML
 */
require_once('Mocky/Mocks/Adapters/Core.php');
require_once('Mocky/Mocks/Adapters/Interface.php');
class Mocky_Mock_Adapter_Xml extends Mocky_Mock_Adapter_Core implements Mocky_Mock_Adapter_Interface
{

    /**
     * @return bool
     */
    public function loadData()
    {
        // load file
        $mock = simplexml_load_file($this->getFile());

        // save data
        $this->setData($mock);

        return $this;
    }



}