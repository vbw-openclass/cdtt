<div>
	<div class="space-x-8 lg:grid lg:grid-cols-{{ count($championships) > 4 ? 8 : 4 }} sm:gap-6 xl:gap-10">
		<button wire:click="seeAll"
				type="button"
				class="text-white bg-gradient-to-r w-full from-orange-500 via-orange-600 to-orange-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
			Voir tous
		</button>
		@foreach($championships as $championship)
			<button wire:click="seeMatchs({{ $championship }})"
					type="button"
					class="text-white bg-gradient-to-r w-full from-orange-500 via-orange-600 to-orange-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
				{{ $championship->category->name }} {{ $championship->season }}
			</button>
		@endforeach
	</div>

	<hr>

	@if (!empty($matchs))
		<div class="space-y-8 lg:grid lg:grid-cols-4 sm:gap-6 xl:gap-10 lg:space-y-0">
			@foreach($matchs as $match)
				<div
					class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
					<h3 class="mb-4 text-2xl font-semibold">Championnat {{ $match->championship->name }}</h3>
					<h3 class="mb-4 text-2xl font-semibold">Journée {{ $match->day }}</h3>
					<!-- List -->
					<ul role="list" class="mb-8 space-y-4 text-left">
						<li class="flex items-center space-x-3">
							<!-- Icon -->
							<svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
								 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd"
									  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
									  clip-rule="evenodd"></path>
							</svg>
							<span>Équipe : {{ $match->homeTeam->club->name }} {{ $match->homeTeam->number }}</span>
						</li>
						<li class="flex items-center space-x-3">
							<!-- Icon -->
							<svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
								 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd"
									  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
									  clip-rule="evenodd"></path>
							</svg>
							<span>Date : {{ $match->date }}</span>
						</li>
						<li class="flex items-center space-x-3">
							<!-- Icon -->
							<svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
								 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd"
									  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
									  clip-rule="evenodd"></path>
							</svg>
							<span>L'heure : <!-- TODO:Récupérer l'heure --></span>
						</li>
						<li class="flex items-center space-x-3">
							<!-- Icon -->
							<svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
								 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd"
									  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
									  clip-rule="evenodd"></path>
							</svg>
							<span>Phase : <!-- TODO:Récupérer phase aller ou retour --></span>
						</li>
					</ul>
					<button type="button"
							class="text-white bg-gradient-to-r w-full from-orange-500 via-orange-600 to-orange-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
						Report du match
					</button>
					<button type="button"
							class="text-white bg-gradient-to-r w-full from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
						Feuille de match
					</button>
				</div>
			@endforeach
		</div>
	@endif
</div>
