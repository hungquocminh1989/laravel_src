<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitePageSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_site_page_section', function (Blueprint $table) {
            $table->increments('m_site_page_section_id');
            $table->integer('m_site_page_id');
            $table->text('section_title');
            $table->integer('section_type');
            $table->integer('sort_no');
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
        Schema::dropIfExists('m_site_page_section');
    }
}
