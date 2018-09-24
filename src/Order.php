<?php declare(strict_types=1)

namespace App;

class Order {

	private static $id = 1;
    public $orderId;

	public $time = null;

	public $coordinates = [0, 0];

	public $time_coocking = null;

	public $lat = 0;
	public $lon = 0;

	/**
     * @param int $lat
  	 * @param int $lon
     * @return new Order
     */
	public function __construct(int $time, int $lat, int $lon) {

		$this->orderId = self::$id++;

		$this->time = $time;
		$this->time_coocking = $this->time + (rand(10, 30) * 60);

        $this->lat = $lat;
        $this->lon = $lon;
	}

}
