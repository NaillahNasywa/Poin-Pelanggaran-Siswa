<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('siswa', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nisn');
        $table->enum('jeniskelamin',['Pria','Wanita']);
        $table->string('alamat');
        $table->string('nohp');
        $table->string('point');
        $table->string('email');
        $table->timestamps();
    });
    Schema::create('guru', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nipd');
        $table->string('alamat');
        $table->string('nohp');
        $table->string('email');
        $table->timestamps();
    });
    Schema::create('kelas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->timestamps();
    });
    Schema::create('pelanggaran', function (Blueprint $table) {
        $table->id();
        $table->string('jenispelanggaran');
        $table->string('tindakan');
        $table->string('jmlh_point');
        $table->timestamps();
    });
    Schema::create('pelanggaran_siswa', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
    });

    Schema::table('siswa', function (Blueprint $table) {
        $table->unsignedBigInteger('kelas_id')->require();
        $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('restrict');
       
    });
    
    Schema::table('pelanggaran_siswa', function (Blueprint $table) {
        $table->unsignedBigInteger('siswa_id')->require();
        $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('restrict');
        $table->unsignedBigInteger('pelanggaran_id')->require();
        $table->foreign('pelanggaran_id')->references('id')->on('pelanggaran')->onDelete('restrict');
    });

    Schema::table('guru', function (Blueprint $table) {
    
    $table->unsignedBigInteger('kelas_id')->require();
    $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('restrict');
    });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
            $table->dropColumn('kelas_id');
           
        });
        Schema::table('pelanggaran_siswa', function (Blueprint $table) {
            $table->dropForeign(['siswa_id']);
            $table->dropColumn('siswa_id');
            $table->dropForeign(['pelanggaran_id']);
            $table->dropColumn('pelanggaran_id');
        });
        Schema::table('guru', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
            $table->dropColumn('kelas_id');
         
        });
        Schema::dropIfExists('siswa');
        Schema::dropIfExists('guru');
        Schema::dropIfExists('kelas');
        Schema::dropIfExists('pelanggaran');
        Schema::dropIfExists('pelanggaran_siswa');
    }
};
