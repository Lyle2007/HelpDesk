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
            $table->id('id');
            //Ticket Details
            $table->text('TicketNumber')->unique();
            $table->string('Status');
            $table->text('Tags');
            $table->integer('AssignedTo');
            //Guardian Info
            $table->string('GuardianFirstName', 50);
            $table->string('GuardianLastName', 50);
            $table->string('GuardianEmail', 50);
            $table->string('GuardianPhone', 50);
            $table->string('GuardianDevice', 50);
            //Student Info
            $table->string('StudentFirstName', 50);
            $table->string('StudentLastName', 50);
            $table->string('StudentSchool', 50);
            $table->integer('StudentGrade');
            //Technology Info
            $table->string('DeviceOwnership', 100);
            $table->string('SchoolDevice', 100);
            $table->string('ConnectionType', 245);
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
