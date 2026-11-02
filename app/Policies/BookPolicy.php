<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, [
            'admin',
            'staff',
            'viewer',
        ]);
    }

    public function view(User $user, Book $book): bool
    {
        return in_array($user->role, [
            'admin',
            'staff',
            'viewer',
        ]);
    }

    public function create(User $user): bool
    {
        return in_array($user->role, [
            'admin',
            'staff',
        ]);
    }

    public function update(User $user, Book $book): bool
    {
        return in_array($user->role, [
            'admin',
            'staff',
        ]);
    }

    public function delete(User $user, Book $book): bool
    {
        return $user->role === 'admin';
    }

    public function deleteAny(User $user): bool
    {
        return $user->role === 'admin';
    }
}
