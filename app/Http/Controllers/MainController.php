<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JonathanTorres\MediumSdk\Medium;

class MainController extends Controller
{



    public function index()
    {




return view('welcome');

    }

//   public function fetchMedium($user, $slug = 'latest')
//    {
//        $client = new \GuzzleHttp\Client();
//
//        try {
//            $res = $client->request('GET', sprintf('https://medium.com/%s/%s?format=json', $user, $slug));
//        } catch (Exception $exception) {
//            return false;
//        }
//
//        if (!$res->getStatusCode() == 200) {
//            return false;
//        }
//
//        $body = json_decode(str_replace('])}while(1);</x>', '', $res->getBody()));
//
//        if (!isset($body->success, $body->payload)) {
//            return false;
//        }

//dd($body)
//        return $body->payload;
//
//
//    }

}
