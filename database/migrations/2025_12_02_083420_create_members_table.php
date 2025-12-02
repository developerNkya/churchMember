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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            
            // Church Information
            $table->string('jimbo')->default('KUSINI');
            $table->string('usharika')->default('MJI MWEMA');
            $table->string('photo')->nullable();
            
            // Section A: Personal Information
            $table->string('jina');
            $table->enum('jinsi', ['Me', 'Ke']);
            $table->date('tarehe_kuzaliwa');
            $table->string('mahali_kuzaliwa');
            $table->enum('hali_ndoa', ['Umeoa', 'Hujaoa', 'Umeolewa', 'Hujaolewa', 'Mgane', 'Mjane', 'Talikiwa', 'Tengana']);
            $table->string('jina_mwenzi')->nullable();
            $table->enum('aina_ndoa', ['Kikristo', 'Siyo Kikristo'])->nullable();
            $table->date('tarehe_ndoa')->nullable();
            
            // Dependents (store as JSON)
            $table->json('watoto')->nullable();
            
            // Section B: Contact and Residence
            $table->string('simu');
            $table->string('simu_mwenzi')->nullable();
            $table->string('sanduku_barua')->nullable();
            $table->string('barua_pepe')->nullable();
            $table->string('mtaa');
            $table->string('namba_nyumba')->nullable();
            $table->string('jina_eneo');
            $table->string('block_no')->nullable();
            $table->string('jirani_jina')->nullable();
            $table->string('jirani_simu')->nullable();
            $table->string('mzee_kanisa')->nullable();
            $table->string('simu_mzee')->nullable();
            
            // Section C: Education and Work
            $table->string('kazi');
            $table->string('mahali_kazi')->nullable();
            $table->string('elimu')->nullable();
            $table->string('ujuzi')->nullable();
            
            // Section D: Spiritual Services
            $table->enum('batizwa', ['Ndiyo', 'Hapana']);
            $table->enum('kipaimara', ['Ndiyo', 'Hapana'])->nullable();
            $table->date('tarehe_kipaimara')->nullable();
            $table->enum('meza_bwana', ['Ndiyo', 'Hapana']);
            
            // Section E: Church Service Participation
            $table->enum('jumuiya', ['Ndiyo', 'Hapana'])->nullable();
            $table->string('jina_jumuiya')->nullable();
            $table->string('sababu')->nullable();
            $table->json('huduma')->nullable(); // Store array of selected ministries
            $table->json('kwaya')->nullable(); // Store array of selected choirs
            $table->json('umoja')->nullable(); // Store array of selected unions
            
            // Section F: Pledge for 2026
            $table->decimal('ahadi_jengo', 10, 2)->default(0);
            $table->decimal('ahadi_uwakili', 10, 2)->default(0);
            $table->decimal('ahadi_nyingine', 10, 2)->default(0);
            $table->enum('namba_ahadi', ['Ndiyo', 'Hapana'])->nullable();
            $table->string('namba_ahadi_specific')->nullable();
            
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
