<?php

namespace App\Http\Controllers;

use App\Property;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class RegisterProperty extends Controller
{
    /**
     * Create a new user instance.
     *
     * @param  Request $request
     * @return Response
     */


    public function updateProperty(Request $request)
    {

        $user = Auth::user();

        $property = new Property;

        $property->user_id = $user->id;

        $property->name = $request->name;

        $property->owner = $request->owner;

        $property->address = $request->address;

        $property->save();

        return redirect('home');

    }
}