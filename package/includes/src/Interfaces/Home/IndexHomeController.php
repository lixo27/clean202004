<?php

namespace Clean\Interfaces\Home;

use App\Http\Controllers\Controller;

/**
 * Class IndexHomeController
 *
 * @package Clean\Interfaces\Home
 */
class IndexHomeController extends Controller
{
    public function __invoke()
    {
        return view( 'home.index' );
    }
}
