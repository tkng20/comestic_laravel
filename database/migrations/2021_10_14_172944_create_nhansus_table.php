<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhansusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhansus', function (Blueprint $table) {
            $table->integer('MaNhanSu')->autoIncrement();
            $table->text('TenNhanSu');
            $table->text('CCCD'); 
            $table->text('SoDienThoai'); 
            $table->text('DiaChi'); 
            $table->text('Email'); 
            $table->text('Password'); 
            $table->dateTime('LuotTruyCapGanNhat')->nullable(); 
            $table->integer('MaQuanLy')->nullable();
            
            $table->index('MaQuanLy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhansus');
    }
}
