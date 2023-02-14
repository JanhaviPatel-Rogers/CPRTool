<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Project extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    public $fillable = ['CAKTwoNumber','PlanningPrime','PlanningDirector', 'BudgetCompany', 'BudgetType',
                        'Pending', 'BudgetStartYear', 'CreateAt', 'KTwoNumber', 'ProjectName', 'CapexCategory',
                        'CapexGovernanceCategory', 'Priority', 'RNCCDependency', 'PoiDate', 'PorLaunchDate', 'SponsorCategory',
                        'FiscalBudgetCategory', 'KeyInitiative', 'Interlock', 'Category', 'SubCategory', 'PotentialAdvancements',
                        'ProjectType', 'ExecutiveSponsor', 'TechDeliveryVP', 'BUVPOwner', 'DeliveryOwner', 'Submitter',
                        'Sponsor', 'HighLevelSummary', 'BusinessProblem', 'BusinessSolution', 'CostBreakdown', 'BenefitAndRisk',
                        'FunctionCable', 'FunctionWireless', 'FunctionRogersForBusiness', 'FunctionMedia', 'FunctionRogersSmartHomeMonitoring',
                        'FunctionBank', 'FunctionRogersCommunicationsIncorporated', 'TotalAllocation', 'GreaterTorontoArea', 'Ontario', 'Quebec',
                        'BritishColumbia', 'Alberta', 'MidWest', 'Atlantic', 'TotalRegionalAllocation', 'OpexComment', 'DecomExternalLabourNote',
                        'DecomInternalLabourNote', 'DecomEstimatedSavingsNote', 'DecomNumberOfPlatformNote', 'EngDirector', 'ProjManager', 'PorTotal'
                        ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getCapitalExpense(){
        return $this->hasOne(CapitalExpense::class,'ProjectID','id');
    }
}
