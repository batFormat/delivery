<?php

namespace App;

/**
 * Cook
 */
class Cook
{
	
	function __construct()
	{
		# code...
	}

	/**
     * @param array $orders
     * @return array
     */
	public function processing(array $orders) {
		foreach ($orders as $order) {
            $order->processed_at = $order->timeSend + $order->timeCook;
        }
        return $orders;
	}
}
