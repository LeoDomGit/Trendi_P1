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
        Schema::table('reports', function (Blueprint $table) {
            $table->longText('query')->nullable()->change();
            $table->longText('referrer')->nullable()->change();
            $table->longText('lpurl')->nullable()->change();
            $table->longText('event')->nullable()->change();
            $table->longText('fbclid')->nullable()->change();
            $table->longText('track_id')->nullable()->change();
            $table->longText('gads')->nullable()->change();
            $table->longText('page')->nullable()->change();
            $table->longText('ny')->nullable()->change();
            $table->longText('rs')->nullable()->change();
            $table->longText('clkt')->nullable()->change();
            $table->longText('nx')->nullable()->change();
            $table->longText('nm')->nullable()->change();
            $table->longText('site')->nullable()->change();
            $table->longText('is')->nullable()->change();
            $table->longText('locale')->nullable()->change();
            $table->longText('nb')->nullable()->change();
            $table->longText('slug')->nullable()->change();
            $table->longText('rurl')->nullable()->change();
            $table->longText('category')->nullable()->change();
            $table->longText('sheetsname')->nullable()->change();
            $table->longText('sfnsn')->nullable()->change();
            $table->longText('referrer2')->nullable()->change();
            $table->longText('qsrc')->nullable()->change();
            $table->longText('gtm_debug')->nullable()->change();
            $table->longText('utm_id')->nullable()->change();
            $table->longText('utm_campaign')->nullable()->change();
            $table->longText('utm_content')->nullable()->change();
            $table->longText('utm_term')->nullable()->change();
            $table->longText('utm_source')->nullable()->change();
            $table->longText('utm_medium')->nullable()->change();
            $table->longText('src')->nullable()->change();
            $table->longText('from')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->string('query')->nullable()->change();
            $table->string('referrer')->nullable()->change();
            $table->string('lpurl')->nullable()->change();
            $table->string('event')->nullable()->change();
            $table->string('fbclid')->nullable()->change();
            $table->string('track_id')->nullable()->change();
            $table->string('gads')->nullable()->change();
            $table->string('page')->nullable()->change();
            $table->string('ny')->nullable()->change();
            $table->string('rs')->nullable()->change();
            $table->string('clkt')->nullable()->change();
            $table->string('nx')->nullable()->change();
            $table->string('nm')->nullable()->change();
            $table->string('site')->nullable()->change();
            $table->string('is')->nullable()->change();
            $table->string('locale')->nullable()->change();
            $table->string('nb')->nullable()->change();
            $table->string('slug')->nullable()->change();
            $table->string('rurl')->nullable()->change();
            $table->string('category')->nullable()->change();
            $table->string('sheetsname')->nullable()->change();
            $table->string('sfnsn')->nullable()->change();
            $table->string('referrer2')->nullable()->change();
            $table->string('qsrc')->nullable()->change();
            $table->string('gtm_debug')->nullable()->change();
            $table->string('utm_id')->nullable()->change();
            $table->string('utm_campaign')->nullable()->change();
            $table->string('utm_content')->nullable()->change();
            $table->string('utm_term')->nullable()->change();
            $table->string('utm_source')->nullable()->change();
            $table->string('utm_medium')->nullable()->change();
            $table->string('src')->nullable()->change();
            $table->string('from')->nullable()->change();
        });
    }
};
