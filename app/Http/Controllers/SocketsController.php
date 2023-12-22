<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocketsController
{
    public function connect(Request $request)
    {
        $broadcaster = new PusherBroadcaster(
            new Pusher(
                env('PUSHER_APP_ID'),
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP-_SECRET'),
                []
            )
        );

        return $broadcaster->validAuthenticationResponse($request);
    }
}
