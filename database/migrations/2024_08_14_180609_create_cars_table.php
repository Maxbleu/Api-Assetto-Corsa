<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("category");

            $table->integer("power");
            $table->integer("torque");
            $table->integer("weight");
            $table->decimal("power_to_weight_ratio",5,3);
            $table->integer("top_speed");

            $table->integer("year");
            $table->string("description",10000);
            $table->string("url_image");

            $table->unsignedBigInteger("brand_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
