<?php

class User{
    
    protected $id;
    protected $name;
    protected $lastname;


    public function __construct(int $id,  string $name, string $lastname)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
    }
}
//https://www.youtube.com/watch?v=yckOgnx1f8g

?>