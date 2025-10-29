<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// Для Chatify
Broadcast::channel('chatify.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// Для приватных каналов Chatify
Broadcast::channel('private-chatify.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// Для presence каналов
Broadcast::channel('presence-activeStatus', function ($user) {
    return [
        'id' => $user->id,
        'name' => $user->name,
    ];
});
