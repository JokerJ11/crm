<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('ref_no');
            $table->unsignedBigInteger('type_of_work_id');
            $table->text('description');
            $table->text('attachment');
            $table->date('assigned_date')->format('d/m/Y');
            $table->date('due_date')->format('d/m/Y');
            $table->date('start_date')->format('d/m/Y');
            $table->date('stop_date')->format('d/m/Y');
            $table->string('priority')->nullable(false)->change();
            $table->string('progress');
            $table->date('plan_duration')->format('d/m/Y');
            $table->date('actual_duration')->format('d/m/Y');
            $table->float('completion_percentage', 8, 2);
            $table->date('created_by')->format('d/m/Y');
            $table->string('assign_status');
            $table->string('status');
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
        Schema::dropIfExists('tasks');
    }
}
