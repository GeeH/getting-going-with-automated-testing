<?php declare(strict_types=1);

namespace App;

class Controller
{
    /** @var UserService */
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function __invoke(int $userId): array
    {
        if ($userId === 0) {
            throw new \InvalidArgumentException('We do not use zeroes here', 404);
        }

        $user = $this->userService->getUserById($userId, 'Zaphod');
        return [
            $user,
            $this->userService->isUserAdmin($user)
        ];
    }
}
