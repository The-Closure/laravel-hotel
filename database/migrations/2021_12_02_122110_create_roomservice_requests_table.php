<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomserviceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomservicerequests', function (Blueprint $table) {
            $table->id();
            $table->integer('room_id');
            $table->foreignId('room_service_id');
            $table->integer('reservation_id');
            $table->string('notes');
            $table->integer('employee_id');
            $table->timestamp('canceled_at')->nullable();
            $table->timestamp('done_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('Roomservicerequests');
    }
}
