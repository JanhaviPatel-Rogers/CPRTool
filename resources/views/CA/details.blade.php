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
                    min-width: 1000px;
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
                    width: 142px;
                    background: #68CADA;
                    color: white;
                    font-size: 8px;
                    border-width: 2px;
                }

                .font1 {
                    font-size: large;
                }
                .font2 {
                    font-size: 8px;
                }
                .font3 {
                    font-size: 10px;
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


                .grey-1 {
                    background-color: #C0C0C0;
                }
                .grey-2 {
                    background-color: #A8A8A8;
                }

                .card-text-1 {
                    font-size: 8.5px;
                }
                .card-text-2 {
                    font-size: 9px;

                }
                .card-text-3 {
                    font-size: 9px;
                    border-top: 2px solid black;
                    border-bottom: 2px solid red;
                    /*font: bold;*/
                    border-collapse: collapse;
                }
                .card-text-4 {
                    font-size: 8.5px;
                    border-block: medium;
                    border-block-color: black;
                    /*font: bold;*/
                    border-collapse: collapse;
                }
            </style>
        </head>

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

                        <td data-toggle="tab" href="#approval" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/app_meet.png')}}" alt="" />
                            <span class="caption">Approval<br /> Meetings</span>
                        </td>
                        <td data-toggle="tab" href="#funding" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/app_fund.png')}}" alt="" />
                            <span class="caption">
                            Funding & <br />
                            Approved $ Info
                        </span>
                        </td>
                        <td data-toggle="tab" href="#decom" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/OD.png')}}" alt="" />
                            <span class="caption">
                            Decommission <br />
                            Info
                        </span>
                        </td>
                        <td data-toggle="tab" href="#current" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/bd_upd.png')}}" alt="" />
                            <span class="caption">
                            Current Year <br />
                            Financial Updates
                        </span>
                        </td>
                        <td data-toggle="tab" href="#opex" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/op_inf.png')}}" alt="" />
                            <span class="caption">
                            Opex <br />
                            Information
                        </span>
                        </td>
                        <td data-toggle="tab" href="#audit" class="item1">
                            <img class="btn img-icon1" src="{{url('/asset/img/audit.png')}}" alt="" />
                            <span class="caption">Audit Trail</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>



            <div class="tab-content col d-flex justify-content-center" id="myTabContent">
                <div class="tab-pane fade active" id="approval" role="tabpanel">

                    <div class="card" data-aos="fade-up">
                        <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-bg-4 text-white">Approval Meetings</h3>
                        <div class="card-body">
                            <div class="row">
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        Dates.CASubmissionTargetDate
                                    </label>
                                    <p>
                                        @Html.DisplayFor(model => model.Dates.CASubmissionTargetDate)
                                    </p>
                                </div>
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        Dates.ScopingCAApprovalDate
                                    </label>
                                    <p>
                                        @Html.DisplayFor(model => model.Dates.ScopingCAApprovalDate)
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        Dates.SteerCoDate)
                                    </label>
                                    <p>
                                        @Html.DisplayFor(model => model.Dates.SteerCoDate)
                                    </p>
                                </div>
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        Dates.PreSteerCoDecision)
                                    </label>
                                    <p>
                                        @Html.DisplayFor(model => model.Dates.PreSteerCoDecision)
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        Dates.CAMDate)
                                    </label>
                                    <p>
                                        @Html.DisplayFor(model => model.Dates.CAMDate)
                                    </p>
                                </div>
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        Dates.SteerCoDecision)
                                    </label>
                                    <p>
                                        @Html.DisplayFor(model => model.Dates.SteerCoDecision)
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        Dates.CAApprovalDate)
                                    </label>
                                    <p>
                                        @Html.DisplayFor(model => model.Dates.CAApprovalDate)
                                    </p>
                                </div>
                                <div class="col card border-left-danger shadow h-100 py-2">
                                    <label class="control-label font-weight-bold">
                                        Dates.CAApprovalComments)
                                    </label>
                                    <p>
                                        @Html.DisplayFor(model => model.Dates.CAApprovalComments)
                                    </p>
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
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    BudgetStartYear)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.BudgetStartYear)
                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    KTwoNumber)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.KTwoNumber)
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    CAKTwoNumber)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.CAKTwoNumber)
                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Name)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.Name)
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    ExecutiveSponsor)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.ExecutiveSponsor)
                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    PlanningPrime)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.PlanningPrime)
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    PlanningDirector)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.PlanningDirector)
                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    EngDirector)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.EngDirector)
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Submitter)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.Submitter)
                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    ProjManager)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.ProjManager)
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Sponsor)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.Sponsor)
                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    FiscalBudgetCategory)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.FiscalBudgetCategory)
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    CreateAt)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.CreateAt)
                                </p>
                            </div>
                            @*<div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    FiscalBudgetCategory)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.FiscalBudgetCategory)
                                </p>
                            </div>*@
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="funding" role="tabpanel">

                <div class="card" data-aos="fade-up">
                    <h3 class="card-header text-center text-white font-weight-bold text-uppercase py-4 justify-content-center text-white card-bg-4">Funding & Approved $ Info</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    PoRTotal)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.PoRTotal)
                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Revised Budget
                                </label>
                                <p>
                                    @Convert.ToDecimal((Model.PoRTotal + Model.TransfersUpdates.Sum(x => x.BudgetUpdateMar23) +
                                    Model.TransfersUpdatesComments.Sum(x => x.FundingTransfer) +
                                    Model.TransfersUpdates.Sum(x => x.BudgetUpdateApr1) + Model.TransfersUpdates.Sum(x => x.BudgetUpdateLE5)
                                    + Model.TransfersUpdates.Sum(x => x.ChangeInBudgetDueToPCR)) / 1000000).ToString("$0.##0M")
                                </p>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Total Approved in Year
                                </label>
                                <p>
                                    @Convert.ToDecimal((Model.ApprovedDollars.Sum(x => x.Rollovers2019) + Model.ApprovedDollars.Sum(x => x.TotalApproved2020in2020) + Model.ApprovedDollars.Sum(x => x.ScopingCAApproval))/ 1000000).ToString("$0.##0M")

                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Total Remaining to be Approved
                                </label>
                                <p>
                                    @{ double remaining = (Model.PoRTotal + Model.TransfersUpdates.Sum(x => x.BudgetUpdateMar23) +
                                    Model.TransfersUpdatesComments.Sum(x => x.FundingTransfer) +
                                    Model.TransfersUpdates.Sum(x => x.BudgetUpdateApr1) + Model.TransfersUpdates.Sum(x => x.BudgetUpdateLE5)
                                    + Model.TransfersUpdates.Sum(x => x.ChangeInBudgetDueToPCR)) -
                                    (Model.ApprovedDollars.Sum(x => x.Rollovers2019) + Model.ApprovedDollars.Sum(x => x.TotalApproved2020in2020) + Model.ApprovedDollars.Sum(x => x.ScopingCAApproval));

                                    }
                                    @Convert.ToDecimal(remaining / 1000000).ToString("$0.##0M")

                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Funds No Longer Required
                                </label>
                                <p>
                                    @{
                                    double nolonger = Model.ApprovedDollars.Sum(x => x.FundsNoLongerRequired);
                                    }
                                    @Convert.ToDecimal(nolonger / 1000000).ToString("$0.##0M")


                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Total Approved in Future Years
                                </label>
                                <p>
                                    @{
                                    double future = Model.ApprovedDollars.Sum(x => x.Approved2021) + Model.ApprovedDollars.Sum(x => x.Approved2022);
                                    }
                                    @Convert.ToDecimal(future / 1000000).ToString("$0.##0M")

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="decom" role="tabpanel">

                <div class="card" data-aos="fade-up">
                    <h3 class="card-header text-center text-white font-weight-bold text-uppercase py-4 justify-content-center text-white card-bg-4">Decommission Info</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Decom
                                </label>
                                <p>
                                    @Html.Raw(Model.Decoms.Sum(x => x.Decom_Flag))
                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Decom Internal Labour
                                </label>
                                <p>
                                    @Html.Raw(Model.Decoms.Sum(x => x.InternalLabour))

                                </p>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Decom External Labour
                                </label>
                                <p>
                                    @Html.Raw(Model.Decoms.Sum(x => x.ExternalLabour))
                                </p>
                            </div>
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    Decom Gross Savings
                                </label>
                                <p>
                                    @Html.Raw(Model.Decoms.Sum(x => x.GrossSavings))

                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-left-danger shadow h-100 py-2">
                                <label class="control-label font-weight-bold">
                                    # of Decom Platforms
                                </label>
                                <p>
                                    @Html.Raw(Model.Decoms.Sum(x => x.NumberofPlatformsToDecom))
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="current" role="tabpanel">

                <div class="card" data-aos="fade-up">
                <h3 class="card-header text-center font-weight-bold text-uppercase py-4 justify-content-center card-bg-4 text-white">Current Year Financial Updates</h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-responsive-md text-center">
                                <thead>
                                <tr>
                                    <th>
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        Jan
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        Feb
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        Mar
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        Apr
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        May
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        June
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        July
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        Aug
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        Sep
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        Oct
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        Nov
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        Dec
                                    </th>

                                    <th class="font-weight-bold card-text-2">
                                        Total
                                    </th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr class="border-bottom border-bottom-dark">
                                    <th scope="row" class="card-text-2">
                                        Budget
                                    </th>


                                    @{double jan = 0;
                                    double feb = 0;
                                    double mar = 0;
                                    double apr = 0;
                                    double may = 0;
                                    double jun = 0;
                                    double jul = 0;
                                    double aug = 0;
                                    double sep = 0;
                                    double oct = 0;
                                    double nov = 0;

                                    double dec = 0;
                                    double total = 0;}
{{--                                    @if (Model.CapitalExpenses != null)--}}
{{--                                        {--}}
{{--                                        @foreach (var item in Model.CapitalExpenses)--}}
{{--                                            {--}}
{{--                                            @if (item.Month == 1)--}}
{{--                                                {--}}
{{--                                                jan = item.Total;--}}

{{--                                                total = total + item.Total;--}}
{{--                                                }--}}
{{--                                                @if (item.Month == 2)--}}
{{--                                                    {--}}
{{--                                                    feb = item.Total;--}}

{{--                                                    total = total + item.Total;--}}
{{--                                                    }--}}
{{--                                                    @if (item.Month == 3)--}}
{{--                                                        {--}}
{{--                                                        mar = item.Total;--}}

{{--                                                        total = total + item.Total;--}}
{{--                                                        }--}}
{{--                                                        @if (item.Month == 4)--}}
{{--                                                            {--}}
{{--                                                            apr = item.Total;--}}
{{--                                                            total = total + item.Total;--}}
{{--                                                            }--}}
{{--                                                            @if (item.Month == 5)--}}
{{--                                                                {--}}
{{--                                                                may = item.Total;--}}
{{--                                                                total = total + item.Total;--}}
{{--                                                                }--}}
{{--                                                                @if (item.Month == 6)--}}
{{--                                                                    {--}}
{{--                                                                    jun = item.Total;--}}
{{--                                                                    total = total + item.Total;--}}
{{--                                                                    }--}}
{{--                                                                    @if (item.Month == 7)--}}
{{--                                                                        {--}}
{{--                                                                        jul = item.Total;--}}
{{--                                                                        total = total + item.Total;--}}
{{--                                                                        }--}}
{{--                                                                        @if (item.Month == 8)--}}
{{--                                                                            {--}}
{{--                                                                            aug = item.Total;--}}
{{--                                                                            total = total + item.Total;--}}
{{--                                                                            }--}}
{{--                                                                            @if (item.Month == 9)--}}
{{--                                                                                {--}}
{{--                                                                                sep = item.Total;--}}
{{--                                                                                total = total + item.Total;--}}
{{--                                                                                }--}}
{{--                                                                                @if (item.Month == 10)--}}
{{--                                                                                    {--}}
{{--                                                                                    oct = item.Total;--}}
{{--                                                                                    total = total + item.Total;--}}
{{--                                                                                    }--}}
{{--                                                                                    @if (item.Month == 11)--}}
{{--                                                                                        {--}}
{{--                                                                                        nov = item.Total;--}}

{{--                                                                                        total = total + item.Total;--}}
{{--                                                                                        }--}}
{{--                                                                                        @if (item.Month == 12)--}}
{{--                                                                                            {--}}
{{--                                                                                            dec = item.Total;--}}
{{--                                                                                            total = total + item.Total;--}}
{{--                                                                                            }--}}


{{--                                                                                            }--}}
{{--                                                                                            }--}}

