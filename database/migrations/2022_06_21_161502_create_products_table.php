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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->text("description")->nullable();
            // $table->foreignId("category_id")->nullable()->constrained("categories")->onUpdate('cascade')->onDelete('cascade');
            $table->double("price");
            $table->smallInteger("rating")->nullable();
            $table->integer("discount")->nullable();
            $table->string("brand");
            $table->integer("stock");
            $table->boolean("hidden")->default(false);
            $table->boolean("availability")->default(true);
            $table->enum("state", ["Neuf", "Occasion"])->default("Neuf");
            $table->string("image");
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
        Schema::dropIfExists('products');
    }
};
