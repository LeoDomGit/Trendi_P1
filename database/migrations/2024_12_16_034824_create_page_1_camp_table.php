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
        Schema::create('page_1_camp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('link_id');
            $table->date('date');
            $table->integer('ctr_page_1');
            $table->integer('click_page_1');
            $table->decimal('cost_page_1', 15, 2);
            $table->decimal('cpc_page_1', 15, 2);
            $table->decimal('unit_cost', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_1_camp');
    }
};
