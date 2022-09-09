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
        Schema::create('addproducts', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("catid")->unsigned();
            $table->foreign("catid")->references("id")->on("addcategories");
            $table->integer("subcatid")->unsigned();
            $table->foreign("subcatid")->references("id")->on("addsubcategories");
            $table->string("productimage");
            $table->string("productname");
            $table->integer("oldprice");
            $table->integer("newprice");
            $table->integer("qty");
            $table->text("descriptions");   
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
        Schema::dropIfExists('addproducts');
    }
};
