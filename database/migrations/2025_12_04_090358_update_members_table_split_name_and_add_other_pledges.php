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
        Schema::table('members', function (Blueprint $table) {
            // Add new name fields
            $table->string('first_name')->after('photo')->nullable();
            $table->string('middle_name')->after('first_name')->nullable();
            $table->string('last_name')->after('middle_name')->nullable();
            
            // Add other_pledges JSON column
            $table->json('other_pledges')->after('ahadi_nyingine')->nullable();
            
            // Drop old jina column (after data migration if needed)
            $table->dropColumn('jina');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            // Restore jina column
            $table->string('jina')->after('photo')->nullable();
            
            // Drop new columns
            $table->dropColumn(['first_name', 'middle_name', 'last_name', 'other_pledges']);
        });
    }
};
