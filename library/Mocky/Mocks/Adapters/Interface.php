<?php
/**
 * Mock Adapter Interface
 */
interface Mocky_Mock_Adapter_Interface
{

    /**
     * @return stdClass
     */
    public function getData();

    /**
     * @param  stdClass
     * @return Mocky_Mock_Adapter_Interface
     */
    public function setData(stdClass $data);

    /**
     * @return Mocky_Mock_File
     */
    public function getFile();

    /**
     * @param  string
     * @return Mocky_Mock_Adapter_Interface
     */
    public function setFile($file);

    /**
     * @return stdClass
     */
    public function loadData();


}
