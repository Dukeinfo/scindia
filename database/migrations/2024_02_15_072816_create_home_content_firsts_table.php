<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeContentFirstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_content_firsts', function (Blueprint $table) {
            $table->id();
            $table->string('title1')->nullable(); 
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();
            $table->text('description')->nullable();
            $table->string('youtube_link')->nullable();  
            $table->string('link')->nullable();
             $table->integer('sort_id')->nullable(); 
            $table->enum('status', ['Active', 'Inactive', 'Deleted'])->default('Active');
            $table->ipAddress('ip_address')->nullable();
            $table->string('login')->nullable();
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
        Schema::dropIfExists('home_content_firsts');
    }
}
