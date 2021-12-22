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
            $table->string('name');
            $table->text('description');
           // $table->string('technology')->nullable();
            $table->boolean('enable')->nullable();
            $table->string('portfolioId')->nullable();
            $table->binary('image1')->nullable();
            //$table->string('image2')->nullable();
            $table->unsignedBigInteger('portfolio_id')->nullable();

            $table->foreign('portfolio_id')->references('id')->on('portfolios');

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
