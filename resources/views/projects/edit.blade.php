<x-_AdminLayout>
    @section('content')

        <head>
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"
                src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
                src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">

            </script>
            <style>
                .card-1 {
                    background: #DA291C;
                    min-width: 1000px;
                    text-align: center;
                }
                .input1 {
                    font-size: 9px;
                }

                .fixed{
                    width: 1050px;
                }
                .table {
                    table-layout:fixed;
                    margin:0;
                    padding:0;
                    width:100%;
                    border-collapse: collapse;
                    border-spacing: 0;
                    white-space: nowrap;
                }
            </style>
            {{--            @section Scripts {--}}

            <script>
                $(function () {
                    $("#projtag").autocomplete({
                        source: '/Employee/Test'
                    })
                });

                $(function () {
                    $("#techtag").autocomplete({
                        source: '/Employee/Test'
                    })
                });

                $(function () {
                    $("#deliverytag").autocomplete({
                        source: '/Employee/Test'
                    })
                });

                $(function () {
                    $("#butag").autocomplete({
                        source: '/Employee/Test'
                    })
                });

                $(function () {
                    $("#submittertag").autocomplete({
                        source: '/Employee/Test'
                    })
                });


            </script>

            <script>
                let regionalAllocationList = $('.reginal-allocation');
                let totalRegionalAllocation = $('#TotalRegionalAllocation');
                let allocationList = $('.allocation');
                let totalaAllocation = $('#TotalAllocation');

                regionalAllocationList.each(function () {
                    $(this).change(function () {
                        updateTotal(regionalAllocationList, totalRegionalAllocation)
                    });
                });

                allocationList.each(function () {
                    $(this).change(function () {
                        updateTotal(allocationList, totalaAllocation)
                    });
                });

                function updateTotal(inputList, totalInput) {
                    console.log("In updateTotal");
                    let total = 0

                    inputList.each(function () {
                        let value = isNaN(this.value) ? 0 : Number(this.value)
                        total += value
                    });

                    $(totalInput).val(total.toFixed(0))
                };
            </script>
            {{--            }--}}

            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        </head>

        <h1>Edit</h1>
        <div class="row">
            <div class="unix-login">
                <div class="container-fluid">
                    <div class="row justify-content-center">
            <form  method="post" action="{{route('projects.update', $projects->id)}}" enctype='multipart/form-data' class="fixed">
                @csrf
                <div asp-validation-summary="ModelOnly" class="text-danger"></div>
                <input type="hidden" for="ProjectID" />
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Project Information</h3>
                    <div class="card-body" >
                        @if(auth()->user()->userHasRole('admin'))
                            <div class="row">
                                <div class="form-group col">
                                    <label for="Priority" class="control-label">Priority</label>
                                    <span ID="required" style="color:Red;" visible="false"> *</span>
                                    <select for="Priority" name= "Priority" value="{{$projects->Priority}}" class="form-control input-validation-error" data-val="true" data-val-required="The Priority field is required." aria-describedby="Priority-error" aria-invalid="true">
                                        <option value="" disabled selected>-- Select --</option>
                                        <option value="0 - Below the line">0 - Below the line</option>
                                        <option value="1 - Included in Budget">1 - Included in Budget</option>
                                        <option value="2 - Program still to be considered if possible">2 - Program still to be considered if possible</option>
                                    </select>
                                    <span for="Priority" class="text-danger"></span>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="form-group col">
                                <label for="RNCCDependency" class="control-label">RNCC Dependency</label>
                                <span  ID="required" style="color:Red;" visible="false"> *</span>
                                <select for="RNCCDependency" name="RNCCDependency" value="{{$projects->RNCCDependency}}" class="form-control input-validation-error" data-val="true" data-val-required="The RNCC Dependency field is required." aria-describedby="RNCCDependency-error" aria-invalid="true">
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span for="RNCCDependency" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="BudgetStartYear" name="BudgetStartYear" class="control-label">Budget Start Year</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <input for="BudgetStartYear" value="{{$projects->BudgetStartYear}}" name="BudgetStartYear" class="form-control" />
                                <span for="BudgetStartYear" class="text-danger"></span>
                            </div>
                            <div class=" form-group col">
                                <label for="CapexCategory" name="CapexCategory" class="control-label">Capex Category</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <select for="CapexCategory"  name="CapexCategory" value="{{$projects->CapexCategory}}" class="form-control" >
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="CableUplift"{{ $projects->CapexCategory == 'CableUplift' ? 'selected' : '' }}>Cable Uplift</option>
                                    <option value="CrmsCapacity"{{ $projects->CapexCategory == 'CrmsCapacity' ? 'selected' : '' }}>CRMS-Capacity</option>
                                    <option value="CrmsMandatoryAndCompliance"{{ $projects->CapexCategory == 'CrmsMandatoryAndCompliance' ? 'selected' : '' }}>CRMS-Mandatory & Compliance</option>
                                    <option value="CrmsReliability"{{ $projects->CapexCategory == 'CrmsReliability' ? 'selected' : '' }}>CRMS-Reliability</option>
                                    <option value="CrmsServiceImprovement"{{ $projects->CapexCategory == 'CrmsServiceImprovement' ? 'selected' : '' }}>CRMS-Service Improvement</option>
                                    <option value="FiveG"{{ $projects->CapexCategory == 'FiveG' ? 'selected' : '' }}>5G</option>
                                    <option value="ConsolidateFiberBuild"{{ $projects->CapexCategory == 'ConsolidateFiberBuild' ? 'selected' : '' }}>Consolidate Fiber Build</option>
                                    <option value="Greenfield"{{ $projects->CapexCategory == 'Greenfield' ? 'selected' : '' }}>Greenfield</option>
                                    <option value="ServiceAreaExpansion"{{ $projects->CapexCategory == 'ServiceAreaExpansion' ? 'selected' : '' }}>Service Area Expansion</option>
                                    <option value="StrategicBuild"{{ $projects->CapexCategory == 'StrategicBuild' ? 'selected' : '' }}>Strategic Build</option>
                                    <option value="SupplyChainGeneralInventory"{{ $projects->CapexCategory == 'SupplyChainGeneralInventory' ? 'selected' : '' }}>Supply Chain General Inventory</option>
                                </select>
                                <span for="CapexCategory" class="text-danger" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="KTwoNumber" name="KTwoNumber"  class="control-label">K2#</label>
                                <input for="KTwoNumber" name="KTwoNumber" value="{{$projects->KTwoNumber}}" class="form-control" />
                                <span for="KTwoNumber" class="text-danger"></span>
                            </div>
                            <div class=" form-group col">
                                <label for="CapexGovernanceCategory" name="CapexGovernanceCategory" class="control-label">Capex Governance Category</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <select for="CapexGovernanceCategory" name="CapexGovernanceCategory" value="{{$projects->CapexGovernanceCategory}}" class="form-control" asp-items="@Html.GetEnumSelectList<CapexGovernanceCategory>()">
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="Strategic">Strategic</option>
                                    <option value="KTLO">KTLO</option>
                                    <option value="SuccessBased">Success Based</option>
                                    <option value="GrowthEfficiency">Growth/Efficiency</option>
                                </select>
                                <span for="CapexGovernanceCategory" class="text-danger" />
                            </div>
                        </div>

                        <div class="row">
                            <div class=" form-group col">
                                <label for="BudgetCompany" name="BudgetCompany" class="control-label">Budget Company</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <select for="BudgetCompany" name="BudgetCompany" value="{{$projects->BudgetCompany}}" class="form-control input-validation-error" data-val="true" data-val-required="The Budget Company field is required." aria-describedby="BudgetCompany-error" aria-invalid="true">
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="Rogers">Rogers</option>
                                    <option value="Shaw">Shaw</option>
                                </select>
                                <span for="BudgetCompany" class="text-danger"></span>
                            </div>
                            <div class=" form-group col">
                                <label for="BudgetType" name="BudgetType" class="control-label">Budget Type</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <select for="BudgetType" name="BudgetType" class="form-control input-validation-error" value="{{$projects->BudgetType}}" data-val="true" data-val-required="The Budget Type field is required." aria-describedby="BudgetType-error" aria-invalid="true">
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="BAU">BAU</option>
                                    <option value="Integration">Integration</option>
                                </select>
                                <span for="BudgetType" class="text-danger"></span>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col">
                                <label for="ProjectName" name="ProjectName" class="control-label">Project Name</label>
                                <input for="ProjectName" value="{{$projects->ProjectName}}" name="ProjectName" class="form-control" />
                                <span for="ProjectName" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="PoiDate" class="control-label">POI Launch Date</label>
                                <input for="PoiDate" name="PoiDate" value="{{$projects->PoiDate}}" class="form-control" />
                                <span for="PoiDate" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            @if(auth()->user()->userHasRole('admin'))
                                <div class="form-group col">
                                    <label for="SponsorCategory" name="SponsorCategory" class="control-label">Sponsor Category</label>
                                    <input for="SponsorCategory" name="SponsorCategory" value="{{$projects->SponsorCategory}}" class="form-control" />
                                    <span for="SponsorCategory" class="text-danger"></span>
                                </div>
                            @endif
                            <div class="form-group col">
                                <label for="PorLaunchDate" name="PorLaunchDate" class="control-label">Por Launch Date</label>
                                <input for="PorLaunchDate" name="PorLaunchDate" value="{{$projects->PorLaunchDate}}" class="form-control" />
                                <span for="PorLaunchDate" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            @if(auth()->user()->userHasRole('admin'))
                                <div class="form-group col">
                                    <label for="FiscalBudgetCategory" name="FiscalBudgetCategory" class="control-label">Fiscal Budget Category</label>
                                    <input for="FiscalBudgetCategory" name="FiscalBudgetCategory" value="{{$projects->FiscalBudgetCategory}}" class="form-control" />
                                    <span for="FiscalBudgetCategory" class="text-danger"></span>
                                </div>
                            @endif
                            <div class="form-group col">
                                <label for="ProjectEndDate" name="ProjectEndDate"  class="control-label">Project End Date</label>
                                <input for="ProjectEndDate" name="ProjectEndDate" value="{{$projects->ProjectEndDate}}" class="form-control" />
                                <span for="ProjectEndDate" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="HighLevelSummary" name="HighLevelSummary" class="control-label">High Level Summary</label>
                                <textarea for="HighLevelSummary" name="HighLevelSummary" value="{{$projects->HighLevelSummary}}" class="form-control" rows="5"></textarea>
                                <span for="HighLevelSummary" class="text-danger"></span>

                            </div>
                        </div>
                        @if(auth()->user()->userHasRole('admin'))
                            <div class="row">
                                <div class="form-group col">
                                    <label for="KeyInitiave" class="control-label font-weight-bold input1">KeyInitiave</label>
                                    <input for="KeyInitiave" name="KeyInitiave" value="{{$projects->KeyInitiave}}" class="form-control input1" />
                                    <span for="KeyInitiave" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="Category" class="control-label font-weight-bold input1">Category</label>
                                    <input for="Category" name="Category" value="{{$projects->Category}}" class="form-control input1" />
                                    <span for="Category" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="Interlock" class="control-label font-weight-bold input1">Interlock</label>
                                    <input for="Interlock" name="Interlock" value="{{$projects->Interlock}}" class="form-control input1" />
                                    <span for="Interlock" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="SubCategory" class="control-label font-weight-bold input1">SubCategory</label>
                                    <input for="SubCategory" name="SubCategory" value="{{$projects->SubCategory}}" class="form-control input1" />
                                    <span for="SubCategory" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="PotentialAdvancements" class="control-label font-weight-bold input1">Potential Advancements</label>
                                    <input for="PotentialAdvancements" name="PotentialAdvancements" value="{{$projects->PotentialAdvancements}}" class="form-control input1" />
                                    <span for="PotentialAdvancements" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="ProjectType" class="control-label font-weight-bold input1">Project Type</label>
                                    <input for="ProjectType" name="ProjectType" value="{{$projects->ProjectType}}" class="form-control input1" />
                                    <span for="ProjectType" class="text-danger"></span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Requestor Details</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col">
                                <label for="ExecutiveSponsor" name="ExecutiveSponsor" class="control-label">Executive Sponsor</label>
                                <input for="ExecutiveSponsor" name="ExecutiveSponsor" value="{{$projects->ExecutiveSponsor}}" class="form-control" id="projtag" />
                                <span for="ExecutiveSponsor" class="text-danger"></span>


                            </div>
                            <div class=" form-group col">
                                <label for="Sponsor" name="Sponsor" class="control-label">Sponsor</label>
                                <select for="Sponsor" name="Sponsor" value="{{$projects->Sponsor}}" class="form-control">
                                    <option value="">-- Select Sponsor --</option>
                                    <option>Technology</option>
                                    <option>Connected Home</option>
                                    <option>Consumer Wireless</option>
                                    <option>Business</option>
                                    <option>Media</option>
                                    <option>Digital</option>
                                    <option>Corporate</option>
                                    <option>Care</option>
                                </select>
                                <span for="Sponsor" class="text-danger" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="TechDeliveryVp" name="TechDeliveryVp" class="control-label">Tech Delivery VP (VP/Snr Director)</label>
                                <input for="TechDeliveryVp" name="TechDeliveryVp" value="{{$projects->TechDeliveryVp}}" class="form-control" id="techtag" asp-items="ViewBag.EmployeeID" />
                                <span for="TechDeliveryVp" class="text-danger" />
                            </div>
                            <div class=" form-group col">
                                <label for="DeliveryOwner" name="DeliveryOwner" class="control-label">Delivery Owner (Director)</label>
                                <input for="DeliveryOwner" name="DeliveryOwner" value="{{$projects->DeliveryOwner}}" class="form-control" id="deliverytag" asp-items="ViewBag.EmployeeID" />
                                <span for="DeliveryOwner" class="text-danger" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="BUVPOwner" name="BUVPOwner"  class="control-label">BU VP Owner</label>
                                <input for="BUVPOwner" name="BUVPOwner" value="{{$projects->BUVPOwner}}" class="form-control" id="butag" asp-items="ViewBag.EmployeeID" />
                                <span for="BUVPOwner" class="text-danger" />
                            </div>
                            <div class=" form-group col">
                                <label for="Submitter" name="Submitter" class="control-label">Submitted By (Manager)</label>
                                <input for="Submitter" name="Submitter" value="{{$projects->Submitter}}" class="form-control" id="submittertag" asp-items="ViewBag.EmployeeID" />
                                <span for="Submitter" class="text-danger" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Project Details </h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col">
                                <label for="BusinessProblem" name="BusinessProblem" class="control-label">Business Problem (Why)</label>
                                <textarea for="BusinessProblem" name="BusinessProblem" value="{{$projects->BusinessProblem}}" class="form-control" rows="5"></textarea>
                                <span for="BusinessProblem" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="BusinessSolution" name="BusinessSolution" class="control-label">Business Solution (What)</label>
                                <textarea for="BusinessSolution" name="BusinessSolution" class="form-control" value="{{$projects->BusinessSolution}}" rows="5"></textarea>
                                <span for="BusinessSolution" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="CostBreakdown" name="CostBreakdown" class="control-label">P x Q</label>
                                <textarea for="CostBreakdown" name="CostBreakdown" value="{{$projects->CostBreakdown}}" class="form-control" rows="5" readonly="readonly"></textarea>
                                <span for="CostBreakdown" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="BenefitAndRisk" name="BenefitAndRisk" class="control-label">Benefit / Risk of not doing</label>
                                <textarea for="BenefitAndRisk" name="BenefitAndRisk" value="{{$projects->BenefitAndRisk}}" class="form-control" rows="5"></textarea>
                                <span for="BenefitAndRisk" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="overflow-x: scroll">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Spend Profile</h3>
                    <div class="card-body">
                        <div id="capex-table">
                    <span class="float-right mb-3 mr-2">
                        <button type="button"
                                class="btn btn-info btn-rounded btn-sm input1"
                                onclick="addRowToCapex($(this))">
                            Add New Row
                            <i class="fas fa-plus-square ml-1"></i>
                        </button>
                    </span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <td rowspan="6"></td>
                                    <td colspan="2"></td>
                                    <td colspan="3" scope="colgroup" class="font-weight-bold text-center border-bottom-dark">Hardware</td>
                                    <td colspan="3" scope="colgroup" class="font-weight-bold text-center border-bottom-primary">Software</td>
                                    <td colspan="3" scope="colgroup" class="font-weight-bold text-center border-bottom-secondary">External Labour</td>
                                    <td colspan="3" scope="colgroup" class="font-weight-bold text-center border-bottom-info">Internal Labour</td>
                                </tr>
                                <tr>
                                    <th class="input1 text-center align-self-center">Year</th>
                                    <th class="input1 text-center align-self-center">Month</th>
                                    <th class="input1 text-center align-self-center">Network</th>
                                    <th class="input1 text-center align-self-center">IT</th>
                                    <th class="input1 text-center align-self-center">Gencap</th>
                                    <th class="input1 text-center align-self-center">Network</th>
                                    <th class="input1 text-center align-self-center">IT</th>
                                    <th class="input1 text-center align-self-center">Gencap</th>
                                    <th class="input1 text-center align-self-center">Network</th>
                                    <th class="input1 text-center align-self-center">IT</th>
                                    <th class="input1 text-center align-self-center">Gencap</th>
                                    <th class="input1 text-center align-self-center">Network</th>
                                    <th class="input1 text-center align-self-center">IT</th>
                                    <th class="input1 text-center align-self-center">Gencap</th>
                                    <th class="input1 text-center align-self-center">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                ?>
                                @foreach($capitalExpenses as $capitalExpense)
                                <tr>
                                    <td></td>
                                    {{--                                    @*<td>--}}
                                    {{--                                        <input for="@Model.CapitalExpenses[i].CapitalExpenseID" class="form-control input1" style="display:none" type="tel" />--}}
                                    {{--                                        <span for="@Model.CapitalExpenses[i].CapitalExpenseID" class="text-danger"></span>--}}
                                    {{--                                    </td>*@--}}
                                    <td>
                                        <div style="width:55px; font-size: 8px;" >
                                            <input class="form-control input1"
                                                   name="CapitalExpenses[{{$i}}][Year]"
                                                   value="{{$capitalExpense->Year}}"
                                                   type="tel" readonly="readonly" />
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;" class="text-white">
                                            <input type="text"
                                                   name="CapitalExpenses[{{$i}}][Month]"
                                                   class="form-control input1"
                                                   readonly="readonly"
                                                   value="{{$capitalExpense->Month}}">
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                            <input type="text"
                                                   name="CapitalExpenses[{{$i}}][Hardware]"
                                                   id="hw"
{{--                                                   value="{{$capitalExpense->Hardware}}" --}}
                                                   value="{{$capitalExpense->Hardware}}" class="form-control capex capital-expenses-0 capex-hw sum1   input1 "
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-hw"), $("#total-capex-hw"));' />
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="CapitalExpenses[{{$i}}][HardwareIT]"
                                               class="form-control input1"
                                               id="hwit"
                                               value="{{$capitalExpense->HardwareIT}}"
                                               class="form-control capex capital-expenses-0 capex-hwit sum1   input1 "
                                               onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-hwit"), $("#total-capex-hwit"));' />
                                        <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="CapitalExpenses[{{$i}}][HardwareGencap]"
                                               class="form-control input1"
                                               id="hwgc"
                                               value="{{$capitalExpense->HardwareGencap}}"
                                                class="form-control capex capital-expenses-0 capex-hwgc sum1   input1 "
                                                onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-hwgc"), $("#total-capex-hwgc"));' />
                                        <span for="@Model.CapitalExpenses[0].HardwareGencap" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="CapitalExpenses[{{$i}}][Software]"
                                               class="form-control input1"
                                               id="sw"
                                               value="{{$capitalExpense->Software}}"
                                                class="form-control capex capital-expenses-0 capex-sw sum1   input1 "
                                                onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-sw"), $("#total-capex-sw"));' />
                                        <span for="@Model.CapitalExpenses[0].Software" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="CapitalExpenses[{{$i}}][SoftwareIT]"
                                               class="form-control input1"
                                               id="swit"
                                               value="{{$capitalExpense->SoftwareIT}}"
                                               class="form-control capex capital-expenses-0 capex-swit sum1   input1 "
                                               onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-swit"), $("#total-capex-swit"));' />
                                        <span for="@Model.CapitalExpenses[0].SoftwareIT" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="CapitalExpenses[{{$i}}][SoftwareGencap]"
                                               class="form-control input1"
                                               id="swgc"
                                               value="{{$capitalExpense->SoftwareGencap}}"
                                            class="form-control capex capital-expenses-0 capex-swgc sum1   input1 "
                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-swgc"), $("#total-capex-swgc"));' />
                                        <span for="@Model.CapitalExpenses[0].SoftwareGencap" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="CapitalExpenses[{{$i}}][ExternalLabourNetwork]"
                                               class="form-control input1"
                                               id="ps"
                                               value="{{$capitalExpense->ExternalLabourNetwork}}"
                                            class="form-control capex capital-expenses-0 capex-ps sum1   input1 "
                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-ps"), $("#total-capex-ps"));' />
                                        <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="CapitalExpenses[{{$i}}][ExternalLabourIT]"
                                               class="form-control input1"
                                               id="tp"
                                               value="{{$capitalExpense->ExternalLabourIT}}"
                                               class="form-control capex capital-expenses-0 capex-tp sum1   input1 "
                                               onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-tp"), $("#total-capex-tp"));' />
                                        <span for="@Model.CapitalExpenses[0].ThirdParty" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="CapitalExpenses[{{$i}}][ExternalLabourGencap]"
                                               class="form-control input1"
                                               id="elgc"
                                               value="{{$capitalExpense->ExternalLabourGencap}}"
                                            class="form-control capex capital-expenses-0 capex-elgc sum1   input1 "
                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-elgc"), $("#total-capex-elgc"));' />
                                        <span for="@Model.CapitalExpenses[0].ExternalLabourGencap" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="CapitalExpenses[{{$i}}][InternalCapitalizedLabourNetwork]"
                                               class="form-control input1"
                                               id="icln"
                                               value="{{$capitalExpense->InternalCapitalizedLabourNetwork}}"
                                            class="form-control capex capital-expenses-0 capex-icln sum1   input1 "
                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-icln"), $("#total-capex-icln"));' />
                                        <span for="@Model.CapitalExpenses[0].InternalCapitalizedLabourNetwork" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="CapitalExpenses[{{$i}}][InternalCapitalizedLabourIT]"
                                               class="form-control input1"
                                               id="iclit"
                                               value="{{$capitalExpense->InternalCapitalizedLabourIT}}"
                                            class="form-control capex capital-expenses-0 capex-iclit sum1   input1 "
                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-iclit"), $("#total-capex-iclit"));' />
                                        <span for="@Model.CapitalExpenses[0].InternalCapitalizedLabourIT" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="CapitalExpenses[{{$i}}][InternalCapitalizedLabourGencap]"
                                               class="form-control input1"
                                               id="iclg"
                                               value="{{$capitalExpense->InternalCapitalizedLabourGencap}}"
                                            class="form-control capex capital-expenses-0 capex-iclg sum1   input1 "
                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-iclg"), $("#total-capex-iclg"));' />
                                        <span for="@Model.CapitalExpenses[0].InternalCapitalizedLabourGencap" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
{{--                                        @*<div style="width: 55px">*@--}}
                                            <input for="@Model.CapitalExpenses[0].Total"
                                                   class="form-control input1"
{{--                                               id="@($"total-capital-expenses-{0}")"--}}
                                                   readonly="readonly"
                                                   type="tel"/>
{{--                                            @*</div>*@--}}
                                        </div>
                                    </td>

                                </tr>
                                    <?php $i++ ?>
                                @endforeach
                                {{--                                @for (var i = 1; i < Model.CapitalExpenses?.Count; i++)--}}
{{--                                {--}}
{{--                                <tr>--}}
{{--                                    <td></td>--}}
{{--                                    --}}{{--                                        @*<td>--}}
{{--                                    --}}{{--                                            <input for="@Model.CapitalExpenses[i].CapitalExpenseID" class="form-control input1" style="display:none" type="tel" />--}}
{{--                                    --}}{{--                                            <span for="@Model.CapitalExpenses[i].CapitalExpenseID" class="text-danger"></span>--}}
{{--                                    --}}{{--                                        </td>*@--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="@Model.CapitalExpenses[i].Year" class="form-control input1" type="tel" readonly="readonly" />--}}
{{--                                            <span for="@Model.CapitalExpenses[i].Year" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 40px">--}}
{{--                                            <input for="@Model.CapitalExpenses[i].Month" class="form-control input1" type="tel" readonly="readonly" />--}}
{{--                                            <span for="@Model.CapitalExpenses[i].Month" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].Hardware" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-hw") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-hw"), $("#total-capex-hw"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].Hardware" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].HardwareIT" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-hwit") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-hwit"), $("#total-capex-hwit"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].HardwareIT" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].HardwareGencap" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-hwgc") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-hwgc"), $("#total-capex-hwgc"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].HardwareGencap" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].Software" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-sw") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-sw"), $("#total-capex-sw"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].Software" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].SoftwareIT" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-swit") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-swit"), $("#total-capex-swit"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].SoftwareIT" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].SoftwareGencap" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-swgc") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-swgc"), $("#total-capex-swgc"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].SoftwareGencap" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].ProfessionalServices" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-ps") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-ps"), $("#total-capex-ps"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].ProfessionalServices" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].ThirdParty" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-tp") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-tp"), $("#total-capex-tp"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].ThirdParty" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].ExternalLabourGencap" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-elgc") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-elgc"), $("#total-capex-elgc"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].ExternalLabourGencap" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].InternalCapitalizedLabourNetwork" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-icln") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-icln"), $("#total-capex-icln"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].InternalCapitalizedLabourNetwork" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].InternalCapitalizedLabourIT" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-iclit") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-iclit"), $("#total-capex-iclit"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].InternalCapitalizedLabourIT" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.CapitalExpenses[i].InternalCapitalizedLabourGencap" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control capex capital-expenses-{i} capex-iclg") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-iclg"), $("#total-capex-iclg"));' />--}}
{{--                                        <span for="@Model.CapitalExpenses[i].InternalCapitalizedLabourGencap" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                                                                        <input for="@Model.CapitalExpenses[i].Total"--}}
{{--                                                                                               class="form-control input1"--}}
{{--                                                                                               id="@($"total-capital-expenses-{i}")"--}}
{{--                                                                                        readonly="readonly"--}}
{{--                                                                                        type="tel"/>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <span class="table-remove">--}}
{{--                                            <button type="button"--}}
{{--                                                    class="btn btn-sm my-0"--}}
{{--                                                    onclick="removeRow($(this))">--}}
{{--                                                <span style="font-size: 1em; color:red;">--}}
{{--                                                    <i class="fas fa-trash-alt"></i>--}}
{{--                                                </span>--}}
{{--                                            </button>--}}
{{--                                        </span>--}}


{{--                                    </td>--}}
{{--                                </tr>--}}
                                {{--                                    }--}}
                                <tr>
                                    <th scope="row" colspan="3" class="input1 text-center align-self-center">
                                        Total
                                    </th>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.Hardware)"--}}
                                               id="total-capex-hw"
                                               readonly="readonly"
                                               type="tel"/>
                                    </td>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.HardwareIT)"--}}
                                               id="total-capex-hwit"
                                               readonly="readonly"
                                               type="tel"/>
                                    </td>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.HardwareGencap)"--}}
                                               id="total-capex-hwgc"
                                               readonly="readonly"
                                               type="tel"/>
                                    </td>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.Software)"--}}
                                               id="total-capex-sw"
                                               readonly="readonly"
                                               type="tel" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.SoftwareIT)"--}}
                                               id="total-capex-swit"
                                               readonly="readonly"
                                               type="tel" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.SoftwareGencap)"--}}
                                               id="total-capex-swgc"
                                               readonly="readonly"
                                               type="tel" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.ProfessionalServices)"--}}
                                               id="total-capex-ps"
                                               readonly="readonly"
                                               type="tel" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.ThirdParty)"--}}
                                               id="total-capex-tp"
                                               readonly="readonly"
                                               type="tel" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.ExternalLabourGencap)"--}}
                                               id="total-capex-elgc"
                                               readonly="readonly"
                                               type="tel" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourNetwork)"--}}
                                               id="total-capex-icln"
                                               readonly="readonly"
                                               type="tel" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourIT)"--}}
                                               id="total-capex-iclit"
                                               readonly="readonly"
                                               type="tel" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
{{--                                               value="@Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourGencap)"--}}
                                               id="total-capex-iclg"
                                               readonly="readonly"
                                               type="tel" />
                                    </td>
                                    <td>
{{--                                        @*<div style="width: 55px">*@--}}
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.Total)"--}}
                                                   id="total-capex"
                                                   readonly="readonly"
                                                   type="tel" />
{{--                                            @*</div>*@--}}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4 class="text-center">Future Capex</h4>
                        <div id="future-capex-table">
                    <span class="float-right mb-3 mr-2">
                        <button type="button"
                                class="btn btn-info btn-rounded btn-sm input1"
                                onclick="addRowToFutureCapex($(this))">
                            Add New Row
                            <i class="fas fa-plus-square ml-1"></i>
                        </button>
                    </span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <td colspan="1"></td>
                                    <td colspan="3" scope="colgroup" class="font-weight-bold text-center border-bottom-dark">Hardware</td>
                                    <td colspan="3" scope="colgroup" class="font-weight-bold text-center border-bottom-primary">Software</td>
                                    <td colspan="3" scope="colgroup" class="font-weight-bold text-center border-bottom-secondary">External Labour</td>
                                    <td colspan="3" scope="colgroup" class="font-weight-bold text-center border-bottom-info">Internal Labour</td>
                                </tr>
                                <tr>
                                    <th class="input1 text-center align-self-center">Year</th>
                                    <th class="input1 text-center align-self-center">Network</th>
                                    <th class="input1 text-center align-self-center">IT</th>
                                    <th class="input1 text-center align-self-center">Gencap</th>
                                    <th class="input1 text-center align-self-center">Network</th>
                                    <th class="input1 text-center align-self-center">IT</th>
                                    <th class="input1 text-center align-self-center">Gencap</th>
                                    <th class="input1 text-center align-self-center">Network</th>
                                    <th class="input1 text-center align-self-center">IT</th>
                                    <th class="input1 text-center align-self-center">Gencap</th>
                                    <th class="input1 text-center align-self-center">Network</th>
                                    <th class="input1 text-center align-self-center">IT</th>
                                    <th class="input1 text-center align-self-center">Gencap</th>
                                    <th class="input1 text-center align-self-center">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                ?>
                                @foreach($futureCapitalExpenses as $futureCapitalExpense)
                                    <tr>
                                    <td>
                                        <input type="text"
                                               name="FutureCapitalExpenses[{{$i}}][Year]"
                                               class="form-control input1"
                                               value="{{$futureCapitalExpense->Year}}" />
                                    </td>

                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="FutureCapitalExpenses[{{$i}}][Hardware]"
                                               class="form-control input1"
                                               value="{{$futureCapitalExpense->Hardware}}"/>
                                    {{--                                               class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                    {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="FutureCapitalExpenses[{{$i}}][HardwareIT]"
                                               class="form-control input1"
                                               value="{{$futureCapitalExpense->HardwareIT}}"/>
                                        {{--                                               class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                        {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="FutureCapitalExpenses[{{$i}}][HardwareGencap]"
                                               class="form-control input1"
                                               value="{{$futureCapitalExpense->HardwareGencap}}"/>
                                        {{--                                               class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                        {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="FutureCapitalExpenses[{{$i}}][Software]"
                                               class="form-control input1"
                                               value="{{$futureCapitalExpense->Software}}"/>
                                        {{--                                               class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                        {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="FutureCapitalExpenses[{{$i}}][SoftwareIT]"
                                               class="form-control input1"
                                               value="{{$futureCapitalExpense->SoftwareIT}}"/>
                                        {{--                                               class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                        {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="FutureCapitalExpenses[{{$i}}][SoftwareGencap]"
                                               class="form-control input1"
                                               value="{{$futureCapitalExpense->SoftwareGencap}}"/>
                                        {{--                                               class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                        {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="FutureCapitalExpenses[{{$i}}][ExternalLabourNetwork]"
                                               class="form-control input1"
                                               value="{{$futureCapitalExpense->ExternalLabourNetwork}}"/>
                                        {{--                                               class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                        {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input  type="text"
                                                name="FutureCapitalExpenses[{{$i}}][ExternalLabourIT]"
                                                class="form-control input1"
                                                value="{{$futureCapitalExpense->ExternalLabourIT}}"/>
                                        {{--                                               class="@($"form-control future-captital-expenses-{0}") input1" type="tel"--}}
                                        {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input  type="text"
                                                name="FutureCapitalExpenses[{{$i}}][ExternalLabourGencap]"
                                                class="form-control input1"
                                                value="{{$futureCapitalExpense->ExternalLabourGencap}}"/>
                                        {{--                                               class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                        {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input  type="text"
                                                name="FutureCapitalExpenses[{{$i}}][InternalCapitalizedLabourNetwork]"
                                                class="form-control input1"
                                                value="{{$futureCapitalExpense->InternalCapitalizedLabourNetwork}}"/>
                                        {{--                                               class="@($"form-control future-captital-expenses-{0}") input1" type="tel"--}}
                                        {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="FutureCapitalExpenses[{{$i}}][InternalCapitalizedLabourIT]"
                                               class="form-control input1"
                                               value="{{$futureCapitalExpense->InternalCapitalizedLabourIT}}"/>
                                        {{--                                               class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                        {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:55px; font-size: 8px;">
                                        <input type="text"
                                               name="FutureCapitalExpenses[{{$i}}][InternalCapitalizedLabourGencap]"
                                               class="form-control input1"
                                               value="{{$futureCapitalExpense->InternalCapitalizedLabourGencap}}"/>
                                        {{--                                               class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                        {{--                                        onchange='updateTotal($("@($".future-captital-expenses-{0}")"), $("@($"#total-future-captital-expenses-{0}")"))' />--}}
                                        </div>
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][total]"
                                               class="form-control input1"
                                               {{--                                               id="@($"total-future-captital-expenses-{0}")"--}}
                                               readonly="readonly" />
                                    </td>
                                        <td>
                                        <span class="table-remove">
                                            <button type="button"
                                                    class="btn btn-sm my-0"
                                                    onclick="removeRow($(this))">
                                                <span style="font-size: 1em; color:red;">
                                                    <i class="fas fa-trash-alt"></i>
                                                </span>
                                            </button>
                                        </span>
                                        </td>
                                </tr>

                                        <?php $i++ ?>
                                @endforeach
                                {{--                                @for (var i = 1; i < Model.FutureCaptitalExpenses?.Count; i++)--}}
                                {{--                                    {--}}
{{--                                <tr>--}}
{{--                                    <td>--}}

{{--                                        <input for="@Model.FutureCaptitalExpenses[i].Year" type="tel"--}}
{{--                                               class="form-control input1" />--}}
{{--                                    </td>--}}

{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].Hardware" class="form-control input1" type="tel"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].HardwareIT" class="form-control input1" type="tel"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].HardwareGencap" class="form-control input1" type="tel"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].Software" class="form-control input1" type="tel"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].SoftwareIT" class="form-control input1" type="tel"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].SoftwareGencap" class="form-control input1" type="tel"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].ProfessionalServices" class="form-control input1" type="tel"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].ThirdParty" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].ExternalLabourGencap" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].InternalCapitalizedLabourNetwork" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].InternalCapitalizedLabourIT" class="form-control input1" type="tel"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:55px; font-size: 8px;">--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].InternalCapitalizedLabourGencap" class="form-control input1" type="tel"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.FutureCaptitalExpenses[i].Total"--}}
{{--                                               class="form-control input1"--}}
{{--                                               --}}{{--                                                   id="@($"total-future-captital-expenses-{i}")"--}}
{{--                                               readonly="readonly" />--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
                                {{--                                    }--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Opex Drag</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                        <span class="float-right mb-3 mr-2">
                            <button type="button"
                                    class="btn btn-info btn-rounded btn-sm input1"
                                    onclick="addRowToOpex($(this))">
                                Add New Row
                                <i class="fas fa-plus-square ml-1"></i>
                            </button>
                        </span>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="input1 text-center align-self-center">Year</th>
                                        <th class="input1 text-center align-self-center">Budget</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    ?>
                                    @foreach($operationalExpenses as $operationalExpense)
                                        <tr>
                                        <td>
                                            <input type="text"
                                                   name="OperationalExpenses[{{$i}}][Year]"
                                                   class="form-control input1"
                                                   value="{{$operationalExpense->Year}}" />
                                        </td>
                                        <td>
                                            <input type="text"
                                                   name="OperationalExpenses[{{$i}}][Budget]"
                                                   class="form-control input1"
                                                   value="{{$operationalExpense->Budget}}"/>
                                        </td>
                                            <td>
                                            <span class="table-remove">
                                                <button type="button"
                                                        class="btn btn-sm my-0"
                                                        onclick="removeRow($(this))">
                                                    <span style="font-size: 1em; color:red;">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </span>
                                                </button>
                                            </span>
                                            </td>

                                    </tr>
                                            <?php $i++ ?>
                                    @endforeach
                                    {{--                                    @for (var i = 1; i < Model.OperationalExpenses?.Count; i++)--}}
                                    {{--                                        {--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <input for="@Model.OperationalExpenses[i].Year" class="form-control input1" type="tel" />--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <input for="@Model.OperationalExpenses[i].Budget" class="form-control input1" type="tel" />--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
                                    {{--                                        }--}}
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group col">
                                <label for="OpexComment" class="control-label font-weight-bold input1">Opex Comment</label>
                                <textarea for="OpexComment" class="form-control input1" rows="6"></textarea>
                                <span for="OpexComment" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Allocation</h3>
                    <div class="card-body">
                        <div class="col-12">
                            <span for="FunctionCable" class=" d-block">Cable</span>
                            <span for="FunctionWireless" class="text-danger d-block"></span>
                            <span for="FunctionRogersForBusiness" class="text-danger d-block"></span>
                            <span for="FunctionMedia" class="text-danger d-block"></span>
                            <span for="FunctionRogersSmartHomeMonitoring" class="text-danger d-block"></span>
                            <span for="FunctionBank" class="text-danger d-block"></span>
                            <span for="FunctionRogersCommunicationsIncorporated" class="text-danger d-block"></span>
                            <span for="TotalAllocation" class="text-danger"></span>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="FunctionCable" class="control-label font-weight-bold input1"></label>
                                <input for="FunctionCable" class="form-control allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="FunctionWireless" class="control-label font-weight-bold input1"></label>
                                <input for="FunctionWireless" class="form-control allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="FunctionRogersForBusiness" class="control-label font-weight-bold input1"></label>
                                <input for="FunctionRogersForBusiness" class="form-control allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="FunctionMedia" class="control-label font-weight-bold input1"></label>
                                <input for="FunctionMedia" class="form-control allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="FunctionRogersSmartHomeMonitoring" class="control-label font-weight-bold input1"></label>
                                <input for="FunctionRogersSmartHomeMonitoring" class="form-control allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="FunctionBank" class="control-label font-weight-bold input1"></label>
                                <input for="FunctionBank" class="form-control allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="FunctionRogersCommunicationsIncorporated" class="control-label font-weight-bold input1"></label>
                                <input for="FunctionRogersCommunicationsIncorporated" class="form-control allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="TotalAllocation" class="control-label font-weight-bold input1"></label>
                                <input for="TotalAllocation" class="form-control input1" readonly="readonly" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Regional Allocation</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <span for="GreaterTorontoArea" class="text-danger d-block"></span>
                                <span for="Ontario" class="text-danger d-block"></span>
                                <span for="Quebec" class="text-danger d-block"></span>
                                <span for="BritishColumbia" class="text-danger d-block"></span>
                                <span for="Alberta" class="text-danger d-block"></span>
                                <span for="MidWest" class="text-danger d-block"></span>
                                <span for="Atlantic" class="text-danger d-block"></span>
                                <span for="TotalRegionalAllocation" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="GreaterTorontoArea" class="control-label font-weight-bold input1"></label>
                                <input for="GreaterTorontoArea" class="form-control reginal-allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="Ontario" class="control-label font-weight-bold input1"></label>
                                <input for="Ontario" class="form-control reginal-allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="Quebec" class="control-label font-weight-bold input1"></label>
                                <input for="Quebec" class="form-control reginal-allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="BritishColumbia" class="control-label font-weight-bold input1"></label>
                                <input for="BritishColumbia" class="form-control reginal-allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="Alberta" class="control-label input1 font-weight-bold"></label>
                                <input for="Alberta" class="form-control reginal-allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="MidWest" class="control-label font-weight-bold input1"></label>
                                <input for="MidWest" class="form-control reginal-allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="Atlantic" class="control-label font-weight-bold input1"></label>
                                <input for="Atlantic" class="form-control reginal-allocation input1" />
                            </div>
                            <div class="form-group col">
                                <label for="TotalRegionalAllocation" class="control-label font-weight-bold input1"></label>
                                <input for="TotalRegionalAllocation" class="form-control input1" readonly="readonly" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Vendor Breakdown</h3>
                    <div class="card-body">
                        <div id="vendor-table">
                    <span class="float-right mb-3 mr-2">
                        <button type="button"
                                {{--                                data-url="@Url.Action("VendorsDropDownList")"--}}
                                class="btn btn-info btn-rounded btn-sm input1"
                                onclick="addRowToVendor($(this))">
                            Add New Row
                            <i class="fas fa-plus-square ml-1"></i>
                        </button>
                    </span>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                <tr>
                                    <th class="input1 text-center align-self-center">Vendor</th>
                                    <th class="input1 text-center align-self-center">Hardware</th>
                                    <th class="input1 text-center align-self-center">Software</th>
                                    <th class="input1 text-center align-self-center">ExternalLabour</th>
                                    <th class="input1 text-center align-self-center">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                ?>
                                @foreach($vendorBudgets as $vendorBudget)
                                    <tr>
                                    <td>
                                        <select for="@Model.VendorBudgets[0].VendorID" class="form-control input1" asp-items="ViewBag.VendorID">
                                            @foreach($vendors as $item)
                                                <option value="{{$item->id}}">{{$item->VendorID}}</option>
                                            @endforeach
                                        </select>
                                        <span for="@Model.VendorBudgets[0].VendorID" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <div style="width:150px; font-size: 8px;">
                                        <input type="text"
                                               name="VendorBudgets[{{$i}}][Hardware]"
                                               class="form-control input1"
                                               value="{{$vendorBudget->Hardware}}"/>
                                        {{--                                               class="@($"form-control vendor-budget vendor-budgets-{0} vendor-budget-hw") input1" type="tel"--}}
                                        {{--                                        onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($("@($".vendor-budgets-{0}")"), $("@($"#total-vendor-budgets-{0}")")); updateTotal($(".vendor-budget-hw"), $("#total-vendors-hw"));' />--}}
                                        <span for="@Model.VendorBudgets[0].Hardware" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:150px; font-size: 8px;">
                                        <input type="text"
                                               name="VendorBudgets[{{$i}}][Software]"
                                               class="form-control input1"
                                               value="{{$vendorBudget->Software}}"/>
                                        {{--                                               class="@($"form-control vendor-budget vendor-budgets-{0} vendor-budget-sw") input1" type="tel"--}}
                                        {{--                                        onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($("@($".vendor-budgets-{0}")"), $("@($"#total-vendor-budgets-{0}")")); updateTotal($(".vendor-budget-sw"), $("#total-vendors-sw"));' />--}}
                                        <span for="@Model.VendorBudgets[0].Software" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:150px; font-size: 8px;">
                                        <input type="text"
                                               name="VendorBudgets[{{$i}}][ExternalLabour]"
                                               class="form-control input1"
                                               value="{{$vendorBudget->ExternalLabour}}"/>
                                        {{--                                               class="@($"form-control vendor-budget vendor-budgets-{0} vendor-budget-el") input1" type="tel"--}}
                                        {{--                                        onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($("@($".vendor-budgets-{0}")"), $("@($"#total-vendor-budgets-{0}")")); updateTotal($(".vendor-budget-el"), $("#total-vendors-el"));' />--}}
                                        <span for="@Model.VendorBudgets[0].ExternalLabour" class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <input for="@Model.VendorBudgets[0].Total"
                                               class="form-control input1"
                                               {{--                                               id="@($"total-vendor-budgets-{0}")"--}}
                                               readonly="readonly" />
                                    </td>
                                        <td>
                                        <span class="table-remove">
                                            <button type="button"
                                                    class="btn btn-sm my-0"
                                                    onclick="removeRow($(this))">
                                                <span style="font-size: 1em; color:red;">
                                                    <i class="fas fa-trash-alt"></i>
                                                </span>
                                            </button>
                                        </span>
                                        </td>

                                </tr>
                                {{--                                @for (var i = 1; i < Model.VendorBudgets?.Count; i++)--}}
                                {{--                                    {--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <select for="@Model.VendorBudgets[i].VendorID" class="form-control input1" asp-items="ViewBag.VendorID">--}}
{{--                                            <option value="">-- Select Vendor --</option>--}}
{{--                                        </select>--}}
{{--                                        <span for="@Model.VendorBudgets[i].VendorID" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:150px; font-size: 8px;">--}}
{{--                                        <input for="@Model.VendorBudgets[i].Hardware" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control vendor-budget vendor-budgets-{i} vendor-budget-hw") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($("@($".vendor-budgets-{i}")"), $("@($"#total-vendor-budgets-{i}")")); updateTotal($(".vendor-budget-hw"), $("#total-vendors-hw"));' />--}}
{{--                                        <span for="@Model.VendorBudgets[i].Hardware" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:150px; font-size: 8px;">--}}
{{--                                        <input for="@Model.VendorBudgets[i].Software" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control vendor-budget vendor-budgets-{i} vendor-budget-sw") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($("@($".vendor-budgets-{i}")"), $("@($"#total-vendor-budgets-{i}")")); updateTotal($(".vendor-budget-sw"), $("#total-vendors-sw"));' />--}}
{{--                                        <span for="@Model.VendorBudgets[i].Software" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width:150px; font-size: 8px;">--}}
{{--                                        <input for="@Model.VendorBudgets[i].ExternalLabour" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                   class="@($"form-control vendor-budget vendor-budgets-{i} vendor-budget-el") input1" type="tel"--}}
{{--                                        --}}{{--                                            onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($("@($".vendor-budgets-{i}")"), $("@($"#total-vendor-budgets-{i}")")); updateTotal($(".vendor-budget-el"), $("#total-vendors-el"));' />--}}
{{--                                        <span for="@Model.VendorBudgets[i].ExternalLabour" class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.VendorBudgets[i].Total"--}}
{{--                                               class="form-control input1"--}}
{{--                                               --}}{{--                                                   id="@($"total-vendor-budgets-{i}")"--}}
{{--                                               readonly="readonly" />--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
                                {{--                                    }--}}
                                <tr>
                                    <th scope="row" class="input1 text-center align-self-center">
                                        Total
                                    </th>
                                    <td>
                                        <input class="form-control input1"
                                               id="total-vendors-hw"
{{--                                               value="@Model.VendorBudgets.Sum(x => x.Hardware)"--}}
                                               readonly="readonly" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
                                               id="total-vendors-sw"
{{--                                               value="@Model.VendorBudgets.Sum(x => x.Software)"--}}
                                               readonly="readonly" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
                                               id="total-vendors-el"
{{--                                               value="@Model.VendorBudgets.Sum(x => x.ExternalLabour)"--}}
                                               readonly="readonly" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
                                               id="total-vendors-budget"
{{--                                               value="@Model.VendorBudgets.Sum(x => x.Total)"--}}
                                               readonly="readonly" />
                                    </td>
                                </tr>
                                        <?php $i++ ?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Decomm Details</h3>
                    <div class="card-body">
                        <div id="decom-table">
                    <span class="float-right mb-3 mr-2">
                        <button type="button"
                                class="btn btn-info btn-rounded btn-sm input1"
                                onclick="addRowToDecom($(this))">
                            Add New Row
                            <i class="fas fa-plus-square ml-1"></i>
                        </button>
                    </span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="input1 text-center align-self-center">Year</th>
                                    <th class="input1 text-center align-self-center">Quarter</th>
                                    <th class="input1 text-center align-self-center">Internal Labour</th>
                                    <th class="input1 text-center align-self-center">External Labour</th>
                                    <th class="input1 text-center align-self-center">Estimated Savings</th>
                                    <th class="input1 text-center align-self-center"># Of Platforms</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                ?>
                                @foreach($decomissions as $decomission)
                                <tr>
                                    <td>
                                        <input type="text"
                                               name="Decommissions[{{$i}}][Year]"
                                               class="form-control input1"
                                               value="{{$decomission->Year}}"/>
                                        <span for="@Model.Decommissions[0].Year" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input type="text"
                                               name="Decommissions[{{$i}}][Quarter]"
                                               class="form-control input1"
                                               value="{{$decomission->Quarter}}"/>
                                        <span for="@Model.Decommissions[0].Quarter" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input type="text"
                                               name="Decommissions[{{$i}}][InternalLabour]"
                                               class="form-control input1"
                                               value="{{$decomission->InternalLabour}}"
                                               onchange='updateTotal($(".decom-il"), $("#total-decom-il"));' />
                                        <span for="@Model.Decommissions[0].InternalLabour" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input type="text"
                                               name="Decommissions[{{$i}}][ExternalLabour]"
                                               class="form-control input1"
                                               value="{{$decomission->ExternalLabour}}"
                                               onchange='updateTotal($(".decom-el"), $("#total-decom-el"));' />
                                        <span for="@Model.Decommissions[0].ExternalLabour" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input type="text"
                                               name="Decommissions[{{$i}}][EstimatedSaving]"
                                               class="form-control input1"
                                               value="{{$decomission->EstimatedSaving}}"
                                               onchange='updateTotal($(".decom-saving"), $("#total-decom-saving"));' />
                                        <span for="@Model.Decommissions[0].EstimatedSaving" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input type="text"
                                               name="Decommissions[{{$i}}][NumberOfPlatform]"
                                               class="form-control input1"
                                               value="{{$decomission->NumberOfPlatform}}"
                                               onchange='updateTotal($(".decom-platform"), $("#total-decom-platform"));' />
                                        <span for="@Model.Decommissions[0].NumberOfPlatform" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <span class="table-remove">
                                            <button type="button"
                                                    class="btn btn-sm my-0"
                                                    onclick="removeRow($(this))">
                                                <span style="font-size: 1em; color:red;">
                                                    <i class="fas fa-trash-alt"></i>
                                                </span>
                                            </button>
                                        </span>
                                    </td>

                                </tr>
                                {{--                                @for (var i = 1; i < Model.Decommissions?.Count; i++)--}}
                                {{--                                    {--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.Decommissions[i].Year"--}}
{{--                                               class="form-control input1" type="tel" />--}}
{{--                                        <span for="@Model.Decommissions[i].Year" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.Decommissions[i].Quarter"--}}
{{--                                               class="form-control input1" type="tel" />--}}
{{--                                        <span for="@Model.Decommissions[i].Quarter" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.Decommissions[i].InternalLabour"--}}
{{--                                               class="form-control decom-il input1" type="tel"--}}
{{--                                               onchange='updateTotal($(".decom-il"), $("#total-decom-il"));' />--}}
{{--                                        <span for="@Model.Decommissions[i].InternalLabour" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.Decommissions[i].ExternalLabour"--}}
{{--                                               class="form-control decom-el input1" type="tel"--}}
{{--                                               onchange='updateTotal($(".decom-el"), $("#total-decom-el"));' />--}}
{{--                                        <span for="@Model.Decommissions[i].ExternalLabour" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.Decommissions[i].EstimatedSaving"--}}
{{--                                               class="form-control decom-saving input1" type="tel"--}}
{{--                                               onchange='updateTotal($(".decom-saving"), $("#total-decom-saving"));' />--}}
{{--                                        <span for="@Model.Decommissions[i].EstimatedSaving" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.Decommissions[i].NumberOfPlatform"--}}
{{--                                               class="form-control decom-platform input1" type="tel"--}}
{{--                                               onchange='updateTotal($(".decom-platform"), $("#total-decom-platform"));' />--}}
{{--                                        <span for="@Model.Decommissions[i].NumberOfPlatform" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
                                {{--                                    }--}}
                                <tr>
                                    <th scope="row" colspan="2" class="input1 text-center align-self-center">
                                        Total
                                    </th>
                                    <td>
                                        <input class="form-control input1"
                                               id="total-decom-il"
{{--                                               value="@Model.Decommissions.Sum(x => x.InternalLabour)"--}}
                                               readonly="readonly" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
                                               id="total-decom-el"
{{--                                               value="@Model.Decommissions.Sum(x => x.ExternalLabour)"--}}
                                               readonly="readonly" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
                                               id="total-decom-saving"
{{--                                               value="@Model.Decommissions.Sum(x => x.EstimatedSaving)"--}}
                                               readonly="readonly" />
                                    </td>
                                    <td>
                                        <input class="form-control input1"
                                               id="total-decom-platform"
{{--                                               value="@Model.Decommissions.Sum(x => x.NumberOfPlatform)"--}}
                                               readonly="readonly" />
                                    </td>
                                </tr>
                                    <?php $i++ ?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h4 class="text-center">Future Decom</h4>
                        <div>
                    <span class="float-right mb-3 mr-2">
                        <button type="button"
                                class="btn btn-info btn-rounded btn-sm input1"
                                onclick="addRowToFutureDecom($(this))">
                            Add New Row
                            <i class="fas fa-plus-square ml-1"></i>
                        </button>
                    </span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="input1 text-center align-self-center">Year</th>
                                    <th class="input1 text-center align-self-center">Internal Labour</th>
                                    <th class="input1 text-center align-self-center">External Labour</th>
                                    <th class="input1 text-center align-self-center">Estimated Savings</th>
                                    <th class="input1 text-center align-self-center"># Of Platforms</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                ?>
                                @foreach($futuredecomissions as $futuredecomission)
                                <tr>
                                    <td>
                                        <input type="text"
                                               name="FutureDecommissions[{{$i}}][Year]"
                                               class="form-control input1"
                                               value="{{$futuredecomission->Year}}" />
                                        <span for="@Model.FutureDecommissions[0].Year" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input type="text"
                                               name="FutureDecommissions[{{$i}}][InternalLabour]"
                                               class="form-control input1"
                                               value="{{$futuredecomission->InternalLabour}}" />
                                        <span for="@Model.FutureDecommissions[0].InternalLabour" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input type="text"
                                               name="FutureDecommissions[{{$i}}][ExternalLabour]"
                                               class="form-control input1"
                                               value="{{$futuredecomission->ExternalLabour}}" />
                                        <span for="@Model.FutureDecommissions[0].ExternalLabour" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input type="text"
                                               name="FutureDecommissions[{{$i}}][EstimatedSavings]"
                                               class="form-control input1"
                                               value="{{$futuredecomission->EstimatedSavings}}" />
                                        <span class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input type="text"
                                               name="FutureDecommissions[{{$i}}][NumberOfPlatform]"
                                               class="form-control input1"
                                               value="{{$futuredecomission->NumberOfPlatform}}" />
                                        <span for="@Model.FutureDecommissions[0].NumberOfPlatform" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <span class="table-remove">
                                            <button type="button"
                                                    class="btn btn-sm my-0"
                                                    onclick="removeRow($(this))">
                                                <span style="font-size: 1em; color:red;">
                                                    <i class="fas fa-trash-alt"></i>
                                                </span>
                                            </button>
                                        </span>
                                    </td>

                                </tr>
                                {{--                                @for (var i = 1; i < Model.FutureDecommissions?.Count; i++)--}}
                                {{--                                    {--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.FutureDecommissions[i].Year" class="form-control input1" type="tel" />--}}
{{--                                        <span for="@Model.FutureDecommissions[i].Year" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.FutureDecommissions[i].InternalLabour" class="form-control input1" type="tel" />--}}
{{--                                        <span for="@Model.FutureDecommissions[i].InternalLabour" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.FutureDecommissions[i].ExternalLabour" class="form-control input1" type="tel" />--}}
{{--                                        <span for="@Model.FutureDecommissions[i].ExternalLabour" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.FutureDecommissions[i].EstimatedSaving" class="form-control input1" type="tel" />--}}
{{--                                        <span for="@Model.FutureDecommissions[i].EstimatedSaving" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@Model.FutureDecommissions[i].NumberOfPlatform" class="form-control input1" type="tel" />--}}
{{--                                        <span for="@Model.FutureDecommissions[i].NumberOfPlatform" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
                                {{--                                    }--}}
                                    <?php $i++ ?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="DecomExternalLabourNote" class="control-label font-weight-bold input1">DecomExternalLabourNote</label>
                                <textarea for="DecomExternalLabourNote" class="form-control input1" rows="6"></textarea>
                                <span for="DecomExternalLabourNote" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="DecomInternalLabourNote" class="control-label font-weight-bold input1">DecomInternalLabourNote</label>
                                <textarea for="DecomInternalLabourNote" class="form-control input1" rows="6"></textarea>
                                <span for="DecomInternalLabourNote" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="DecomEstimatedSavingNote" class="control-label font-weight-bold input1">DecomEstimatedSavingNote</label>
                                <textarea for="DecomEstimatedSavingNote" class="form-control input1" rows="6"></textarea>
                                <span for="DecomEstimatedSavingNote" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="DecomNumberOfPlatformNote" class="control-label font-weight-bold input1">DecomNumberOfPlatformNote</label>
                                <textarea for="DecomNumberOfPlatformNote" class="form-control input1" rows="6"></textarea>
                                <span for="DecomNumberOfPlatformNote" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Benefits:Revenue</h3>
                <div class="card-body">
                    <table class="table sum_table" style="white-space: nowrap">
                        <thead>

                        <tr>
                            <td></td>
{{--                            dynamically change years--}}
                            <th scope="col" class="input1 text-center align-self-center">2023</th>
                            <th scope="col" class="input1 text-center align-self-center">2024</th>
                            <th scope="col" class="input1 text-center align-self-center">2025</th>
                            <th scope="col" class="input1 text-center align-self-center">3 Year Total</th>


                        </tr>
                        <tbody>
                        @foreach($benefits as $benefit)
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Revenue Increase</th>
                            {{--                            @{--}}
                            {{--                            if (Model.Benefit == null)--}}
                            {{--                            {--}}
                            {{--                            Console.WriteLine("benefit is null");--}}
                            {{--                            }--}}
                            {{--                            }--}}
                            <td>
                                <input
                                    type="text"
                                    name="RevenueIncrease2022"
                                    class="form-control input1"
                                    value="{{$benefit->RevenueIncrease2022}}"/>
                                {{--                                       class="@($"form-control revenue revenue-table revenue-revinc2022 revenue2022 revenuetotal") input1"--}}
                                {{--                                onchange='updateTotal($(".revenue"), $("#total-revenue-table")); updateTotal($("@($".revenue-table")"), $("@($"#total-revenue-table")"));--}}
                                {{--                                updateTotal($(".revenue-revinc2022"), $("#total-revenue-revinc2022")); updateTotal($(".revenue2022"), $("#total-revenue2022")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />--}}

                                <span for="@Model.Benefit.RevenueIncrease2022" class="text-danger"></span>
                            </td>
                            <td>
                                <input type="text"
                                       name="RevenueIncrease2023"
                                       class="form-control input1"
                                       value="{{$benefit->RevenueIncrease2023}}"/>
                                {{--                                       class="@($"form-control revenue revenue-table revenue-revinc2023 revenue2023 revenuetotal") input1" onchange='updateTotal($(".revenue"), $("#total-revenue-table")); updateTotal($("@($".revenue-table")"), $("@($"#total-revenue-table")")); updateTotal($(".revenue-revinc2023"), $("#total-revenue-revinc2023")); updateTotal($(".revenue2023"), $("#total-revenue2023")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />--}}

                                <span for="@Model.Benefit.RevenueIncrease2023" class="text-danger"></span>
                            </td>
                            <td>
                                <input type="text"
                                       name="RevenueIncrease2024"
                                       class="form-control input1"
                                       value="{{$benefit->RevenueIncrease2024}}"/>
                                {{--                                       class="@($"form-control revenue revenue-table revenue-revinc2024 revenue2024 revenuetotal") input1" onchange='updateTotal($(".revenue"), $("#total-revenue-table")); updateTotal($("@($".revenue-table")"), $("@($"#total-revenue-table")")); updateTotal($(".revenue-revinc2024"), $("#total-revenue-revinc2024")); updateTotal($(".revenue2024"), $("#total-revenue2024")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />--}}

                                <span for="@Model.Benefit.RevenueIncrease2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="@Model.Benefit.TotalRevenueInc"
                                       class="form-control  input1"
                                       {{--                                       id="@($"total-revenue-table")"--}}
                                       readonly="readonly" />
                            </td>

                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Revenue Protection</th>
                            <td>
                                <input type="text"
                                       name="RevenueProtection2022"
                                       class="form-control input1"
                                       value="{{$benefit->RevenueProtection2022}}" />
                                {{--                                       class="@($"form-control revenueprot revenue-prot-table revenueprot-revinc2022 revenue2022 revenuetotal") input1 val2" onchange='updateTotal($(".revenue-prot"), $("#total-revenue-prot-table")); updateTotal($("@($".revenue-prot-table")"), $("@($"#total-revenue-prot-table")")); updateTotal($(".revenueprot-revinc2022"), $("#total-revenueprot-revinc2022")); updateTotal($(".revenue2022"), $("#total-revenue2022")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />--}}

                                <span for="@Model.Benefit.RevenueProtection2022" class="text-danger"></span>
                            </td>
                            <td>
                                <input type="text"
                                       name="RevenueProtection2023"
                                       class="form-control input1"
                                       value="{{$benefit->RevenueProtection2023}}"/>
                                {{--                                       class="@($"form-control revenueprot revenue-prot-table revenueprot-revinc2023 revenue2023 revenuetotal") input1" onchange='updateTotal($(".revenue-prot"), $("#total-revenue-prot-table")); updateTotal($("@($".revenue-prot-table")"), $("@($"#total-revenue-prot-table")")); updateTotal($(".revenueprot-revinc2023"), $("#total-revenueprot-revinc2023")); updateTotal($(".revenue2023"), $("#total-revenue2023")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />--}}

                                <span for="@Model.Benefit.RevenueProtection2023" class="text-danger"></span>
                            </td>
                            <td>
                                <input type="text"
                                       name="RevenueProtection2024"
                                       class="form-control input1"
                                       value="{{$benefit->RevenueProtection2024}}" />
                                {{--                                       class="@($"form-control revenueprot revenue-prot-table revenueprot-revinc2024 revenue2024 revenuetotal") input1" onchange='updateTotal($(".revenue-prot"), $("#total-revenue-prot-table")); updateTotal($("@($".revenue-prot-table")"), $("@($"#total-revenue-prot-table")")); updateTotal($(".revenueprot-revinc2024"), $("#total-revenueprot-revinc2024")); updateTotal($(".revenue2024"), $("#total-revenue2024")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />--}}

                                <span for="@Model.Benefit.RevenueProtection2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="@Model.Benefit.TotalRevenueProt"
                                       class="form-control  input1"
                                       {{--                                       id="@($"total-revenue-prot-table")"--}}
                                       readonly="readonly" />
                            </td>

                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Other Revenue</th>
                            <td class="rowDataSd">
                                <input type="text"
                                       name="OtherRevenue2022"
                                       class="form-control input1"
                                       value="{{$benefit->OtherRevenue2022}}"/>
                                {{--                                       class="@($"form-control revenueother revenue-other-table revenueother-otherrev2022 revenue2022 revenuetotal") input1" onchange='updateTotal($(".revenue-other"), $("#total-revenue-other-table")); updateTotal($("@($".revenue-other-table")"), $("@($"#total-revenue-other-table")")); updateTotal($(".revenueother-otherrev2022"), $("#total-revenueother-otherrev2022")); updateTotal($(".revenue2022"), $("#total-revenue2022")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />--}}

                                <span for="@Model.Benefit.OtherRevenue2022" class="text-danger"></span>
                            </td>
                            <td class="rowDataSd">
                                <input type="text"
                                       name="OtherRevenue2023"
                                       class="form-control input1"
                                       value="{{$benefit->OtherRevenue2023}}"/>
                                {{--                                       class="@($"form-control revenueother revenue-other-table revenueother-otherrev2023 revenue2023 revenuetotal") input1" onchange='updateTotal($(".revenue-other"), $("#total-revenue-other-table")); updateTotal($("@($".revenue-other-table")"), $("@($"#total-revenue-other-table")")); updateTotal($(".revenueother-otherrev2023"), $("#total-revenueother-otherrev2023")); updateTotal($(".revenue2023"), $("#total-revenue2023")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />--}}

                                <span for="@Model.Benefit.OtherRevenue2023" class="text-danger"></span>
                            </td>
                            <td class="rowDataSd">
                                <input type="text"
                                       name="OtherRevenue2024"
                                       class="form-control input1"
                                       value="{{$benefit->OtherRevenue2024}}"/>
                                {{--                                       class="@($"form-control revenueother revenue-other-table revenueother-otherrev2024 revenue2024 revenuetotal") input1" onchange='updateTotal($(".revenue-other"), $("#total-revenue-other-table")); updateTotal($("@($".revenue-other-table")"), $("@($"#total-revenue-other-table")")); updateTotal($(".revenueother-otherrev2024"), $("#total-revenueother-otherrev2024")); updateTotal($(".revenue2024"), $("#total-revenue2024")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />--}}

                                <span for="@Model.Benefit.OtherRevenue2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="@Model.Benefit.TotalOtherRevenue"
                                       class="form-control  input1"
                                       {{--                                       id="@($"total-revenue-other-table")"--}}
                                       readonly="readonly" />
                            </td>

                        </tr>

                        <tr>


                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">
                                Total
                            </th>

                            {{--                            @if (@Model.Benefit != null)--}}
                            {{--                                {--}}

                            <td>
                                <input class="form-control  input1"
{{--                                       value="@Model.Benefit.TotalRevenue2022"--}}
                                       id="total-revenue2022"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control  input1"
{{--                                       value="@Model.Benefit.TotalRevenue2023"--}}
                                       id="total-revenue2023"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control  input1"
{{--                                       value="@Model.Benefit.TotalRevenue2024"--}}
                                       id="total-revenue2024"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control  input1"
{{--                                       value="@Model.Benefit.TotalRevenue"--}}
                                       id="total-revenuetotal"
                                       readonly="readonly" />
                            </td>
                            {{--                                }--}}
                            {{--                                else--}}
                            {{--                                {--}}
                            {{--                                <td>--}}
                            {{--                                    <input class="form-control  input1"--}}
                            {{--                                           value="0"--}}
                            {{--                                           id="total-revenue2022"--}}
                            {{--                                           readonly="readonly" />--}}
                            {{--                                </td>--}}
                            {{--                                <td>--}}
                            {{--                                    <input class="form-control  input1"--}}
                            {{--                                           value="0"--}}
                            {{--                                           id="total-revenue2023"--}}
                            {{--                                           readonly="readonly" />--}}
                            {{--                                </td>--}}
                            {{--                                <td>--}}
                            {{--                                    <input class="form-control  input1"--}}
                            {{--                                           value="0"--}}
                            {{--                                           id="total-revenue2024"--}}
                            {{--                                           readonly="readonly" />--}}
                            {{--                                </td>--}}
                            {{--                                <td>--}}
                            {{--                                    <input class="form-control  input1"--}}
                            {{--                                           value="0"--}}
                            {{--                                           id="total-revenuetotal"--}}
                            {{--                                           readonly="readonly" />--}}
                            {{--                                </td>--}}
                            {{--                                }--}}

                        </tr>
                        @endforeach
                        </tbody>
                        </thead>
                    </table>


                </div>


                <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Benefits:Cost</h3>
                <div class="card-body">
                    <table class="table" style="white-space: nowrap">
                        <thead>

                        <tr>
                            <td></td>
                            <th scope="col" class="input1 text-center align-self-center">2023</th>
                            <th scope="col" class="input1 text-center align-self-center">2024</th>
                            <th scope="col" class="input1 text-center align-self-center">2025</th>
                            <th scope="col" class="input1 text-center align-self-center">3 Year Total</th>


                        </tr>
                        <tbody>
                        @foreach($benefits as $benefit)
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Opex Savings</th>

                            <td>
                                <input type="text"
                                       name="OpexSavings2022"
                                       class="form-control input1"
                                       value="{{$benefit->OpexSavings2022}}">
                                {{--                                       class="@($"form-control cost cost-table cost-opexsavings2022 cost2022 opextotal") input1" onchange='updateTotal($(".cost"), $("#total-cost-table")); updateTotal($("@($".cost-table")"), $("@($"#total-cost-table")"));--}}
                                {{--                                updateTotal($(".cost-opexsavings2022"), $("#total-cost-opexsavings2022")); updateTotal($(".cost2022"), $("#total-cost2022")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                <span for="@Model.Benefit.OpexSavings2022" class="text-danger"></span>
                            </td>
                            <td>
                                <input type="text"
                                       name="OpexSavings2023"
                                       class="form-control input1"
                                       value="{{$benefit->OpexSavings2023}}"/>
                                {{--                                       class="@($"form-control cost cost-table cost-opexsavings2023 cost2023 opextotal") input1"--}}
                                {{--                                onchange='updateTotal($(".cost"), $("#total-cost-table")); updateTotal($("@($".cost-table")"), $("@($"#total-cost-table")"));--}}
                                {{--                                updateTotal($(".cost-opexsavings2023"), $("#total-cost-opexsavings2023")); updateTotal($(".cost2023"), $("#total-cost2023")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                <span for="@Model.Benefit.OpexSavings2023" class="text-danger"></span>
                            </td>
                            <td>
                                <input type="text"
                                       name="OpexSavings2024"
                                       class="form-control input1"
                                       value="{{$benefit->OpexSavings2024}}"/>
                                {{--                                       class="@($"form-control cost cost-table cost-opexsavings2024 cost2024 opextotal") input1" onchange='updateTotal($(".cost"), $("#total-cost-table"));--}}
                                {{--                                updateTotal($("@($".cost-table")"), $("@($"#total-cost-table")"));--}}
                                {{--                                updateTotal($(".cost-opexsavings2024"), $("#total-cost-opexsavings2024"));--}}
                                {{--                                updateTotal($(".cost2024"), $("#total-cost2024")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                <span for="@Model.Benefit.OpexSavings2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="@Model.Benefit.TotalOpexSavings"
                                       class="form-control input1"
                                       {{--                                       id="@($"total-cost-table")"--}}
                                       readonly="readonly" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Opex Avoidance</th>
                            <td>
                                <input type="text"
                                       name="OpexAvoidance2022"
                                       class="form-control input1"
                                       value="{{$benefit->OpexAvoidance2022}}"/>
                                {{--                                       class="@($"form-control costav costav-table costav-opexavoidance2022 cost2022 opextotal") input1" onchange='updateTotal($(".costav"), $("#total-costav-table"));--}}
                                {{--                                updateTotal($("@($".costav-table")"), $("@($"#total-costav-table")"));--}}
                                {{--                                updateTotal($(".costav-opexavoidance2022"), $("#total-costav-opexavoidance2022"));--}}
                                {{--                                updateTotal($(".cost2022"), $("#total-cost2022")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                <span for="@Model.Benefit.OpexAvoidance2022" class="text-danger"></span>
                            </td>
                            <td>
                                <input type="text"
                                       name="OpexAvoidance2023"
                                       class="form-control input1"
                                       value="{{$benefit->OpexAvoidance2023}}"/>
                                {{--                                       class="@($"form-control costav costav-table costav-opexavoidance2023 cost2023 opextotal") input1"--}}
                                {{--                                onchange='updateTotal($(".costav"), $("#total-costav-table"));--}}
                                {{--                                updateTotal($("@($".costav-table")"), $("@($"#total-costav-table")"));--}}
                                {{--                                updateTotal($(".costav-opexavoidance2023"), $("#total-costav-opexavoidance2023"));--}}
                                {{--                                updateTotal($(".cost2023"), $("#total-cost2023")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                <span for="@Model.Benefit.OpexAvoidance2023" class="text-danger"></span>
                            </td>
                            <td>
                                <input type="text"
                                       name="OpexAvoidance2024"
                                       class="form-control input1"
                                       value="{{$benefit->OpexAvoidance2024}}"/>
                                {{--                                       class="@($"form-control costav costav-table costav-opexavoidance2024 cost2024 opextotal") input1"--}}
                                {{--                                onchange='updateTotal($(".costav"), $("#total-costav-table")); updateTotal($("@($".costav-table")"), $("@($"#total-costav-table")"));--}}
                                {{--                                updateTotal($(".costav-opexavoidance2024"), $("#total-costav-opexavoidance2024")); updateTotal($(".cost2024"), $("#total-cost2024")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                <span for="@Model.Benefit.OpexAvoidance2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="@Model.Benefit.TotalOpexAvoidance"
                                       class="form-control input1"
                                       {{--                                       id="@($"total-costav-table")"--}}
                                       readonly="readonly" />
                            </td>

                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Other Cost Savings</th>
                            <td>
                                <input type="text"
                                       name="OtherOpexSavings2022"
                                       class="form-control input1"
                                       value="{{$benefit->OtherOpexSavings2022}}"/>
                                {{--                                       class="@($"form-control costot costot-table costot-opexother2022 cost2022 opextotal") input1"--}}
                                {{--                                onchange='updateTotal($(".costot"), $("#total-costot-table"));--}}
                                {{--                                updateTotal($("@($".costot-table")"), $("@($"#total-costot-table")"));--}}
                                {{--                                updateTotal($(".costot-opexother2022"), $("#total-costot-opexother2022")); updateTotal($(".cost2022"), $("#total-cost2022")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                <span for="@Model.Benefit.OtherOpexSavings2022" class="text-danger"></span>
                            </td>
                            <td>
                                <input type="text"
                                       name="OtherOpexSavings2023"
                                       class="form-control input1"
                                       value="{{$benefit->OtherOpexSavings2023}}"/>
                                {{--                                       class="@($"form-control costot costot-table costot-opexother2023 cost2023 opextotal") input1"--}}
                                {{--                                onchange='updateTotal($(".costot"), $("#total-costot-table"));--}}
                                {{--                                updateTotal($("@($".costot-table")"), $("@($"#total-costot-table")"));--}}
                                {{--                                updateTotal($(".costot-opexother2023"), $("#total-costot-opexother2023")); updateTotal($(".cost2023"), $("#total-cost2023")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                <span for="@Model.Benefit.OtherOpexSavings2023" class="text-danger"></span>
                            </td>
                            <td>
                                <input type="text"
                                       name="OtherOpexSavings2024"
                                       class="form-control input1"
                                       value="{{$benefit->OtherOpexSavings2024}}"/>
                                {{--                                       class="@($"form-control costot costot-table costot-opexother2024 cost2024 opextotal") input1"--}}
                                {{--                                onchange='updateTotal($(".costot"), $("#total-costot-table")); updateTotal($("@($".costot-table")"), $("@($"#total-costot-table")"));--}}
                                {{--                                updateTotal($(".costot-opexother2024"), $("#total-costot-opexother2024")); updateTotal($(".cost2024"), $("#total-cost2024")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                <span for="@Model.Benefit.OtherOpexSavings2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="@Model.Benefit.TotalOtherOpexSavings"
                                       class="form-control input1"
                                       {{--                                       id="@($"total-costot-table")"--}}
                                       readonly="readonly" />
                            </td>

                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">
                                Total
                            </th>
                            {{--                            @if (@Model.Benefit != null)--}}
                            {{--                                {--}}


                            <td>
                                <input class="form-control input1"
{{--                                       value="@Model.Benefit.TotalOpex2022"--}}
                                       id="total-cost2022"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control input1"
{{--                                       value="@Model.Benefit.TotalOpex2023"--}}
                                       id="total-cost2023"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control input1"
{{--                                       value="@Model.Benefit.TotalOpex2024"--}}
                                       id="total-cost2024"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control input1"
{{--                                       value="@Model.Benefit.TotalOpex"--}}
                                       id="total-opextotal"
                                       readonly="readonly" />
                            </td>
                            {{--                                }--}}
                            {{--                                else--}}
                            {{--                                {--}}
                            {{--                                <td>--}}
                            {{--                                    <input class="form-control input1"--}}
                            {{--                                           value="0"--}}
                            {{--                                           id="total-cost2022"--}}
                            {{--                                           readonly="readonly" />--}}
                            {{--                                </td>--}}
                            {{--                                <td>--}}
                            {{--                                    <input class="form-control input1"--}}
                            {{--                                           value="0"--}}
                            {{--                                           id="total-cost2023"--}}
                            {{--                                           readonly="readonly" />--}}
                            {{--                                </td>--}}
                            {{--                                <td>--}}
                            {{--                                    <input class="form-control input1"--}}
                            {{--                                           value="0"--}}
                            {{--                                           id="total-cost2024"--}}
                            {{--                                           readonly="readonly" />--}}
                            {{--                                </td>--}}
                            {{--                                <td>--}}
                            {{--                                    <input class="form-control input1"--}}
                            {{--                                           value="0"--}}
                            {{--                                           id="total-opextotal"--}}
                            {{--                                           readonly="readonly" />--}}
                            {{--                                </td>--}}
                            {{--                                }--}}
                        </tr>

                        @endforeach
                        </tbody>
                        </thead>


                    </table>


                </div>


                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Audit Trail</h3>
                    <div class="card-body">
                        <div id="capex-table">

                            <table class="table">
                                <thead>


                                </thead>
{{--                                                                <tbody>--}}
{{--                                                                @for (var i = 0; i < Model.AuditTrails?.Count; i++)--}}
{{--                                                                    {--}}
{{--                                                                    @if (Model.AuditTrails[i].Section == "Budget" || Model.AuditTrails[i].Section == "Both")--}}
{{--                                                                        {--}}
{{--                                                                        <tr>--}}

{{--                                                                            <th class="input1 text-center align-self-center">--}}
{{--                                                                                @Html.DisplayFor(modelItem => modelItem.AuditTrails[i].EnglishString)--}}
{{--                                                                            </th>--}}

{{--                                                                        </tr>--}}
{{--                                                                        }--}}

{{--                                                                        }--}}
{{--                                                                </tbody>--}}
                            </table>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <input type="submit"
                           value="Save"
                           class="btn btn-primary"
{{--                           onclick="return checkSum()"--}}
                    />
                </div>

            </form>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a>Back to List</a>
        </div>
    @endsection

</x-_AdminLayout>
