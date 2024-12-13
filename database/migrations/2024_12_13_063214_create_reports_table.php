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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->timestamp('timestamp')->nullable(); // Timestamp
            $table->string('query')->nullable(); // query
            $table->string('referrer')->nullable(); // referrer
            $table->string('lpurl')->nullable(); // lpurl
            $table->string('ip')->nullable(); // ip
            $table->string('event')->nullable(); // event
            $table->longText('iframeSrc')->nullable(); // ifarmeSrc
            $table->string('fbclid')->nullable(); // fbclid
            $table->string('track_id')->nullable(); // track_id
            $table->string('gads')->nullable(); // gads
            $table->string('page')->nullable(); // page
            $table->string('ny')->nullable(); // ny
            $table->string('rs')->nullable(); // rs
            $table->string('clkt')->nullable(); // clkt
            $table->string('nx')->nullable(); // nx
            $table->string('nm')->nullable(); // nm
            $table->longText('rsToken')->nullable(); // rsToken
            $table->string('site')->nullable(); // site
            $table->string('is')->nullable(); // is
            $table->string('locale')->nullable(); // locale
            $table->string('nb')->nullable(); // nb
            $table->longText('slug')->nullable(); // slug
            $table->string('rurl')->nullable(); // rurl
            $table->string('category')->nullable(); // category
            $table->string('sheetsname')->nullable(); // sheetsname
            $table->string('sfnsn')->nullable(); // sfnsn
            $table->string('referrer2')->nullable(); // referrer2
            $table->string('qsrc')->nullable(); // qsrc
            $table->string('gtm_debug')->nullable(); // gtm_debug
            $table->string('utm_id')->nullable(); // utm_id
            $table->string('utm_campaign')->nullable(); // utm_campaign
            $table->string('utm_content')->nullable(); // utm_content
            $table->string('utm_term')->nullable(); // utm_term
            $table->string('utm_source')->nullable(); // utm_source
            $table->string('utm_medium')->nullable(); // utm_medium
            $table->string('src')->nullable(); // src
            $table->string('from')->nullable(); // from
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
