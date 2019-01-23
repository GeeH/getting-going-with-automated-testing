<?php declare(strict_types=1);

namespace Test\App;


use App\Controller;
use App\UserService;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ControllerTest extends TestCase
{
    /** @var MockObject|UserService */
    private $userServiceMock;

    /** @var Controller */
    private $controller;

    public function setUp()
    {
        $this->userServiceMock = $this->createMock(UserService::class);
        $this->controller = new Controller($this->userServiceMock);
    }

    public function testInvokeReturnsArrayWhenUserIdSupplied()
    {
    }

}