<?php
/**
 * User example mock
 */
class Test_Mock_User
{

    /**
     * @return stdClass
     */
    public function getUser()
    {
        $mock = new stdClass();
        $mock->user = new stdClass();
        $mock->user->firstname = 'Eddie';
        $mock->user->lastname = 'Abou-Jaoude';
        $mock->user->country = 'UK';

        return $mock;
    }


}