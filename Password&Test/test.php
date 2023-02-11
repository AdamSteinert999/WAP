<?php

class PasswordTest 
{
    public function testGenerate()
    {
        $password = new Password("");
        $generatedPassword = $password->generate();
        $this->assertEquals(strlen($generatedPassword), 8);
        
        $generatedPassword = $password->generate(16, "silné");
        $this->assertEquals(strlen($generatedPassword), 16);
    }

    public function testCheck()
    {
        $password = new Password("password");
        $this->assertTrue($password->check("password"));
        $this->assertFalse($password->check("password123"));
    }

    public function testGetPassword()
    {
        $password = new Password("password123");
        $this->assertEquals($password->getPassword(), "password123");
    }
}

?>