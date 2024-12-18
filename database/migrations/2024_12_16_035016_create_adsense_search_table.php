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
        Schema::create('adsense_search', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('link_id');
            $table->date('date');
            $table->integer('request');
            $table->integer('impressions');
            $table->float('ecpm', 8, 2);
            $table->integer('clicks');
            $table->decimal('pub_revenue', 15, 2);
            $table->decimal('unit_cost', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adsense_search');
    }
};
