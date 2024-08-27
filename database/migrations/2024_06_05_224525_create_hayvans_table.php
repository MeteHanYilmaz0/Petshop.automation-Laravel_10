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
        Schema::create('hayvans', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("yas");
            $table->integer("fiyat");
            $table->string("cins_adi");
            $table->string("renk");
            $table->unsignedBigInteger("category_id");

            $table->string("image");

            $table->foreign("category_id")->references("id")->on("categories")->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hayvans');
    }
};
