<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
/**
 * Class EmailController
 * @package App\Http\Controllers
 */
class EmailController extends Controller
{

    /**
     * @return string
     */
    public function sendEmail()
    {
        dispatch(new SendEmailJob());

        echo 'email sent';
    }
}
