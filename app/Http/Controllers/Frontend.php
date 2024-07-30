<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Frontend extends Controller
{
    public function home()
    {
        $data = DB::table('subcategory')->get();
        return view('pages.home', ['subcat' => $data]);
    }

    public function about()
    {
        $data = DB::table('subcategory')->get();
        return view('pages.about', ['subcat' => $data]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function portfolio($id)
    {
        $id = urldecode($id);
        $data = DB::table('subcategory')->select('id', 'cid')->where('slug', $id)->get()->first();
        $cid = $data->cid;
        $scid = $data->id;

        $banner = DB::table('banner')
            ->select('banner.banner_image', 'subcategory.sub_cat_name')
            ->leftJoin('subcategory', 'subcategory.id', '=', 'banner.scid')
            ->where('banner.scid', $scid)
            ->where('banner.cid', $cid)
            ->first();


        $portfolio = DB::table('portfolio')->select('id', 'cid', 'scid', 'main_image')
            ->where('scid', $scid)
            ->where('cid', $cid)
            ->get()->toArray();

        return view('pages.portfolio', ['portfolio' => $portfolio, 'banner' => $banner]);
    }
    public function details()
    {
        return view('pages.details');
    }
    public function terms()
    {
        return view('pages.terms');
    }
    public function privacy()
    {
        return view('pages.privacy');
    }


    public function myform()
    {
        return view('form');
    }

    public function form_submit(Request $request)
    {

        $formData = $request->all();
        $formData = $request->except('_token');

        if ($request->file('main_image')) {
            $main_image = $request->file('main_image');
            $imageName = $main_image->getClientOriginalName();
            $main_image->move(public_path('uploads'), $imageName);
            $imagePath = 'uploads/' . $imageName;

            $formData['main_image'] = $imagePath;
        }

        if ($request->file('overview_img')) {
            $overview_img = $request->file('overview_img');
            $imageName = $overview_img->getClientOriginalName();
            $overview_img->move(public_path('uploads'), $imageName);
            $imagePath = 'uploads/' . $imageName;

            $formData['overview_img'] = $imagePath;
        }

        if ($request->file('branding_concept_img')) {
            $branding_concept_img = $request->file('branding_concept_img');
            $imageName = $branding_concept_img->getClientOriginalName();
            $branding_concept_img->move(public_path('uploads'), $imageName);
            $imagePath = 'uploads/' . $imageName;

            $formData['branding_concept_img'] = $imagePath;
        }


        $userId = DB::table('portfolio')->insertGetId($formData);

        if ($userId) {
            return redirect()->back()->with('success', 'Submited successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create.');
        }
    }
}
