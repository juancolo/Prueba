<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('nombre', 124);
            $table->string('email', 124);
            $table->char('sexo');
            $table->unsignedBigInteger('area_id');
            $table->integer('boletin');
            $table->text('descripcion');
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('areas')
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
        Schema::dropIfExists('empleados');
    }
}
