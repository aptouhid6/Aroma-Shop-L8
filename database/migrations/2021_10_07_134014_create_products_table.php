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
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('name',255);
            $table->string('color',100)->nullable();
            $table->string('size',100)->nullable();
            $table->text('description',100)->nullable();
            $table->float('ptice',9,2);
            $table->integer('stock')->default(0);
            $table->tinyInteger('is_featured')->default('0');
            $table->text('image')->nullable();
            $table->enum('status',['Active','Integer']);
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
