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
        $user = $this->userService->getUserById($userId, 'Zaphod');
        return [
            $user,
            $this->userService->isUserAdmin($user)
        ];
    }
}