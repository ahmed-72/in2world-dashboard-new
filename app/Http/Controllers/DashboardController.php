<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ContentBlog;
use App\Models\Image;
use App\Models\Member;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Role;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\Models\StarredProject;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index()
    { 
       // $routes = collect(\Route::getRoutes())->map(function ($route->GET) { return $route; });
       //   dd($routes); 2014_10_12_000000_create_users_table.php
        Gate::authorize('dashboardView');

        DB::beginTransaction();
        try {

            $services = Service::paginate(8, ['*'], 'services');
            $starredProjects = StarredProject::paginate(8, ['*'], 'starredProjects');
            $clients = Client::paginate(8, ['*'], 'clients');
            $contentBlogs = ContentBlog::paginate(8, ['*'], 'contentBlogs');
            $partners = Partner::paginate(8, ['*'], 'partners');
            //counts
            $membersCount = Member::count();
            $members = Member::select('country')->get();
            $countries = [];
            foreach ($members as $member) {
                if ($member->country && !in_array($member->country, $countries)) $countries[] = $member;
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();

        return view('dashboard.home')->with(['services' => $services, 'starredProjects' => $starredProjects, 'clients' => $clients, 'contentBlogs' => $contentBlogs, 'partners' => $partners, 'countriesCount' => count($countries), 'membersCount' => $membersCount]);
    }
}
