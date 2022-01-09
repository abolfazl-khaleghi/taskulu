<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable()->default('بدون توضیحات');
            $table->tinyInteger('status_id')->default(0)->comment("0 = start project ,1 = Ongoing project");
            $table->dateTime('start_project_at')->nullable();
            $table->dateTime('end_project_at')->nullable();
            $table->string('color', 12)->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->timestamps();
        });
    }
/*
status
            0شروع   =    
            1 درحال 
            2= انجام شده 
            3 = تایید نشده 
            4 = در حال رفع معایب 
            5 = تایید 
            6 = در دست پرداخت 
            7 =اتمام و تحویل پروزه 
            8 =پشتیبانی پروژه 
            9 =اتمام قرداد 
            */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
