<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->integer('MaSanPham')->autoIncrement();
            $table->string('TenSanPham',45);
            $table->decimal('GiaSanPham');
            $table->string('ThuongHieu',45);
            $table->integer('SoLuongHienTai');
            $table->string('AnhDaiDien',45);
            $table->integer('MaLoaiSanPham');

            $table->index('MaLoaiSanPham');
            $table->foreign('MaLoaiSanPham')->references('MaLoaiSanPham')->on('loaisanphams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanphams');
    }
}
