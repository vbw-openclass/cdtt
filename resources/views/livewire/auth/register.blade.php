<div>
    <x-jet.validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form wire:submit="register" class="space-y-4">
        @csrf

        <div>
            <x-jet.label for="name" value="{{ __('Name') }}" />
            <x-jet.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" wire:model="name" required autofocus="name" />
        </div>

        <div>
            <x-jet.label for="email" value="{{ __('Email') }}" />
            <x-jet.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" wire:model="email" required autofocus />
        </div>

        <div>
            <x-jet.label for="password" value="{{ __('Password') }}" />
            <x-jet.input id="password" class="block mt-1 w-full" type="password" name="password" wire:model="password" required autocomplete="new-password" />
        </div>

        <div>
            <x-jet.label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet.input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" wire:model="password_confirmation" required autocomplete="new-password" />
        </div>

        <div class="flex items-center justify-end">
            <a class="underline text-sm text-gray-600 dark:text-gray-100 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-jet.button class="ml-4">
                {{ __('Register') }}
            </x-jet.button>
        </div>
    </form>
</div>
