<?php

namespace Clean\Interfaces\Home;

use App\Http\Controllers\Controller;

/**
 * Class HomeController
 *
 * @package Clean\Interfaces\Home
 */
class HomeController extends Controller
{
    public function __invoke()
    {
        return view( 'home/index' );
    }
}
