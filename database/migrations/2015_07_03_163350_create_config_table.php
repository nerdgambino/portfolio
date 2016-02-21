<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title_sp', 30);
            $table->string('title_en', 30);
            $table->string('name');
            $table->string('tel');
            $table->string('email');
            $table->string('resume');
            $table->string('degree_sp');
            $table->string('degree_en');
            $table->string('job_sp');
            $table->string('job_en');
            $table->string('about_title_sp');
            $table->string('about_title_en');
            $table->text('about_content_sp');
            $table->text('about_content_en');
            $table->string('contact_title_sp');
            $table->string('contact_title_en');
            $table->text('contact_content_sp');
            $table->text('contact_content_en');
            $table->string('footer_sp');
            $table->string('footer_en');
            $table->nullableTimestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('config');
    }
}
