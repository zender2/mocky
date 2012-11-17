<?php
/**
 * Std class example mock
 */
class Test_Mock_StdClass
{

    /**
     * @return stdClass
     */
    public function result()
    {
        $mock = new stdClass();
        $mock->result = new stdClass();
        $mock->result->firstname = 'first name';
        $mock->result->lastname = 'last name';

        return $mock;
    }


}