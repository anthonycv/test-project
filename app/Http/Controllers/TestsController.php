<?php

namespace App\Http\Controllers;

use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class TestsController extends Controller
{
    public function index()
    {



        $result = Browsershot::url('https://www.google.com/')
            ->setNodeBinary('~/')
            ->setNpmBinary('~/.npm')
            ->setScreenshotType('jpeg', 100)
            ->save('/test-google.jpeg');


        echo "<pre>";
        print_r($result);
        echo "</pre>";
        die("...");

        return 'converter';
    }
}
