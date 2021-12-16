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
            $table->foreignId('room_id');
            $table->foreignId('reservation_id');
            $table->foreignId('employee_id');
            $table->string('notes');
            $table->timestamp('done_at')->nullable();
            $table->timestamp('canceled_at')->nullable();
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
        Schema::dropIfExists('room_sevice_requests');
    }
}
