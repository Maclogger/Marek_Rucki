<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Log;


Broadcast::channel('users.status', function ($user) {
    Log::info("Autorizácia pre users.status channel pre uzivatela: " . $user->id);
    return $user;
});



