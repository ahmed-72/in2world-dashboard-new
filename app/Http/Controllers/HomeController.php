<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ContentBlog;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\StarredProject;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        DB::beginTransaction();
        try {

            $services = Service::where('status', 'active')->take(9)->get();
            $products=Product::orderBy('created_at','DESC')->take(3)->get();
            $starredProjects = StarredProject::where('status', 'homePage')->take(4)->get();
            $clients = Client::where('status', 'active')->take(8)->get();
            $contentBlogs = ContentBlog::where('status', 'homePage')->take(3)->get();
            $partners = Partner::where('status', 'active')->take(3)->get();
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return view('front_site.home')->with(['services' => $services, 'starredProjects' => $starredProjects, 'clients' => $clients, 'contentBlogs' => $contentBlogs, 'partners' => $partners ,'products'=>$products]);
    }
    public function about()
    {
        return view('front_site.about');
    }
}
