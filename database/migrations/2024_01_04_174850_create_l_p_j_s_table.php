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
        Schema::create('l_p_j_s', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("isi");
            $table->string("status");
            $table->text("user_up");
            $table->String("user_id");
            $table->String("user_app");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l_p_j_s');
    }
};
