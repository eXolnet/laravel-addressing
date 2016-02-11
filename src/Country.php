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
}
