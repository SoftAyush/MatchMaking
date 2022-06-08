<?php

namespace App\Actions\Fortify;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Intervention\Image\Facades\Image;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param Request|array $request
     * @param $user
     * @return \App\Models\User
     */


    public function create(Request|array $request)
    {
//        dd($request); die();
//        echo $data['profile']->getClientOriginalExtension;die();
        Validator::make($request, [

            'name' => ['required', 'string', 'max:255'],
            'looking' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'dob' => ['required', 'date', 'date'],
            'gender' => ['required', 'string', 'max:10'],
            'education' => ['required', 'string', 'max:50'],
            'hobbies' => ['required', 'string', 'max:255'],
            'p-address' => ['required', 'string', 'max:255'],
            't-address' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:255'],
            'income' => ['required', 'string', 'max:255'],
            'good_habit' => ['required', 'string', 'max:255'],
            'bad_habit' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
          $request = app('request');
        if ($request->hasfile('profile')) {
            $avatar = $request->file('profile');
            $filename =  time() . '.' . $avatar->getClientOriginalExtension();
            $image='profile-photos/'. $filename;
            Image::make($avatar)->resize(300, 300)->save(public_path('/storage/profile-photos/' . $filename));

//            $request->date ;
//            $age = Carbon::parse($request->date_of_birth)->diff(Carbon::now())->y;

            return User::create([
                'profile_photo_path' => $image,
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'dob' =>$request['dob'],
                'gender' => $request['gender'],
                'education' => $request['education'],
                'hobbies' => $request['hobbies'],
                'perm_address' => $request['p-address'],
                'temp_address' => $request['t-address'],
                'job' => $request['job'],
                'income' => $request['income'],
                'good_habit' => $request['good_habit'],
                'bad_habit' => $request['bad_habit'],
                'looking' => $request['looking'],

            ]);

        }

    }
}
