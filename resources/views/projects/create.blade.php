<x-_AdminLayout>
    @section('content')
        <head>
            <style>
                .card-1 {
                    background: #DA291C;
                    min-width: 1000px;
                    text-align: center;
                }

                . div.container6 {
                    display: flex;
                    align-items: center;
                    justify-content: center
                }
            </style>

            {{--            @section Scripts {--}}

            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            {{--            <script>--}}
            {{--                $(function () {--}}
            {{--                    $("#projtag").autocomplete({--}}
            {{--                        source: '/Employee/Test'--}}
            {{--                    })--}}
            {{--                });--}}

            {{--                $(function () {--}}
            {{--                    $("#techtag").autocomplete({--}}
            {{--                        source: '/Employee/Test'--}}
            {{--                    })--}}
            {{--                });--}}

            {{--                $(function () {--}}
            {{--                    $("#deliverytag").autocomplete({--}}
            {{--                        source: '/Employee/Test'--}}
            {{--                    })--}}
            {{--                });--}}

            {{--                $(function () {--}}
            {{--                    $("#butag").autocomplete({--}}
            {{--                        source: '/Employee/Test'--}}
            {{--                    })--}}
            {{--                });--}}

            {{--                $(function () {--}}
            {{--                    $("#submittertag").autocomplete({--}}
            {{--                        source: '/Employee/Test'--}}
            {{--                    })--}}
            {{--                });--}}

            {{--            </script>--}}





            <script>

                $(document).ready(function(){

                    let regionalAllocationList = $('.reginal-allocation');
                    let totalRegionalAllocation = $('#TotalRegionalAllocation');
                    let allocationList = $('.allocation');
                    let totalAllocation = $('#TotalAllocation');
                    //let allocationList=document.getElementsByClassName("allocation");
                    //let totalAllocation=document.getElementsByClassName("TotalAllocation");




                    regionalAllocationList.each(function () {
                        $(this).change(function () {
                            updateTotal(regionalAllocationList, totalRegionalAllocation);
                            if(totalRegionalAllocation.val()!=100){

                                $(".submit").attr('disabled','disabled');
                                $(".ErrGreaterTorontoArea").text("Total must be 100");
                            }else{

                                $('.submit').removeAttr('disabled');
                                $(".ErrGreaterTorontoArea").text("");
                            }

                        })
                    });
                    allocationList.each(function () {

                        $(this).change(function () {

                            updateTotal(allocationList, totalAllocation);

                            if(totalAllocation.val()!=100){

                                $(".submit").attr('disabled','disabled');
                                $(".ErrFunctionCable").text("Total must be 100");
                            }else{

                                $('.submit').removeAttr('disabled');
                                $(".ErrFunctionCable").text("");
                            }

                        })
                    });

                    function updateTotal(inputList, totalInput) {
                        let total = 0

                        inputList.each(function () {
                            let value = isNaN(this.value) ? 0 : Number(this.value)
                            total += value

                        })
                        $(totalInput).val(total.toFixed(0))
                    };


                })
                function check(){
                    if($('#TotalAllocation').val()==0){

                        console.log("test");
                        $('#TotalAllocation').prop('required', true);
                        return true;

                        //$(".submit").attr('onclick','return false');
                        //alert("test");
                    }else{
                        return false;
                        console.log("test2");
                        $('#TotalAllocation').prop('required', false);
                        //$(".submit").attr('onclick','return true');
                    }
                    if($('#TotalRegionalAllocation').val()==0){

                        console.log("test");
                        $('#TotalRegionalAllocation').prop('required', true);
                        return true;
                        //$(".submit").attr('onclick','return false');
                        //alert("test");
                    }else{
                        console.log("test2");
                        $('#TotalRegionalAllocation').prop('required', false);
                        //$(".submit").attr('onclick','return true');
                        al                }
                }



            </script>





        </head>

        <h1>Create Step 1</h1>
        <h4>Project</h4>


        <div class="row">
            <form  method="post" action="{{ route('projects.store') }}" enctype='multipart/form-data'>
                @csrf
                <div asp-validation-summary="ModelOnly" class="text-danger"></div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Project Information</h3>
                    <div class="card-body">
                        {{--                        @if(auth()->user()->userHasRole('admin'))--}}
                        <div class="row">
                            <div class="form-group col">
                                <label for="Priority" class="control-label">Priority</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <select name= "Priority" class="form-control input-validation-error" required>
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="0 - Below the line">0 - Below the line</option>
                                    <option value="1 - Included in Budget">1 - Included in Budget</option>
                                    <option value="2 - Program still to be considered if possible">2 - Program still to be considered if possible</option>
                                </select>

                            </div>
                        </div>
                        {{--                        @endif--}}
                        <div class="row">
                            <div class="form-group col">
                                <label for="RNCCDependency" class="control-label">RNCC Dependency</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <select for="RNCCDependency" name="RNCCDependency" class="form-control input-validation-error" required>
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="BudgetStartYear" name="BudgetStartYear" class="control-label">Budget Start Year</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <input for="BudgetStartYear" name="BudgetStartYear" class="form-control" required/>

                            </div>
                            <div class=" form-group col">
                                <label for="CapexCategory" name="CapexCategory" class="control-label">Capex Category</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <select for="CapexCategory"  name="CapexCategory" class="form-control" required>
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="CableUplift">Cable Uplift</option>
                                    <option value="CrmsCapacity">CRMS-Capacity</option>
                                    <option value="CrmsMandatoryAndCompliance">CRMS-Mandatory & Compliance</option>
                                    <option value="CrmsReliability">CRMS-Reliability</option>
                                    <option value="CrmsServiceImprovement">CRMS-Service Improvement</option>
                                    <option value="FiveG">5G</option>
                                    <option value="ConsolidateFiberBuild">Consolidate Fiber Build</option>
                                    <option value="Greenfield">Greenfield</option>
                                    <option value="ServiceAreaExpansion">Service Area Expansion</option>
                                    <option value="StrategicBuild">Strategic Build</option>
                                    <option value="SupplyChainGeneralInventory">Supply Chain General Inventory</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="KTwoNumber" name="KTwoNumber"  class="control-label">K2#</label>
                                <input for="KTwoNumber" name="KTwoNumber" class="form-control" />
                                <span for="KTwoNumber" class="text-danger"></span>
                            </div>
                            <div class=" form-group col">
                                <label for="CapexGovernanceCategory" name="CapexGovernanceCategory" class="control-label">Capex Governance Category</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <select for="CapexGovernanceCategory" name="CapexGovernanceCategory" class="form-control" asp-items="@Html.GetEnumSelectList<CapexGovernanceCategory>()" required>
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
                                <select for="BudgetCompany" name="BudgetCompany" class="form-control input-validation-error" required>
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="Rogers">Rogers</option>
                                    <option value="Shaw">Shaw</option>
                                </select>
                                <span for="BudgetCompany" class="text-danger"></span>
                            </div>
                            <div class=" form-group col">
                                <label for="BudgetType" name="BudgetType" class="control-label">Budget Type</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <select for="BudgetType" name="BudgetType" class="form-control input-validation-error" required>
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="BAU">BAU</option>
                                    <option value="Integration">Integration</option>
                                </select>
                                <span for="BudgetType" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="Name" name="Name" class="control-label">Project Name</label>
                                <input for="ProjectName" name="ProjectName" class="form-control" />
                                <span for="Name" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="PoiDate" class="control-label">POI Launch Date</label>
                                <input for="PoiDate" name="PoiDate" class="form-control" />
                                <span for="PoiDate" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            @if(auth()->user()->userHasRole('admin'))
                                <div class="form-group col">
                                    <label for="SponsorCategory" name="SponsorCategory" class="control-label">Sponsor Category</label>
                                    <input for="SponsorCategory" name="SponsorCategory" class="form-control" />
                                    <span for="SponsorCategory" class="text-danger"></span>
                                </div>
                            @endif
                            <div class="form-group col">
                                <label for="PorLaunchDate" name="PorLaunchDate" class="control-label">Por Launch Date</label>
                                <input for="PorLaunchDate" name="PorLaunchDate" class="form-control" />
                                <span for="PorLaunchDate" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            @if(auth()->user()->userHasRole('admin'))
                                <div class="form-group col">
                                    <label for="FiscalBudgetCategory" name="FiscalBudgetCategory" class="control-label">Fiscal Budget Category</label>
                                    <input for="FiscalBudgetCategory" name="FiscalBudgetCategory" class="form-control" />
                                    <span for="FiscalBudgetCategory" class="text-danger"></span>
                                </div>
                            @endif
                            <div class="form-group col">
                                <label for="ProjectEndDate" name="ProjectEndDate"  class="control-label">Project End Date</label>
                                <input for="ProjectEndDate" name="ProjectEndDate" class="form-control" />
                                <span for="ProjectEndDate" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="HighLevelSummary" name="HighLevelSummary" class="control-label">High Level Summary</label>
                                <textarea for="HighLevelSummary" name="HighLevelSummary" class="form-control" rows="5"></textarea>
                                <span for="HighLevelSummary" class="text-danger"></span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Requestor Details</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col">
                                <label for="ExecutiveSponsor" name="ExecutiveSponsor" class="control-label">Executive Sponsor</label>
                                <input for="ExecutiveSponsor" name="ExecutiveSponsor" class="form-control" id="projtag" />
                                <span for="ExecutiveSponsor" class="text-danger"></span>


                            </div>
                            <div class=" form-group col">
                                <label for="Sponsor" name="Sponsor" class="control-label">Sponsor</label>
                                <select for="Sponsor" name="Sponsor" class="form-control">
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
                                <input for="TechDeliveryVp" name="TechDeliveryVp" class="form-control" id="techtag" asp-items="ViewBag.EmployeeID" />
                                <span for="TechDeliveryVp" class="text-danger" />
                            </div>
                            <div class=" form-group col">
                                <label for="DeliveryOwner" name="DeliveryOwner" class="control-label">Delivery Owner (Director)</label>
                                <input for="DeliveryOwner" name="DeliveryOwner" class="form-control" id="deliverytag" asp-items="ViewBag.EmployeeID" />
                                <span for="DeliveryOwner" class="text-danger" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="BUVPOwner" name="BUVPOwner"  class="control-label">BU VP Owner</label>
                                <input for="BUVPOwner" name="BUVPOwner" class="form-control" id="butag" asp-items="ViewBag.EmployeeID" />
                                <span for="BUVPOwner" class="text-danger" />
                            </div>
                            <div class=" form-group col">
                                <label for="Submitter" name="Submitter" class="control-label">Submitted By (Manager)</label>
                                <input for="Submitter" name="Submitter" class="form-control" id="submittertag" asp-items="ViewBag.EmployeeID" />
                                <span for="Submitter" class="text-danger" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Project Details</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col">
                                <label for="BusinessProblem" name="BusinessProblem" class="control-label">Business Problem (Why)</label>
                                <textarea for="BusinessProblem" name="BusinessProblem" class="form-control" rows="5"></textarea>
                                <span for="BusinessProblem" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="BusinessSolution" name="BusinessSolution" class="control-label">Business Solution (What)</label>
                                <textarea for="BusinessSolution" class="form-control" rows="5"></textarea>
                                <span for="BusinessSolution" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="CostBreakdown" name="CostBreakdown" class="control-label">P x Q</label>
                                <textarea for="CostBreakdown" name="CostBreakdown" class="form-control" rows="5" readonly="readonly"></textarea>
                                <span for="CostBreakdown" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="BenefitAndRisk" name="BenefitAndRisk" class="control-label">Benefit / Risk of not doing</label>
                                <textarea for="BenefitAndRisk" name="BenefitAndRisk" class="form-control" rows="5"></textarea>
                                <span for="BenefitAndRisk" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Allocation</h3>
                    <div class="card-body">
                        <div class="col-12">
                            <span for="FunctionCable" class="text-danger d-block ErrFunctionCable"></span>
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
                                <label for="FunctionCable" class="control-label">Cable</label>
                                <span ID="required" style="color:Red;"> *</span>
                                <input placeholder="0" for="FunctionCable" class="form-control allocation"/>
                            </div>


                            <div class="form-group col">
                                <label for="FunctionWireless" name="FunctionWireless" class="control-label">Wireless</label>
                                <span ID="required" style="color:Red;" > *</span>
                                <input placeholder="0"  for="FunctionWireless" class="form-control allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="FunctionRogersForBusiness" class="control-label">RBS</label>
                                <span ID="required" style="color:Red;" > *</span>
                                <input placeholder="0"  name="FunctionRogersForBusiness" class="form-control allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="FunctionMedia" class="control-label">Media</label>
                                <span ID="required" style="color:Red;"> *</span>
                                <input placeholder="0"  name="FunctionMedia" class="form-control allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="FunctionRogersSmartHomeMonitoring" class="control-label">RHSM</label>
                                <span ID="required" style="color:Red;"> *</span>
                                <input placeholder="0"  name="FunctionRogersSmartHomeMonitoring" class="form-control allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="FunctionBank" class="control-label">Bank</label>
                                <span ID="required" style="color:Red;"> *</span>
                                <input placeholder="0" name="FunctionBank" class="form-control allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="FunctionRogersCommunicationsIncorporated" class="control-label">RCI</label>
                                <span ID="required" style="color:Red;" > *</span>
                                <input placeholder="0"  name="FunctionRogersCommunicationsIncorporated" class="form-control allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="TotalAllocation" class="control-label">Total</label>
                                <span ID="required" style="color:Red;"> *</span>
                                <input id="TotalAllocation" class="form-control" readonly="readonly" required/>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Regional Allocation</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <span for="GreaterTorontoArea" class="text-danger d-block ErrGreaterTorontoArea"></span>
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
                                <label for="GreaterTorontoArea" class="control-label">GTA</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <input placeholder="0" for="GreaterTorontoArea" name="GreaterTorontoArea" class="form-control reginal-allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="Ontario" class="control-label">ON</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <input placeholder="0" for="Ontario" name="Ontario" class="form-control reginal-allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="Quebec" class="control-label">QC</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <input placeholder="0" for="Quebec" name="Quebec" class="form-control reginal-allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="BritishColumbia" class="control-label">BC</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <input placeholder="0" for="BritishColumbia" name="BritishColumbia" class="form-control reginal-allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="Alberta" class="control-label">Alberta</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <input placeholder="0" for="Alberta" name="Alberta" class="form-control reginal-allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="MidWest" class="control-label">Mid-West</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <input placeholder="0" for="MidWest" name="MidWest" class="form-control reginal-allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="Atlantic" class="control-label">Atlantic</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <input placeholder="0" for="Atlantic" name="Atlantic" class="form-control reginal-allocation" />
                            </div>
                            <div class="form-group col">
                                <label for="TotalRegionalAllocation" class="control-label">Total</label>
                                <span ID="required" style="color:Red;" visible="false"> *</span>
                                <input id="TotalRegionalAllocation" name="TotalRegionalAllocation" class="form-control" readonly="readonly"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Next"
{{--                           onclick="return check()" --}}
                           class="btn btn-primary submit" />

                </div>
            </form>
        </div>

        <div>
            <a asp-action="Index">Back to List</a>

        </div>



    @endsection

</x-_AdminLayout>
