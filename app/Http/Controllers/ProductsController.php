<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Button;
use App\Models\Feedback;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());//jpg,jpeg,png,
      /*  $images=[];
        foreach ($request->all() as $input) {
            if (str_contains($input, 'image') || str_contains($input, 'icon')) 
            $images[]=$input;
        }*/
        $request->validate([
            '*' => ['required'],
         //   $images => ['required', 'mimes:svg'],
        ]);

        DB::beginTransaction();
        try {
            /**
             * Basic  data
             */
            $name = $title = $subTitle = $desciption = $contactInformation = [];
            foreach (config('languages') as $key => $value) {
                $name[$key] = $request['name_' . $key];
                $title[$key] = $request['title_' . $key];
                $subTitle[$key] = $request['subTitle_' . $key];
                $desciption[$key] = $request['desciption_' . $key];

                $contactInformation[$key]['contactTitle'] = $request['contactTitle_' . $key];
                $contactInformation[$key]['contactDetails'] = $request['contactDetails_' . $key];
                $contactInformation[$key]['contactLink'] = $request['contactLink_' . $key];
            }
            /**
             * images & videos
             */
            $imageName = time() + rand(1, 1000000) . '.' . $request->file('homePageImage')->getClientOriginalExtension();
            Storage::disk('public')->put('uploads/productImages/' . $imageName, file_get_contents($request->file('homePageImage')));
            $homeImage = 'uploads/productImages/' . $imageName;

            $imageName = time() + rand(1, 1000000) . '.' . $request->file('showPageImage')->getClientOriginalExtension();
            Storage::disk('public')->put('uploads/productImages/' . $imageName, file_get_contents($request->file('showPageImage')));
            $showPageImage = 'uploads/productImages/' . $imageName;

            $imageName = time() + rand(1, 1000000) . '.' . $request->file('showPageVideo')->getClientOriginalExtension();
            Storage::disk('public')->put('uploads/productImages/' . $imageName, file_get_contents($request->file('showPageVideo')));
            $showPageVideo = 'uploads/productImages/' . $imageName;

            $product = Product::create([
                'name' => $name, 'title' => $title, 'subTitle' => $subTitle, 'desciption' =>  $desciption,  'contactInformation' => $contactInformation
            ]);
            $product->images()->create(['src' => $homeImage, 'type' => 'homePage']);
            $product->images()->create(['src' => $showPageImage, 'type' => 'showPageImage']);
            $product->images()->create(['src' => $showPageVideo, 'type' => 'showPageVideo']);

            /**
             * buttons
             */
            $buttons = [];
            foreach (config('languages') as $key => $value) {
                for ($i = 0; $i < count($request['buttonsGroup']); $i++) {
                    $buttons[$i]['buttonName'][$key] = $request['buttonsGroup'][$i]['buttonName_' . $key];
                    $buttons[$i]['buttonLink'][$key] = $request['buttonsGroup'][$i]['buttonLink_' . $key];
                    if (isset($request['buttonsGroup'][$i]['buttonImportant_' . $key]))
                        $buttons[$i]['buttonImportant'][$key] = 1;
                    else $buttons[$i]['buttonImportant'][$key] = 0;
                }
            }
            foreach ($buttons as $button) {
                $Button = Button::create(['product_id' => $product->id, 'name' => $button['buttonName'], 'link' => $button['buttonLink'], 'importance' => $button['buttonImportant']]);
            }

            /**
             * advantages
             */

            $advantages=$images = [];
            foreach (config('languages') as $key => $value) {
                for ($i = 0; $i < count($request['advantagesGroup']); $i++) {
                    $advantages[$i]['advantageTitle'][$key] = $request['advantagesGroup'][$i]['advantageTitle_' . $key];
                    $advantages[$i]['advantageDetails'][$key] = $request['advantagesGroup'][$i]['advantageDetails_' . $key];

                    $imageName = time() + rand(1, 1000000) . '.' . $request['advantagesGroup'][$i]['advantageIcon_en']->getClientOriginalExtension();
                    Storage::disk('public')->put('uploads/productImages/' . $imageName, file_get_contents($request['advantagesGroup'][$i]['advantageIcon_en']));
                    $advantageIcon = 'uploads/productImages/' . $imageName;

                    $images[$i]['src'] = $advantageIcon;              
                    $images[$i]['type'] = 'advantage';              
                }
            }

            foreach ($advantages as $advantage) {
                $Advantage = Advantage::create(['product_id' => $product->id, 'title' => $advantage['advantageTitle'], 'details' => $advantage['advantageDetails'], 'icon' => 'asc']);
            }
            foreach($images as $image){
                $Advantage->images()->create($image);
            }

            /**
             * feedbacks
             */
            $feedbacks = [];
            foreach (config('languages') as $key => $value) {
                for ($i = 0; $i < count($request['feedbacksGroup']); $i++) {
                    $feedbacks[$i]['name'][$key] = $request['feedbacksGroup'][$i]['feedbackName_' . $key];
                    $feedbacks[$i]['jobTitle'][$key] =  $request['feedbacksGroup'][$i]['feedbackJob_' . $key];
                    $feedbacks[$i]['body'][$key] = $request['feedbacksGroup'][$i]['feedback_' . $key];

                    $imageName = time() + rand(1, 1000000) . '.' . $request['feedbacksGroup'][$i]['feedbackImage_en']->getClientOriginalExtension();
                    Storage::disk('public')->put('uploads/productImages/' . $imageName, file_get_contents($request['feedbacksGroup'][$i]['feedbackImage_en']));
                    $feedbackImage = 'uploads/productImages/' . $imageName;

                    $images[$i]['src'] = $feedbackImage;              
                    $images[$i]['type'] = 'feedback';    
                }
            }

            foreach ($feedbacks as $feedback) {
                $Feedback = Feedback::create(['product_id' => $product->id, 'name' => $feedback['name'], 'jobTitle' => $feedback['jobTitle'], 'feedback' => $feedback['body'], 'image' => 'asc']);
                $Feedback->images()->create(['src' => $feedbackImage, 'type' => 'feedback']);
            }
            foreach($images as $image){
                $Feedback->images()->create($image);
            }

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();



        return redirect()->back()->withSuccess('Successfully added new product .');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {//dd($product->images);  
        $product= Product::findOrFail($id);
      return view('front_site.products.show')->with('product',$product);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
