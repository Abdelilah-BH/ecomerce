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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_delivery");
            $table->foreign("id_delivery")->references("id")->on("deliveries")->onDelete("cascade");
            $table->unsignedBigInteger("id_user");
            $table->foreign("id_user")->references("id")->on("users")->onDelete("cascade");
            $table->string('tracking');
            $table->double('price');
            $table->enum('status', ['livre', 'en cours', 'annuler']);
            $table->date('date_delivery');
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
        Schema::dropIfExists('orders');
    }
};
