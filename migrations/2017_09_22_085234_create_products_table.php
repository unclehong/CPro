<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',200)->default('')->comment('标题');
            $table->text('descrip')->comment('商品描述');
            $table->text('content')->comment('商品详情');
            $table->decimal('price',10,2)->default(0.00)->comment('商品价格');
            $table->integer('max_piece')->default(0)->comment('最大份数');
            $table->integer('min_piece')->default(0)->comment('最小份数');
            $table->integer('max_days')->default(0)->comment('最大天数');
            $table->decimal('discount')->default(0.00)->comment('新增一件最大优惠');
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
        Schema::dropIfExists('products');
    }
}
