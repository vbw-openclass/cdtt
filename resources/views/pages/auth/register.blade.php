<?php

    use function Laravel\Folio\name;

    name('register');
?>

<x-layouts.app>
    <x-slot name="header">
        {{ __('Register') }}
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-jet.authentication-card>
                <x-slot name="logo">
                    <x-jet.authentication-card-logo />
                </x-slot>

                <livewire:auth.register />
            </x-jet.authentication-card>
        </div>
    </div>
</x-layouts.app>
