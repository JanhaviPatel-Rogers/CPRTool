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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('CAKTwoNumber')->nullable();
            $table->string('PlanningPrime')->nullable();
            $table->string('PlanningDirector')->nullable();
            $table->string('BudgetType')->nullable();
            $table->string('Pending')->nullable();
            $table->string('BudgetStartYear')->nullable();
            $table->string('CreateAt')->nullable();
            $table->string('KTwoNumber')->nullable();
            $table->string('ProjectName')->nullable();
            $table->string('CapexCategory')->nullable();
            $table->string('CapexGovernanceCategory')->nullable();
            $table->string('Priority')->nullable();
            $table->string('RNCCDependency')->nullable();
            $table->string('PoiDate')->nullable();
            $table->string('PorLaunchDate')->nullable();
            $table->string('SponsorCategory')->nullable();
            $table->string('FiscalBudgetCategory')->nullable();
            $table->string('KeyInitiative')->nullable();
            $table->string('Interlock')->nullable();
            $table->string('Category')->nullable();
            $table->string('SubCategory')->nullable();
            $table->string('PotentialAdvancements')->nullable();
            $table->string('ProjectType')->nullable();
            $table->string('ExecutiveSponsor')->nullable();
            $table->string('TechDeliveryVP')->nullable();
            $table->string('BUVPOwner')->nullable();
            $table->string('DeliveryOwner')->nullable();
            $table->string('Submitter')->nullable();
            $table->string('Sponsor')->nullable();
            $table->string('HighLevelSummary')->nullable();
            $table->string('BusinessProblem')->nullable();
            $table->string('BusinessSolution')->nullable();
            $table->string('CostBreakdown')->nullable();
            $table->string('BenefitAndRisk')->nullable();
            $table->string('FunctionCable')->nullable();
            $table->string('FunctionWireless')->nullable();
            $table->string('FunctionRogersForBusiness')->nullable();
            $table->string('FunctionMedia')->nullable();
            $table->string('FunctionRogersSmartHomeMonitoring')->nullable();
            $table->string('FunctionBank')->nullable();
            $table->string('FunctionRogersCommunicationsIncorporated')->nullable();
            $table->string('TotalAllocation')->nullable();
            $table->string('GreaterTorontoArea')->nullable();
            $table->string('Ontario')->nullable();
            $table->string('Quebec')->nullable();
            $table->string('BritishColumbia')->nullable();
            $table->string('Alberta')->nullable();
            $table->string('MidWest')->nullable();
            $table->string('Atlantic')->nullable();
            $table->string('TotalRegionalAllocation')->nullable();
            $table->string('OpexComment')->nullable();
            $table->string('DecomExternalLabourNote')->nullable();
            $table->string('DecomInternalLabourNote')->nullable();
            $table->string('DecomEstimatedSavingsNote')->nullable();
            $table->string('DecomNumberOfPlatformNote')->nullable();
            $table->string('EngDirector')->nullable();
            $table->string('ProjManager')->nullable();
            $table->string('PorTotal')->nullable();
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
};
