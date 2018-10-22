<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_statuses', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->string('loan_status_name', 255);
            $table->tinyInteger('deleted')->default(0);
=======
            $table->string('loan_status_name',255);
            $table->integer('deleted')->default(0);
>>>>>>> 81fab469551d4e37018e54556e08bbb840e1e7d5
            $table->timestamp('deleted_on')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });

        DB::table('loan_statuses')->insert(
            array(
                ['loan_status_name' => 'applied'],
                ['loan_status_name' => 'approved'],
                ['loan_status_name' => 'disbursed'],
                ['loan_status_name' => 'paid'],

            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_statuses');
    }
}
