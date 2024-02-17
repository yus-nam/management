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
            $table->id(); // bigint(20) の ID
            $table->unsignedBigInteger('company_id');
            $table->string('product_name', 255);
            $table->integer('price'); // int(11)
            $table->integer('stock'); // int(11)
            $table->text('comment')->nullable();
            $table->string('img_path', 255)->nullable();
            $table->timestamps(); // created_at と updated_at の timestamp

            // 外部キー制約を追加
            $table->foreign('company_id')->references('id')->on('companies');
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

