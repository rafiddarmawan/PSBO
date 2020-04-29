<?php
/* Tabel Siswa (Biodata Siswa), Menggunakan Teknik Migration | Eloquent ORM dari Laravel */
/** Digunakan pada Halaman Biodata Siswa */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->char('nis', 10)->unique();
            $table->string('asrama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
