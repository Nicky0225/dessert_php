<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function addressPage()
    {
        $binding = [
            'title' => '註冊',
        ];
        return view( 'address.address' , $binding);

    }

}
