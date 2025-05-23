<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;

use App\Models\Group;

class IndexController extends Controller
{
    public function index()
    {
        return Member::with('group')->get();
    }

    public function group(Group $group)
    {
        return $group;
        // return Group::with('member')->get();
    }

}
