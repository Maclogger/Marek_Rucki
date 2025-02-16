<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Log;


Broadcast::channel('users.status', function ($user) {
    Log::info("Autorizacia pre users.status channel pre uzivatela: " . $user->id);
    return [
        'id' => $user->id,
        'name' => $user->name,
    ];
});

