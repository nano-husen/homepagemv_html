<?php

namespace Homepagemv\HomepagemvHtml;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HompagemvHtmlController extends Controller
{
    function HompagemvHtml_test($a,$b){
        echo $a + $b;
    }
}