{{--                                                                                            <td class="card-text-1">--}}
{{--                                                                                                @Convert.ToDecimal(jan / 1000000).ToString("$0.##0M")--}}

{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}

{{--                                                                                                @Convert.ToDecimal(feb / 1000000).ToString("$0.##0M")--}}

{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}
{{--                                                                                                @Convert.ToDecimal(mar / 1000000).ToString("$0.##0M")--}}

{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}
{{--                                                                                                @Convert.ToDecimal(apr / 1000000).ToString("$0.##0M")--}}

{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}
{{--                                                                                                @Convert.ToDecimal(may / 1000000).ToString("$0.##0M")--}}

{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}
{{--                                                                                                @Convert.ToDecimal(jun / 1000000).ToString("$0.##0M")--}}

{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}
{{--                                                                                                @Convert.ToDecimal(jul / 1000000).ToString("$0.##0M")--}}

{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}
{{--                                                                                                @Convert.ToDecimal(aug / 1000000).ToString("$0.##0M")--}}

{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}
{{--                                                                                                @Convert.ToDecimal(sep / 1000000).ToString("$0.##0M")--}}

{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}
{{--                                                                                                @Convert.ToDecimal(oct / 1000000).ToString("$0.##0M")--}}

{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}


{{--                                                                                                @Convert.ToDecimal(nov / 1000000).ToString("$0.##0M")--}}

