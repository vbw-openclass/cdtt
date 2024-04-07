<?php

    use function Laravel\Folio\name;

    name('homepage');
?>

<x-layouts.app>
	<x-slot name="header">
		<header id="home" class="flex justify-center bg-[url('https://senseiminimal.github.io/Dragonic/img/Dragonic.jpg')] lg:bg-fixed">
			<img onload="this.style.opacity='1';" class="h-auto max-w-lg opacity-100" src="{{ asset("storage/images/logo.png") }}" alt="Logo">
		</header>
	</x-slot>

	<div>
		<!-- ============== DIVIDER ============== -->
		<div class="bg-[url('https://senseiminimal.github.io/Dragonic/img/divider-sprite.png')] bg-repeat-x h-[55px] my-[-18px]"></div>
		<!-- ============== FEATURES SECTION =============== -->
		<div class="bg-[url('https://senseiminimal.github.io/Dragonic/img/dark_wall.png')] py-8 px-4">
			<section class="flex" id="features">
				<div class="w-full flex flex-col items-center space-y-8">
					<h2 class="text-4xl font-bold text-gray-400">Now we've come full circle</h2>

					<div class="flex flex-col">
						<p class="lg:max-w-7xl text-center text-gray-500">
							A smokescreen covered their continuous blinks towards the outskirts of the great kingdom,
							until the cathedral was the only thing clearly visible. Along the way, they could sense
							the great shadow of a Dragon, watching their every step. Then, the voices of survivors
							seeking revenge towards the witch echoed through the destroyed cathedral halls. Others
							were tending to their wounded, others were trying to collect the Enlightened's burning
							husk from the great funeral pyre, whilst the archbishop was chanting blessings, leading
							the flock of peasants as if they were warriors, preparing to battle the mighty dragon...
						</p>
					</div>

					<div class="bg-[url('https://senseiminimal.github.io/Dragonic/img/blog-separator-2.png')] bg-no-repeat"></div>

					<h2 class="text-4xl font-bold text-gray-400">Choose your Hero</h2>

					<div class="lg:max-w-7xl flex flex-col lg:flex-row justify-items-center space-y-4 lg:space-y-0 ">
						<article class="flex flex-col items-center w-full p-4">
							<img class="h-64 object-cover w-full border opacity-60 transition-all duration-[0.5s] hover:opacity-100 shadow-[0px_0px_25px_0px_#000000]" src="https://senseiminimal.github.io/Dragonic/img/character-1.jpg" alt="Aleister Hero Character">
							<h3 class="mt-2 text-gray-400">Aleister</h3>
							<p class="text-center text-gray-500">
								Aleister, the former demonlord, is always looking at others bearing a malefic grin upon
								his twisted visage, harnessing all the power he can muster as he directs bolts of pure
								chaos towards his foes.
							</p>
						</article>
						<article class="flex flex-col items-center w-full p-4">
							<img class="h-64 object-cover w-full border opacity-60 transition-all duration-[0.5s] hover:opacity-100 shadow-[0px_0px_25px_0px_#000000]" src="https://senseiminimal.github.io/Dragonic/img/character-2.jpg" alt="Hecate Hero Character">
							<h3 class="mt-2 text-gray-400">Hecate</h3>
							<p class="text-center text-gray-500">
								The only place Hecate feels safe is total Darkness, where she envelopes herself and
								thrives, until it totally consumes her existence. Until that strange familiar odor
								which vanished, reappears and stabs you - in the Dark.
							</p>
						</article>
						<div class="clearfix visible-sm-block"></div>
						<article class="flex flex-col items-center w-full p-4">
							<img class="h-64 object-cover w-full border opacity-60 transition-all duration-[0.5s] hover:opacity-100 shadow-[0px_0px_25px_0px_#000000]" src="https://senseiminimal.github.io/Dragonic/img/character-3.jpg" alt="Theregar Hero Character">
							<h3 class="mt-2 text-gray-400">Theregar</h3>
							<p class="text-center text-gray-500">
								Theregar's smile looks intimidating as it is, yet is amplified by the fel green hue of
								the enchantments he is preparing: As he deflects his attackers, his foes are enlightened
								by his immense control of the Shadows...
							</p>
						</article>
						<article class="flex flex-col items-center w-full p-4">
							<img class="h-64 object-cover w-full border opacity-60 transition-all duration-[0.5s] hover:opacity-100 shadow-[0px_0px_25px_0px_#000000]" src="https://senseiminimal.github.io/Dragonic/img/character-4.jpg" alt="Roth Hero Character">
							<h3 class="mt-2 text-gray-400">Roth</h3>
							<p class="text-center text-gray-500">
								Void claimed all in the Halls of Reflection as Roth rised from the Stone, his voice
								echoing again in the sultry darkness. His enemies fallen, their eyesight blurred, their
								powers escaping their body as he consumed their souls...
							</p>
						</article>
					</div>
				</div>
			</section>
		</div>
		<!-- ============== DIVIDER ============== -->
		<div class="bg-[url('https://senseiminimal.github.io/Dragonic/img/divider-sprite.png')] bg-repeat-x h-[55px] mt-[-18px]"></div>
	</div>
</x-layouts.app>
