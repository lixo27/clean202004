<?php

namespace Clean\Interfaces\Home;

use Illuminate\Routing\Controller;

/**
 * Class IndexHomeController
 *
 * @package Clean\Interfaces\Home
 */
class IndexHomeController extends Controller
{
    public function __invoke()
    {
        return view( 'clean::home.index' );
    }
}
