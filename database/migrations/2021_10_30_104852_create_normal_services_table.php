<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normal_services', function (Blueprint $table) {
            $table->id();
            $table->string('normal_service_name')->nullable();
            $table->bigInteger('normal_service_timespan_by_minutes')->nullable();
            $table->integer('normal_service_number_sessions')->nullable();
            $table->float('normal_service_last_price', 20, 2)->nullable();
            $table->string( 'custom_product_last_price_date' )->comment( 'تاریخ وارد کردن اخرین قیمت از جدول قیمتها' )->nullable();
            $table->boolean( 'custom_product_status_price_discount' )->nullable()->default( false )->comment( 'تخفیف دارد / ندارد' );
            $table->float( 'custom_product_last_price_discount_percentage', 4, 2 )->nullable()->comment( 'مقدار تخفیف به درصد' );
            $table->string( 'custom_product_last_price_discount_type' )->nullable()->comment( 'نوع تخفیف' );
            $table->string( 'custom_product_index_image_url' )->nullable()->comment( 'ادرس تصویر شاخص از جدول تصاویر' );
            $table->unsignedBigInteger( 'custom_product_category_id' )->nullable()->comment( 'ای دی دسته بندی محصول از دسته بندی های محصولات' );
            $table->string( 'custom_product_category_name' )->nullable()->comment( 'ای دی دسته بندی محصول سفارشی از دسته بندی های محصولات سفارشی' );

            $table->unsignedBigInteger('normal_service_shop_id')->nullable();
            $table->unsignedBigInteger( 'custom_product_registry_shopkeeper_id' )->nullable();

            $table->boolean( 'custom_product_status_accept' )->nullable()->default( false )->comment( 'تایید / رد' );
            $table->unsignedBigInteger( 'custom_product_status_confirm_user_id' )->nullable()->comment( 'ای دی کاربر سیستم تایید کننده - رلیشن با جدول' );
            $table->string( 'custom_product_status_confirm_user_comment' )->nullable()->comment( 'اخرین نظر کاربر تایید کننده - رلیشن با جدول' );
            $table->boolean( 'custom_product_status_publish' )->nullable()->default( false )->comment( 'وضعیت انتشار - برای زمان موجود عدم موجود' );
            $table->string( 'custom_product_status_publish_date' )->nullable()->comment( 'تاریخ تایید انتشار' );

            $table->integer( 'custom_product_number_comments' )->nullable()->comment( 'تعداد نظرات یا امتیازها رلیشن با جدول نظرات' );
            $table->float( 'custom_product_total_points', 16, 5 )->nullable()->comment( 'مجموع امتیازها' );
            $table->float( 'custom_product_average_points', 7, 5 )->nullable()->comment( 'متوسط امتیازها' );
            $table->float( 'custom_product_last_point', 6, 5 )->nullable()->comment( 'اخرین امتیاز' );

            $table->softDeletes();
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
        Schema::dropIfExists('normal_services');
    }
}
