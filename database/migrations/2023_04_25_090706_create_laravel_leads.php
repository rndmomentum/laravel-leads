<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_leads', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('phone_number')->nullable(true);
            $table->string('source')->nullable(true);
            $table->string('type')->nullable(true);
            $table->string('sale_pic')->nullable(true);
            $table->boolean('is_bulk_upload')->default(0);
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_leads');
    }
};
