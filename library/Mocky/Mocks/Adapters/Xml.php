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
        $mockConfig = new Zend_Config_Xml($this->getFile());

        // convert from Zend_Config to stdClass
        $mock = $this->cast(new stdClass(), $mockConfig);

        // save data
        $this->setData($mock);

        return $this;
    }

    /**
     * @param stdClass    $destination
     * @param Zend_Config $source
     *
     * @return stdClass
     */
    public function cast(stdClass $destination, Zend_Config $source)
    {
        $sourceReflection = new ReflectionObject($source);
        $sourceProperties = $sourceReflection->getProperties();
        foreach ($sourceProperties as $sourceProperty) {
            $name = $sourceProperty->getName();
            $destination->{$name} = $source->$name;
        }
        return $destination;
    }


}