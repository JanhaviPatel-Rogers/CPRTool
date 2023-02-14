<x-_AdminLayout>
    @section('content')

        <head>


            <style>
                .nav-tabs-1 {
                    height: 62px;
                }

                .card-bg-1 {
                    background: #74CEE0;
                }

                .card-bg-2 {
                    background: #BBE4ED;
                }

                .card-bg-3 {
                    background: #414042;
                }

                .card-bg-4 {
                    background: #DA291C;
                    min-width:1000px;
                    text-align: center
                }
                .card-border-1 {
                    color: #DA291C;
                }

                .card-bg-5 {
                    background: #91acda;
                }

                .card-bg-6 {
                    background: #ffc1cf;
                }
                .card-bg-7 {
                    background: #ebf3f5;
                }
                /*tr:nth-child(even) {
                    background-color: #f2f2f2;
                }*/
                .item1 {
                    vertical-align: top;
                    display: inline-block;
                    text-align: center;
                    width: 91.6px;
                    background: #68CADA;
                    color: white;
                }
                .font1{
                    font-size:large;
                }

                .img-icon1 {
                    width: 70px;
                    height: 60px;
                    align-self: center;
                }

                .caption {
                    display: block;
                    font-size: x-small;

                }
                .grey-2 {
                    background-color:#A8A8A8;
                }
                .grey-1 {
                    background-color: #C0C0C0;
                }
                .card-text-1 {
                    font-size:14px;
                }
                input {
                    border: none;
                    background: transparent;
                }

            </style>

        </head>
        <form  method="get" action="{{route('projects.details', $projects->id)}}" enctype='multipart/form-data'>

            <div class="nav nav-tabs">


            <div class="table-responsive" style="white-space: nowrap">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                    <tr>

                        <th>
                            <div>
                                <a asp-action="Edit" asp-route-id="@Model.ProjectID">
                                <span style="font-size: 1.2rem; color: grey;">
                                    <i class="fas fa-edit"></i>
                                </span>
                                </a>|
                                <a asp-action="Index">
                                <span style="font-size: 1.2rem; color: grey;">

                                    <i class="fas fa-chevron-circle-left"></i>
                                </span>

                                </a>
                            </div>
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr class="nav nav-tabs">



                        <td data-toggle="tab" href="#info" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/PI.png')}}" alt="" />
                            <span class="caption">Project <br />Information</span>
                        </td>

                        <td data-toggle="tab" href="#requestor" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/RD.png')}}" alt="" />
                            <span class="caption">Requestor<br /> Details</span>
                        </td>
                        <td data-toggle="tab" href="#details" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/PD.png')}}" alt="" />
                            <span class="caption">Project Details</span>
                        </td>
                        <td data-toggle="tab" href="#profile" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/SP.png')}}" alt="" />
                            <span class="caption">Spend Profile</span>
                        </td>
                        <td data-toggle="tab" href="#opex" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/OD.png')}}" alt="" />
                            <span class="caption">OPEX Drag</span>
                        </td>
{{--                        @*<td data-toggle="tab" href="#allocation" class="item1">--}}
{{--                            <img class="btn img-icon1" src="/RA.png" alt="" />--}}
{{--                            <span class="caption">Company<br /> Allocation</span>*@--}}
{{--                        </td>--}}
                        <td data-toggle="tab" href="#regional" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/RA.png')}}" alt="" />
                            <span class="caption"> Allocations</span>
                        </td>
                        <td data-toggle="tab" href="#vendor" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/VB.png')}}" alt="" />
                            <span class="caption">Vendor<br /> Breakdown</span>
                        </td>
                        <td data-toggle="tab" href="#decomm" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/DD.png')}}" alt="" />
                            <span class="caption">Decomm Details</span>
                        </td>
                        <td data-toggle="tab" href="#benefitrevenue" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/bf_rev.png')}}"
                                 alt="" />
                            <span class="caption">
                            Benefit:
                            Revenue
                        </span>
                        </td>
                        <td data-toggle="tab" href="#benefitopex" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/bf_op.png')}}"
                                 alt="" />
                            <span class="caption">
                            Benefit:
                            Opex
                        </span>
                        </td>

                        <td data-toggle="tab" href="#audit" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/audit.png')}}" alt="" />
                            <span class="caption">AuditTrail</span>
                        </td>






                    </tr>
                    </tbody>
                </table>
            </div>



            <div class="tab-content col d-flex justify-content-center" id="myTabContent">
                <div class="tab-pane fade active" id="requestor" role="tabpanel">

                    <div class="card" data-aos="fade-up">
                        <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-bg-4 text-white">Requestor Details</h3>
                        <div class="card-body">
                            <div class="row">
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        ExecutiveSponsor
                                    </label>
                                    <input value="{{$projects->ExecutiveSponsor}}" disabled />
                                </div>
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        Sponsor
                                    </label>
                                    <input value="{{$projects->Sponsor}}" disabled />

                                </div>
                            </div>
                            <div class="row">
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        TechDeliveryVp
                                    </label>
                                    <input value="{{$projects->TechDeliveryVp}}" disabled />

                                </div>
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        DeliveryOwner
                                    </label>
                                    <input value="{{$projects->DeliveryOwner}}" disabled />

                                </div>
                            </div>
                            <div class="row">
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        BUVPOwner
                                    </label>
                                    <input value="{{$projects->BUVPOwner}}" disabled />

                                </div>
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        Submitter
                                    </label>
                                    <input value="{{$projects->Submitter}}" disabled />

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="info" role="tabpanel">
                    <div class="card" data-aos="fade-up">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 justify-content-center card-bg-4 text-white">Project Information</h3>
                    <div class="card-body">
                        <div class="row">
                            @if(auth()->user()->userHasRole('admin'))

                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        Priority
                                    </label>
                                    <input value="{{$projects->Priority}}" disabled />

                                </div>
                            @endif
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        RNCCDependency
                                    </label>
                                    <input value="{{$projects->RNCCDependency}}" disabled />

                                </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    BudgetStartYear
                                </label>
                                <input value="{{$projects->BudgetStartYear}}" disabled />

                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    CapexCategory
                                </label>
                                <input value="{{$projects->CapexCategory}}" disabled />

                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    KTwoNumber
                                </label>
                                <input value="{{$projects->KTwoNumber}}" disabled />
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    CapexGovernanceCategory
                                </label>
                                <input value="{{$projects->CapexGovernanceCategory}}" disabled />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    BudgetCompany
                                </label>
                                <input value="{{$projects->BudgetCompany}}" disabled />

                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    BudgetType
                                </label>
                                <input value="{{$projects->BudgetType}}" disabled />

                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Name
                                </label>
                                <input value="{{$projects->ProjectName}}" disabled />

                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    PoiDate
                                </label>
                                <input value="{{$projects->PoiDate}}" disabled />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Total CA Value
                                </label>
                                <p>
                                    @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.Total) + Model.FutureCaptitalExpenses.Sum(x => x.Total))
                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    PorLaunchDate
                                </label>
                                <input value="{{$projects->PorLaunchDate}}" disabled />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Budget Year Capital Request
                                </label>
                                <p>
                                    PoRTotal
                                </p>
                                <input value="{{$projects->ExecutiveSponsor}}" disabled />

                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    ProjectEndDate
                                </label>
                                <input value="{{$projects->ExecutiveSponsor}}" disabled />

                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Status
                                </label>
                                <input value="{{$projects->Status}}" disabled />
                            </div>
                            @if(auth()->user()->userHasRole('admin'))
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        SponsorCategory
                                    </label>
                                    <input value="{{$projects->SponsorCategory}}" disabled />

                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    CreateAt
                                </label>
                                <input value="{{$projects->CreateAt}}" disabled />

                            </div>
                            @if(auth()->user()->userHasRole('admin'))
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        FiscalBudgetCategory
                                    </label>
                                    <input value="{{$projects->FiscalBudgetCategory}}" disabled />
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    HighLevelSummary
                                </label>
                                <input value="{{$projects->HighLevelSummary}}" disabled />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    KeyInitiave
                                </label>
                                <input value="{{$projects->KeyInitiave}}" disabled />

                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Category
                                </label>
                                <input value="{{$projects->Category}}" disabled />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Interlock
                                </label>
                                <input value="{{$projects->Interlock}}" disabled />

                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    SubCategory
                                </label>
                                <input value="{{$projects->SubCategory}}" disabled />

                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    PotentialAdvancements
                                </label>
                                <input value="{{$projects->PotentialAdvancements}}" disabled />

                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    ProjectType
                                </label>
                                <input value="{{$projects->ProjectType}}" disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="details" role="tabpanel">

                <div class="card" data-aos="fade-up">
                    <h3 class="card-header text-center text-white font-weight-bold text-uppercase py-4 justify-content-center text-white card-bg-4">Project Details</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">

                                    BusinessProblem
                                </label>
                                <input value="{{$projects->BusinessProblem}}" disabled />

                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    BusinessSolution
                                </label>
                                <input value="{{$projects->BusinessSolution}}" disabled />

                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    CostBreakdown
                                </label>
                                <input value="{{$projects->CostBreakdown}}" disabled />

                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    BenefitAndRisk
                                </label>
                                <input value="{{$projects->BenefitAndRisk}}" disabled />

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" style="overflow-x: scroll">
                <div class="card" data-aos="fade-up">
                <h3 class="card-header text-center text-white font-weight-bold text-uppercase py-4 justify-content-center card-bg-4">Spend Profile</h3>
                <div class="card-body">
                    <div>
                        <table class="table table-bordered table-responsive-md text-center">
                            <thead>
                            <tr>
                                <th>
                                </th>
                                <th class="grey-2 text-white">
                                    Hardware Network
                                </th>
                                <th class="grey-2 text-white">
                                    Hardware IT
                                </th>
                                <th class="grey-2 text-white">
                                    Hardware BU Gencap
                                </th>
                                <th class="grey-2 text-white">
                                    Software Network
                                </th>
                                <th class="grey-2 text-white">
                                    Software IT
                                </th>
                                <th class="grey-2 text-white">
                                    Software BU Gencap
                                </th>
                                <th class="grey-2 text-white">
                                    External Labour Network
                                </th>
                                <th class="grey-2 text-white">
                                    External Labour IT
                                </th>
                                <th class="grey-2 text-white">
                                    External Labour BU Gencap
                                </th>
                                <th class="grey-2 text-white">
                                    Internal Labour Network
                                </th>
                                <th class="grey-2 text-white">
                                    Internal Labour IT
                                </th>
                                <th class="grey-2 text-white">
                                    Internal Labour BU Gencap
                                </th>
                                <th class="grey-2 text-white">
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().Total)
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($capitalExpenses as $capitalExpense)
{{--                                {--}}
                                <tr>
                                    <th style="white-space: nowrap" class="grey-2 text-white">
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
                                    <td class="grey-2 text-white">
                                        Total
                                    </td>
                                </tr>
{{--                                }--}}
                                <tr class="table grey-2 text-white">
                                    <th scope="row">
                                        Total
                                    </th>
                                    <td>
                                        {{$CEtotalHardware}}

                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.HardwareIT))
                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.HardwareGencap))
                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.Software))
                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.SoftwareIT))
                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.SoftwareGencap))
                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.ProfessionalServices))
                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.ThirdParty))
                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.ExternalLabourGencap))
                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourNetwork))
                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourIT))
                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourGencap))
                                    </td>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.Total))
                                    </td>
                                </tr>
{{--                                @foreach (var item in Model.FutureCaptitalExpenses)--}}
{{--                                    {--}}
                                    <tr>
                                        <th class="grey-2 text-white">
                                            Year
                                        </th>
                                        <td>
                                            Hardware
                                        </td>
                                        <td>
                                            HardwareIT
                                        </td>
                                        <td>
                                            HardwareGencap
                                        </td>
                                        <td>
                                            Software
                                        </td>
                                        <td>
                                            SoftwareIT
                                        </td>
                                        <td>
                                            SoftwareGencap
                                        </td>
                                        <td>
                                            ProfessionalServices
                                        </td>
                                        <td>
                                            ThirdParty
                                        </td>
                                        <td>
                                            ExternalLabourGencap
                                        </td>
                                        <td>
                                            InternalCapitalizedLabourNetwork
                                        </td>
                                        <td>
                                            InternalCapitalizedLabourIT
                                        </td>
                                        <td>
                                            InternalCapitalizedLabourGencap
                                        </td>
                                        <td class="grey-2 text-white">
                                            Total)
                                        </td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="opex" role="tabpanel">
            <div class="card" data-aos="fade-up">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 text-white justify-content-center card-bg-4">Opex Drag</h3>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered table-responsive-md text-center">
                            <thead>
                            <tr>
                                <th class="grey-2 text-white">
                                    Year
                                </th>
                                <th class="grey-2 text-white">
                                    Budget
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($operationalExpenses as $operationalExpense)
{{--                                {--}}
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
                    <div class="col card border-left-danger shadow h-100 py-2">
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
        </div>
        <div class="tab-pane fade" id="allocation" role="tabpanel">
            <div class="card" data-aos="fade-up">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 justify-content-center card-bg-4 text-white">Company Allocation</h3>
            <div class="card-body">
                <div class="row">
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            FunctionCable
                        </label>
                        <p>
                            @Html.Raw(Model.FunctionCable/100)
                        </p>
                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            FunctionWireless
                        </label>
                        <p>
                            FunctionWireless
                        </p>
                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            FunctionRogersForBusiness
                        </label>
                        <p>
                            FunctionRogersForBusiness
                        </p>
                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            FunctionMedia
                        </label>
                        <p>
                            FunctionMedia
                        </p>
                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            FunctionRogersSmartHomeMonitoring
                        </label>
                        <p>
                            FunctionRogersSmartHomeMonitoring
                        </p>
                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            FunctionBank
                        </label>
                        <p>
                            FunctionBank
                        </p>
                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            FunctionRogersCommunicationsIncorporated
                        </label>
                        <p>
                            FunctionRogersCommunicationsIncorporated
                        </p>
                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
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
        </div>
        <div class="tab-pane fade" id="regional" role="tabpanel">
            <div class="card" data-aos="fade-up">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 justify-content-center card-bg-4 text-white">Regional Allocation</h3>
            <div class="card-body">
                <div class="row">
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            GreaterTorontoArea
                        </label>
                        <input value="{{$projects->GreaterTorontoArea}}" disabled />

                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            Ontario
                        </label>
                        <input value="{{$projects->Ontario}}" disabled />
                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            Quebec
                        </label>
                        <input value="{{$projects->Quebec}}" disabled />

                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            BritishColumbia
                        </label>
                        <input value="{{$projects->BritishColumbia}}" disabled />

                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            Alberta
                        </label>
                        <input value="{{$projects->Alberta}}" disabled />

                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            MidWest
                        </label>
                        <input value="{{$projects->MidWest}}" disabled />

                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            Atlantic
                        </label>
                        <input value="{{$projects->Atlantic}}" disabled />

                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2">
                        <label class="control-label font-weight-bold">
                            TotalRegionalAllocation
                        </label>
                        <input value="{{$projects->TotalRegionalAllocation}}" disabled />

                    </div>
                </div>
            </div>
        </div>




            <div class="card" data-aos="fade-up">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4 justify-content-center card-bg-4 text-white">Company Allocation</h3>
        <div class="card-body">
            <div class="row">
                <div class="col card border-left-danger shadow h-100 py-2">
                    <label class="control-label font-weight-bold">

                        FunctionCable
                    </label>
                    <input value="{{$projects->FunctionCable}}" disabled />

                </div>
                <div class="col card border-left-danger shadow h-100 py-2">
                    <label class="control-label font-weight-bold">
                        FunctionWireless
                    </label>
                    <input value="{{$projects->FunctionWireless}}" disabled />

                </div>
                <div class="col card border-left-danger shadow h-100 py-2">
                    <label class="control-label font-weight-bold">
                        FunctionRogersForBusiness
                    </label>
                    <input value="{{$projects->FunctionRogersForBusiness}}" disabled />

                </div>
                <div class="col card border-left-danger shadow h-100 py-2">
                    <label class="control-label font-weight-bold">
                        FunctionMedia
                    </label>
                    <input value="{{$projects->FunctionMedia}}" disabled />

                </div>
                <div class="col card border-left-danger shadow h-100 py-2">
                    <label class="control-label font-weight-bold">
                        FunctionRogersSmartHomeMonitoring
                    </label>
                    <input value="{{$projects->FunctionRogersSmartHomeMonitoring}}" disabled />

                </div>
                <div class="col card border-left-danger shadow h-100 py-2">
                    <label class="control-label font-weight-bold">
                        FunctionBank
                    </label>
                    <input value="{{$projects->FunctionBank}}" disabled />

                </div>
                <div class="col card border-left-danger shadow h-100 py-2">
                    <label class="control-label font-weight-bold">
                        FunctionRogersCommunicationsIncorporated
                    </label>
                    <input value="{{$projects->FunctionRogersCommunicationsIncorporated}}" disabled />

                </div>
                <div class="col card border-left-danger shadow h-100 py-2">
                    <label class="control-label font-weight-bold">
                        TotalAllocation
                    </label>
                    <input value="{{$projects->TotalAllocation}}" disabled />

                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="tab-pane fade" id="vendor" role="tabpanel">
            <div class="card" data-aos="fade-up">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 justify-content-center card-bg-4 text-white">Vendor Breakdown</h3>
            <div class="card-body">
                <div id="vendor-table">
                    <table class="table table-bordered table-responsive-md text-center">
                        <thead class="grey-2 text-white">
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
{{--                            {--}}
                            <tr>
                                <td>
                                    Vendor.Name
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
                            <tr class="table grey-2 text-white">
                                <th scope="row">
                                    Total
                                </th>
                                <td>
                                    @String.Format(budgetFormatter, @Model.VendorBudgets.Sum(x => x.Hardware))
                                </td>
                                <td>
                                    @String.Format(budgetFormatter, @Model.VendorBudgets.Sum(x => x.Software))
                                </td>
                                <td>
                                    @String.Format(budgetFormatter, @Model.VendorBudgets.Sum(x => x.ExternalLabour))
                                </td>
                                <td>
                                    @String.Format(budgetFormatter, @Model.VendorBudgets.Sum(x => x.Total))
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="decomm" role="tabpanel">
            <div class="card" data-aos="fade-up">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 justify-content-center card-bg-4 text-white">Decomm Details</h3>
            <div class="card-body">
                <div id="decom-table">
                    <table class="table table-bordered table-responsive-md text-center">
                        <thead class="grey-2 text-white">
                        <tr>
                            <th>
                            </th>
                            <th style="white-space: nowrap" class="grey-2 text-white">
                                InternalLabour
                            </th>
                            <th style="white-space: nowrap" class="grey-2 text-white">
                                ExternalLabour
                            </th>
                            <th style="white-space: nowrap" class="grey-2 text-white">
                                Cost Avoidance (Gross Savings)
                            </th>
                            <th style="white-space: nowrap" class="grey-2 text-white">
                                # f Platforms
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($decomissions as $decomission)
{{--                            {--}}
                            <tr>
                                <th class="grey-2 text-white">
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
                        @endforeach
                            <tr class="table grey-2 text-white">
                                <th scope="row">
                                    Total
                                </th>
                                <td>
                                    @String.Format(budgetFormatter, @Model.Decommissions.Sum(x => x.InternalLabour))
                                </td>
                                <td>
                                    @String.Format(budgetFormatter, @Model.Decommissions.Sum(x => x.ExternalLabour))
                                </td>
                                <td>
                                    @String.Format(budgetFormatter, @Model.Decommissions.Sum(x => x.EstimatedSaving))
                                </td>
                                <td>
                                    @Model.Decommissions.Sum(x => x.NumberOfPlatform)
                                </td>
                            </tr>
                        @foreach($futuredecomissions as $futuredecomission)
{{--                                {--}}
                                <tr>
                                    <th scope="row" class="grey-2 text-white">
                                        {{$futuredecomission->Year}}
                                    </th>
                                    <td>
                                        {{$futuredecomission->InternalLabour}}
                                    </td>
                                    <td>
                                        {{$futuredecomission->ExternalLabour}}
                                    </td>
                                    <td>
                                        {{$futuredecomission->EstimatedSaving}}
                                    </td>
                                    <td>
                                        {{$futuredecomission->NumberOfPlatform}}
                                    </td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col card border-left-danger shadow h-100 py-2 card-text-1">
                        <label class="control-label font-weight-bold">
                            DecomInternalLabourNote
                        </label>
                        <input value="{{$projects->DecomInternalLabourNote}}" disabled />

                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2 card-text-1">
                        <label class="control-label font-weight-bold">
                            DecomExternalLabourNote
                        </label>
                        <input value="{{$projects->DecomExternalLabourNote}}" disabled />

                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2 card-text-1">
                        <label class="control-label font-weight-bold">
                            DecomEstimatedSavingNote
                        </label>
                        <input value="{{$projects->DecomEstimatedSavingNote}}" disabled />

                    </div>
                    <div class="col card border-left-danger shadow h-100 py-2 card-text-1">
                        <label class="control-label font-weight-bold">
                            DecomNumberOfPlatformNote
                        </label>
                        <input value="{{$projects->DecomNumberOfPlatformNote}}" disabled />

                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="tab-pane fade" id="benefitrevenue" role="tabpanel">
            <div class="card" data-aos="fade-up">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 justify-content-center card-bg-4 text-white">Benefit:Revenue</h3>
            <div class="card-body">
                <div id="decom-table">
                    <table class="table table-bordered table-responsive-md text-center">
                        <thead>
                        @foreach($benefits as $benefit)
                        <tr>
                            <td></td>
                            <th scope="col">2023</th>
                            <th scope="col">2024</th>
                            <th scope="col">2025</th>
                            <th scope="col">3 Year Total</th>
                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center">Revenue Increase</th>
{{--                            @{--}}
{{--                            double revinc1 = 0;--}}
{{--                            double revinc2 = 0;--}}
{{--                            double revinc3 = 0;--}}
{{--                            double totalinc = 0;--}}
{{--                            if (Model.Benefit != null)--}}
{{--                            {--}}
{{--                            revinc1 = Model.Benefit.RevenueIncrease2022;--}}
{{--                            revinc2 = Model.Benefit.RevenueIncrease2023;--}}
{{--                            revinc3 = Model.Benefit.RevenueIncrease2024;--}}
{{--                            totalinc = Model.Benefit.TotalRevenueInc;--}}



{{--                            }--}}
{{--                            }--}}
                            <td>



{{--                                @Convert.ToDecimal(revinc1 / 1000000).ToString("$0.##0M")--}}
                                {{$benefit->RevenueIncrease2022}}
                            </td>
                            <td>
{{--                                @Convert.ToDecimal(revinc2 / 1000000).ToString("$0.##0M")--}}
                                {{$benefit->RevenueIncrease2023}}
                            </td>
                            <td>
{{--                                @Convert.ToDecimal(revinc3 / 1000000).ToString("$0.##0M")--}}
                                {{$benefit->RevenueIncrease2024}}
                            </td>
                            <td>
{{--                                @Convert.ToDecimal(totalinc / 1000000).ToString("$0.##0M")--}}
{{--                                @*Benefit.TotalRevenueInc)*@--}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center">Revenue Protection</th>
                            <td>
                                {{$benefit->RevenueProtection2022}}
                            </td>
                            <td>
                                {{$benefit->RevenueProtection2023}}
                            </td>
                            <td>
                                {{$benefit->RevenueProtection2024}}
                            </td>
                            <td>
                                Benefit.TotalRevenueProt
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center">Other Revenue</th>
                            <td>
                                {{$benefit->OtherRevenue2022}}
                            </td>
                            <td>
                                {{$benefit->OtherRevenue2023}}
                            </td>
                            <td>
                                {{$benefit->OtherRevenue2024}}
                            </td>
                            <td>
                                Benefit.TotalOtherRevenue
                            </td>
                        </tr>

                        <tr class="table grey-2 text-white">
                            <th scope="row">
                                Total
                            </th>
                            <td>
                                Benefit.TotalRevenue2022
                            </td>
                            <td>
                                Benefit.TotalRevenue2023
                            </td>
                            <td>
                                Benefit.TotalRevenue2024
                            </td>
                            <td>
                                Benefit.TotalRevenue
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="benefitopex" role="tabpanel">
            <div class="card" data-aos="fade-up">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 justify-content-center card-bg-4 text-white">Benefit:Opex</h3>
            <div class="card-body">
                <div id="decom-table">
                    <table class="table table-bordered table-responsive-md text-center">
                        <thead>
                        @foreach($benefits as $benefit)
                        <tr>
                            <td></td>
                            <th scope="col">2022</th>
                            <th scope="col">2023</th>
                            <th scope="col">2024</th>
                            <th scope="col">3 Year Total</th>
                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center">Opex Savings</th>
                            <td>
                                {{$benefit->OpexSavings2022}}
                            </td>
                            <td>
                                {{$benefit->OpexSavings2023}}
                            </td>
                            <td>
                                {{$benefit->OpexSavings2024}}
                            </td>
                            <td>
                                Benefit.TotalOpexSavings
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center">Opex Avoidance</th>
                            <td>
                                {{$benefit->OpexAvoidance2022}}
                            </td>
                            <td>
                                {{$benefit->OpexAvoidance2023}}
                            </td>
                            <td>
                                {{$benefit->OpexAvoidance2024}}
                            </td>
                            <td>
                                Benefit.TotalOpexAvoidance
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center">Other Cost Savings</th>
                            <td>
                                {{$benefit->OtherOpexSavings2022}}
                            </td>
                            <td>
                                {{$benefit->OtherOpexSavings2023}}
                            </td>
                            <td>
                                {{$benefit->OtherOpexSavings2024}}
                            </td>
                            <td>
                                Benefit.TotalOtherOpexSavings
                            </td>
                        </tr>

                        <tr class="table grey-2 text-white">
                            <th scope="row">
                                Total
                            </th>
                            <td>
                                Benefit.TotalOpex2022
                            </td>
                            <td>
                                Benefit.TotalOpex2023
                            </td>
                            <td>
                                Benefit.TotalOpex2024
                            </td>
                            <td>
                                Benefit.TotalOpex
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>

        </div>
        <div class="tab-pane fade" id="audit" role="tabpanel">
            <div class="card" data-aos="fade-up">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 text-white justify-content-center card-bg-4">Audit Trail</h3>
{{--            <div class="card-body">--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <table class="table table-bordered table-responsive-md text-center">--}}

{{--                            <tbody>--}}


{{--                            @for (var i = 0; i < Model.AuditTrails?.Count; i++)--}}
{{--                                {--}}
{{--                                @if (Model.AuditTrails[i].Section == "Budget" || Model.AuditTrails[i].Section == "Both")--}}
{{--                                    {--}}

{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            @Html.DisplayFor(modelItem => modelItem.AuditTrails[i].EnglishString)--}}
{{--                                        </td>--}}

{{--                                    </tr>--}}
{{--                                    }--}}
{{--                                    }--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        </div>
        </div>





    @endsection
        </form>

</x-_AdminLayout>
