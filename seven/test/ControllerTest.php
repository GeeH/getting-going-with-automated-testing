<?php declare(strict_types=1);

namespace Test\App;

use App\Controller;
use App\User;
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
        $user = new User();
        $user->id = 42;
        $user->name = 'Zaphod';

        $this->userServiceMock
            ->expects($this->once())
            ->method('getUserById')
            ->with(42)
            ->willReturn($user);

        $this->userServiceMock
            ->expects($this->once())
            ->method('isUserAdmin')
            ->with($user)
            ->willReturn(true);

        $result = $this->controller->__invoke(42);

        self::assertSame($result[0], $user);
        self::assertTrue($result[1]);
    }

    public function testInvokeThrowsExceptionIfUserIdIsZero()
    {
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage('We do not use zeroes here');

        $this->controller->__invoke(0);
    }
}
