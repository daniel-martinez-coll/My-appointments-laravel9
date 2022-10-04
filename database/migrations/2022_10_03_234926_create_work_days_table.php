<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up()
    {
        Schema::create('work_days', function (Blueprint $table) {
            
            $table->id();            
            $table->unsignedSmallInteger('day');
            $table->unsignedBigInteger('user_id');
            $table->boolean('active');
            $table->time('morning_start');
            $table->time('morning_end');
            $table->time('afternoon_start');
            $table->time('afternoon_end');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');

           
        });
    }

    public function down(){
        Schema::dropIfExists('work_days');
    }
};
