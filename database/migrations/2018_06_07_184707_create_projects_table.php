<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->nullable();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('vhost_directory')->nullable();
            $table->string('ssh_key')->nullable();
            $table->string('ssh_key_path')->nullable();
            $table->string('ssh_key_path')->nullable();
            $table->string('repository_url')->nullable();
            $table->string('webhook_url')->nullable();
            $table->string('repository_provider')->nullable();
            $table->string('group_owner')->nullable();
            $table->string('user_owner')->nullable();
            $table->boolean('ignore')->default(false);
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
        Schema::dropIfExists('projects');
    }
}