{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}
{{--                                                                                                @Convert.ToDecimal(dec / 1000000).ToString("$0.##0M")--}}
{{--                                                                                            </td>--}}
{{--                                                                                            <td class="card-text-1">--}}
{{--                                                                                                @Convert.ToDecimal(total / 1000000).ToString("$0.##0M")--}}
{{--                                                                                            </td>--}}



                                </tr>
                                <tr class="tabletext-white font-weight-bold table grey-2 text-white">
                                    <th scope="row" class="card-text-3">
                                        TOTAL BUDGET
                                    </th>

                                    <td class="card-text-4 border-bottom border-bottom-dark">
                                        @Convert.ToDecimal(jan / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">

                                        @Convert.ToDecimal(feb / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">
                                        @Convert.ToDecimal(mar / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">
                                        @Convert.ToDecimal(apr / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">
                                        @Convert.ToDecimal(may / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(jun / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(jul / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(aug / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(sep / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(oct / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">


                                        @Convert.ToDecimal(nov / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(dec / 1000000).ToString("$0.##0M")
                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(total / 1000000).ToString("$0.##0M")
                                    </td>
                                </tr>




                                <tr class="tabletext-white">
                                    <th scope="row" class="card-text-2">
                                        NonOTL Forecast (Network)
                                    </th>

                                    @{
                                    double totalJan = Model.Network_NonOTL_Forecasts.Jan + Model.Network_OTL_Forecasts.Jan + Model.IT_NonOTL_Forecasts.Jan + Model.IT_OTL_Forecasts.Jan;
                                    double totalFeb = Model.Network_NonOTL_Forecasts.Feb + Model.Network_OTL_Forecasts.Feb + Model.IT_NonOTL_Forecasts.Feb + Model.IT_OTL_Forecasts.Feb;
                                    double totalMar = Model.Network_NonOTL_Forecasts.Mar + Model.Network_OTL_Forecasts.Mar + Model.IT_NonOTL_Forecasts.Mar + Model.IT_OTL_Forecasts.Mar;
                                    double totalApr = Model.Network_NonOTL_Forecasts.Apr + Model.Network_OTL_Forecasts.Apr + Model.IT_NonOTL_Forecasts.Apr + Model.IT_OTL_Forecasts.Apr;
                                    double totalMay = Model.Network_NonOTL_Forecasts.May + Model.Network_OTL_Forecasts.May + Model.IT_NonOTL_Forecasts.May + Model.IT_OTL_Forecasts.May;
                                    double totalJun = Model.Network_NonOTL_Forecasts.Jun + Model.Network_OTL_Forecasts.Jun + Model.IT_NonOTL_Forecasts.Jun + Model.IT_OTL_Forecasts.Jun;
                                    double totalJul = Model.Network_NonOTL_Forecasts.Jul + Model.Network_OTL_Forecasts.Jul + Model.IT_NonOTL_Forecasts.Jul + Model.IT_OTL_Forecasts.Jul;
                                    double totalAug = Model.Network_NonOTL_Forecasts.Aug + Model.Network_OTL_Forecasts.Aug + Model.IT_NonOTL_Forecasts.Aug + Model.IT_OTL_Forecasts.Aug;
                                    double totalSep = Model.Network_NonOTL_Forecasts.Sep + Model.Network_OTL_Forecasts.Sep + Model.IT_NonOTL_Forecasts.Sep + Model.IT_OTL_Forecasts.Sep;
                                    double totalOct = Model.Network_NonOTL_Forecasts.Oct + Model.Network_OTL_Forecasts.Oct + Model.IT_NonOTL_Forecasts.Oct + Model.IT_OTL_Forecasts.Oct;
                                    double totalNov = Model.Network_NonOTL_Forecasts.Nov + Model.Network_OTL_Forecasts.Nov + Model.IT_NonOTL_Forecasts.Nov + Model.IT_OTL_Forecasts.Nov;
                                    double totalDec = Model.Network_NonOTL_Forecasts.Dec + Model.Network_OTL_Forecasts.Dec + Model.IT_NonOTL_Forecasts.Dec + Model.IT_OTL_Forecasts.Dec;
                                    double totalForecast = totalJan + totalFeb + totalMar + totalApr + totalMay + totalJun + totalJul + totalAug + totalSep + totalOct + totalNov + totalDec;


                                    double totalJanA = Model.Network_NonOTL_Actuals.Jan + Model.Network_OTL_Actuals.Jan + Model.IT_NonOTL_Actuals.Jan + Model.IT_OTL_Actuals.Jan;
                                    double totalFebA = Model.Network_NonOTL_Actuals.Feb + Model.Network_OTL_Actuals.Feb + Model.IT_NonOTL_Actuals.Feb + Model.IT_OTL_Actuals.Feb;
                                    double totalMarA = Model.Network_NonOTL_Actuals.Mar + Model.Network_OTL_Actuals.Mar + Model.IT_NonOTL_Actuals.Mar + Model.IT_OTL_Actuals.Mar;
                                    double totalAprA = Model.Network_NonOTL_Actuals.Apr + Model.Network_OTL_Actuals.Apr + Model.IT_NonOTL_Actuals.Apr + Model.IT_OTL_Actuals.Apr;
                                    double totalMayA = Model.Network_NonOTL_Actuals.May + Model.Network_OTL_Actuals.May + Model.IT_NonOTL_Actuals.May + Model.IT_OTL_Actuals.May;
                                    double totalJunA = Model.Network_NonOTL_Actuals.Jun + Model.Network_OTL_Actuals.Jun + Model.IT_NonOTL_Actuals.Jun + Model.IT_OTL_Actuals.Jun;
                                    double totalJulA = Model.Network_NonOTL_Actuals.Jul + Model.Network_OTL_Actuals.Jul + Model.IT_NonOTL_Actuals.Jul + Model.IT_OTL_Actuals.Jul;
                                    double totalAugA = Model.Network_NonOTL_Actuals.Aug + Model.Network_OTL_Actuals.Aug + Model.IT_NonOTL_Actuals.Aug + Model.IT_OTL_Actuals.Aug;
                                    double totalSepA = Model.Network_NonOTL_Actuals.Sep + Model.Network_OTL_Actuals.Sep + Model.IT_NonOTL_Actuals.Sep + Model.IT_OTL_Actuals.Sep;
                                    double totalOctA = Model.Network_NonOTL_Actuals.Oct + Model.Network_OTL_Actuals.Oct + Model.IT_NonOTL_Actuals.Oct + Model.IT_OTL_Actuals.Oct;
                                    double totalNovA = Model.Network_NonOTL_Actuals.Nov + Model.Network_OTL_Actuals.Nov + Model.IT_NonOTL_Actuals.Nov + Model.IT_OTL_Actuals.Nov;
                                    double totalDecA = Model.Network_NonOTL_Actuals.Dec + Model.Network_OTL_Actuals.Dec + Model.IT_NonOTL_Actuals.Dec + Model.IT_OTL_Actuals.Dec;
                                    double totalActuals = totalJanA + totalFebA + totalMarA + totalAprA + totalMayA + totalJunA + totalJulA + totalAugA + totalSepA + totalOctA + totalNovA + totalDecA;

                                    }



                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Jan)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Feb)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Mar)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Apr)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.May)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Jun)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Jul)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Aug)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Sep)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Oct)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Nov)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Dec)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Forecasts.Total)
                                    </td>


                                </tr>

                                <tr class="tabletext-white">
                                    <th scope="row" class="card-text-2">
                                        OTL Forecast (Network)
                                    </th>

                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Jan)

                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Feb)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Mar)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Apr)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.May)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Jun)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Jul)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Aug)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Sep)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Oct)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Nov)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Dec)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Forecasts.Total)
                                    </td>


                                </tr>
                                <tr class="tabletext-white">
                                    <th scope="row" class="card-text-2">
                                        NonOTL Forecast (IT)
                                    </th>

                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Jan)

                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Feb)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Mar)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Apr)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.May)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Jun)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Jul)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Aug)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Sep)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Oct)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Nov)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Dec)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Total)
                                    </td>


                                </tr>
                                <tr class="tabletext-white">
                                    <th scope="row" class="card-text-2">
                                        OTL Forecast (IT)
                                    </th>

                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.Jan)

                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.Feb)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.Mar)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.Apr)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.May)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Forecasts.Jun)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.Jul)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.Aug)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.Sep)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.Oct)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.Nov)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.Dec)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Forecasts.Total)
                                    </td>


                                </tr>
                                <tr class="tabletext-white font-weight-bold table grey-2 text-white">
                                    <th scope="row" class="card-text-3">
                                        TOTAL FORECAST
                                    </th>

                                    <td class="card-text-4 border-bottom border-bottom-dark">
                                        @Convert.ToDecimal(totalJan / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">

                                        @Convert.ToDecimal(totalFeb / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">
                                        @Convert.ToDecimal(totalMar / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">
                                        @Convert.ToDecimal(totalApr / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">
                                        @Convert.ToDecimal(totalMay / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalJun / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalJul / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalAug / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalSep / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalOct / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">


                                        @Convert.ToDecimal(totalNov / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalDec / 1000000).ToString("$0.##0M")
                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalForecast / 1000000).ToString("$0.##0M")
                                    </td>
                                </tr>
                                <tr class="tabletext-white">
                                    <th scope="row" class="card-text-2">
                                        NonOTL Actuals (Network)
                                    </th>

                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Jan)

                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Feb)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Mar)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Apr)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.May)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Jun)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Jul)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Aug)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Sep)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Oct)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Nov)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Dec)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_NonOTL_Actuals.Total)
                                    </td>


                                </tr>
                                <tr class="tabletext-white">
                                    <th scope="row" class="card-text-2">
                                        OTL Actuals (Network)
                                    </th>

                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Jan)

                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Feb)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Mar)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Apr)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.May)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Jun)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Jul)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Aug)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Sep)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Oct)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Nov)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Dec)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.Network_OTL_Actuals.Total)
                                    </td>


                                </tr>
                                <tr class="tabletext-white">
                                    <th scope="row" class="card-text-2">
                                        NonOTL Actuals (IT)
                                    </th>

                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Jan)

                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Feb)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Mar)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Apr)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.May)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Jun)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Jul)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Aug)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Sep)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Oct)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Nov)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Dec)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Total)
                                    </td>


                                </tr>
                                <tr class="tabletext-white">
                                    <th scope="row" class="card-text-2">
                                        OTL Actuals (IT)
                                    </th>

                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.Jan)

                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.Feb)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.Mar)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.Apr)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.May)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_NonOTL_Actuals.Jun)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.Jul)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.Aug)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.Sep)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.Oct)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.Nov)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.Dec)
                                    </td>
                                    <td class="card-text-1">
                                        @Html.DisplayFor(model => model.IT_OTL_Actuals.Total)
                                    </td>


                                </tr>
                                <tr class="tabletext-white font-weight-bold table grey-2 text-white">
                                    <th scope="row" class="card-text-3">
                                        TOTAL ACTUAL
                                    </th>

                                    <td class="card-text-4 border-bottom border-bottom-dark">
                                        @Convert.ToDecimal(totalJanA / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">

                                        @Convert.ToDecimal(totalFebA / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">
                                        @Convert.ToDecimal(totalMarA / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">
                                        @Convert.ToDecimal(totalAprA / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-4">
                                        @Convert.ToDecimal(totalMayA / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalJunA / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalJulA / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalAugA / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalSepA / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalOctA / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalNovA / 1000000).ToString("$0.##0M")

                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalDecA / 1000000).ToString("$0.##0M")
                                    </td>
                                    <td class="card-text-1">
                                        @Convert.ToDecimal(totalActuals / 1000000).ToString("$0.##0M")
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-responsive-md text-center">
                                <thead>
                                <tr>
                                    <th>
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        HW
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        SW
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        PS
                                    </th>
                                    <th class="font-weight-bold card-text-2">
                                        OTL
                                    </th>


                                </tr>
                                </thead>
                                <tbody>


                                <tr>
                                    @{double sw = Model.CapitalExpenses.Sum(x => x.Software)
                                    + Model.CapitalExpenses.Sum(x => x.SoftwareIT)
                                    + Model.CapitalExpenses.Sum(x => x.SoftwareGencap);
                                    double hw = Model.CapitalExpenses.Sum(x => x.Hardware)
                                    + Model.CapitalExpenses.Sum(x => x.HardwareIT)
                                    + Model.CapitalExpenses.Sum(x => x.HardwareGencap);
                                    double profserv = Model.CapitalExpenses.Sum(x => x.ProfessionalServices);
                                    double internl = Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourNetwork)
                                    + Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourIT)
                                    + Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourGencap);
                                    }


                                    <th scope="row" class="card-text-2">
                                        Budget
                                    </th>
{{--                                    @if (Model.CapitalExpenses != null)--}}
{{--                                        {--}}
                                        <td class="card-text-1">
                                            @Convert.ToDecimal(hw / 1000000).ToString("$0.##0M")

                                        </td>
                                        <td class="card-text-1">

                                            @Convert.ToDecimal(sw / 1000000).ToString("$0.##0M")
                                        </td>
                                        <td class="card-text-1">
                                            @Convert.ToDecimal(profserv / 1000000).ToString("$0.##0M")
                                        </td>
                                        <td class="card-text-1">
                                            @Convert.ToDecimal(internl / 1000000).ToString("$0.##0M")
                                        </td>

                                        }
                                        else
                                        {
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

{{--                                        }--}}
                                </tr>

                                <tr class="table grey-2 text-white">
                                    <th scope="row" class="card-text-1">
                                        Forecast
                                    </th>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>



                                </tr>
                                <tr class="table grey-2 text-white">
                                    <th scope="row" class="card-text-1">
                                        Actuals
                                    </th>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>



                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>







