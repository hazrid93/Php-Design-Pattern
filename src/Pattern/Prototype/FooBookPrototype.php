<?php
declare(strict_types=1);
namespace Azad\Pattern\Prototype;

class FooBookPrototype extends BookPrototype{
    protected string $category = 'Foo';

    public function __clone(){
       
    }

}
?>