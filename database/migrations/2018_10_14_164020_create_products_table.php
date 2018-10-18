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
        Schema::create('m_product', function (Blueprint $table) {
            $table->integer('m_category_id');
            $table->text('product_name');
            $table->text('product_no');
            $table->text('product_price');
            $table->text('product_info');
            $table->text('product_link');
            $table->text('product_price_sale');
            $table->text('msg_notify');
            $table->integer('flg_notify');
            $table->integer('sort_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_product');
    }
}
