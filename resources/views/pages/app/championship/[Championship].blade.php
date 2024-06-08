<?php
	use function Laravel\Folio\name;

	name('championship.show');
?>

<x-layouts.app>
	<section class="bg-white dark:bg-gray-900">
		<div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
			<div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
				<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
					Championnat {{ $championship->category->name }} {{ $championship->season }}
				</h2>
			</div>

			<livewire:app.championship-match-list :championship="$championship"/>
		</div>
	</section>
</x-layouts.app>
