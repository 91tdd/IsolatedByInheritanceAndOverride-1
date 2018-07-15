<?php

namespace Tests\IsolatedByInheritanceAndOverride;

use PHPUnit\Framework\TestCase;
use IsolatedByInheritanceAndOverride\OrderService;

class OrderServiceTest extends TestCase
{
    /** @test */
    public function order_service_test()
    {
        //
        // TODO:  在此加入建構函式的程式碼
        //
    }

    /** @test */
    public function test_sync_book_orders_3_orders_only_2_book_order()
    {
        // hard to isolate dependency to unit test

        // $target = new OrderService();
        // $target->syncBookOrders();
    }
}
