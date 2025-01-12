<?php

use Boatrace\Venture\Project\MainPrefecture;

if (! function_exists('prefecture')) {
    /**
     * @return \Boatrace\Venture\Project\MainPrefecture
     */
    function prefecture(): MainPrefecture
    {
        return app('prefecture');
    }
}
