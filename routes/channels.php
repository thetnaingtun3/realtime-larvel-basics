<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('users.{id}', function (User $user, $id) {

    return (int) $user->id === (int) $id;
});

Broadcast::channel('orders.{orderId}', function (User $user, $orderId) {

    if ($user->id !== \App\Models\Order::findOrNew($orderId)->user_id) {
        return false;
    }

});

Broadcast::channel('chat', function () {});
Broadcast::channel('room.{roomId}', function (User $user, $orderId) {

    return $user->only('id', 'name');
});




