<?php declare(strict_types=1);

namespace Test\App;


use App\User;
use App\UserService;
use PHPUnit\Framework\TestCase;

/** @covers \App\UserService */
class UserServiceTest extends TestCase
{
    /** @var UserService */
    private $userService;

    public function setUp()
    {
        $this->userService = new UserService();
    }

    public function testIsUserAdminReturnsTrueForAdminUser()
    {
        $user = new User();
        $user->id = 42;
        self::assertTrue($this->userService->isUserAdmin($user));
    }

    public function testIsUserAdminReturnsFalseForNonAdminUser()
    {
        $user = new User();
        $user->id = 100;
        self::assertFalse($this->userService->isUserAdmin($user));
    }

    public function testGetUserByIdCreatesNewUser()
    {
        $user = $this->userService->getUserById(42, 'Zaphod');
        self::assertInstanceOf(User::class, $user);
        self::assertSame($user->id, 42);
        self::assertSame($user->name, 'Zaphod');
        self::assertSame($user->active, false);
    }
}
