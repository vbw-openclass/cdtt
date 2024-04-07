<div>
    <x-jet.validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form wire:submit="login" class="space-y-4">
        @csrf

        <div>
            <x-jet.label for="email" value="{{ __('models.user_email') }}" />
            <x-jet.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" wire:model="email" required autofocus />
        </div>

        <div>
            <x-jet.label for="password" value="{{ __('models.user_password') }}" />
            <x-jet.input id="password" class="block mt-1 w-full" type="password" name="password" wire:model="password" required autocomplete="current-password" />
        </div>

        <div class="block">
            <label for="remember_me" class="flex items-center">
                <x-jet.checkbox id="remember_me" name="remember" wire:model="remember" />
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-100">{{ __('auth.remember_me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-100 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('auth.forgot_password') }}
                </a>
            @endif

            <x-jet.button class="ml-4">
                {{ __('auth.login') }}
            </x-jet.button>
        </div>
    </form>
</div>
