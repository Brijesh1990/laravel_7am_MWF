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
        Schema::create('addsubcategories', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("catid")->unsigned();
            $table->foreign("catid")->references("id")->on("addcategories");
            $table->string("subcategoryname");
          
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
        Schema::dropIfExists('addsubcategories');
    }
};
