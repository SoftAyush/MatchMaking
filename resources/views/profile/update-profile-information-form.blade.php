<x-jet-form-section submit="updateProfileInformation" >
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">

{{--                    <img src="{{ asset('public/storage/profile_picture/' . $this->user->profile_photo_path) }}">--}}
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
        <!-- looking for -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="looking" value="{{ __('Looking For') }}" />
            <x-jet-input id="looking" type="text" class="mt-1 block w-full" wire:model.defer="state.looking" />
            <x-jet-input-error for="looking" class="mt-2" />
        </div>
        <!-- Date of Birth -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="date" value="{{ __('Date of Birth') }}" />
            <x-jet-input id="date" type="date" class="mt-1 block w-full" wire:model.defer="state.date" />
            <x-jet-input-error for="date" class="mt-2" />
        </div>
        <!-- gender -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="gender" value="{{ __('Gender') }}" />
            <x-jet-input id="gender" type="text" class="mt-1 block w-full" wire:model.defer="state.gender" />
            <x-jet-input-error for="gender" class="mt-2" />
        </div>
        <!-- Education -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="education" value="{{ __('Education') }}" />
            <x-jet-input id="education" type="text" class="mt-1 block w-full" wire:model.defer="state.Education" />
            <x-jet-input-error for="education" class="mt-2" />
        </div>
        <!-- hobbies -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="habbies" value="{{ __('Hobbies') }}" />
            <x-jet-input id="hobbies" type="text" class="mt-1 block w-full" wire:model.defer="state.hobbies" />
            <x-jet-input-error for="hobbies" class="mt-2" />
        </div>
        <!-- perm Address -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="perm_address" value="{{ __('Permanent Address') }}" />
            <x-jet-input id="perm_address" type="text" class="mt-1 block w-full" wire:model.defer="state.perm_address" />
            <x-jet-input-error for="perm_address" class="mt-2" />
        </div>
        <!-- temp address -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="temp_address" value="{{ __('Tempory Address') }}" />
            <x-jet-input id="temp_address" type="text" class="mt-1 block w-full" wire:model.defer="state.temp_address" />
            <x-jet-input-error for="temp_address" class="mt-2" />
        </div>
        <!-- job -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="job" value="{{ __('Job') }}" />
            <x-jet-input id="job" type="text" class="mt-1 block w-full" wire:model.defer="state.job" />
            <x-jet-input-error for="job" class="mt-2" />
        </div>
        <!-- income -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="income" value="{{ __('Income') }}" />
            <x-jet-input id="income" type="text" class="mt-1 block w-full" wire:model.defer="state.income" />
            <x-jet-input-error for="income" class="mt-2" />
        </div>
        <!-- Good Habites -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="good-habites" value="{{ __('Good Habit') }}" />
            <x-jet-input id="good-habites" type="text" class="mt-1 block w-full" wire:model.defer="state.good_habit" />
            <x-jet-input-error for="good-habites" class="mt-2" />
        </div>
        <!-- Bad Habites -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="Bad-habites" value="{{ __('Bad Habit') }}" />
            <x-jet-input id="Bad-habites" type="text" class="mt-1 block w-full" wire:model.defer="state.bad_habit" />
            <x-jet-input-error for="Bad-habites" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
