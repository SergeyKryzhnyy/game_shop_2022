<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->comment('номер телефона');
            $table->enum('status', ['interviewed','not interviewed'])->comment('статус опрошен/не опрошен')->default('not interviewed');
            $table->string('name')->nullable()->comment('имя клиента');
            $table->string('last_name')->nullable()->comment('Фамилия');
            $table->string('email')->unique()->nullable();
            $table->date('birthday')->nullable()->comment('дата рождения');
            $table->bigInteger('service_id')->comment('название оказанной услуги')->unsigned()->nullable();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('restrict')->onUpdate('cascade');
            $table->string('assessment')->comment('оценка качества')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
