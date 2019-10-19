<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Callback extends Model
{
    public static function saveMessage($request)
    {
        $message = new self;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->website = $request->website;
        $message->company = $request->company;
        $message->message = $request->message;
        $message->save();
    }
}
