<?php

namespace app\admin\controller;

use support\Request;

public function index(Request $request)
{
    return response('hello index');
}