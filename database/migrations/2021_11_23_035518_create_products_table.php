<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->mediumtext('summary');
            $table->longText('description')->nullable();
            // Nao add anh bo nullable cho photo1, photo2, photo3, photo4
            $table->text('photo1')->nullable();
            $table->text('photo2')->nullable();
            $table->text('photo3')->nullable();
            $table->text('photo4')->nullable();
            //
            $table->integer('stock')->default(0);
            $table->enum('condi', ['default', 'new', 'hot'])->default('default');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->float('price')->default(0);
            $table->float('offer_price')->default(0);
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->unsignedBigInteger('child_cat_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();

            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('SET NULL');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('SET NULL');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->foreign('child_cat_id')->references('id')->on('categories')->onDelete('SET NULL');
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
        Schema::dropIfExists('products');
    }
}
