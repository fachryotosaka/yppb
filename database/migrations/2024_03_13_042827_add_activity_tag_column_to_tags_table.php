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
    Schema::table('tags', function (Blueprint $table) {
        $table->unsignedBigInteger('activity_tag')->after('slug')->nullable()->default(null);
        $table->foreign('activity_tag')->references('id')->on('activities')->constrained();
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::table('tags', function (Blueprint $table) {
        $table->dropForeign(['activity_tag']);
        $table->dropColumn('activity_tag');
    });
}

};
