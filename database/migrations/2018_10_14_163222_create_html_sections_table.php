<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHtmlSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_html_section', function (Blueprint $table) {
            $table->increments('m_html_section_id');
            $table->integer('m_site_page_id');
            $table->integer('m_site_page_section_id');
            $table->integer('m_html_data_id');
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
        Schema::dropIfExists('m_html_section');
    }
}
