<x-_AdminLayout>
    @section('content')

        <head>
            <style>
                .card-1 {
                    background: #DA291C;
                    min-width: 1000px;
                    text-align: center;
                }
                .fixed{
                    width: 1050px;
                }

                table{
                    table-layout: fixed;
                    width: 100%;
                }

                .input1 {
                    font-size: 13px;
                }
                .input2 {
                    transform: scale(0.5);

                }
                .move-left {

                    width: 100px;

                    box-shadow: none;
                }


            </style>


        </head>

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#tags").autocomplete({
                    source: '/Employee/Test'
                });

            });
            $(function () {
                $("#planningprime").autocomplete({
                    source: '/Employee/Test'
                });
            });
            $(function () {
                $("#planningdirector").autocomplete({
                    source: '/Employee/Test'
                });
            });
            $(function () {
                $("#engdirector").autocomplete({
                    source: '/Employee/Test'
                });
            });
            $(function () {
                $("#projectmanager").autocomplete({
                    source: '/Employee/Test'
                });
            });
            $(function () {
                $("#engprime").autocomplete({
                    source: '/Employee/Test'
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
            // @*$('#sum_table tr:not(:last-child)').bind('keyup change', function () {
            //     var $table = $(this).closest('table');
            //     var total = 0;
            //
            //     $table.find('tr:not(:last-child) input:text').each(function () {
            //         total += +$(this).val();
            //     });
            //
            //     $table.find('input[name="total"]').val(total);
            // });*@
            // @*var mixTotal = 0;
            // $('tbody tr').each(function () {
            //     mixTotal += parseInt($(this).find('td:eq(1)').text());
            // });
            // $('.totals').html(mixTotal);*@

                sum = 0;
            $('.coltotal td:nth-child(2)').each(function () {
                sum += parseInt($(this).text());
            });

            const totals = [0, 0, 0];
            $(document).ready(function () {

                const $dataRows = $("#sum_table tr:not(.totalColumn, .titlerow) ");

                $dataRows.each(function () {
                    $(this).find('.rowDataSd').each(function (i) {
                        totals[i] += parseInt($(this).html());
                    });
                });
                $("#sum_table td.totalCol").each(function (i) {
                    $(this).html("total:" + totals[i]);
                });

            });
        </script>

        <body>
        <div class="row">
{{--            @*<form asp-action="CAEdit" asp-controller="CA" asp-route-id="@Model.ProjectID" method="post">--}}
{{--                <div  class="text-danger"></div>*@--}}
            <form  method="post" action="{{route('CA.update', $CA->id)}}" enctype='multipart/form-data' class="fixed">
                @csrf
                <div  class="text-danger"></div>
                    <input type="hidden" for="ProjectID" />
                    <div class="card">
                        <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Project Information</h3>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col">
                                    <label for="BudgetStartYear" class="control-label input1">Budget Year</label>
                                    <input for="BudgetStartYear" class="form-control input1" />
                                    <span for="BudgetStartYear" class="text-danger"></span>
                                </div>

                                <div class="form-group col">
                                    <label for="KTwoNumber" class="control-label input1">Budget K2 #</label>
                                    <input for="KTwoNumber" class="form-control input1" />
                                    <span for="KTwoNumber" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="CAKTwoNumber" class="control-label input1">CA K2#</label>
                                    <input for="CAKTwoNumber" class="form-control input1" />
                                    <span for="CAKTwoNumber" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="Name" class="control-label input1"></label>
                                    <input for="Name" class="form-control input1" />
                                    <span for="Name" class="text-danger"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <label for="ExecutiveSponsor" class="control-label input1">SVP/VP</label>
                                    <input for="ExecutiveSponsor" class="form-control input1" id="tags" />
                                    <span for="ExecutiveSponsor" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="PlanningPrime" class="control-label input1">Planning Prime</label>
                                    <input for="PlanningPrime" class="form-control input1" id="planningprime" />
                                    <span for="PlanningPrime" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="PlanningDirector" class="control-label input1">Planning Director</label>
                                    <input for="PlanningDirector" class="form-control input1" id="planningdirector" />
                                    <span for="PlanningDirector" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="EngDirector" class="control-label input1">Eng Director</label>
                                    <input for="EngDirector" class="form-control input1" id="engdirector" />
                                    <span for="EngDirector" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="Submitter" class="control-label input1">Eng Prime</label>
                                    <input for="Submitter" class="form-control input1" id="engprime" />
                                    <span for="Submitter" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="ProjManager" class="control-label input1">Project Manager</label>
                                    <input for="ProjManager" class="form-control input1" id="projectmanager" />
                                    <span for="ProjManager" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="Sponsor" class="control-label input1">Sponsor</label>
                                    <input for="Sponsor" class="form-control input1" />
                                    <span for="Sponsor" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="FiscalBudgetCategory" class="control-label input1">Budget Category</label>
                                    <input for="FiscalBudgetCategory" class="form-control input1" />
                                    <span for="FiscalBudgetCategory" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Approval Meetings</h3>
                        <div class="card-body">

                            <div class="row">
                                <div class="form-group col">
                                    <label for="@Model.Dates.CASubmissionTargetDate" class="control-label input1">CA Submission Target Date</label>
                                    <input for="@Model.Dates.CASubmissionTargetDate" class="form-control input1" />
                                    <span for="@Model.Dates.CASubmissionTargetDate" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="@Model.Dates.Status" class="control-label input1">Completed?</label>
                                    <section>
                                        @Html.CheckBoxFor(model => model.Dates.Status)
                                    </section>
{{--                                    @*<label for="@Model.Dates.Status" class="control-label input1">Completed?</label>--}}
{{--                                    <input for="@Model.Dates.DateID" type="hidden" />--}}
{{--                                    <input for="@Model.Dates.Status" class="form-control move-left input2" type="checkbox" value="1" />*@--}}

                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="@Model.Dates.ScopingCAApprovalDate" class="control-label input1">Scoping CA Approval Date</label>
                                    <input for="@Model.Dates.ScopingCAApprovalDate" class="form-control input1" />
                                    <span for="@Model.Dates.ScopingCAApprovalDate" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="@Model.Dates.SteerCoDate" class="control-label input1">Steer Co Date</label>
                                    <input for="@Model.Dates.SteerCoDate" class="form-control input1" />
                                    <span for="@Model.Dates.SteerCoDate" class="text-danger"></span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="@Model.Dates.PreSteerCoDecision" class="control-label input1">Steer Co Decision</label>
                                    <input for="@Model.Dates.PreSteerCoDecision" class="form-control input1" />
                                    <span for="@Model.Dates.PreSteerCoDecision" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="@Model.Dates.CAMDate" class="control-label input1">CAM Date</label>
                                    <input for="@Model.Dates.CAMDate" class="form-control input1" />
                                    <span for="@Model.Dates.CAMDate" class="text-danger"></span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="@Model.Dates.SteerCoDecision" class="control-label input1">CAM Decision (?)</label>
                                    <input for="@Model.Dates.SteerCoDecision" class="form-control input1" />
                                    <span for="@Model.Dates.SteerCoDecision" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="@Model.Dates.CAApprovalDate" class="control-label input1">CA Approval Date</label>
                                    <input for="@Model.Dates.CAApprovalDate" class="form-control input1" />
                                    <span for="@Model.Dates.CAApprovalDate" class="text-danger"></span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="@Model.Dates.CAApprovalComments" class="control-label input1">CA Approval Comments</label>
                                    <textarea for="@Model.Dates.CAApprovalComments" class="form-control input1" rows="3"></textarea>
                                    <span for="@Model.Dates.CAApprovalComments" class="text-danger"></span>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="card">
                        <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Funding & Approved $$ Info</h3>
                        <div class="card-body">
                            <div class="row">


                                <div class="form-group col col-2">
                                    <div class="form-group col container6">
                                        <label for="@Model.PoRTotal" class="control-label input1">PoR Budget</label>
                                        <input for="@Model.PoRTotal" class="form-control input1" format="{0:C}" readonly="readonly" />
                                        <span for="@Model.PoRTotal" class="text-danger"></span>
                                    </div>
                                </div>


                            </div>


                            <div id="fundingapproval-table">
                        <span class="float-right mb-3 mr-2">
                            <button type="button"
                                    class="btn btn-info btn-rounded btn-sm input1"
                                    onclick="addRowToFundingApproval($(this))">
                                Add New Row
                                <i class="fas fa-plus-square ml-1"></i>
                            </button>
                        </span>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>

                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            @Html.DisplayNameFor(modelItem => modelItem.ApprovedDollars.First().Date)
                                        </th>

                                        <th class="input1 text-center align-self-center">
                                            @Html.DisplayNameFor(modelItem => modelItem.ApprovedDollars.First().ScopingCAApproval)
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            @(Model.BudgetStartYear - 1 + " Rollover")
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            @("Total Approved " + Model.BudgetStartYear + " in " + Model.BudgetStartYear)
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            @("Approved " + (Model.BudgetStartYear + 1))
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            @("Approved " + (Model.BudgetStartYear + 2))
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            @Html.DisplayNameFor(modelItem => modelItem.ApprovedDollars.First().FundsNoLongerRequired)
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            Total
                                        </th>


                                    </tr>
                                    </thead>
                                    <tbody>
    {{--                                @for (var i = 0; i < Model.ApprovedDollars?.Count; i++)--}}
    {{--                                    {--}}
                                        <tr>
                                            <td></td>

                                            <td>
                                                <input for="@Model.ApprovedDollars[i].Date"
                                                       type="date" class="input1" />
                                                <span for="@Model.ApprovedDollars[i].Date" class="text-danger"></span>
                                            </td>

                                            <td>
                                                <input for="@Model.ApprovedDollars[i].ScopingCAApproval"/>
    {{--                                                   class="@($"form-control approveddollars approved-dollars-{i} approveddollars-scopingcaapproval") input1"--}}
    {{--                                            onchange='updateTotal($(".approveddollars"), $("#total-approved-dollars")); updateTotal($("@($".approved-dollars-{i}")"), $("@($"#total-approved-dollars-{i}")")); updateTotal($(".approveddollars-scopingcaapproval"), $("#total-approveddollars-scopingcaapproval"));' />--}}
                                                <span for="@Model.ApprovedDollars[i].ScopingCAApproval" class="text-danger"></span>
                                            </td>

                                            <td>

                                                <input for="@Model.ApprovedDollars[i].Rollovers2019"/>
    {{--                                                   class="@($"form-control approveddollars approved-dollars-{i} approveddollars-rollovers") input1"--}}
    {{--                                            onchange='updateTotal($(".approveddollars"), $("#total-approved-dollars")); updateTotal($("@($".approved-dollars-{i}")"), $("@($"#total-approved-dollars-{i}")")); updateTotal($(".approveddollars-rollovers"), $("#total-approveddollars-rollovers"));' />--}}
                                                <span for="@Model.ApprovedDollars[i].Rollovers2019" class="text-danger"></span>

                                            </td>
                                            <td>
                                                <input for="@Model.ApprovedDollars[i].TotalApproved2020in2020"/>
    {{--                                                   class="@($"form-control approveddollars approved-dollars-{i} approveddollars-totalapproved2020in2020") input1"--}}
    {{--                                            onchange='updateTotal($(".approveddollars"), $("#total-approved-dollars")); updateTotal($("@($".approved-dollars-{i}")"), $("@($"#total-approved-dollars-{i}")")); updateTotal($(".approveddollars-totalapproved2020in2020"), $("#total-approveddollars-totalapproved2020in2020"));' />--}}
                                                <span for="@Model.ApprovedDollars[i].TotalApproved2020in2020" class="text-danger"></span>
                                            </td>
                                            <td>
                                                <input for="@Model.ApprovedDollars[i].Approved2021"/>
    {{--                                                   class="@($"form-control approveddollars approved-dollars-{i} approveddollars-approved2021") input1"--}}
    {{--                                            onchange='updateTotal($(".approveddollars"), $("#total-approved-dollars")); updateTotal($("@($".approved-dollars-{i}")"), $("@($"#total-approved-dollars-{i}")")); updateTotal($(".approveddollars-approved2021"), $("#total-approveddollars-approved2021"));' />--}}
                                                <span for="@Model.ApprovedDollars[i].Approved2021" class="text-danger"></span>
                                            </td>
                                            <td>
                                                <input for="@Model.ApprovedDollars[i].Approved2022"/>
    {{--                                                   class="@($"form-control approveddollars approved-dollars-{i} approveddollars-approved2022") input1"--}}
    {{--                                            onchange='updateTotal($(".approveddollars"), $("#total-approved-dollars")); updateTotal($("@($".approved-dollars-{i}")"), $("@($"#total-approved-dollars-{i}")")); updateTotal($(".approveddollars-approved2022"), $("#total-approveddollars-approved2022"));' />--}}
                                                <span for="@Model.ApprovedDollars[i].Approved2022" class="text-danger"></span>
                                            </td>
                                            <td>
                                                <input for="@Model.ApprovedDollars[i].FundsNoLongerRequired"/>
    {{--                                                   class="@($"form-control approveddollars approved-dollars-{i} approveddollars-fundsnolongerrequired") input1"--}}
    {{--                                            onchange='updateTotal($(".approveddollars"), $("#total-approved-dollars")); updateTotal($("@($".approved-dollars-{i}")"), $("@($"#total-approved-dollars-{i}")")); updateTotal($(".approveddollars-fundsnolongerrequired"), $("#total-approveddollars-fundsnolongerrequired"));' />--}}
                                                <span for="@Model.ApprovedDollars[i].FundsNoLongerRequired" class="text-danger"></span>
                                            </td>
                                            <td>
                                                <input for="@Model.ApprovedDollars[i].TotalFundingApproval"
                                                       class="form-control input1"
    {{--                                                   id="@($"total-approved-dollars-{i}")"--}}
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


    {{--                                    }--}}
                                        <tr>
                                            <th scope="row">
                                                Total
                                            </th>
                                            <td></td>

                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.ApprovedDollars.Sum(x => x.ScopingCAApproval)"
                                                       id="total-approveddollars-scopingcaapproval"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.ApprovedDollars.Sum(x => x.Rollovers2019)"
                                                       id="total-approveddollars-rollovers"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.ApprovedDollars.Sum(x => x.TotalApproved2020in2020)"
                                                       id="total-approveddollars-totalapproved2020in2020"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.ApprovedDollars.Sum(x => x.Approved2021)"
                                                       id="total-approveddollars-approved2021"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.ApprovedDollars.Sum(x => x.Approved2022)"
                                                       id="total-approveddollars-approved2022"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.ApprovedDollars.Sum(x => x.FundsNoLongerRequired)"
                                                       id="total-approveddollars-fundsnolongerrequired"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.ApprovedDollars.Sum(x => x.TotalFundingApproval)"
                                                       id="total-approved-dollars"
                                                       readonly="readonly" />
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Year 1 Breakdown</h3>
                    <div class="card-body">




                            <div id="year-one-table">
                                    <span class="float-right mb-3 mr-2">
                                        <button type="button"
                                                class="btn btn-info btn-rounded btn-sm input1"
                                                onclick="addRowToYearOneBreakdown($(this))">
                                            Add New Row
                                            <i class="fas fa-plus-square ml-1"></i>
                                        </button>
                                    </span>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th class="input1 text-center align-self-center">
                                            @Html.DisplayNameFor(modelItem => modelItem.YearOneBreakdown.First().Date)
                                        </th>

                                        <th class="input1 text-center align-self-center">
                                            @(Model.BudgetStartYear + " Labour")
                                        </th>

                                        <th class="input1 text-center align-self-center">
                                            @(Model.BudgetStartYear + " Hardware")
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            @(Model.BudgetStartYear + " Software")
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            @(Model.BudgetStartYear + " Professional Services")
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            Total
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
    {{--                                @for (var i = 0; i < Model.YearOneBreakdown?.Count; i++)--}}
    {{--                                    {--}}
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input for="@Model.YearOneBreakdown[i].Date"
                                                       type="date" class="input1" />
                                                <span for="@Model.YearOneBreakdown[i].Date" class="text-danger"></span>
                                            </td>



                                            <td>
                                                <input for="@Model.YearOneBreakdown[i].Labour2020"/>
    {{--                                                   class="@($"form-control approveddollarsyearone approved-dollars-yearone-{i} approveddollarsyearone-labour2020") input1"--}}
    {{--                                            onchange='updateTotal($(".approveddollarsyearone"), $("#total-approved-dollars-yearone")); updateTotal($("@($".approved-dollars-yearone-{i}")"), $("@($"#total-approved-dollars-yearone-{i}")")); updateTotal($(".approveddollarsyearone-labour2020"), $("#total-approveddollarsyearone-labour2020"));' />--}}

                                                <span for="@Model.YearOneBreakdown[i].Labour2020" class="text-danger"></span>
                                            </td>

                                            <td>
                                                <input for="@Model.YearOneBreakdown[i].HW2020"/>
    {{--                                                   class="@($"form-control approveddollarsyearone approved-dollars-yearone-{i} approveddollarsyearone-hw2020") input1"--}}
    {{--                                            onchange='updateTotal($(".approveddollarsyearone"), $("#total-approved-dollars-yearone")); updateTotal($("@($".approved-dollars-yearone-{i}")"), $("@($"#total-approved-dollars-yearone-{i}")")); updateTotal($(".approveddollarsyearone-hw2020"), $("#total-approveddollarsyearone-hw2020"));' />--}}
                                                <span for="@Model.YearOneBreakdown[i].HW2020" class="text-danger"></span>
                                            </td>
                                            <td>
                                                <input for="@Model.YearOneBreakdown[i].SW2020"/>
    {{--                                                   class="@($"form-control approveddollarsyearone approved-dollars-yearone-{i} approveddollarsyearone-sw2020") input1"--}}
    {{--                                            onchange='updateTotal($(".approveddollarsyearone"), $("#total-approved-dollars-yearone")); updateTotal($("@($".approved-dollars-yearone-{i}")"), $("@($"#total-approved-dollars-yearone-{i}")")); updateTotal($(".approveddollarsyearone-sw2020"), $("#total-approveddollarsyearone-sw2020"));' />--}}
                                                <span for="@Model.YearOneBreakdown[i].SW2020" class="text-danger"></span>
                                            </td>
                                            <td>
                                                <input for="@Model.YearOneBreakdown[i].ProfServ2020"/>
    {{--                                                   class="@($"form-control approveddollarsyearone approved-dollars-yearone-{i} approveddollarsyearone-profserv2020") input1"--}}
    {{--                                            onchange='updateTotal($(".approveddollarsyearone"), $("#total-approved-dollars-yearone")); updateTotal($("@($".approved-dollars-yearone-{i}")"), $("@($"#total-approved-dollars-yearone-{i}")")); updateTotal($(".approveddollarsyearone-profserv2020"), $("#total-approveddollarsyearone-profserv2020"));' />--}}
                                                <span for="@Model.YearOneBreakdown[i].ProfServ2020" class="text-danger"></span>
                                            </td>
                                            <td>
                                                <input for="@Model.YearOneBreakdown[i].Total"
                                                       class="form-control input1"
    {{--                                                   id="@($"total-approved-dollars-yearone-{i}")"--}}
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
    {{--                                    }--}}


                                        <tr>
                                            <th scope="row" class="text-center align-self-center input1">
                                                Total
                                            </th>
                                            <td></td>

                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.YearOneBreakdown.Sum(x => x.Labour2020)"
                                                       id="total-approveddollarsyearone-labour2020"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.YearOneBreakdown.Sum(x => x.HW2020)"
                                                       id="total-approveddollarsyearone-hw2020"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.YearOneBreakdown.Sum(x => x.SW2020)"
                                                       id="total-approveddollarsyearone-sw2020"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.YearOneBreakdown.Sum(x => x.ProfServ2020)"
                                                       id="total-approveddollarsyearone-profserv2020"
                                                       readonly="readonly" />
                                            </td>

                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.YearOneBreakdown.Sum(x => x.Total)"
                                                       id="total-approved-dollars-yearone"
                                                       readonly="readonly" />
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Decommission Info</h3>
                    <div class="card-body">



                            <div id="decom-table">
                        <span class="float-right mb-3 mr-2">
                            <button type="button"
                                    class="btn btn-info btn-rounded btn-sm input1"
                                    onclick="addRowToDecomInfo($(this))">
                                Add New Row
                                <i class="fas fa-plus-square ml-1"></i>
                            </button>
                        </span>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th class="input1 text-center align-self-center">
                                            @Html.DisplayNameFor(modelItem => modelItem.Decoms.First().Date)
                                        </th>

                                        <th class="input1 text-center align-self-center">
                                            @Html.DisplayNameFor(modelItem => modelItem.Decoms.First().Decom_Flag)
                                        </th>

                                        <th class="input1 text-center align-self-center">
                                            @Html.DisplayNameFor(modelItem => modelItem.Decoms.First().InternalLabour)
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            @Html.DisplayNameFor(modelItem => modelItem.Decoms.First().ExternalLabour)
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            @Html.DisplayNameFor(modelItem => modelItem.Decoms.First().GrossSavings)
                                        </th>
                                        <th class="input1 text-center align-self-center">
                                            @Html.DisplayNameFor(modelItem => modelItem.Decoms.First().NumberofPlatformsToDecom)
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
    {{--                                @for (var i = 0; i < Model.Decoms?.Count; i++)--}}
    {{--                                    {--}}
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input for="@Model.Decoms[i].Date"
                                                       type="date" class="input1" />
                                                <span for="@Model.Decoms[i].Date" class="text-danger"></span>
                                            </td>


                                            <td>
                                                <input for="@Model.Decoms[i].Decom_Flag"/>
    {{--                                                   class="@($"form-control decoms decoms-table-{i} decoms-decomsflag") input1"--}}
    {{--                                            onchange='updateTotal($(".decoms"), $("#total-decoms-table")); updateTotal($("@($".decoms-table-{i}")"), $("@($"#total-decoms-table-{i}")")); updateTotal($(".decoms-decomsflag"), $("#total-decoms-decomsflag"));' />--}}
                                                <span for="@Model.Decoms[i].Decom_Flag" class="text-danger"></span>
                                            </td>

                                            <td>
                                                <input for="@Model.Decoms[i].InternalLabour"/>
    {{--                                                   class="@($"form-control decoms decoms-table-{i} decoms-internallabour") input1"--}}
    {{--                                            onchange='updateTotal($(".decoms"), $("#total-decoms-table")); updateTotal($("@($".decoms-table-{i}")"), $("@($"#total-decoms-table-{i}")")); updateTotal($(".decoms-internallabour"), $("#total-decoms-internallabour"));' />--}}
                                                <span for="@Model.Decoms[i].InternalLabour" class="text-danger"></span>
                                            </td>
                                            <td>
                                                <input for="@Model.Decoms[i].ExternalLabour"/>
    {{--                                                   class="@($"form-control decoms decoms-table-{i} decoms-externallabour") input1"--}}
    {{--                                            onchange='updateTotal($(".decoms"), $("#total-decoms-table")); updateTotal($("@($".decoms-table-{i}")"), $("@($"#total-decoms-table-{i}")")); updateTotal($(".decoms-externallabour"), $("#total-decoms-externallabour"));' />--}}
                                                <span for="@Model.Decoms[i].ExternalLabour" class="text-danger"></span>
                                            </td>
                                            <td>
                                                <input for="@Model.Decoms[i].GrossSavings"/>
    {{--                                                   class="@($"form-control decoms decoms-table-{i} decoms-grosssavings") input1"--}}
    {{--                                            onchange='updateTotal($(".decoms"), $("#total-decoms-table")); updateTotal($("@($".decoms-table-{i}")"), $("@($"#total-decoms-table-{i}")")); updateTotal($(".decoms-grosssavings"), $("#total-decoms-grosssavings"));' />--}}

                                                <span for="@Model.Decoms[i].GrossSavings" class="text-danger"></span>
                                            </td>
                                            <td>
                                                <input for="@Model.Decoms[i].NumberofPlatformsToDecom"/>
    {{--                                                   class="@($"form-control decoms decoms-table-{i} decoms-numberofplatformstodecom") input1"--}}
    {{--                                            onchange='updateTotal($(".decoms"), $("#total-decoms-table")); updateTotal($("@($".decoms-table-{i}")"), $("@($"#total-decoms-table-{i}")")); updateTotal($(".decoms-numberofplatformstodecom"), $("#total-decoms-numberofplatformstodecom"));' />--}}

                                                <span for="@Model.Decoms[i].NumberofPlatformsToDecom" class="text-danger"></span>
                                            </td>

                                            <td>
                                                <input for="@Model.Decoms[i].Total"
                                                       class="form-control input1"
    {{--                                                   id="@($"total-decoms-table-{i}")"--}}
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
    {{--                                    }--}}


                                        <tr>
                                            <th scope="row" class="text-center input1 align-self-center">
                                                Total
                                            </th>
                                            <td></td>

                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.Decoms.Sum(x => x.Decom_Flag)"
                                                       id="total-decoms-decomsflag"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.Decoms.Sum(x => x.InternalLabour)"
                                                       id="total-decoms-internallabour"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.Decoms.Sum(x => x.ExternalLabour)"
                                                       id="total-decoms-externallabour"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.Decoms.Sum(x => x.GrossSavings)"
                                                       id="total-decoms-grosssavings"
                                                       readonly="readonly" />
                                            </td>
                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.Decoms.Sum(x => x.NumberofPlatformsToDecom)"
                                                       id="total-decoms-numberofplatformstodecom"
                                                       readonly="readonly" />
                                            </td>

                                            <td>
                                                <input class="form-control input1"
                                                       value="@Model.Decoms.Sum(x => x.Total)"
                                                       id="total-decoms-table"
                                                       readonly="readonly" />
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Budget Updates</h3>
                    <div class="card-body">



                        <div id="fundingapproval-table">
                    <span class="float-right mb-3 mr-2">
                        <button type="button"
                                class="btn btn-info btn-rounded btn-sm"
                                onclick="addRowToBudgetUpdates($(this))">
                            Add New Row
                            <i class="fas fa-plus-square ml-1"></i>
                        </button>
                    </span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th class="input1 text-center align-self-center">
                                        @Html.DisplayNameFor(modelItem => modelItem.TransfersUpdates.First().Date)
                                    </th>
                                    <th class="input1 text-center align-self-center">
                                        Budget Update 1
                                    </th>

                                    <th class="input1 text-center align-self-center">
                                        Budget Update 2
                                    </th>
                                    <th class="input1 text-center align-self-center">
                                        Budget Update 3
                                    </th>
                                    <th class="input1 text-center align-self-center">
                                        Deferred to Next Year
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
{{--                                @for (var i = 0; i < Model.TransfersUpdates?.Count; i++)--}}
{{--                                    {--}}
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input for="@Model.TransfersUpdates[i].Date"
                                                   type="date" class="input1" />
                                            <span for="@Model.TransfersUpdates[i].Date" class="text-danger"></span>
                                        </td>
                                        <td>
                                            <input for="@Model.TransfersUpdates[i].BudgetUpdateMar23"/>
{{--                                                   class="@($"form-control transfersupdates transfersupdates-table-{i} transfersupdates-budgetmar23") input1"--}}
{{--                                            onchange='updateTotal($(".transfersupdates"), $("#total-transfersupdates-table")); updateTotal($("@($".transfersupdates-table-{i}")"), $("@($"#total-transfersupdates-table-{i}")")); updateTotal($(".transfersupdates-budgetmar23"), $("#total-transfersupdates-budgetmar23"));' />--}}
                                            <span for="@Model.TransfersUpdates[i].BudgetUpdateMar23" class="text-danger"></span>
                                        </td>

                                        <td>
                                            <input for="@Model.TransfersUpdates[i].BudgetUpdateApr1"/>
{{--                                                   class="@($"form-control transfersupdates transfersupdates-table-{i} transfersupdates-budgetapr1") input1"--}}
{{--                                            onchange='updateTotal($(".transfersupdates"), $("#total-transfersupdates-table")); updateTotal($("@($".transfersupdates-table-{i}")"), $("@($"#total-transfersupdates-table-{i}")")); updateTotal($(".transfersupdates-budgetapr1"), $("#total-transfersupdates-budgetapr1"));' />--}}
                                            <span for="@Model.TransfersUpdates[i].BudgetUpdateApr1" class="text-danger"></span>
                                        </td>
                                        <td>
                                            <input for="@Model.TransfersUpdates[i].BudgetUpdateLE5"/>
{{--                                                   class="@($"form-control transfersupdates transfersupdates-table-{i} transfersupdates-budgetle5") input1"--}}
{{--                                            onchange='updateTotal($(".transfersupdates"), $("#total-transfersupdates-table")); updateTotal($("@($".transfersupdates-table-{i}")"), $("@($"#total-transfersupdates-table-{i}")")); updateTotal($(".transfersupdates-budgetle5"), $("#total-transfersupdates-budgetle5"));' />--}}
                                            <span for="@Model.TransfersUpdates[i].BudgetUpdateLE5" class="text-danger"></span>
                                        </td>
                                        <td>
                                            <input for="@Model.TransfersUpdates[i].Deferredto2021"/>
{{--                                                   class="@($"form-control transfersupdates transfersupdates-table-{i} transfersupdates-deferredto2021") input1"--}}
{{--                                            onchange='updateTotal($(".transfersupdates"), $("#total-transfersupdates-table")); updateTotal($("@($".transfersupdates-table-{i}")"), $("@($"#total-transfersupdates-table-{i}")")); updateTotal($(".transfersupdates-deferredto2021"), $("#total-transfersupdates-deferredto2021"));' />--}}
                                            <span for="@Model.TransfersUpdates[i].Deferredto2021" class="text-danger"></span>
                                        </td>
                                        <td>
                                            <input for="@Model.TransfersUpdates[i].Total"
                                                   class="form-control input1"
{{--                                                   id="@($"total-transfersupdates-table-{i}")"--}}
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
{{--                                    }--}}

                                    <tr>
                                        <th scope="row" class=" input1 text-center align-self-center">
                                            Total
                                        </th>
                                        <td></td>


                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.TransfersUpdates.Sum(x => x.BudgetUpdateMar23)"
                                                   id="total-transfersupdates-budgetmar23"
                                                   readonly="readonly" />
                                        </td>
                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.TransfersUpdates.Sum(x => x.BudgetUpdateApr1)"
                                                   id="total-transfersupdates-budgetapr1"
                                                   readonly="readonly" />
                                        </td>
                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.TransfersUpdates.Sum(x => x.BudgetUpdateLE5)"
                                                   id="total-transfersupdates-budgetle5"
                                                   readonly="readonly" />
                                        </td>
                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.TransfersUpdates.Sum(x => x.Deferredto2021)"
                                                   id="total-transfersupdates-deferredto2021"
                                                   readonly="readonly" />
                                        </td>

                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.TransfersUpdates.Sum(x => x.Total)"
                                                   id="total-transfersupdates-table"
                                                   readonly="readonly" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Opex Information</h3>
                    <div class="card-body">
                        <div id="decom-table">
                    <span class="float-right mb-3 mr-2">
                        <button type="button"
                                class="btn btn-info btn-rounded btn-sm input1"
                                onclick="addRowToOpexInfo($(this))">
                            Add New Row
                            <i class="fas fa-plus-square ml-1"></i>
                        </button>
                    </span>
                            <table class="table">
                                <thead>
                                <tr>

                                    <th></th>
                                    <th class="input1 text-center align-self-center">
                                        @Html.DisplayNameFor(modelItem => modelItem.OpexInfo.First().Date)
                                    </th>

                                    <th class="input1 text-center align-self-center">
                                        @Html.DisplayNameFor(modelItem => modelItem.OpexInfo.First().OpexDragCurrentYear)
                                    </th>
                                    <th class="input1 text-center align-self-center">
                                        @Html.DisplayNameFor(modelItem => modelItem.OpexInfo.First().OpexDragFutureYear)
                                    </th>
                                    <th class="input1 text-center align-self-center">
                                        @Html.DisplayNameFor(modelItem => modelItem.OpexInfo.First().OpexDragAfterFutureYear)
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
{{--                                @for (var i = 0; i < Model.OpexInfo?.Count; i++)--}}
{{--                                    {--}}
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input for="@Model.OpexInfo[i].Date"
                                                   type="date" class="input1" />
                                            <span for="@Model.OpexInfo[i].Date" class="text-danger"></span>
                                        </td>


                                        <td>
                                            <input for="@Model.OpexInfo[i].OpexDragCurrentYear"/>
{{--                                                   class="@($"form-control opex opex-table-{i} opex-curryear") input1"--}}
{{--                                            onchange='updateTotal($(".opex"), $("#total-opex-table")); updateTotal($("@($".opex-table-{i}")"), $("@($"#opex-table-{i}")")); updateTotal($(".opex-curryear"), $("#total-opex-curryear"));' />--}}
                                            <span for="@Model.OpexInfo[i].OpexDragCurrentYear" class="text-danger"></span>
                                        </td>
                                        <td>
                                            <input for="@Model.OpexInfo[i].OpexDragFutureYear"/>
{{--                                                   class="@($"form-control opex opex-table-{i} opex-futyear") input1"--}}
{{--                                            onchange='updateTotal($(".opex"), $("#total-opex-table")); updateTotal($("@($".opex-table-{i}")"), $("@($"#opex-table-{i}")")); updateTotal($(".opex-futyear"), $("#total-opex-futyear"));' />--}}
                                            <span for="@Model.OpexInfo[i].OpexDragFutureYear" class="text-danger"></span>
                                        </td>
                                        <td>
                                            <input for="@Model.OpexInfo[i].OpexDragAfterFutureYear"/>
{{--                                                   class="@($"form-control opex opex-table-{i} opex-afterfutyear") input1"--}}
{{--                                            onchange='updateTotal($(".opex"), $("#total-opex-table")); updateTotal($("@($".opex-table-{i}")"), $("@($"#opex-table-{i}")")); updateTotal($(".opex-afterfutyear"), $("#total-opex-afterfutyear"));' />--}}
                                            <span for="@Model.OpexInfo[i].OpexDragAfterFutureYear" class="text-danger"></span>
                                        </td>

                                        <td>
                                            <input for="@Model.OpexInfo[i].Total"
                                                   class="form-control input1"
{{--                                                   id="@($"total-opex-table-{i}")"--}}
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
{{--                                    }--}}


                                    <tr>
                                        <th scope="row" class="input1 text-center align-self-center">
                                            Total
                                        </th>
                                        <td></td>

                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.OpexInfo.Sum(x => x.OpexDragCurrentYear)"
                                                   id="total-opex-curryear"
                                                   readonly="readonly" />
                                        </td>
                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.OpexInfo.Sum(x => x.OpexDragFutureYear)"
                                                   id="total-opex-futyear"
                                                   readonly="readonly" />
                                        </td>
                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.OpexInfo.Sum(x => x.OpexDragAfterFutureYear)"
                                                   id="total-opex-afterfutyear"
                                                   readonly="readonly" />
                                        </td>


                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.OpexInfo.Sum(x => x.Total)"
                                                   id="total-opex-table"
                                                   readonly="readonly" />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Funding Transfers & Comments</h3>
                    <div class="card-body">
                        <div id="fundingtransfercomments-table">


                            <span class="float-right mb-3 mr-2">
                                <button type="button"
                                        class="btn btn-info btn-rounded btn-sm input1"
                                        onclick="addRowToFundingTransfersComments($(this))">
                                    Add New Row
                                    <i class="fas fa-plus-square ml-1"></i>
                                </button>
                            </span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th class="input1 text-center align-self-center">
                                        @Html.DisplayNameFor(modelItem => modelItem.TransfersUpdatesComments.First().Date)
                                    </th>

                                    <th class="input1 text-center align-self-center">
                                        @Html.DisplayNameFor(modelItem => modelItem.TransfersUpdatesComments.First().FundingTransfer)
                                    </th>

                                    <th class="input1 text-center align-self-center">
                                        @Html.DisplayNameFor(modelItem => modelItem.TransfersUpdatesComments.First().FundingTransferComment)
                                    </th>


                                </tr>
                                </thead>
                                <tbody>

{{--                                @for (var i = 0; i < Model.TransfersUpdatesComments?.Count; i++)--}}
{{--                                    {--}}
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input for="@Model.TransfersUpdatesComments[i].Date"
                                                   type="date" class="input1" />
                                            <span for="@Model.TransfersUpdatesComments[i].Date" class="text-danger"></span>
                                        </td>
                                        <td>
                                            <input for="@Model.TransfersUpdatesComments[i].FundingTransfer" />
{{--                                                   class="@($"form-control transfersupdates transfersupdates-table-{i} transfersupdates-fundingtransfer") input1 form-control" />--}}

                                            <span for="@Model.TransfersUpdatesComments[i].FundingTransfer" class="text-danger"></span>
                                        </td>

                                        <td>
                                            <textarea for="@Model.TransfersUpdatesComments[i].FundingTransferComment" />
{{--                                                      class="@($"form-control transfersupdates transfersupdates-table-{i} transfersupdates-fundingtransfercomment") input1 form-control" rows="3"></textarea>--}}

                                            <span for="@Model.TransfersUpdatesComments[i].FundingTransferComment" class="text-danger"></span>
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
{{--                                    }--}}




                                </tbody>
                            </table>
                        </div>
                    </div>




                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Comments</h3>
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="form-group col">
                                    <label for="@Model.Dates.Comments" class="control-label input1">Comments</label>
                                    <textarea for="@Model.Dates.Comments" class="form-control input1" rows="3"></textarea>
                                    <span for="@Model.Dates.Comments" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">CAPEX/OPEX Avoidance & Savings</h3>
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>

                                <tr>
                                    <td></td>
                                    <th scope="col" class="input1 text-center align-self-center">@(Model.BudgetStartYear)</th>
                                    <th scope="col" class="input1 text-center align-self-center">@(Model.BudgetStartYear + 1)</th>
                                    <th scope="col" class="input1 text-center align-self-center">@(Model.BudgetStartYear + 2)</th>
                                    <th scope="col" class="input1 text-center align-self-center">3 Year Total</th>


                                </tr>
                                <tr>
                                    <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Capex <br /> Avoidance/Savings</th>

                                    <td>
                                        <input for="@Model.CapexOpex.CAPEXAvoidanceSavingsYr1" />
    {{--                                           class="@($"form-control cost cost-table cost-opexsavings2022 cost2022 opextotal") input1" onchange='updateTotal($(".cost"), $("#total-cost-table")); updateTotal($("@($".cost-table")"), $("@($"#total-cost-table")"));--}}
    {{--                                    updateTotal($(".cost-opexsavings2022"), $("#total-cost-opexsavings2022")); updateTotal($(".cost2022"), $("#total-cost2022")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                        <span for="@Model.CapexOpex.CAPEXAvoidanceSavingsYr1" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input for="@Model.CapexOpex.CAPEXAvoidanceSavingsYr2" />
    {{--                                           class="@($"form-control cost cost-table cost-opexsavings2023 cost2023 opextotal") input1"--}}
    {{--                                    onchange='updateTotal($(".cost"), $("#total-cost-table")); updateTotal($("@($".cost-table")"), $("@($"#total-cost-table")"));--}}
    {{--                                    updateTotal($(".cost-opexsavings2023"), $("#total-cost-opexsavings2023")); updateTotal($(".cost2023"), $("#total-cost2023")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                        <span for="@Model.CapexOpex.CAPEXAvoidanceSavingsYr2" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input for="@Model.CapexOpex.CAPEXAvoidanceSavingsYr3" />
    {{--                                           class="@($"form-control cost cost-table cost-opexsavings2024 cost2024 opextotal") input1" onchange='updateTotal($(".cost"), $("#total-cost-table"));--}}
    {{--                                    updateTotal($("@($".cost-table")"), $("@($"#total-cost-table")"));--}}
    {{--                                    updateTotal($(".cost-opexsavings2024"), $("#total-cost-opexsavings2024"));--}}
    {{--                                    updateTotal($(".cost2024"), $("#total-cost2024")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                        <span for="@Model.CapexOpex.CAPEXAvoidanceSavingsYr3" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input for="@Model.CapexOpex.TotalCapexAvoidanceSavings"
                                               class="form-control input1"
    {{--                                           id="@($"total-cost-table")"--}}
                                        readonly="readonly" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Opex Savings</th>
                                    <td>
                                        <input for="@Model.CapexOpex.OPEXSavingsYr1" />
    {{--                                           class="@($"form-control costav costav-table costav-opexavoidance2022 cost2022 opextotal") input1" onchange='updateTotal($(".costav"), $("#total-costav-table"));--}}
    {{--                                    updateTotal($("@($".costav-table")"), $("@($"#total-costav-table")"));--}}
    {{--                                    updateTotal($(".costav-opexavoidance2022"), $("#total-costav-opexavoidance2022"));--}}
    {{--                                    updateTotal($(".cost2022"), $("#total-cost2022")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                        <span for="@Model.CapexOpex.OPEXSavingsYr1" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input for="@Model.CapexOpex.OPEXSavingsYr2" />
    {{--                                           class="@($"form-control costav costav-table costav-opexavoidance2023 cost2023 opextotal") input1"--}}
    {{--                                    onchange='updateTotal($(".costav"), $("#total-costav-table"));--}}
    {{--                                    updateTotal($("@($".costav-table")"), $("@($"#total-costav-table")"));--}}
    {{--                                    updateTotal($(".costav-opexavoidance2023"), $("#total-costav-opexavoidance2023"));--}}
    {{--                                    updateTotal($(".cost2023"), $("#total-cost2023")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                        <span for="@Model.CapexOpex.OPEXSavingsYr2" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input for="@Model.CapexOpex.OPEXSavingsYr3" />
    {{--                                           class="@($"form-control costav costav-table costav-opexavoidance2024 cost2024 opextotal") input1"--}}
    {{--                                    onchange='updateTotal($(".costav"), $("#total-costav-table")); updateTotal($("@($".costav-table")"), $("@($"#total-costav-table")"));--}}
    {{--                                    updateTotal($(".costav-opexavoidance2024"), $("#total-costav-opexavoidance2024")); updateTotal($(".cost2024"), $("#total-cost2024")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                        <span for="@Model.CapexOpex.OPEXSavingsYr3" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input for="@Model.CapexOpex.TotalOpexSavings"
                                               class="form-control input1"
    {{--                                           id="@($"total-costav-table")"--}}
                                        readonly="readonly" />
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Cost Avoidance</th>
                                    <td>
                                        <input for="@Model.CapexOpex.CostAvoidanceYear1" />
    {{--                                           class="@($"form-control costot costot-table costot-opexother2022 cost2022 opextotal") input1"--}}
    {{--                                    onchange='updateTotal($(".costot"), $("#total-costot-table"));--}}
    {{--                                    updateTotal($("@($".costot-table")"), $("@($"#total-costot-table")"));--}}
    {{--                                    updateTotal($(".costot-opexother2022"), $("#total-costot-opexother2022")); updateTotal($(".cost2022"), $("#total-cost2022")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                        <span for="@Model.CapexOpex.CostAvoidanceYear1" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input for="@Model.CapexOpex.CostAvoidanceYear2" />
    {{--                                           class="@($"form-control costot costot-table costot-opexother2023 cost2023 opextotal") input1"--}}
    {{--                                    onchange='updateTotal($(".costot"), $("#total-costot-table"));--}}
    {{--                                    updateTotal($("@($".costot-table")"), $("@($"#total-costot-table")"));--}}
    {{--                                    updateTotal($(".costot-opexother2023"), $("#total-costot-opexother2023")); updateTotal($(".cost2023"), $("#total-cost2023")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                        <span for="@Model.CapexOpex.CostAvoidanceYear2" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input for="@Model.CapexOpex.CostAvoidanceYear3" />
    {{--                                           class="@($"form-control costot costot-table costot-opexother2024 cost2024 opextotal") input1"--}}
    {{--                                    onchange='updateTotal($(".costot"), $("#total-costot-table")); updateTotal($("@($".costot-table")"), $("@($"#total-costot-table")"));--}}
    {{--                                    updateTotal($(".costot-opexother2024"), $("#total-costot-opexother2024")); updateTotal($(".cost2024"), $("#total-cost2024")); updateTotal($(".opextotal"), $("#total-opextotal"));' />--}}

                                        <span for="@Model.CapexOpex.CostAvoidanceYear3" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input for="@Model.CapexOpex.TotalCapexAvoidanceSavings"
                                               class="form-control input1"
    {{--                                           id="@($"total-costot-table")"--}}
                                        readonly="readonly" />
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">
                                        Total
                                    </th>
    {{--                                @if (@Model.CapexOpex != null)--}}
    {{--                                    {--}}


                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.CapexOpex.TotalYr1"
                                                   id="total-cost2022"
                                                   readonly="readonly" />
                                        </td>
                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.CapexOpex.TotalYr2"
                                                   id="total-cost2023"
                                                   readonly="readonly" />
                                        </td>
                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.CapexOpex.TotalYr3"
                                                   id="total-cost2024"
                                                   readonly="readonly" />
                                        </td>
                                        <td>
                                            <input class="form-control input1"
                                                   value="@Model.CapexOpex.Total"
                                                   id="total-opextotal"
                                                   readonly="readonly" />
                                        </td>
    {{--                                    }--}}
    {{--                                    else--}}
    {{--                                    {--}}
    {{--                                    <td>--}}
    {{--                                        <input class="form-control input1"--}}
    {{--                                               value="0"--}}
    {{--                                               id="total-cost2022"--}}
    {{--                                               readonly="readonly" />--}}
    {{--                                    </td>--}}
    {{--                                    <td>--}}
    {{--                                        <input class="form-control input1"--}}
    {{--                                               value="0"--}}
    {{--                                               id="total-cost2023"--}}
    {{--                                               readonly="readonly" />--}}
    {{--                                    </td>--}}
    {{--                                    <td>--}}
    {{--                                        <input class="form-control input1"--}}
    {{--                                               value="0"--}}
    {{--                                               id="total-cost2024"--}}
    {{--                                               readonly="readonly" />--}}
    {{--                                    </td>--}}
    {{--                                    <td>--}}
    {{--                                        <input class="form-control input1"--}}
    {{--                                               value="0"--}}
    {{--                                               id="total-opextotal"--}}
    {{--                                               readonly="readonly" />--}}
    {{--                                    </td>--}}
    {{--                                    }--}}
                                </tr>



                                </thead>


                            </table>


                        </div>
                    </div>


<div class="card">
    <div class="card-body">
        <table class="table"></table>
    </div>

</div>
{{--                    <div class="card">--}}
{{--                        <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Audit Trail</h3>--}}
{{--                        <div class="card-body">--}}
{{--                            <div id="capex-table">--}}

{{--                                <table class="table">--}}
{{--                                    <thead>--}}


{{--                                    </thead>--}}
{{--                                    <tbody>--}}

{{--                                    @for (var i = 0; i < Model.AuditTrails?.Count; i++)--}}
{{--                                        {--}}


{{--                                        @if (Model.AuditTrails[i].Section == "CA" || Model.AuditTrails[i].Section == "Both")--}}
{{--                                            {--}}
{{--                                            <tr>--}}

{{--                                                <th class="input1 text-center align-self-center">--}}
{{--                                                    @Html.DisplayFor(modelItem => modelItem.AuditTrails[i].EnglishString)--}}
{{--                                                </th>--}}

{{--                                            </tr>--}}
{{--                                            }--}}

{{--                                            }--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}









                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-info">
                            Save
                        </button>
                    </div>
            </form>
            </form>
        </div>

        <script>
            $(document).ready(function () {

                var current_fs, next_fs, previous_fs; //fieldsets
                var opacity;

                $(".next").click(function () {

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

                    //Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({ opacity: 0 }, {
                        step: function (now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({ 'opacity': opacity });
                        },
                        duration: 600
                    });
                });

                $(".previous").click(function () {

                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();

                    //Remove class active
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                    //show the previous fieldset
                    previous_fs.show();

                    //hide the current fieldset with style
                    current_fs.animate({ opacity: 0 }, {
                        step: function (now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            previous_fs.css({ 'opacity': opacity });
                        },
                        duration: 600
                    });
                });

                $('.radio-group .radio').click(function () {
                    $(this).parent().find('.radio').removeClass('selected');
                    $(this).addClass('selected');
                });

                $(".submit").click(function () {
                    return false;
                })

            });
        </script>

        </body>
    @endsection

</x-_AdminLayout>
