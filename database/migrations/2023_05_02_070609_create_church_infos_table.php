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
        Schema::create('church_infos', function (Blueprint $table) {
            $table->id();
            $table->string('pastors_name');
            $table->string('church_name');
            $table->string('church_image', '5000');
            $table->string('pastors_image', '5000');
            $table->string('church_desc', '5000');
            $table->string('church_loc');
            $table->foreignId('churchs_id')->constrained('churches');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('church_infos');
    }
};
