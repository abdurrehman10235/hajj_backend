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
        Schema::table('services_en', function (Blueprint $table) {
            $table->decimal('gps_latitude', 10, 8)->nullable();
            $table->decimal('gps_longitude', 11, 8)->nullable();
            $table->string('phone_number')->nullable();
            $table->string('contact_type')->nullable(); // 'group' or 'hotel'
        });

        Schema::table('services_ar', function (Blueprint $table) {
            $table->decimal('gps_latitude', 10, 8)->nullable();
            $table->decimal('gps_longitude', 11, 8)->nullable();
            $table->string('phone_number')->nullable();
            $table->string('contact_type')->nullable(); // 'group' or 'hotel'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services_en', function (Blueprint $table) {
            $table->dropColumn(['gps_latitude', 'gps_longitude', 'phone_number', 'contact_type']);
        });

        Schema::table('services_ar', function (Blueprint $table) {
            $table->dropColumn(['gps_latitude', 'gps_longitude', 'phone_number', 'contact_type']);
        });
    }
};
