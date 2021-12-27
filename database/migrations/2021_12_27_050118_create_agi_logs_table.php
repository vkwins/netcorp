<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\AgiLog;

class CreateAgiLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agi_log', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_id');
            $table->dateTime('year_mon');
            $table->dateTime('local_time')->nullable();
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('lng', 10, 7)->nullable();
            $table->integer('speed')->nullable();
            $table->integer('direction')->nullable();
            $table->integer('count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agi_logs');
    }
}
