<?php
declare(strict_types=1);
namespace Azad\Pattern\Mediator;

class UserRepository extends Colleague{

    public function getUserName(string $user): string
    {
        return 'User: ' . $user;
    }
}
?>