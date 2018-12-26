<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadASPOrganizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_a_s_p__organizacions', function (Blueprint $table) {
            $table->unsignedInteger('ActividadASPid');
            $table->foreign('ActividadASPid')->references('id')->on('actividad_a_s_ps');
            $table->unsignedInteger('Organizacionid');
            $table->foreign('Organizacionid')->references('id')->on('organizacions');
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
        Schema::dropIfExists('actividad_a_s_p__organizacions');
    }
}
