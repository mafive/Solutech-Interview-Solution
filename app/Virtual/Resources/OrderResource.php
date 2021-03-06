<?php


namespace App\Virtual\Resources;

use App\Virtual\Models\Order;

/**
 * @OA\Schema(
 *     title="OrderResource",
 *     description="Order resource",
 *     @OA\Xml(
 *         name="OrderResource"
 *     )
 * )
 */
class OrderResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     * @var Order[]
     */
    private $data;

}
