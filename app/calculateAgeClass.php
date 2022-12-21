<?php

namespace App;

//simple binding in service container

//create class calculateAgeClass
class calculateAgeClass
{
    //create public variable
    public $age;

    //create function provide_birth_year which provide a Year (Date function)
    function provide_birth_year($yearOfBirth)
    {
        //calculation for age
        $this->age = 2021 - $yearOfBirth;
    }
    function get_age()
    {
        //return a value of age
        return $this->age;
    }
}


//singleton binding in sservice provider

/*class  container
{
    protected $bindings = [];
    public function bind($name, callable $resolver)
    {
        $this->bindings[$name] = $resolver;
    }
    public function  make($name)
    {
        return $this->bindings[$name];
    }
}
$container = new container;
$container->bind('Game', function () {
    return 'Cricket';
});
print_r($container->make('Game'));
*/
//instance Binding
/*class Stadium
{
}
class Cricket
{
    public function __construct(Stadium $stadium)
    {
        $this->stadium = $stadium;
    }
}
class Game
{
    public function __construct(Cricket $cricket)
    {
        $this->cricket = $cricket;
    }
}
*/
