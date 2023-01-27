<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::latest()->paginate(5)->withQueryString();
        return view('company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->about = $request->about;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->address = $request->address;
        $company->state = $request->state;
        $company->country = $request->country;
        $company->city = $request->city;
        $company->pincode = $request->pincode;

        if($files=$request->file('file')){
            $name=sha1(time()).'.'.$files->getClientOriginalExtension();
            $files->move('public/uploads/images/',$name);
            $company->logo = 'public/uploads/images/'.$name;
        }



        $company->save();

        return redirect()->route('company.index')->with('message', 'Company added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit( $company)
    {
        return $this->get_form($company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {

        $company->delete();
        return redirect()->route('company.index')->with('message', 'Company deleted');
    }

    public function get_form($id=null)
    {
        if($id)
        {
            $company = Company::find($id);
            return view('company.form',compact('company'));
        }
        else{

            return view('company.form');
        }
    }

    public function resizeImage($path)
    {
            // create an image manager instance with favored driver
            $manager = new ImageManager(['driver' => 'imagick']);

            // to finally create image instances
            $image = $manager->make('public/foo.jpg')->resize(500, 500);


    }
}
