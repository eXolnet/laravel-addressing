<?php namespace Exolnet\Addressing;

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
	/**
	 * @var array
	 */
	protected $countries = [];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->importCountries($this->getCountries());
	}

	/**
	 * @return array
	 */
	protected function getCountries()
	{
		return $this->countries;
	}

	/**
	 * @param array $models
	 */
	protected function importCountries(array $models)
	{
		foreach ($models as $model) {
			$this->importCountry($model);
		}
	}

	/**
	 * @param array $data
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	protected function importCountry(array $data)
	{
		$country = new Country();

		$country
			->fillWithTranslations(array_except($data, 'counties'))
			->save();

		$this->importCounties($country, (array)array_get($data, 'counties'));

		return $country;
	}

	/**
	 * @param \Exolnet\Addressing\Country $country
	 * @param array $counties
	 */
	protected function importCounties(Country $country, array $counties)
	{
		foreach ($counties as $county) {
			$this->importCounty($country, $county);
		}
	}

	/**
	 * @param \Exolnet\Addressing\Country $country
	 * @param array $data
	 * @return \Exolnet\Addressing\County
	 */
	protected function importCounty(Country $country, array $data)
	{
		$county = new County();

		$county
			->fillWithTranslations($data)
			->setCountry($country)
			->save();

		return $county;
	}
}
