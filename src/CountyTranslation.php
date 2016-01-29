<?php namespace Exolnet\Addressing;

use \Illuminate\Database\Eloquent\Model;

class CountyTranslation extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'county_translation';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['county_id', 'name', 'locale'];


	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function county()
	{
		return $this->belongsTo('Exolnet\Addressing\County');
	}

	/**
	 * @return Exolnet\Addressing\County
	 */
	public function getCounty()
	{
		return $this->county;
	}

	/**
	 * @param Exolnet\Addressing\County $county
	 * @return $this
	 */
	public function setCounty(County $county)
	{
		$this->county()->associate($county);

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