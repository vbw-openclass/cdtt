<?php

namespace App\Services;

use App\Models\Translation;
use App\Services\TranslationLoaders\TranslationLoader;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Translation\FileLoader;

class DatabaseTranslationLoader extends FileLoader
{
	/**
	 * @inheritDoc
	 */
	public function load($locale, $group, $namespace = null): array
	{
		try {
			$fileTranslations = parent::load($locale, $group, $namespace);

			if (!is_null($namespace) && $namespace !== '*') {
				return $fileTranslations;
			}

			$loaderTranslations = $this->getTranslationsForTranslationLoaders($locale, $group, $namespace);

			return array_replace_recursive($fileTranslations, $loaderTranslations);
		}
		catch (QueryException $e) {
			$model = new Translation;
			if (!Schema::hasTable($model->getTable())) {
				return parent::load($locale, $group, $namespace);
			}

			throw $e;
		}
	}

	protected function getTranslationsForTranslationLoaders(string $locale, string $group, string $namespace = null): array
	{
		return Translation::getTranslationsForGroup($locale, $group);
	}
}
