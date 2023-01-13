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
        Schema::create('message_branches', function (Blueprint $table) {
            $table->id();
            $table->text('BranchID')->nullable();
            $table->text('BranchName')->nullable();
            $table->integer('W_No')->nullable();
            $table->integer('T_NO')->nullable();
            $table->string('W_QR')->nullable();
            $table->string('T_QR')->nullable();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_branches');
    }
};
