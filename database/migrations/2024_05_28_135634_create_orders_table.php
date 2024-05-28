<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('g_number');
            $table->string('date');
            $table->string('last_change_date');
            $table->string('supplier_article');
            $table->string('tech_size');
            $table->string('barcode');
            $table->unsignedDecimal('total_price');
            $table->unsignedFloat('discount_percent');
            $table->string('warehouse_name');
            $table->string('oblast');
            $table->unsignedBigInteger('income_id');
            $table->string('odid')->default(null);
            $table->unsignedBigInteger('nm_id');
            $table->string('category');
            $table->string('brand_7501118');
            $table->boolean('is_cancel');
            $table->string('cancel_dt')->default(null);

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
        Schema::dropIfExists('orders');
    }
}
