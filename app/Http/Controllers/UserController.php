<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/2/2017
 * Time: 4:53 PM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new user instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function updateInterests(Request $request)
    {

        $user = Auth::user();

        if($user->interests == "No current interests"){
            $user->interests  = $request->interests;
        } else if($user->interests1 == " "){
            $user->interests1 = $request->interests;
        } else if($user->interests2 == " ") {
            $user->interests2 = $request->interests;
        }  else if($user->interests3 == " ") {
            $user->interests3 = $request->interests;
        } else if($user->interests4 == " ") {
            $user->interests4 = $request->interests;
        } else if($user->interests5 == " ") {
            $user->interests5 = $request->interests;
        }

        $user->save();

        return redirect('home');
    }
    public function updateCart(Request $request)
    {
        $user = Auth::user();

        $user->shoppingcart  = $request->shoppingcart;

        $user->save();

        return redirect('home');

    }


}