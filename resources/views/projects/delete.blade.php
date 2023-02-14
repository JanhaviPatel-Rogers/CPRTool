<x-_AdminLayout>
    @section('content')


        <h1>Delete</h1>
        <p class="text-danger"></p>
        <form  method="get" action="{{route('projects.remove', $projects->id)}}" enctype='multipart/form-data' class="fixed">

        <form class="card">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Project Information</h3>
            <div class="card-body">
                @if(auth()->user()->userHasRole('admin'))
                <div class="row">
                    <div class="col">
                        <label class="control-label font-weight-bold">
                            Priority
                        </label>
                        <p>
                            {{$projects->Priority}}
                        </p>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col">
                        <label class="control-label font-weight-bold">
                            RNCCDependency
                        </label>
                        <p>
                            {{$projects->RNCCDependency}}
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                BudgetStartYear
                            </label>
                            <p>
                                {{$projects->BudgetStartYear}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                CapexCategory
                            </label>
                            <p>
                                {{$projects->CapexCategory}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                KTwoNumber
                            </label>
                            <p>
                                {{$projects->KTwoNumber}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                CapexGovernanceCategory
                            </label>
                            <p>
                                {{$projects->CapexGovernanceCategory}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Name
                            </label>
                            <p>
                                {{$projects->ProjectName}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                PoiDate
                            </label>
                            <p>
                                {{$projects->PoiDate}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Total CA Value
                            </label>
                            <p>
                                Sum(x => x.Total))
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                PorLaunchDate
                            </label>
                            <p>
                                {{$projects->PorLaunchDate}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Capital Request
                            </label>
                            <p>

                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                ProjectEndDate
                            </label>
                            <p>
{{--                                {{$projects->Priority}}--}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Status
                            </label>
                            <p>
                                {{$projects->Status}}

                            </p>
                        </div>
                        @if(auth()->user()->userHasRole('admin'))
                            <div class="col">
                                <label class="control-label font-weight-bold">
                                    SponsorCategory
                                </label>
                                <p>
                                    {{$projects->SponsorCategory}}
                                </p>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                CreateAt
                            </label>
                            <p>
                                {{$projects->created_at}}
                            </p>
                        </div>
                        @if(auth()->user()->userHasRole('admin'))
                            <div class="col">
                                <label class="control-label font-weight-bold">
                                    FiscalBudgetCategory
                                </label>
                                <p>
                                    {{$projects->FiscalBudgetCategory}}
                                </p>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                HighLevelSummary
                            </label>
                            <p>
                                {{$projects->HighLevelSummary}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                KeyInitiave
                            </label>
                            <p>
                                {{$projects->KeyInitiave}}

                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Category
                            </label>
                            <p>
                                {{$projects->Category}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Interlock
                            </label>
                            <p>
                                {{$projects->Interlock}}

                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                SubCategory
                            </label>
                            <p>
                                {{$projects->SubCategory}}

                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                PotentialAdvancements
                            </label>
                            <p>
                                {{$projects->PotentialAdvancements}}

                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                ProjectType
                            </label>
                            <p>
                                {{$projects->ProjectType}}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Requestor Details</h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                ExecutiveSponsor
                            </label>
                            <p>
                                {{$projects->ExecutiveSponsor}}

                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Sponsor
                            </label>
                            <p>
                                {{$projects->Sponsor}}

                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                TechDeliveryVp
                            </label>
                            <p>
                                {{$projects->TechDeliveryVp}}

                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                DeliveryOwner
                            </label>
                            <p>
                                {{$projects->DeliveryOwner}}

                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                BUVPOwner
                            </label>
                            <p>
                                {{$projects->BUVPOwner}}

                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Submitter
                            </label>
                            <p>
                                {{$projects->Submitter}}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Project Details </h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                BusinessProblem
                            </label>
                            <p>
                                {{$projects->BusinessProblem}}

                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                BusinessSolution
                            </label>
                            <p>
                                {{$projects->BusinessSolution}}

                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                CostBreakdown
                            </label>
                            <p>
                                {{$projects->CostBreakdown}}

                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                BenefitAndRisk
                            </label>
                            <p>
                                {{$projects->BenefitAndRisk}}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Spend Profile</h3>
                <div class="card-body" style="overflow-x: scroll">
                    <div>
                        <table class="table table-bordered table-responsive-md text-center">
                            <thead>
                            <tr>
                                <th>
                                </th>
                                <th>Hardware
                                </th>
                                <th>HardwareIT
                                </th>
                                <th>HardwareGencap
                                </th>
                                <th>
                                    Software
                                </th>
                                <th>
                                    SoftwareIT
                                </th>
                                <th>
                                    SoftwareGencap
                                </th>
                                <th>
                                    ProfessionalServices
                                </th>
                                <th>
                                    ThirdParty
                                </th>
                                <th>
                                    ExternalLabourGencap
                                </th>
                                <th>
                                    InternalCapitalizedLabourNetwork
                                </th>
                                <th>
                                    InternalCapitalizedLabourIT
                                </th>
                                <th>
                                    InternalCapitalizedLabourGencap
                                </th>
                                <th>
                                    Total
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($capitalExpenses as $capitalExpense)
                                <tr>
                                    <th>
                                        {{$capitalExpense->Year}}-{{$capitalExpense->Month}}
                                    </th>
                                    <td>
                                        {{$capitalExpense->Hardware}}
                                    </td>
                                    <td>
                                        {{$capitalExpense->HardwareIT}}
                                    </td>
                                    <td>
                                        {{$capitalExpense->HardwareGencap}}
                                    </td>
                                    <td>
                                        {{$capitalExpense->Software}}
                                    </td>
                                    <td>
                                        {{$capitalExpense->SoftwareIT}}
                                    </td>
                                    <td>
                                        {{$capitalExpense->SoftwareGencap}}
                                    </td>
                                    <td>
                                        {{$capitalExpense->ExternalLabourNetwork}}
                                    </td>
                                    <td>
                                        {{$capitalExpense->ExternalLabourIT}}
                                    </td>
                                    <td>

                                        {{$capitalExpense->ExternalLabourGencap}}
                                    </td>
                                    <td>
                                        {{$capitalExpense->InternalCapitalizedLabourNetwork}}
                                    </td>
                                    <td>
                                        {{$capitalExpense->InternalCapitalizedLabourIT}}
                                    </td>
                                    <td>
                                        {{$capitalExpense->InternalCapitalizedLabourGencap}}
                                    </td>
                                    <td>
                                        Total
                                    </td>
                                </tr>
{{--                                }--}}
                                <tr class="table-active">
                                    <th scope="row">
                                        Total
                                    </th>
                                    <td>
                                        Sum(x => x.Hardware))
                                    </td>
                                    <td>
                                        Sum(x => x.HardwareIT))
                                    </td>
                                    <td>
                                        Sum(x => x.HardwareGencap))
                                    </td>
                                    <td>
                                        Sum(x => x.Software))
                                    </td>
                                    <td>
                                        Sum(x => x.SoftwareIT))
                                    </td>
                                    <td>
                                        Sum(x => x.SoftwareGencap))
                                    </td>
                                    <td>
                                        Sum(x => x.ProfessionalServices))
                                    </td>
                                    <td>
                                        Sum(x => x.ThirdParty))
                                    </td>
                                    <td>
                                        Sum(x => x.ExternalLabourGencap))
                                    </td>
                                    <td>
                                        Sum(x => x.InternalCapitalizedLabourNetwork))
                                    </td>
                                    <td>
                                        Sum(x => x.InternalCapitalizedLabourIT))
                                    </td>
                                    <td>
                                        Sum(x => x.InternalCapitalizedLabourGencap))
                                    </td>
                                    <td>
                                        Sum(x => x.Total))
                                    </td>
                                </tr>
{{--                                @foreach (var item in Model.FutureCaptitalExpenses)--}}
{{--                                    {--}}
                                    <tr>
                                        <th>
                                            Year)
                                        </th>
                                        <td>
                                            Hardware)
                                        </td>
                                        <td>
                                            HardwareIT)
                                        </td>
                                        <td>
                                            HardwareGencap)
                                        </td>
                                        <td>
                                            Software)
                                        </td>
                                        <td>
                                            SoftwareIT)
                                        </td>
                                        <td>
                                            SoftwareGencap)
                                        </td>
                                        <td>
                                            ProfessionalServices)
                                        </td>
                                        <td>
                                            ThirdParty)
                                        </td>
                                        <td>
                                            ExternalLabourGencap)
                                        </td>
                                        <td>
                                            InternalCapitalizedLabourNetwork)
                                        </td>
                                        <td>
                                            InternalCapitalizedLabourIT)
                                        </td>
                                        <td>
                                            InternalCapitalizedLabourGencap)
                                        </td>
                                        <td>
                                            Total)
                                        </td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Opex Drag</h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-responsive-md text-center">
                                <thead>
                                <tr>
                                    <th>
                                        Year
                                    </th>
                                    <th>
                                        Budget
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($operationalExpenses as $operationalExpense)
                                    <tr>
                                        <td>
                                            {{$operationalExpense->Year}}
                                        </td>
                                        <td>
                                            {{$operationalExpense->Budget}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                OpexComment
                            </label>
                            <p>
                                {{$projects->OpexComment}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Allocation</h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                FunctionCable
                            </label>
                            <p>
                                {{$projects->FunctionCable}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                FunctionWireless
                            </label>
                            <p>
                                {{$projects->FunctionWireless}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                FunctionRogersForBusiness
                            </label>
                            <p>
                                {{$projects->FunctionRogersForBusiness}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                FunctionMedia
                            </label>
                            <p>
                                {{$projects->FunctionMedia}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                FunctionRogersSmartHomeMonitoring
                            </label>
                            <p>
                                {{$projects->FunctionRogersSmartHomeMonitoring}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                FunctionBank
                            </label>
                            <p>
                                {{$projects->FunctionBank}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                FunctionRogersCommunicationsIncorporated
                            </label>
                            <p>
                                {{$projects->FunctionRogersCommunicationsIncorporated}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                TotalAllocation
                            </label>
                            <p>
                                TotalAllocation
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Regional Allocation</h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                GreaterTorontoArea
                            </label>
                            <p>
                                {{$projects->GreaterTorontoArea}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Ontario
                            </label>
                            <p>
                                {{$projects->Ontario}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Quebec
                            </label>
                            <p>
                                {{$projects->Quebec}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                BritishColumbia
                            </label>
                            <p>
                                {{$projects->BritishColumbia}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Alberta
                            </label>
                            <p>
                                {{$projects->Alberta}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                MidWest
                            </label>
                            <p>
                                {{$projects->MidWest}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Atlantic
                            </label>
                            <p>
                                {{$projects->Atlantic}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                TotalRegionalAllocation
                            </label>
                            <p>
                                TotalRegionalAllocation
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Vendor Breakdown</h3>
                <div class="card-body">
                    <div id="vendor-table">
                        <table class="table table-bordered table-responsive-md text-center">
                            <thead>
                            <tr>
                                <th>
                                    Vendor
                                </th>
                                <th>
                                    Hardware
                                </th>
                                <th>
                                    Software
                                </th>
                                <th>
                                    ExternalLabour
                                </th>
                                <th>
                                    Total
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vendorBudgets as $vendorBudget)
                                <tr>
                                    <td>
                                        (Vendor.Name)
                                    </td>
                                    <td>
                                        {{$vendorBudget->Hardware}}
                                    </td>
                                    <td>
                                        {{$vendorBudget->Software}}
                                    </td>
                                    <td>
                                        {{$vendorBudget->ExternalLabour}}
                                    </td>
                                    <td>
                                        Total
                                    </td>
                                </tr>
                            @endforeach
                                <tr class="table-active">
                                    <th scope="row">
                                        Total
                                    </th>
                                    <td>
                                        Hardware
                                    </td>
                                    <td>
                                        Software
                                    </td>
                                    <td>
                                        ExternalLabour
                                    </td>
                                    <td>
                                        Total
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Decomm Details</h3>
                <div class="card-body">
                    <div id="decom-table">
                        <table class="table table-bordered table-responsive-md text-center">
                            <thead>
                            <tr>
                                <th>
                                </th>
                                <th>
                                    InternalLabour
                                </th>
                                <th>
                                    ExternalLabour
                                </th>
                                <th>
                                    EstimatedSaving
                                </th>
                                <th>
                                    NumberOfPlatform
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($decomissions as $decomission)
{{--                                {--}}
                                <tr>
                                    <th>
                                        {{$decomission->Year}}-{{$decomission->Quarter}}
                                    </th>
                                    <td>
                                        {{$decomission->InternalLabour}}
                                    </td>
                                    <td>
                                        {{$decomission->ExternalLabour}}
                                    </td>
                                    <td>
                                        {{$decomission->EstimatedSaving}}
                                    </td>
                                    <td>
                                        {{$decomission->NumberOfPlatform}}
                                    </td>
                                </tr>
{{--                                }--}}
                                <tr>
                                    <th scope="row">
                                        Total
                                    </th>
                                    <td>
                                        Sum(x => x.InternalLabour))
                                    </td>
                                    <td>
                                        Sum(x => x.ExternalLabour))
                                    </td>
                                    <td>
                                        Sum(x => x.EstimatedSaving))
                                    </td>
                                    <td>
                                        Sum(x => x.NumberOfPlatform)
                                    </td>
                                </tr>
{{--                                @foreach (var item in Model.FutureDecommissions)--}}
{{--                                    {--}}
                                    <tr>
                                        <th scope="row">
                                            Year
                                        </th>
                                        <td>
                                            InternalLabour
                                        </td>
                                        <td>
                                            ExternalLabour
                                        </td>
                                        <td>
                                            EstimatedSaving
                                        </td>
                                        <td>
                                            NumberOfPlatform
                                        </td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                DecomInternalLabourNote
                            </label>
                            <p>
                                {{$projects->DecomInternalLabourNote}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                DecomExternalLabourNote
                            </label>
                            <p>
                                {{$projects->DecomExternalLabourNote}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                DecomEstimatedSavingNote
                            </label>
                            <p>
                                {{$projects->DecomEstimatedSavingNote}}
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                DecomNumberOfPlatformNote
                            </label>
                            <p>
                                {{$projects->DecomNumberOfPlatformNote}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal">
                Delete
            </button> |
            <a asp-action="Index">Back to List</a>

            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <form asp-action="Delete">
                                <input type="hidden" asp-for="ProjectID" />
                                <input type="submit" value="Yes" class="btn btn-danger" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    @endsection

</x-_AdminLayout>
