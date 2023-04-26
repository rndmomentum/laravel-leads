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
        Schema::create('sale_lead_bulk_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->string('mime_type');
            $table->string('filename');
            $table->boolean('is_lead_imported');
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
        Schema::dropIfExists('sale_lead_bulk_uploads');
    }
};
