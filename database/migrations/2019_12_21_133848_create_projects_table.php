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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->integer('percentage')->nullable();
            $table->string('function')->nullable();
            $table->decimal('amount', 16, 2)->nullable();
            $table->date('date')->nullable();
            $table->decimal('abandoned', 16, 2)->nullable();
            $table->decimal('lat', 10, 8)->nullable();
            $table->decimal('long', 10, 8)->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('community')->nullable();
            $table->string('sponsor')->nullable();
            $table->string('contractor_name')->nullable();
            $table->text('contractor_address')->nullable();
            $table->string('contractor_phone')->nullable();
            $table->unsignedBigInteger('user_id')->nullable()->default(0);
            $table->timestamps();
        });
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('project-images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_id');
            $table->string('image_id');
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
        Schema::dropIfExists('projects');
    }
}
