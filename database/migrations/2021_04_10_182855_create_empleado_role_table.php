<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('empleados_id')->nullable();
            $table->unsignedBigInteger('roles_id')->nullable();
            $table->timestamps();

            $table->foreign('empleados_id')->references('id')->on('empleados')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('roles_id')->references('id')->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado_role');
    }
}
