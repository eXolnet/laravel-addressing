<?php namespace Exolnet\Addressing;

use Exolnet\Translation\Traits\Translatable;
use \Illuminate\Database\Eloquent\Model;

class County extends Model {
	use Translatable;

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
	protected $fillable = ['code'];

	/**
	 * @var array
	 */
	protected $translatedAttributes = ['name'];

	/**
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function country()
	{
		return $this->belongsTo(Country::class);
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return \Exolnet\Addressing\Country
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param \Exolnet\Addressing\Country $country
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
}
