<?php

namespace App\Http\Controllers\Admin;

use App\Models\Don;
use App\Models\Event;
use App\Models\Story;
use App\Models\Member;
use App\Models\StoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class HomeController extends Controller
{
    public function index(){
        $stories = Story::count();
        $storyRequests = StoryRequest::count();
        $users = User::count();
        $members = Member::count();
        $dons = Don::count();
        $events = Event::count();
        return view('template/admin/home',compact('stories','storyRequests','users','members','dons','events'));
    }
}
