<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoinhanhangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoinhanhangs', function (Blueprint $table) {
            $table->integer('MaNguoiNhanHang')->autoIncrement();
            $table->text('HoTen');
            $table->text('SoDienThoai');
            $table->text('DiaChi');
            $table->text('LoaiDiaChi')->nullable();
            $table->integer('MaKhachHang');
            
            $table->foreign('MaKhachHang')->references('MaKhachHang')->on('khachhangs');
            $table->index('MaKhachHang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoinhanhangs');
    }
}
