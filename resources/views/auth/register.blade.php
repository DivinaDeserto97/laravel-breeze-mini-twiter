<x-guest-layout>
    <div class="container" style="width:50%">
        <h1 class="row">Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="col">
                <!-- Name -->
                <div class="mb-3 row">
                    <div class="col">
                        <x-input-label for="name" class="form-label row" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="form-control row"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2 row" />
                    </div>
                </div>

                <!-- Email Address -->
                <div class="mb-3 row">
                    <div class="col">
                        <x-input-label for="email" class="form-label row" :value="__('Email')" />
                        <x-text-input id="email" class="form-control row" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 row" />
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-3 row">
                        <x-input-label for="password" class="form-label row" :value="__('Password')" />
                        <div class="row">
                            <x-text-input id="password" name="password" type="password" class="form-control col"
                                required autocomplete="new-password" />
                            <button id="password_show" type="button" class="btn btn-primary col-1">
                                show
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 row" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-3 row">
                    <x-input-label for="password_confirmation" class="form-label row" :value="__('Confirm Password')" />
                    <div class="row">
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                            class="form-control col" required autocomplete="new-password" />
                        <button id="password_confirmation_show" type="button" class="btn btn-primary col-1">
                            show
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>


                <div class="d-flex align-items-center justify-content-end mt-4">
                    <a class="text-sm text-gray-600 text-decoration-underline rounded-md focus-none focus-ring-2 focus-ring-offset-2 focus-ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="btn btn-primary ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
        </form>
    </div>
</x-guest-layout>
