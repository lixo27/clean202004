<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

/**
 * Class IndexHomeController
 *
 * @package App\Http\Controllers\Home
 */
class IndexHomeController extends Controller
{
    public function __invoke()
    {
        return view( 'home.index' );
    }
}
