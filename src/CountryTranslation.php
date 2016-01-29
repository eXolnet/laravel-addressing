<?php namespace Exolnet\Addressing;

use \Illuminate\Database\Eloquent\Model;

class CountryTranslation extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'country_translation';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['country_id', 'name', 'locale'];


	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function country()
	{
		return $this->belongsTo('Exolnet\Addressing\Country');
	}

	/**
	 * @return Exolnet\Addressing\Country
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param Exolnet\Addressing\Country $country
	 * @return $this
	 */
	public function setCountry(Country $country)
	{
		$this->country()->associate($country);

		return $this;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return $this
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getLocale()
	{
		return $this->locale;
	}

	/**
	 * @param string $locale
	 * @return $this
	 */
	public function setLocale($locale)
	{
		$this->locale = $locale;

		return $this;
	}
}