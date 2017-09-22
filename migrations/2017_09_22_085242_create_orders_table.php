<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_num',100)->default('')->comment('订单号');
            $table->integer('user_id')->default(0)->comment('发起用户id');
            $table->integer('product_id')->default(0)->comment('产品id');
            $table->integer('pieces')->default(0)->comment('订单总份数');
            $table->tinyInteger('status')->default(0)->comment('0为未支付，1为已经支付');
            $table->string('create_time',100)->default('')->comment('添加时间');
            $table->engine = 'innodb';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