{{--        <div class="tab-pane fade" id="audit" role="tabpanel">--}}

{{--            <div class="card" data-aos="fade-up">--}}
{{--                <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-bg-4 text-white">Audit Trail</h3>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col card border-left-danger shadow h-100 py-2">--}}
{{--                            <table class="table table-bordered table-responsive-md text-center">--}}

{{--                                <tbody>--}}


{{--                                @for (var i = 0; i < Model.AuditTrails?.Count; i++)--}}
{{--                                    {--}}
{{--                                    @if (Model.AuditTrails[i].Section == "CA" || Model.AuditTrails[i].Section == "Both")--}}
{{--                                        {--}}

{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                @Html.DisplayFor(modelItem => modelItem.AuditTrails[i].EnglishString)--}}
{{--                                            </td>--}}

{{--                                        </tr>--}}
{{--                                        }--}}
{{--                                        }--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="tab-pane fade" id="opex" role="tabpanel">
            <div class="card" data-aos="fade-up">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 justify-content-center card-bg-4 text-white">Opex Information</h3>
            <div class="row">
                <div class="col card border-left-danger shadow h-100 py-2">
                    <label class="control-label font-weight-bold">
                        Opex Drag Current Year
                    </label>
                    <p>
                        @Html.Raw(Model.OpexInfo.Sum(x => x.OpexDragCurrentYear))
                    </p>
                </div>
                <div class="col card border-left-danger shadow h-100 py-2">
                    <label class="control-label font-weight-bold">
                        Opex Drag Future Year
                    </label>
                    <p>
                        @Html.Raw(Model.OpexInfo.Sum(x => x.OpexDragFutureYear))

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col card border-left-danger shadow h-100 py-2">
                    <label class="control-label font-weight-bold">
                        Opex Drag After Future Year
                    </label>
                    <p>
                        @Html.Raw(Model.OpexInfo.Sum(x => x.OpexDragAfterFutureYear))
                    </p>
                </div>

            </div>


        </div>
        </div>

        </div>
        </div>



    @endsection

</x-_AdminLayout>
