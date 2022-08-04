<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $setting = Setting::getSetting();
        return view('admin.index', ['setting'=>$setting]);
    }

    public function setting()
    {
        //
        $setting = Setting::getSetting();
        return view('admin.setting.index', ['setting'=>$setting]);
    }

    public function settingupdate(Request $request)
    {
        //
        $id = $request->input('id');

        $setting = Setting::find($id);
        $setting->title = $request->title;
        $setting->keywords = $request->keywords;
        $setting->description = $request->description;
        $setting->company = $request->company;
        $setting->address = $request->address;
        $setting->phone = $request->phone;
        $setting->fax = $request->fax;
        $setting->email = $request->email;
        $setting->smtpserver = $request->smtpserver;
        $setting->smtpemail = $request->smtpemail;
        $setting->smtppassword = $request->smtppassword;
        $setting->smtpport = $request->smtpport;
        $setting->aboutus = $_POST['aboutus'];
        $setting->contact = $_POST['contact'];
        $setting->references = $_POST['references'];
        $setting->status = $request->status;
        if($request->hasFile('icon'))
        {
            $setting->icon = $request->file('icon')->store('images');
        }

        $setting->save();
        return redirect()->route('admin.setting');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
