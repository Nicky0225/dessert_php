<?php


namespace App\Http\Controllers;
use DB;
use Exception;
use Validator;

use Image;

class Cloudflare extends Controller
{
    public function Cloudflare2FA(){

        return view('cloudflare2FA.auth');

    }

}

