<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class TestController extends Controller
{
    public function store(): void
    {
        /** @var User $user */
        $user = User::first();
        $this->saveData($user);
    }

    private function saveData(Model $createdBy): void
    {
        User::create([
            'name' => 'test',
            'created_by_id' => $createdBy->id,
            'created_by_type' => $createdBy::class,
        ]);
    }
}
