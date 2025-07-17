<?php

namespace Tests\Traits;

use App\Models\User;

trait AuthenticateUser
{
    protected function actingAsUser($attributes = [])
    {
        $user = User::factory()->create($attributes);
        $this->actingAs($user);

        return $user;
    }
}
