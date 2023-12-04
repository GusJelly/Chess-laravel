<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Chessie;

class ChessiePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Chessie $chessie): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Chessie $chessie): bool
    {
        return $chessie->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Chessie $chessie): bool
    {
        return $this->update($user, $chessie);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Chessie $chessie): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Chessie $chessie): bool
    {
        //
    }
}
