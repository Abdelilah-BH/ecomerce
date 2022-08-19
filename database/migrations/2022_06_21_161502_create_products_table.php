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
            $table->string("sku", 100);
            $table->string("name", 100);
            $table->string("graphics", 100);
            $table->text("description")->nullable();
            $table->foreignId("id_category")->nullable()->constrained("categories")->onUpdate('cascade')->onDelete('cascade');
            $table->double("price");
            $table->smallInteger("rating")->nullable();
            $table->integer("discount")->nullable();
            $table->string("brand");
            $table->string("tag");
            $table->string("slug");
            $table->integer("stock");
            $table->string("model");
            $table->integer("storage");
            $table->integer("weight");
            $table->boolean("hidden")->default(false);
            $table->boolean("availability")->default(true);
            $table->enum("status", ["Neuf", "Occasion"])->default("Neuf");
            $table->enum("type_disque_dur", ["SSD", "HDD"])->default("HDD");
            $table->string("images");
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
        Schema::dropIfExists('products');
    }
};
