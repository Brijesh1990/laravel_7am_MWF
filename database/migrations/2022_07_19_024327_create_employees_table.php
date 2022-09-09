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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("depid")->unsigned();
            $table->foreign("depid")->references("id")->on("departments");
            $table->integer("compid")->unsigned();
            $table->foreign("compid")->references("id")->on("componies");
            $table->string("name");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("email");
            $table->string("password");
            $table->bigInteger("phone");
            $table->float("salary");
            $table->text("address");
            
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
        Schema::dropIfExists('employees');
    }
};
