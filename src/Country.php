<?php namespace Exolnet\Addressing;

use Exolnet\Translation\Traits\Translatable;
use \Illuminate\Database\Eloquent\Model;

class Country extends Model {
	use Translatable;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'country';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['code2', 'code3'];

	/**
	 * @var array
	 */
	protected $translatedAttributes = ['name'];

	/**
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function counties()
	{
		return $this->hasMany(County::class);
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getCode2()
	{
		return $this->code2;
	}

	/**
	 * @param string $code2
	 * @return $this
	 */
	public function setCode2($code2)
	{
		$this->code2 = $code2;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCode3()
	{
		return $this->code3;
	}

	/**
	 * @param string $code3
	 * @return $this
	 */
	public function setCode3($code3)
	{
		$this->code3 = $code3;

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
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function getCounties()
	{
		return $this->counties;
	}

	/**
	 * @param array $counties
	 * @return $this
	 */
	public function setCounties(array $counties)
	{
		return $this->clearCounties()->addCounties($counties);
	}

	/**
	 * @return $this
	 */
	public function clearCounties()
	{
		$this->counties()->delete();

		return $this;
	}

	/**
	 * @param \Exolnet\Addressing\County $county
	 * @return $this
	 */
	public function addCounty(County $county)
	{
		$this->counties()->save($county);

		return $this;
	}

	/**
	 * @param array $counties
	 * @return $this
	 */
	public function addCounties(array $counties)
	{
		$this->counties()->saveMany($counties);

		return $this;
	}

	/**
	 * @return int
	 */
	public function countCounties()
	{
		return count($this->getCounties());
	}

	/**
	 * @return bool
	 */
	public function hasCounties()
	{
		return $this->countCounties() > 0;
	}
}
