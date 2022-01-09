<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200)->nullable();
            $table->bigInteger('appointment_id')->nullable();
            $table->text('description')->nullable()->default('بدون توضیحات');
            $table->tinyInteger('status_id')->default(0)->comment("0 = start project ,1 = Ongoing project");
            $table->dateTime('start_project_at')->nullable();
            $table->dateTime('end_project_at')->nullable();
            $table->string('color', 12)->nullable();
            $table->bigInteger('category_id')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
