<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserProfileRequest;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;
use Storage;

class UserController extends Controller
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserProfileRequest $request, User $user)
    {
        // check if user update the profile image
        if ($imageData = $request->get('image')) {

            $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
            Storage::disk('s3')->put('/profile_image/'.$fileName, Image::make($imageData)->stream()
                ->__toString(), 'public');

            // check if user is not first time to change profile image, delete the old one
            if ($user->user_profile_img != 'https://s3.amazonaws.com/robotechcloud/profile_image/1498606783_5952ecbf156ca.png') {
                $leng = strlen('https://s3.amazonaws.com/robotechcloud');

                $oldpath = substr($user->user_profile_img, $leng);
                Storage::disk('s3')->delete($oldpath);
            }

            $user->update([
                'user_profile_img' => 'https://s3.amazonaws.com/robotechcloud/profile_image/' . $fileName,
            ]);
        }

        $user->update([
           'name' => $request->name,
           'email' => $request->email,
           'phone_number' => $request->phone_number,
        ]);

        return response()->json(['user' => $user, 'error'=>false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * get the current user info
     */
    public function getCurrentUser()
    {
        return auth()->user()->with('products')->first();
    }
}
