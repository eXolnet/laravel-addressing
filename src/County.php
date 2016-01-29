<?php namespace Exolnet\Addressing;

use \Illuminate\Database\Eloquent\Model;

class County extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'county';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['country_id', 'code'];


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
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * @param string $code
	 * @return $this
	 */
	public function setCode($code)
	{
		$this->code = $code;

		return $this;
	}
}