<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Profile;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create()
    {
        
        
        $this->validate($request, Profile::$rules);
        
        $profile = new Profile;
        $form = $request->all();
        
        
        unset($form['token']);
        
        $profiles->fill($form);
        $profiles->save();
        return redirect('admin/profile/create');
    }
    
    public function edit(Request $request)
    {
        
        $profile = Profile::find($request->id);
        if (empty($profile)) {
            abort(404);
        }
        return view('admin.profile.edit', ['profile_form' => $profile]);
    }
    
    public function update()
    {
        
        
        $this->validate($request, News::$rules);
        
        $news = News::find($request->id);
        
        $news_form = $request->all();
        unset($news_form['_token']);


        $news->fill($news_form)->save();
        
        return redirect('admin/profile/edit');
    }
}