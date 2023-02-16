<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\CapitalExpense;
use App\Models\Decommission;
use App\Models\Employee;
use App\Models\FutureCapitalExpense;
use App\Models\FutureDecommission;
use App\Models\OperationalExpense;
use App\Models\Audit;
use App\Models\Project;

use App\Models\Vendor;
use App\Models\VendorBudget;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();

        return view('projects.index', ['project'=>$project]);
    }

    public function pending(){
        $project = Project::all();

        return view('projects.pending', ['project'=>$project]);
    }

    public function pendingAudit(){
        $project = Project::all();

        return view('projects.pendingAudit', ['project'=>$project]);
    }


    public function create()
    {

        $employees = Employee::all();
        //$this->authorize('create', Form::class);


        return view('projects.create', ['employees' => $employees]);
    }

    public function create2($id)
    {

        $projects = Project::findOrFail($id);

        $vendors = Vendor::all();

        return view('projects.createstep2', ['projects' => $projects,'vendors'=>$vendors]);
    }


    public function store(Request $request)
    {

        $projects= new Project();
        $projects->CAKTwoNumber = request('CAKTwoNumber');
        $projects->PlanningPrime = request('PlanningPrime');
        $projects->PlanningDirector = request('PlanningDirector');
        $projects->BudgetType = request('BudgetType');
        $projects->Pending = request('Pending');
        $projects->BudgetStartYear = request('BudgetStartYear');
        $projects->CreateAt = request('CreateAt');
        $projects->KTwoNumber = request('KTwoNumber');
        $projects->ProjectName = request('ProjectName');
        $projects->CapexCategory = request('CapexCategory');
        $projects->CapexGovernanceCategory = request('CapexGovernanceCategory');
        $projects->Priority = request('Priority');
        $projects->RNCCDependency = request('RNCCDependency');
        $projects->PoiDate = request('PoiDate');
        $projects->PorLaunchDate = request('PorLaunchDate');
        $projects->FiscalBudgetCategory = request('FiscalBudgetCategory');
        $projects->KeyInitiative = request('KeyInitiative');
        $projects->Interlock = request('Interlock');
        $projects->Category = request('Category');
        $projects->SubCategory = request('SubCategory');
        $projects->PotentialAdvancements = request('PotentialAdvancements');
        $projects->ProjectType = request('ProjectType');
        $projects->ExecutiveSponsor = request('ExecutiveSponsor');
        $projects->TechDeliveryVP = request('TechDeliveryVP');
        $projects->BUVPOwner = request('BUVPOwner');
        $projects->DeliveryOwner = request('DeliveryOwner');
        $projects->Submitter = request('Submitter');
        $projects->Sponsor = request('Sponsor');
        $projects->HighLevelSummary = request('HighLevelSummary');
        $projects->BusinessProblem = request('Priority');
        $projects->BusinessSolution = request('BusinessProblem');
        $projects->Costbreakdown = request('Costbreakdown');
        $projects->BenefitAndRisk = request('BenefitAndRisk');
        $projects->FunctionCable = request('FunctionCable');
        $projects->FunctionWireless = request('FunctionWireless');
        $projects->FunctionRogersForBusiness = request('FunctionRogersForBusiness');
        $projects->FunctionMedia = request('FunctionMedia');
        $projects->FunctionRogersSmartHomeMonitoring = request('FunctionRogersSmartHomeMonitoring');
        $projects->FunctionBank = request('FunctionBank');
        $projects->FunctionRogersCommunicationsIncorporated = request('FunctionRogersCommunicationsIncorporated');
        $projects->TotalAllocation = request('TotalAllocation');
        $projects->GreaterTorontoArea = request('GreaterTorontoArea');
        $projects->Ontario = request('Ontario');
        $projects->Quebec = request('Quebec');
        $projects->BritishColumbia = request('BritishColumbia');
        $projects->Alberta = request('Alberta');
        $projects->MidWest = request('MidWest');
        $projects->Atlantic = request('Atlantic');
        $projects->TotalRegionalAllocation = request('TotalRegionalAllocation');
        $projects->OpexComment = request('OpexComment');
        $projects->DecomExternalLabourNote = request('DecomExternalLabourNote');
        $projects->DecomInternalLabourNote = request('DecomInternalLabourNote');
        $projects->DecomEstimatedSavingsNote = request('DecomEstimatedSavingsNote');
        $projects->DecomNumberOfPlatformNote = request('DecomNumberOfPlatformNote');
        $projects->EngDirector = request('EngDirector');
        $projects->ProjManager = request('ProjManager');
        $projects->PorTotal = request('PorTotal');

        $projects->save();
        $project = $projects;



        return redirect()->route('projects.create2', $project);
    }

    public function storeStep2($project)
    {
        $inputs = request()->all();

        for($i =0;  $i < count($inputs['CapitalExpenses']); $i++){
            $capitalexpense = new CapitalExpense();
            $capitalexpense->Year = $inputs['CapitalExpenses'][$i]['Year'];
            $capitalexpense->Month = $inputs['CapitalExpenses'][$i]['Month'];
            $capitalexpense->Hardware = $inputs['CapitalExpenses'][$i]['Hardware'];
            $capitalexpense->HardwareIT = $inputs['CapitalExpenses'][$i]['HardwareIT'];
            $capitalexpense->HardwareGencap = $inputs['CapitalExpenses'][$i]['HardwareGencap'];
            $capitalexpense->Software = $inputs['CapitalExpenses'][$i]['Software'];
            $capitalexpense->SoftwareIT = $inputs['CapitalExpenses'][$i]['SoftwareIT'];
            $capitalexpense->SoftwareGencap = $inputs['CapitalExpenses'][$i]['SoftwareGencap'];
            $capitalexpense->ExternalLabourGencap = $inputs['CapitalExpenses'][$i]['ExternalLabourGencap'];
            $capitalexpense->ExternalLabourNetwork = $inputs['CapitalExpenses'][$i]['ExternalLabourNetwork'];
            $capitalexpense->ExternalLabourIT = $inputs['CapitalExpenses'][$i]['ExternalLabourIT'];
            $capitalexpense->InternalCapitalizedLabourNetwork = $inputs['CapitalExpenses'][$i]['InternalCapitalizedLabourNetwork'];
            $capitalexpense->InternalCapitalizedLabourIT = $inputs['CapitalExpenses'][$i]['InternalCapitalizedLabourIT'];
            $capitalexpense->InternalCapitalizedLabourGencap = $inputs['CapitalExpenses'][$i]['InternalCapitalizedLabourGencap'];
            $capitalexpense->ProjectID=$project;
            $capitalexpense->save();
        }

        for($i =0;  $i < count($inputs['futureCapitalExpenses']); $i++) {
            $futurecapitalexpense = new FutureCapitalExpense();
            $futurecapitalexpense->Hardware = $inputs['futureCapitalExpenses'][$i]['HardwareFE'];
            $futurecapitalexpense->HardwareIT = $inputs['futureCapitalExpenses'][$i]['HardwareITFE'];
            $futurecapitalexpense->HardwareGencap = $inputs['futureCapitalExpenses'][$i]['HardwareGencapFE'];
            $futurecapitalexpense->Software = $inputs['futureCapitalExpenses'][$i]['SoftwareFE'];
            $futurecapitalexpense->SoftwareIT = $inputs['futureCapitalExpenses'][$i]['SoftwareITFE'];
            $futurecapitalexpense->SoftwareGencap = $inputs['futureCapitalExpenses'][$i]['SoftwareGencapFE'];
            $futurecapitalexpense->ExternalLabourGencap = $inputs['futureCapitalExpenses'][$i]['ExternalLabourGencapFE'];
            $futurecapitalexpense->ExternalLabourNetwork = $inputs['futureCapitalExpenses'][$i]['ExternalLabourNetworkFE'];
            $futurecapitalexpense->ExternalLabourIT = $inputs['futureCapitalExpenses'][$i]['ExternalLabourITFE'];
            $futurecapitalexpense->InternalCapitalizedLabourNetwork = $inputs['futureCapitalExpenses'][$i]['InternalCapitalizedLabourNetworkFE'];
            $futurecapitalexpense->InternalCapitalizedLabourIT = $inputs['futureCapitalExpenses'][$i]['InternalCapitalizedLabourITFE'];
            $futurecapitalexpense->InternalCapitalizedLabourGencap = $inputs['futureCapitalExpenses'][$i]['InternalCapitalizedLabourGencapFE'];
            $futurecapitalexpense->ProjectID = $project;
            $futurecapitalexpense->save();
        }

        for($i =0;  $i < count($inputs['VendorBudgets']); $i++) {
            $vendorbudget = new VendorBudget();
//            $vendorbudget->VendorBudgetID = $inputs['VendorBudgets'][$i]['VendorBudgetID'];
            $vendorbudget->Hardware = $inputs['VendorBudgets'][$i]['HardwareVB']; //change bc same as capital expense
            $vendorbudget->Software = $inputs['VendorBudgets'][$i]['SoftwareVB']; //change bc same as capital expense
            $vendorbudget->ExternalLabour = $inputs['VendorBudgets'][$i]['ExternalLabourVB'];
            $vendorbudget->ProjectID = $project;
            $vendorbudget->save();
        }

        for($i =0;  $i < count($inputs['OperationalExpenses']); $i++) {
            $operationalexpense = new OperationalExpense();
//            $operationalexpense->OperationalExpenseID = $inputs['OperationalExpenses'][$i]['OperationalExpenseID'];
            $operationalexpense->Year = $inputs['OperationalExpenses'][$i]['YearOE'];
            $operationalexpense->Budget = $inputs['OperationalExpenses'][$i]['Budget'];
            $operationalexpense->ProjectID = $project;
            $operationalexpense->save();
        }

        for($i =0;  $i < count($inputs['Decomissions']); $i++) {
            $decomission = new Decommission();
//            $decomission->DecommissionID = $inputs['Decomissions'][$i]['DecommissionID'];
            $decomission->Year = $inputs['Decomissions'][$i]['YearDC'];
            $decomission->Quarter = $inputs['Decomissions'][$i]['Quarter'];
            $decomission->InternalLabour = $inputs['Decomissions'][$i]['InternalLabourDC'];
            $decomission->ExternalLabour = $inputs['Decomissions'][$i]['ExternalLabourDC'];
            $decomission->EstimatedSaving = $inputs['Decomissions'][$i]['EstimatedSavingDC'];
            $decomission->NumberOfPlatform = $inputs['Decomissions'][$i]['NumberOfPlatformDC'];
            $decomission->ProjectID = $project;

            $decomission->save();
        }

        for($i =0;  $i < count($inputs['FutureDecomissions']); $i++) {
            $futuredecomission = new FutureDecommission();
//            $futuredecomission->FutureDecommissionID = $inputs['FutureDecomissions'][$i]['FutureDecommissionID'];
            $futuredecomission->Year = request('YearFDC');
            $futuredecomission->InternalLabour = $inputs['FutureDecomissions'][$i]['InternalLabourFDC'];
            $futuredecomission->ExternalLabour = $inputs['FutureDecomissions'][$i]['ExternalLabourFDC'];
            $futuredecomission->EstimatedSavings = $inputs['FutureDecomissions'][$i]['EstimatedSavingsFDC'];
            $futuredecomission->NumberOfPlatform = $inputs['FutureDecomissions'][$i]['NumberOfPlatformFDC'];
            $futuredecomission->ProjectID = $project;

            $futuredecomission->save();
        }

        $benefit = new Benefit();
        $benefit->RevenueIncrease2022 = request('RevenueIncrease2022');
        $benefit->RevenueIncrease2023 = request('RevenueIncrease2023');
        $benefit->RevenueIncrease2024 = request('RevenueIncrease2024');
        $benefit->RevenueProtection2022 = request('RevenueProtection2022');
        $benefit->RevenueProtection2023 = request('RevenueProtection2023');
        $benefit->RevenueProtection2024 = request('RevenueProtection2024');
        $benefit->OtherRevenue2022 = request('OtherRevenue2022');
        $benefit->OtherRevenue2023 = request('OtherRevenue2023');
        $benefit->OtherRevenue2024 = request('OtherRevenue2024');
        $benefit->OpexSavings2022 = request('OpexSavings2022');
        $benefit->OpexSavings2023 = request('OpexSavings2023');
        $benefit->OpexSavings2024 = request('OpexSavings2024');
        $benefit->OpexAvoidance2022 = request('OpexAvoidance2022');
        $benefit->OpexAvoidance2023 = request('OpexAvoidance2023');
        $benefit->OpexAvoidance2024 = request('OpexAvoidance2024');
        $benefit->OtherOpexSavings2022 = request('OtherOpexSavings2022');
        $benefit->OtherOpexSavings2023 = request('OtherOpexSavings2023');
        $benefit->OtherOpexSavings2024 = request('OtherOpexSavings2024');
        $benefit->ProjectID = $project;

        $benefit->save();




        return redirect('projects/index');



    }

    public function update($id, Request $request)
    {
        $projects = Project::find($id);

        $inputs = request()->all();

        $projects->CAKTwoNumber =$request->input('CAKTwoNumber');
        $projects->PlanningPrime =$request->input('PlanningPrime');
        $projects->PlanningDirector =$request->input('PlanningDirector');
        $projects->BudgetType =$request->input('BudgetType');
        $projects->Pending =$request->input('Pending');
        $projects->BudgetStartYear =$request->input('BudgetStartYear');
        $projects->CreateAt =$request->input('CreateAt');
        $projects->KTwoNumber =$request->input('KTwoNumber');
        $projects->ProjectName =$request->input('ProjectName');
        $projects->CapexCategory =$request->input('CapexCategory');
        $projects->CapexGovernanceCategory =$request->input('CapexGovernanceCategory');
        $projects->Priority =$request->input('Priority');
        $projects->RNCCDependency =$request->input('RNCCDependency');
        $projects->PoiDate =$request->input('PoiDate');
        $projects->PorLaunchDate =$request->input('PorLaunchDate');
        $projects->FiscalBudgetCategory =$request->input('FiscalBudgetCategory');
        $projects->KeyInitiative =$request->input('KeyInitiative');
        $projects->Interlock =$request->input('Interlock');
        $projects->Category =$request->input('Category');
        $projects->SubCategory =$request->input('SubCategory');
        $projects->PotentialAdvancements =$request->input('PotentialAdvancements');
        $projects->ProjectType =$request->input('ProjectType');
        $projects->ExecutiveSponsor =$request->input('ExecutiveSponsor');
        $projects->TechDeliveryVP =$request->input('TechDeliveryVP');
        $projects->BUVPOwner =$request->input('BUVPOwner');
        $projects->DeliveryOwner =$request->input('DeliveryOwner');
        $projects->Submitter =$request->input('Submitter');
        $projects->Sponsor =$request->input('Sponsor');
        $projects->HighLevelSummary =$request->input('HighLevelSummary');
        $projects->Priority =$request->input('Priority');
        $projects->BusinessSolution =$request->input('BusinessProblem');
        $projects->Costbreakdown =$request->input('Costbreakdown');
        $projects->BenefitAndRisk =$request->input('BenefitAndRisk');
        $projects->FunctionCable =$request->input('FunctionCable');
        $projects->FunctionWireless =$request->input('FunctionWireless');
        $projects->FunctionRogersForBusiness =$request->input('FunctionRogersForBusiness');
        $projects->FunctionMedia =$request->input('FunctionMedia');
        $projects->FunctionRogersSmartHomeMonitoring =$request->input('FunctionRogersSmartHomeMonitoring');
        $projects->FunctionBank =$request->input('FunctionBank');
        $projects->FunctionRogersCommunicationsIncorporated =$request->input('FunctionRogersCommunicationsIncorporated');
        $projects->TotalAllocation =$request->input('TotalAllocation');
        $projects->GreaterTorontoArea =$request->input('GreaterTorontoArea');
        $projects->Ontario =$request->input('Ontario');
        $projects->Quebec =$request->input('Quebec');
        $projects->BritishColumbia =$request->input('BritishColumbia');
        $projects->Alberta =$request->input('Alberta');
        $projects->MidWest =$request->input('MidWest');
        $projects->Atlantic =$request->input('Atlantic');
        $projects->TotalRegionalAllocation =$request->input('TotalRegionalAllocation');
        $projects->OpexComment =$request->input('OpexComment');
        $projects->DecomExternalLabourNote =$request->input('DecomExternalLabourNote');
        $projects->DecomInternalLabourNote =$request->input('DecomInternalLabourNote');
        $projects->DecomEstimatedSavingsNote =$request->input('DecomEstimatedSavingsNote');
        $projects->DecomNumberOfPlatformNote =$request->input('DecomNumberOfPlatformNote');
        $projects->EngDirector =$request->input('EngDirector');
        $projects->ProjManager =$request->input('ProjManager');
        $projects->PorTotal =$request->input('PorTotal');

        $projects->update();

        $CA=CapitalExpense::where('ProjectID',$id)->get();
        $countOfExistingCA=count(CapitalExpense::where('ProjectID',$id)->get());
        for($i =0;  $i < count($inputs['CapitalExpenses']); $i++) {
            if($i<=$countOfExistingCA-1){
                $CA[$i]->Year=$inputs['CapitalExpenses'][$i]['Year'];
                $CA[$i]->Month=$inputs['CapitalExpenses'][$i]['Month'];
                $CA[$i]->Hardware=$inputs['CapitalExpenses'][$i]['Hardware'];
                $CA[$i]->HardwareIT=$inputs['CapitalExpenses'][$i]['HardwareIT'];
                $CA[$i]->HardwareIT=$inputs['CapitalExpenses'][$i]['HardwareIT'];
                $CA[$i]->HardwareGencap=$inputs['CapitalExpenses'][$i]['HardwareGencap'];
                $CA[$i]->Software=$inputs['CapitalExpenses'][$i]['Software'];
                $CA[$i]->SoftwareIT=$inputs['CapitalExpenses'][$i]['SoftwareIT'];
                $CA[$i]->SoftwareGencap=$inputs['CapitalExpenses'][$i]['SoftwareGencap'];
                $CA[$i]->ExternalLabourGencap=$inputs['CapitalExpenses'][$i]['ExternalLabourGencap'];
                $CA[$i]->ExternalLabourNetwork=$inputs['CapitalExpenses'][$i]['ExternalLabourNetwork'];
                $CA[$i]->ExternalLabourIT=$inputs['CapitalExpenses'][$i]['ExternalLabourIT'];
                $CA[$i]->InternalCapitalizedLabourNetwork=$inputs['CapitalExpenses'][$i]['InternalCapitalizedLabourNetwork'];
                $CA[$i]->InternalCapitalizedLabourIT=$inputs['CapitalExpenses'][$i]['InternalCapitalizedLabourIT'];
                $CA[$i]->InternalCapitalizedLabourGencap=$inputs['CapitalExpenses'][$i]['InternalCapitalizedLabourGencap'];

                $CA[$i]->ProjectID=$id;
                $CA[$i]->update();

            }else{
                $capitalexpense = new CapitalExpense();
                $capitalexpense->Year = $inputs['CapitalExpenses'][$i]['Year'];
                $capitalexpense->Month = $inputs['CapitalExpenses'][$i]['Month'];
                $capitalexpense->Hardware = $inputs['CapitalExpenses'][$i]['Hardware'];
                $capitalexpense->HardwareIT = $inputs['CapitalExpenses'][$i]['HardwareIT'];
                $capitalexpense->HardwareGencap = $inputs['CapitalExpenses'][$i]['HardwareIT'];
                $capitalexpense->Software = $inputs['CapitalExpenses'][$i]['Software'];
                $capitalexpense->SoftwareIT = $inputs['CapitalExpenses'][$i]['SoftwareIT'];
                $capitalexpense->SoftwareGencap = $inputs['CapitalExpenses'][$i]['SoftwareGencap'];
                $capitalexpense->ExternalLabourGencap = $inputs['CapitalExpenses'][$i]['ExternalLabourGencap'];
                $capitalexpense->ExternalLabourNetwork = $inputs['CapitalExpenses'][$i]['ExternalLabourNetwork'];
                $capitalexpense->ExternalLabourIT = $inputs['CapitalExpenses'][$i]['ExternalLabourIT'];
                $capitalexpense->InternalCapitalizedLabourNetwork = $inputs['CapitalExpenses'][$i]['InternalCapitalizedLabourNetwork'];
                $capitalexpense->InternalCapitalizedLabourIT = $inputs['CapitalExpenses'][$i]['InternalCapitalizedLabourIT'];
                $capitalexpense->InternalCapitalizedLabourGencap = $inputs['CapitalExpenses'][$i]['InternalCapitalizedLabourGencap'];

                $capitalexpense->ProjectID=$id;
                $capitalexpense->save();
            }

        }

        $FE=FutureCapitalExpense::where('ProjectID',$id)->get();
        $countOfExistingFE=count(FutureCapitalExpense::where('ProjectID',$id)->get());
        for($i =0;  $i < count($inputs['FutureCapitalExpenses']); $i++) {
            if($i<=$countOfExistingFE-1){
                $FE[$i]->Year=$inputs['FutureCapitalExpenses'][$i]['Year'];
                $FE[$i]->Hardware=$inputs['FutureCapitalExpenses'][$i]['Hardware'];
                $FE[$i]->HardwareIT=$inputs['FutureCapitalExpenses'][$i]['HardwareIT'];
                $FE[$i]->HardwareGencap=$inputs['FutureCapitalExpenses'][$i]['HardwareGencap'];
                $FE[$i]->Software=$inputs['FutureCapitalExpenses'][$i]['Software'];
                $FE[$i]->SoftwareIT=$inputs['FutureCapitalExpenses'][$i]['SoftwareIT'];
                $FE[$i]->SoftwareGencap=$inputs['FutureCapitalExpenses'][$i]['SoftwareGencap'];
                $FE[$i]->ExternalLabourNetwork=$inputs['FutureCapitalExpenses'][$i]['ExternalLabourNetwork'];
                $FE[$i]->ExternalLabourIT=$inputs['FutureCapitalExpenses'][$i]['ExternalLabourIT'];
                $FE[$i]->ExternalLabourGencap=$inputs['FutureCapitalExpenses'][$i]['ExternalLabourGencap'];
                $FE[$i]->InternalCapitalizedLabourNetwork=$inputs['FutureCapitalExpenses'][$i]['InternalCapitalizedLabourNetwork'];
                $FE[$i]->InternalCapitalizedLabourIT=$inputs['FutureCapitalExpenses'][$i]['InternalCapitalizedLabourIT'];
                $FE[$i]->InternalCapitalizedLabourGencap=$inputs['FutureCapitalExpenses'][$i]['InternalCapitalizedLabourGencap'];

                $FE[$i]->ProjectID=$id;
                $FE[$i]->update();

            }else{
                $futurecapitalexpense = new FutureCapitalExpense();
                $futurecapitalexpense->Year=$inputs['FutureCapitalExpenses'][$i]['Year'];
                $futurecapitalexpense->Hardware = $inputs['FutureCapitalExpenses'][$i]['Hardware'];
                $futurecapitalexpense->HardwareIT = $inputs['FutureCapitalExpenses'][$i]['HardwareIT'];
                $futurecapitalexpense->HardwareGencap = $inputs['FutureCapitalExpenses'][$i]['HardwareGencap'];
                $futurecapitalexpense->Software = $inputs['FutureCapitalExpenses'][$i]['Software'];
                $futurecapitalexpense->SoftwareIT = $inputs['FutureCapitalExpenses'][$i]['SoftwareIT'];
                $futurecapitalexpense->SoftwareGencap = $inputs['FutureCapitalExpenses'][$i]['SoftwareGencap'];
                $futurecapitalexpense->ExternalLabourNetwork = $inputs['FutureCapitalExpenses'][$i]['ExternalLabourNetwork'];
                $futurecapitalexpense->ExternalLabourIT = $inputs['FutureCapitalExpenses'][$i]['ExternalLabourIT'];
                $futurecapitalexpense->ExternalLabourGencap = $inputs['FutureCapitalExpenses'][$i]['ExternalLabourGencap'];
                $futurecapitalexpense->InternalCapitalizedLabourNetwork = $inputs['FutureCapitalExpenses'][$i]['InternalCapitalizedLabourNetwork'];
                $futurecapitalexpense->InternalCapitalizedLabourIT = $inputs['FutureCapitalExpenses'][$i]['InternalCapitalizedLabourIT'];
                $futurecapitalexpense->InternalCapitalizedLabourGencap = $inputs['FutureCapitalExpenses'][$i]['InternalCapitalizedLabourGencap'];

                $futurecapitalexpense->ProjectID=$id;
                $futurecapitalexpense->save();
            }
        }

        $OE=OperationalExpense::where('ProjectID',$id)->get();
        $countOfExistingOE=count(OperationalExpense::where('ProjectID',$id)->get());
        for($i =0;  $i < count($inputs['OperationalExpenses']); $i++) {
            if($i<=$countOfExistingOE-1){
                $OE[$i]->Year=$inputs['OperationalExpenses'][$i]['Year'];
                $OE[$i]->Budget=$inputs['OperationalExpenses'][$i]['Budget'];

                $OE[$i]->ProjectID=$id;
                $OE[$i]->update();

            }else{
                $operationalexpense = new OperationalExpense();
                $operationalexpense->Year = $inputs['OperationalExpenses'][$i]['Year'];
                $operationalexpense->Budget = $inputs['OperationalExpenses'][$i]['Budget'];


                $operationalexpense->ProjectID=$id;
                $operationalexpense->save();
            }
        }

        $VB=VendorBudget::where('ProjectID',$id)->get();
        $countOfExistingVB=count(VendorBudget::where('ProjectID',$id)->get());
        for($i =0;  $i < count($inputs['VendorBudgets']); $i++) {
            if($i<=$countOfExistingVB-1){
                $VB[$i]->Hardware=$inputs['VendorBudgets'][$i]['Hardware'];
                $VB[$i]->Software=$inputs['VendorBudgets'][$i]['Software'];
                $VB[$i]->ExternalLabour=$inputs['VendorBudgets'][$i]['ExternalLabour'];

                $VB[$i]->ProjectID=$id;
                $VB[$i]->update();

            }else{
                $vendorbudget = new OperationalExpense();
                $vendorbudget->Hardware = $inputs['VendorBudgets'][$i]['Hardware'];
                $vendorbudget->Software = $inputs['VendorBudgets'][$i]['Software'];
                $vendorbudget->ExternalLabour = $inputs['VendorBudgets'][$i]['ExternalLabour'];



                $vendorbudget->ProjectID=$id;
                $vendorbudget->save();
            }
        }

        $DC=Decommission::where('ProjectID',$id)->get();
        $countOfExistingDC=count(Decommission::where('ProjectID',$id)->get());
        for($i =0;  $i < count($inputs['Decommissions']); $i++) {
            if($i<=$countOfExistingDC-1){
                $DC[$i]->Year=$inputs['Decommissions'][$i]['Year'];
                $DC[$i]->Quarter=$inputs['Decommissions'][$i]['Quarter'];
                $DC[$i]->InternalLabour=$inputs['Decommissions'][$i]['InternalLabour'];
                $DC[$i]->ExternalLabour=$inputs['Decommissions'][$i]['ExternalLabour'];
                $DC[$i]->EstimatedSaving=$inputs['Decommissions'][$i]['EstimatedSaving'];
                $DC[$i]->NumberOfPlatform=$inputs['Decommissions'][$i]['NumberOfPlatform'];

                $DC[$i]->ProjectID=$id;
                $DC[$i]->update();

            }else{
                $decommission = new OperationalExpense();
                $decommission->Year = $inputs['Decommissions'][$i]['Year'];
                $decommission->Quarter = $inputs['Decommissions'][$i]['Quarter'];
                $decommission->InternalLabour = $inputs['Decommissions'][$i]['InternalLabour'];
                $decommission->ExternalLabour = $inputs['Decommissions'][$i]['ExternalLabour'];
                $decommission->EstimatedSaving = $inputs['Decommissions'][$i]['EstimatedSaving'];
                $decommission->NumberOfPlatform = $inputs['Decommissions'][$i]['NumberOfPlatform'];

                $decommission->ProjectID=$id;
                $decommission->save();
            }
        }

        $FDC=FutureDecommission::where('ProjectID',$id)->get();
        $countOfExistinFDC=count(FutureDecommission::where('ProjectID',$id)->get());
        for($i =0;  $i < count($inputs['FutureDecommissions']); $i++) {
            if($i<=$countOfExistingDC-1){
                $FDC[$i]->Year=$inputs['FutureDecommissions'][$i]['Year'];
                $FDC[$i]->InternalLabour=$inputs['FutureDecommissions'][$i]['InternalLabour'];
                $FDC[$i]->ExternalLabour=$inputs['FutureDecommissions'][$i]['ExternalLabour'];
                $FDC[$i]->EstimatedSavings=$inputs['FutureDecommissions'][$i]['EstimatedSavings'];
                $FDC[$i]->NumberOfPlatform=$inputs['FutureDecommissions'][$i]['NumberOfPlatform'];

                $FDC[$i]->ProjectID=$id;
                $FDC[$i]->update();

            }else{
                $futuredecommission = new OperationalExpense();
                $futuredecommission->Year = $inputs['FutureDecommissions'][$i]['Year'];
                $futuredecommission->InternalLabour = $inputs['FutureDecommissions'][$i]['InternalLabour'];
                $futuredecommission->ExternalLabour = $inputs['FutureDecommissions'][$i]['ExternalLabour'];
                $futuredecommission->EstimatedSavings = $inputs['FutureDecommissions'][$i]['EstimatedSavings'];
                $futuredecommission->NumberOfPlatform = $inputs['FutureDecommissions'][$i]['NumberOfPlatform'];

                $futuredecommission->ProjectID=$id;
                $futuredecommission->save();
            }
        }

        $benefit = new Benefit();
        $benefit->RevenueIncrease2022 =$request->input('RevenueIncrease2022');
        $benefit->RevenueIncrease2023 =$request->input('RevenueIncrease2023');
        $benefit->RevenueIncrease2024 =$request->input('RevenueIncrease2024');
        $benefit->RevenueProtection2022 =$request->input('RevenueProtection2022');
        $benefit->RevenueProtection2023 =$request->input('RevenueProtection2023');
        $benefit->RevenueProtection2024 =$request->input('RevenueProtection2024');
        $benefit->OtherRevenue2022 =$request->input('OtherRevenue2022');
        $benefit->OtherRevenue2023 =$request->input('OtherRevenue2023');
        $benefit->OtherRevenue2024 =$request->input('OtherRevenue2024');
        $benefit->OpexSavings2022 =$request->input('OpexSavings2022');
        $benefit->OpexSavings2023 =$request->input('OpexSavings2023');
        $benefit->OpexSavings2024 =$request->input('OpexSavings2024');
        $benefit->OpexAvoidance2022 =$request->input('OpexAvoidance2022');
        $benefit->OpexAvoidance2023 =$request->input('OpexAvoidance2023');
        $benefit->OpexAvoidance2024 =$request->input('OpexAvoidance2024');
        $benefit->OtherOpexSavings2022 =$request->input('OtherOpexSavings2022');
        $benefit->OtherOpexSavings2023 =$request->input('OtherOpexSavings2023');
        $benefit->OtherOpexSavings2024 =$request->input('OtherOpexSavings2024');

        $benefit->update();

        return redirect()->route('projects.index');

    }

    public function edit($id)
    {

        $projects = Project::find($id);
        //dd($projects->id);

        $vendors = Vendor::all();

        $capitalExpenses = CapitalExpense::all()->where('ProjectID', $projects->id);
        $futureCapitalExpenses = FutureCapitalExpense::all()->where('ProjectID', $projects->id);
        $operationalExpenses = OperationalExpense::all()->where('ProjectID', $projects->id);
        $vendorBudgets = VendorBudget::all()->where('ProjectID', $projects->id);
        $decomissions = Decommission::all()->where('ProjectID', $projects->id);
        $futuredecomissions = FutureDecommission::all()->where('ProjectID', $projects->id);
        $benefits = Benefit::all()->where('ProjectID', $projects->id);




        return view('projects.edit', ['projects'=>$projects, 'capitalExpenses'=>$capitalExpenses,
            'futureCapitalExpenses'=>$futureCapitalExpenses, 'operationalExpenses'=>$operationalExpenses,
            'vendorBudgets'=>$vendorBudgets,'decomissions'=>$decomissions, 'futuredecomissions'=>$futuredecomissions,
            'benefits'=>$benefits,'vendors'=>$vendors]);

    }

    public function delete($id)
    {
        $projects = Project::find($id);

        $capitalExpenses = CapitalExpense::all()->where('ProjectID', $projects->id);
        $futureCapitalExpenses = FutureCapitalExpense::all()->where('ProjectID', $projects->id);
        $operationalExpenses = OperationalExpense::all()->where('ProjectID', $projects->id);
        $vendorBudgets = VendorBudget::all()->where('ProjectID', $projects->id);
        $decomissions = Decommission::all()->where('ProjectID', $projects->id);
        $futuredecomissions = FutureDecommission::all()->where('ProjectID', $projects->id);
        $benefits = Benefit::all()->where('ProjectID', $projects->id);


        return view('projects.delete', ['projects'=>$projects, 'capitalExpenses'=>$capitalExpenses,
            'futureCapitalExpenses'=>$futureCapitalExpenses, 'operationalExpenses'=>$operationalExpenses,
            'vendorBudgets'=>$vendorBudgets,'decomissions'=>$decomissions, 'futuredecomissions'=>$futuredecomissions,
            'benefits'=>$benefits]);
    }

    public function details($id)
    {
        $projects = Project::find($id);

        $capitalExpenses = CapitalExpense::all()->where('ProjectID', $projects->id);
        $CEtotalHardware = CapitalExpense::all()->where('ProjectID', $projects->id)->sum('Hardware');
        $futureCapitalExpenses = FutureCapitalExpense::all()->where('ProjectID', $projects->id);
        $operationalExpenses = OperationalExpense::all()->where('ProjectID', $projects->id);
        $vendorBudgets = VendorBudget::all()->where('ProjectID', $projects->id);
        $decomissions = Decommission::all()->where('ProjectID', $projects->id);
        $futuredecomissions = FutureDecommission::all()->where('ProjectID', $projects->id);
        $benefits = Benefit::all()->where('ProjectID', $projects->id);

        return view('projects.details', ['projects'=>$projects, 'capitalExpenses'=>$capitalExpenses,
            'futureCapitalExpenses'=>$futureCapitalExpenses, 'operationalExpenses'=>$operationalExpenses,
            'vendorBudgets'=>$vendorBudgets,'decomissions'=>$decomissions, 'futuredecomissions'=>$futuredecomissions,
            'benefits'=>$benefits, 'CEtotalHardware'=>$CEtotalHardware]);
    }

    public function remove($id,Request $request)
    {
        $projects = Project::find($id);
        $projects->delete();

        $capitalexpense = new CapitalExpense();
        $capitalexpense->Hardware =$request->input('Hardware');
        $capitalexpense->HardwareIT =$request->input('HardwareIT');
        $capitalexpense->HardwareGencap =$request->input('HardwareGencap');
        $capitalexpense->Software =$request->input('Software');
        $capitalexpense->SoftwareIT =$request->input('SoftwareIT');
        $capitalexpense->SoftwareGencap =$request->input('SoftwareGencap');
        $capitalexpense->ExternalLabourGencap =$request->input('ExternalLabourGencap');
        $capitalexpense->ExternalLabourNetwork =$request->input('ExternalLabourNetwork');
        $capitalexpense->ExternalLabourIT =$request->input('ExternalLabourIT');
        $capitalexpense->InternalCapitalizedLabourNetwork =$request->input('InternalCapitalizedLabourNetwork');
        $capitalexpense->InternalCapitalizedLabourIT =$request->input('InternalCapitalizedLabourIT');
        $capitalexpense->InternalCapitalizedLabourGencap =$request->input('InternalCapitalizedLabourGencap');

        $capitalexpense->delete();

        $futurecapitalexpense = new FutureCapitalExpense();
        $futurecapitalexpense->Hardware =$request->input('Year');
        $futurecapitalexpense->Hardware =$request->input('Hardware');
        $futurecapitalexpense->HardwareIT =$request->input('HardwareIT');
        $futurecapitalexpense->HardwareGencap =$request->input('HardwareGencap');
        $futurecapitalexpense->Software =$request->input('Software');
        $futurecapitalexpense->SoftwareIT =$request->input('SoftwareIT');
        $futurecapitalexpense->SoftwareGencap =$request->input('SoftwareGencap');
        $futurecapitalexpense->ExternalLabourGencap =$request->input('ExternalLabourGencap');
        $futurecapitalexpense->ExternalLabourNetwork =$request->input('ExternalLabourNetwork');
        $futurecapitalexpense->ExternalLabourIT =$request->input('ExternalLabourIT');
        $futurecapitalexpense->InternalCapitalizedLabourNetwork =$request->input('InternalCapitalizedLabourNetwork');
        $futurecapitalexpense->InternalCapitalizedLabourIT =$request->input('InternalCapitalizedLabourIT');
        $futurecapitalexpense->InternalCapitalizedLabourGencap =$request->input('InternalCapitalizedLabourGencap');

        $futurecapitalexpense->delete();

        $operationalexpense = new OperationalExpense();
        $operationalexpense->Year =$request->input('Year');
        $operationalexpense->Budget =$request->input('Budget');

        $operationalexpense->delete();

        $vendorBudget = new VendorBudget();
        $vendorBudget->Hardware =$request->input('Hardware');
        $vendorBudget->Software =$request->input('Software');
        $vendorBudget->ExternalLabour =$request->input('ExternalLabour');

        $vendorBudget->delete();

        $decomission = new Decommission();
        $decomission->Year =$request->input('Year');
        $decomission->Quarter =$request->input('Quarter');
        $decomission->InternalLabour =$request->input('InternalLabour');
        $decomission->ExternalLabour =$request->input('ExternalLabour');
        $decomission->EstimatedSaving =$request->input('EstimatedSaving');
        $decomission->NumberOfPlatform =$request->input('NumberOfPlatform');

        $decomission->delete();

        $futuredecomission = new FutureDecommission();
        $futuredecomission->FutureDecommissionID =$request->input('FutureDecommissionID');
        $futuredecomission->Year =$request->input('YearFDC');
        $futuredecomission->InternalLabour =$request->input('InternalLabour');
        $futuredecomission->ExternalLabour =$request->input('ExternalLabour');
        $futuredecomission->EstimatedSaving =$request->input('EstimatedSaving');
        $futuredecomission->NumberOfPlatform =$request->input('NumberOfPlatform');

        $decomission->delete();

        $benefit = new Benefit();
        $benefit->RevenueIncrease2022 =$request->input('RevenueIncrease2022');
        $benefit->RevenueIncrease2023 =$request->input('RevenueIncrease2023');
        $benefit->RevenueIncrease2024 =$request->input('RevenueIncrease2024');
        $benefit->RevenueProtection2022 =$request->input('RevenueProtection2022');
        $benefit->RevenueProtection2023 =$request->input('RevenueProtection2023');
        $benefit->RevenueProtection2024 =$request->input('RevenueProtection2024');
        $benefit->OtherRevenue2022 =$request->input('OtherRevenue2022');
        $benefit->OtherRevenue2023 =$request->input('OtherRevenue2023');
        $benefit->OtherRevenue2024 =$request->input('OtherRevenue2024');
        $benefit->OpexSavings2022 =$request->input('OpexSavings2022');
        $benefit->OpexSavings2023 =$request->input('OpexSavings2023');
        $benefit->OpexSavings2024 =$request->input('OpexSavings2024');
        $benefit->OpexAvoidance2022 =$request->input('OpexAvoidance2022');
        $benefit->OpexAvoidance2023 =$request->input('OpexAvoidance2023');
        $benefit->OpexAvoidance2024 =$request->input('OpexAvoidance2024');
        $benefit->OtherOpexSavings2022 =$request->input('OtherOpexSavings2022');
        $benefit->OtherOpexSavings2023 =$request->input('OtherOpexSavings2023');
        $benefit->OtherOpexSavings2024 =$request->input('OtherOpexSavings2024');

        $benefit->delete();

        return redirect()->route('projects.index');
    }
}
