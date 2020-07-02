<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_ticket', function (Blueprint $table) {
            $table->integer('TicketNumber');
            $table->string('Status')->default('Open');
            $table->text('Tags')->nullable();
            $table->integer('AssignedTo')->nullable();
            //Guardian Info
            $table->string('GuardianFirstName');
            $table->string('GuardianLastName');
            $table->string('GuardianEmail');
            $table->string('GuardianPhone');
            $table->string('GuardianDevice')->nullable();
            //Student Info
            $table->string('StudentFirstName');
            $table->string('StudentLastName');
            $table->string('StudentSchool');
            $table->integer('StudentGrade')->unsigned();
            //Technology Info
            $table->string('DeviceOwnership');
            $table->string('SchoolDevice')->nullable();
            $table->string('ConnectionType');
            //Misc
            $table->longText('IssueDescription');

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
        Schema::dropIfExists('support_ticket');
    }
}
