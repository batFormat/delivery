<?php declare(strict_types=1)



$x = stats_cdf_poisson();

var_dump(stats_dens_pmf_poisson(float $x , float $lb));


/**
 * Create orders
 */
$orders = [];

$time = // 1-30 min -> convert to unix timestamp

foreach (range(0, rand(9, 99)) as $num) {
    $orders[$num] = new \App\Order($time, ...[rand(-1000, 1000), rand(-1000, 1000)]);
}

$orders = (new \App\Cook)->processing($orders);
$orders = (new \App\Manager)->processing($orders);

// echo json_encode($orders);
