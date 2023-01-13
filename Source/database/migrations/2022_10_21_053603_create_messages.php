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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->text('wam_id')->nullable();
            $table->datetime('sent_time')->nullable();
            $table->datetime('delivered_time')->nullable();
            $table->datetime('read_time')->nullable();
            $table->text('user_number')->nullable();
            $table->text('busuness_number')->nullable();
            $table->integer('content_id')->nullable();
            $table->text('direction')->nullable();

            $table->timestamps();
        });
        // Schema::table('objects', function (Blueprint $table) {
        //     $table->integer('holding_id')->unsigned()->change();

        //     $table->foreign('holding_id')->references('id')->on('holdings');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
