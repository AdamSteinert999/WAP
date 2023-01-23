<?php
try {
    $rbk = new City("Rumburk");
    echo $rbk->getName(); . PHP_EOL;
    echo $rbk->name; . PHP_EOL;
    $rbk->setName("Rumbajz");
    echo $rbk->name; . PHP_EOL;

} catch (Exception $e){
    echo $e->getMessage(); . PHP_EOL;
}

class city{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setName(string $value): self
    {
        $this->name = $value;
        return $this
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __get(): string
    {
        return $this->name;
    }

    public function __set($name, $value)
    {
        throw new Exception("Error: Atribut '$name' does not exist"); 
    }
    
}