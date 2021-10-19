<?php

declare(strict_types=1);
namespace Azad\Pattern\Mediator;
//require '../../../vendor/autoload.php'; Note: this is not needed for phpunit test cases

use Azad\Pattern\Mediator\Ui;
use Azad\Pattern\Mediator\UserRepository;
use Azad\Pattern\Mediator\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase{
    public function testOutput1()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        $this->expectOutputString('User: Dominik');
        $mediator->printInfoAbout('Dominik');
    }
}