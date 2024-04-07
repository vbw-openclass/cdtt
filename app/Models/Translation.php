<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;

class Translation extends Model
{
	public $translatable = ['text'];

	public $guarded = ['id'];

	protected $casts = ['text' => 'array'];

	public static function boot()
	{
		parent::boot();

		$flushGroupCache = function (self $translation) {
			$translation->flushGroupCache();
		};

		static::saved($flushGroupCache);
		static::deleted($flushGroupCache);
	}

	public static function getTranslationsForGroup(string $locale, string $group): array
	{
		return Cache::rememberForever(static::getCacheKey($group, $locale), function () use ($group, $locale) {
			return static::query()
				->where('group', $group)
				->get()
				->reduce(function ($lines, self $translation) use ($group, $locale) {
					$trans = $translation->getTranslation($locale);

					if ($trans !== null) {
						Arr::set($lines, $translation->key, $trans);
					}

					return $lines;
				}) ?? [];
		});
	}

	public static function getCacheKey(string $group, string $locale): string
	{
		return "translations.{$group}.{$locale}";
	}

	public function getTranslation(string $locale): ?string
	{
		if (!isset($this->text[$locale])) {
			$fallback = config('app.fallback_locale');

			$locale = $fallback;
		}

		return collect($this->text)->firstWhere('locale', $locale)['translatedText'] ?? null;
	}

	public function setTranslation(string $locale, string $value)
	{
		$this->text = array_merge($this->text ?? [], [$locale => $value]);

		return $this;
	}

	public function flushGroupCache(): void
	{
		foreach ($this->getTranslatedLocales() as $locale) {
			Cache::forget(static::getCacheKey($this->group, $locale));
		}
	}

	protected function getTranslatedLocales(): array
	{
		return array_keys($this->text);
	}
}
