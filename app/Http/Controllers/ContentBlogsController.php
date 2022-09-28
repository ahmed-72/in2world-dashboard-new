<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ContentBlog;
use App\Models\Image;
use App\Models\Partner;
use App\Models\Service;
use App\Models\StarredProject;
use App\Models\User;
use App\Models\UserLike;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ContentBlogsController extends Controller
{
    public function addToHome(Request $request)
    {
        Gate::authorize('dashboardCreate');

        DB::beginTransaction();
        try {
            $pageContentBlogIDs = trim($request['pageContentBlogIDs'], '[]');
            $pageContentBlogIDs = explode(',', $pageContentBlogIDs);
            foreach ($pageContentBlogIDs as $contentBlog) {
                if (in_array($contentBlog, $request['contentBlogs'] ?: [])) {
                    ContentBlog::findOrFail($contentBlog)->update(['status' => ContentBlog::STATUS_HOMEPAGE]);
                } else {
                    ContentBlog::findOrFail($contentBlog)->update(['status' => ContentBlog::STATUS_ACTIVE]);
                }
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();

        return redirect()->back()->withSuccess('Successfully added to the home page .');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contentBlogs = ContentBlog::paginate(10);
        return view('front_site.contentBlogs.contentBlogs_index')->with('contentBlogs', $contentBlogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', ContentBlog::class);

        return view('dashboard.contentBlogs.contentBlog_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->authorize('create', ContentBlog::class);

        $request->validate([
            '*' => ['required'],
            'image' => ['required', 'mimes:jpg,jpeg,png,svg'],
        ]);
        DB::beginTransaction();
        try {

            $image = $request->file('image');
            $imageName = time() + rand(1, 1000000) . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('uploads/contentBlogImages/' . $imageName, file_get_contents($image));
            $icon = 'uploads/contentBlogImages/' . $imageName;

            $name = $details = $keywords = $content = [];
            foreach (config('languages') as $key => $value) {
                $name[$key] = $request['name_' . $key];
                $details[$key] = $request['details_' . $key];
                $keywords[$key] = $request['keywords_' . $key];
                $content[$key] = $request['content_' . $key];
            }
            //  dd($name);
            $contentBlog = ContentBlog::create([
                'name' => $name,
                'details' => $details,
                'keywords' => $keywords,
                'content' =>  $content,
            ]);

            $contentBlog->images()->create(['src' => $icon, 'type' => 'contentBlog']);
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully added new content blog .');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id ,$name)
    {
        $contentBlog = ContentBlog::findOrFail($id);
        $relatedBlogs = ContentBlog::whereNotIn('id', [$contentBlog->id])->take(3)->latest()->get();
        $status = null;
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->likes->count() >0) {
                $like = $user->likes->where('content_blog_id', $id)->first();
                if ($like) $status = $like->type; 
            }
        }
        return view('front_site.contentBlogs.contentBlog_show')->with(['contentBlog' => $contentBlog, 'status' => $status, 'relatedBlogs' => $relatedBlogs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->authorize('update', ContentBlog::class);

        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'details' => ['required', 'string', 'max:250'],
            'content' => ['string'],
            'image' => ['mimes:jpg,jpeg,png,svg'],
        ]);
        DB::beginTransaction();
        try {

            $contentBlog = ContentBlog::findOrFail($request['id']);
            $contentBlog->update(['name' => $request['name'], 'details' => $request['details'],]);
            if ($request['content'])
                $contentBlog->update(['content' => $request['content']]);

            if ($request['image']) {
                $image = $request->file('image');
                $imageName = time() + rand(1, 1000000) . '.' . $image->getClientOriginalExtension();
                Storage::disk('public')->put('uploads/contentBlogImages/' . $imageName, file_get_contents($image));
                $icon = 'uploads/contentBlogImages/' . $imageName;
                $contentBlog->images[0]->update(['src' => $icon]);
            }
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();


        return redirect()->back()->withSuccess('Successfully updated content blog .');
    }
    /**
     * like or dislike the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function like(Request $request)
    {
        $contentBlog = ContentBlog::findOrFail($request['id']);
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->likes->count() > 0) { 
                $like = $user->likes->where('content_blog_id', $request['id'])->first();
                if ($like) {
                    UserLike::where('user_id' ,$user->id)->where('content_blog_id', $request['id'])->delete();
                    UserLike::create(['user_id' => $request['userID'], 'content_blog_id' => $request['id'], 'type' => $request['type']]);
                        if( $request['type']=='like'){ $contentBlog->increment('likes', 1); $contentBlog->increment('disLikes', -1);}
                        elseif( $request['type']=='disLike'){ $contentBlog->increment('likes', -1); $contentBlog->increment('disLikes', 1);}

                    return response()->json(['success' => $request['type'].'d successfully']);
                }else{  
                    UserLike::create(['user_id' => $request['userID'], 'content_blog_id' => $request['id'], 'type' => $request['type']]);
                    if( $request['type']=='like') $contentBlog->increment('likes', 1);
                    elseif( $request['type']=='disLike') $contentBlog->increment('likes', 1);
                }
            }else{
                UserLike::create(['user_id' => $request['userID'], 'content_blog_id' => $request['id'], 'type' => $request['type']]);
                if( $request['type']=='like') $contentBlog->increment('likes', 1);
                elseif( $request['type']=='disLike') $contentBlog->increment('likes', -1);
            }
        }

     /*  
     
                     if ($like) { 
                    if ($like->type != $request['type']) { $x=2;
                        $like->update(['type' => $request['type']]);
                    } elseif ($like->type == $request['type']) {
                        // nothing to do ;
                    }
     
     if ($request['type'] == 'like')


          $contentBlog->increment('likes', 1);
        $user = Auth::user();
        $like = UserLike::where('user_id', $user->id)->where('content_blog_id', $request['id'])->first();
        $like->delete();
        $like = UserLike::create(['user_id' => $request['userID'], 'content_blog_id' => $request['id'], 'type' => $request['type']]);
      */  return response()->json(['success' => 'success liked']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', ContentBlog::class);

        DB::beginTransaction();
        try {
            $contentBlog = ContentBlog::findOrFail($id);
            $contentBlog->delete();
        } catch (Exception $e) {
            new Exception();
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->back()->withSuccess('Successfully deleted content blog .');
    }
}
