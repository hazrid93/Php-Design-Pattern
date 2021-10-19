<?php
declare(strict_types=1);
namespace Azad\Pattern\Mediator;

class Ui extends Colleague{

    public function outputUserInfo(string $username)
    {
        echo $this->mediator->getUser($username);
    }
}
?>