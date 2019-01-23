<?php declare(strict_types=1);

namespace App;

class UserService
{
    public function isUserAdmin(User $user): bool
    {
        return $user->id === 42;
    }

    public function getUserById(int $id, string $name): User
    {
        $user = new User();
        $user->id = $id;
        $user->name = $name;

        return $user;
    }
}
