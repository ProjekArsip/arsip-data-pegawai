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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->integer("nip");
            $table->varchar("nama_pegawai");
            $table->varchar("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->varchar("status");
            $table->varchar("golongan");
            $table->varchar("tamat_golongan");
            $table->varchar("pendidikan_terakhir");
            $table->varchar("jenis_jabatan");
            $table->date("tmt_cpns");
            $table->date("tmt_pns");
            $table->date("tmt_golongan");
            $table->varchar("bidang");
            $table->timestamps();
            $table->varchar("id_berkas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
