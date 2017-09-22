<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserOrderRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_order_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->default(0)->comment('订单id');
            $table->integer('user_id')->default(0)->comment('用户id');
            $table->integer('pieces')->default(0)->comment('购买的份数');
            $table->decimal('money',10,2)->default(0.00)->comment('已付钱数');
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
        Schema::dropIfExists('user_order_records');
    }
}
