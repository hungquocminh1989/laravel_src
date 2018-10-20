<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_site_header', function (Blueprint $table) {
            $table->increments('m_site_header_id');
            $table->text('header_name');
            $table->integer('display_flg');
            $table->integer('sort_no');
            $table->integer('m_site_page_id');
            $table->integer('home_flg');
            $table->softDeletes();
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
        Schema::dropIfExists('m_site_header');
    }
}
