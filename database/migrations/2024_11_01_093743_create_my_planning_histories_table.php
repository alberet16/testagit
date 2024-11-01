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
        Schema::create('my_planning_histories', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->integer('old_production_plan');
            $table->integer('new_production_plan');
            $table->timestamp('modified_at')->useCurrent();
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
        Schema::dropIfExists('my_planning_histories');
    }
};
