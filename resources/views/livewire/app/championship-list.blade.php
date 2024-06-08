<div class="space-y-8 lg:grid lg:grid-cols-4 sm:gap-6 xl:gap-10 lg:space-y-0">
	@foreach($championships as $championship)
		<div
			class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
			<h3 class="mb-4 text-2xl font-semibold">
				Championnat {{ $championship->category->name }} {{ $championship->season }}
			</h3>
			<button wire:click="seeMatchs({{ $championship }})"
					type="button"
					class="text-white bg-gradient-to-r w-full from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
				Voir les matchs
			</button>
		</div>
	@endforeach
</div>
