@section('title',' Register')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        profile-picture
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <x-jet-label for="profile" value="{{ __('Proile Picture') }}" />
                <x-jet-input id="profile-picture" class="block mt-1 w-full" type="file" name="profile" accept="image/*" :value="old('profile-picture')" required autofocus autocomplete="profile-picture" />
            </div>
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div>
                <x-jet-label for="looking" value="{{ __('Using For') }}" />
                <x-jet-input id="looking" class="block mt-1 w-full" type="text" name="looking" :value="old('loking')" required autofocus autocomplete="looking" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <!--Date-->
            <div>
                <x-jet-label for="dob" value="{{ __('Date of Birth') }}" />
                <x-jet-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autofocus autocomplete="dob" />
            </div>
            <div>
                <x-jet-label for="gender" value="{{ __('Gender') }}" />
                <x-jet-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" required autofocus autocomplete="gender" />
            </div>
            <div>
                <x-jet-label for="education" value="{{ __('Education') }}" />
                <x-jet-input id="education" class="block mt-1 w-full" type="text" name="education" :value="old('education')" required autofocus autocomplete="education" />
            </div>
            <div>
                <x-jet-label for="hobbies" value="{{ __('Hobbies') }}" />
                <x-jet-input id="hobbies" class="block mt-1 w-full" type="text" name="hobbies" :value="old('hobbies')" required autofocus autocomplete="hobbies" />
            </div>
            <div>
                <x-jet-label for="p-address" value="{{ __('Permanent Address') }}" />
                <x-jet-input id="p-address" class="block mt-1 w-full" type="text" name="p-address" :value="old('p-address')" required autofocus autocomplete="p-address" />
            </div>
            <div>
                <x-jet-label for="t-address" value="{{ __('Tempory Address') }}" />
                <x-jet-input id="t_address" class="block mt-1 w-full" type="text" name="t-address" :value="old('t_address')" required autofocus autocomplete="t-address" />
            </div>
            <div>
                <x-jet-label for="job" value="{{ __('Job') }}" />
                <x-jet-input id="job" class="block mt-1 w-full" type="text" name="job" :value="old('job')" required autofocus autocomplete="job" />
            </div>
            <div>
                <x-jet-label for="income" value="{{ __('Income') }}" />
                <x-jet-input id="income" class="block mt-1 w-full" type="text" name="income" :value="old('income')" required autofocus autocomplete="income" />
            </div>
            <div>
                <x-jet-label for="good_habit" value="{{ __('Good Habites') }}" />
                <x-jet-input id="good_habit" class="block mt-1 w-full" type="text" name="good_habit" :value="old('good_habit')" required autofocus autocomplete="good_habit" />
            </div>
            <div>
                <x-jet-label for="bad_habit" value="{{ __('Bad Habites') }}" />
                <x-jet-input id="bad_habit" class="block mt-1 w-full" type="text" name="bad_habit" :value="old('bad_habit')" required autofocus autocomplete="bad_habit" />
            </div>



            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
{{--@endsection--}}
