<?php

    use function Laravel\Folio\name;

    name('match-list');
?>

<x-layouts.app>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
			<livewire:app.match-list />
        </div>
      </section>
</x-layouts.app>
