<?php
declare(strict_types=1);
namespace Azad\Pattern\Prototype;

class BarBookPrototype extends BookPrototype{
    protected string $category = 'Bar';

    public function __clone(){
       
    }

}
?>