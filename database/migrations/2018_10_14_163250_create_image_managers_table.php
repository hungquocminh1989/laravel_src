<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_image_manager', function (Blueprint $table) {
            $table->increments('m_image_manager_id');
            $table->integer('m_image_id');
            $table->integer('default_flg');
            $table->integer('m_category_id');
            $table->integer('m_product_id');
            $table->integer('m_site_setting_id');
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
        Schema::dropIfExists('m_image_manager');
    }
}
