<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dannytiehui\CrawlingRegion\Md5Hasher;

class CrawlingRegionController extends Controller
{
    //
    public function start()
    {
        $cr = new Md5Hasher();
        echo $cr->index();
    }
}
