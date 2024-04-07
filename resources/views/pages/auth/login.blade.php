<?php

    use function Laravel\Folio\name;

    name('login');
?>

<x-layouts.app>
    <x-slot name="header">
        {{ __('Login') }}
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-jet.authentication-card>
                <x-slot name="logo">
                    <x-jet.authentication-card-logo />
                </x-slot>

                <livewire:auth.login />
            </x-jet.authentication-card>
        </div>
    </div>
</x-layouts.app>
