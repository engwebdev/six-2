<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('parent_type')->nullable();
            $table->unsignedBigInteger('shop_category_id')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('shop_accept_status')->nullable();
            $table->integer('shop_priority')->nullable()->default(12);
            $table->string('shop_photo_url')->nullable();
            $table->boolean('type_location')->nullable();
            $table->string('lat_location')->nullable();
            $table->string('long_location')->nullable();
            $table->string('shop_country')->nullable();
            $table->string('shop_province')->nullable();
            $table->string('shop_city')->nullable();
            $table->string('shop_local')->nullable();
            $table->string('shop_Street')->nullable();
            $table->string('shop_alley')->nullable();
            $table->string('shop_number')->nullable();
            $table->string('shop_postal_code')->nullable();
            $table->string('shop_main_phone_number')->nullable();
            $table->string('shop_number')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('parent_id')
                ->references('id')
                ->on('shops')
                ->onDelete('no action')
                ->onUpdate('cascade');

//            when created shop_categories table -> this comment write in shop_categories migrate file
//            $table->foreign('shop_category_id')
//                ->references('id')
//                ->on('shop_categories')
//                ->onDelete('no action')
//                ->onUpdate('cascade');
        });

        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_name')->unique()->nullable();
            $table->unsignedBigInteger('business_id')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->enum('account_type', ['parent', 'child', 'owner', 'servants'])->nullable();
            $table->uuid('account_unique_value')->nullable();
            $table->string('account_status')->nullable();
            $table->string('account_active_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('business_id')
                ->references('id')
                ->on('shops')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('no action')
                ->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
        Schema::dropIfExists('accounts');
    }
}