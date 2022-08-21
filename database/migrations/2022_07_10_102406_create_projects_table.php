<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('nama');
            $table->string('role');
            $table->text('deskripsi');
            $table->string('link_github')->nullable();
            $table->string('link_figma')->nullable();
            $table->string('link_trello')->nullable();
            $table->string('link_website')->nullable();
            $table->timestamps();
        });

        Schema::create('project_skil', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skil_id')->constrained();
            $table->foreignId('project_id')->constrained();
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
};
