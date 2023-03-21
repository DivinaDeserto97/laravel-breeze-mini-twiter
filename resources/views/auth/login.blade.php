<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container">
        <h1 class="row"> Login </h1>
        <form method="POST" action="{{ route('login') }}" class="row">
            @csrf

            <!-- Email Address -->
            <div class="mb-3 row">
                <div class="col">
                    <x-input-label for="email" :value="__('Email')" class="form-label row" />
                    <x-text-input id="email" name="email" type="email" class="form-control row" :value="old('email')"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 row" />
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3 row">

                <x-input-label for="password" :value="__('Password')" class="form-label row" />
                <div class="row">
                    <x-text-input id="password" name="password" type="password" required
                        autocomplete="current-password" class="form-control col" />
                    <button id="password_show" type="button" class="btn btn-primary col-1">
                        show
                    </button>
                </div>
                <x-input-error :messages="$errors->get('password')" />

            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input id="remember_me" name="remember" type="checkbox" class="form-check-input">
                <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
            </div>
            <div class="d-flex align-items-center justify-content-end mt-4">
                @if (Route::has('password.request'))
                    <a
                        class="text-sm text-gray-600 text-decoration-underline rounded-md focus-none focus-ring-2 focus-ring-offset-2 focus-ring-indigo-500">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="btn btn-primary">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
