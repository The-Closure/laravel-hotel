<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomSeviceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_sevice_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_service_id');
            $table->bigInteger('room_id');
            $table->bigInteger('reservation_id');
            $table->string('notes');
            $table->bigInteger('employee_id');
            $table->timestamp('done_at')->nullable();
            $table->timestamp('canceled_at')->nullable();
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
        Schema::dropIfExists('room_sevice_requests');
    }
}
