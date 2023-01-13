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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->text('file_type')->nullable();
            $table->text('json_data')->nullable();
            $table->text('message_id')->nullable();
            $table->timestamps();

        });
        //    Schema::table('objects', function (Blueprint $table) {
        //     $table->integer('message_id')->unsigned()->change();

        //     $table->foreign('message_id')->references('wam_id')->on('messages');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
};
