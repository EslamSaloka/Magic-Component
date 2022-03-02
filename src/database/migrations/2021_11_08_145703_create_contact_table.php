<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('contact_types', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });


        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('message')->nullable();
            $table->unsignedBigInteger('type_id')->index();
            $table->boolean('status')->default(1);
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('contact_types')->onDelete('cascade');
        });
        

        Schema::create('contact_type_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id')->index();
            $table->string('locale')->nullable();
            $table->string('name')->nullable();

            $table->unique(['type_id', 'locale']);
            $table->foreign('type_id')->references('id')->on('contact_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_type_translations');
        Schema::dropIfExists('contact_types');
        Schema::dropIfExists('contacts');
    }
}
