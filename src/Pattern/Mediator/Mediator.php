<?php
declare(strict_types=1);
namespace Azad\Pattern\Mediator;

interface Mediator{
    public function getUser(string $username) : string;
}
?>