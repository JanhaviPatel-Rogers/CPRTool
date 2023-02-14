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
                            @Html.DisplayNameFor(model => model.Priority)
                        </label>
                        <p>
                            @Html.DisplayFor(model => model.Priority)
                        </p>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col">
                        <label class="control-label font-weight-bold">
                            @Html.DisplayNameFor(model => model.RNCCDependency)
                        </label>
                        <p>
                            @Html.DisplayFor(model => model.RNCCDependency)
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.BudgetStartYear)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.BudgetStartYear)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.CapexCategory)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.CapexCategory)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.KTwoNumber)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.KTwoNumber)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.CapexGovernanceCategory)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.CapexGovernanceCategory)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.Name)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.Name)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.PoiDate)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.PoiDate)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Total CA Value
                            </label>
                            <p>
                                @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.Total))
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.PorLaunchDate)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.PorLaunchDate)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                Capital Request ?
                            </label>
                            <p>

                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.ProjectEndDate)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.ProjectEndDate)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.Status)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.Status)
                            </p>
                        </div>
                        @if(auth()->user()->userHasRole('admin'))
                            <div class="col">
                                <label class="control-label font-weight-bold">
                                    @Html.DisplayNameFor(model => model.SponsorCategory)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.SponsorCategory)
                                </p>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.CreateAt)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.CreateAt)
                            </p>
                        </div>
                        @if(auth()->user()->userHasRole('admin'))
                            <div class="col">
                                <label class="control-label font-weight-bold">
                                    @Html.DisplayNameFor(model => model.FiscalBudgetCategory)
                                </label>
                                <p>
                                    @Html.DisplayFor(model => model.FiscalBudgetCategory)
                                </p>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.HighLevelSummary)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.HighLevelSummary)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.KeyInitiave)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.KeyInitiave)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.Category)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.Category)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.Interlock)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.Interlock)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.SubCategory)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.SubCategory)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.PotentialAdvancements)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.PotentialAdvancements)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.ProjectType)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.ProjectType)
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
                                @Html.DisplayNameFor(model => model.ExecutiveSponsor)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.ExecutiveSponsor)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.Sponsor)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.Sponsor)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.TechDeliveryVp)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.TechDeliveryVp)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.DeliveryOwner)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.DeliveryOwner)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.BUVPOwner)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.BUVPOwner)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.Submitter)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.Submitter)
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
                                @Html.DisplayNameFor(model => model.BusinessProblem)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.BusinessProblem)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.BusinessSolution)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.BusinessSolution)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.CostBreakdown)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.CostBreakdown)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.BenefitAndRisk)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.BenefitAndRisk)
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
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().Hardware)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().HardwareIT)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().HardwareGencap)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().Software)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().SoftwareIT)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().SoftwareGencap)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().ProfessionalServices)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().ThirdParty)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().ExternalLabourGencap)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().InternalCapitalizedLabourNetwork)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().InternalCapitalizedLabourIT)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().InternalCapitalizedLabourGencap)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.CapitalExpenses.First().Total)
                                </th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach (var item in Model.CapitalExpenses)--}}
{{--                                {--}}
                                <tr>
                                    <th>
                                        @Html.DisplayFor(modelItem => item.YearAndMonth)
                                    </th>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.Hardware)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.HardwareIT)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.HardwareGencap)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.Software)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.SoftwareIT)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.SoftwareGencap)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.ProfessionalServices)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.ThirdParty)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.ExternalLabourGencap)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.InternalCapitalizedLabourNetwork)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.InternalCapitalizedLabourIT)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.InternalCapitalizedLabourGencap)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.Total)
                                    </td>
                                </tr>
{{--                                }--}}
                                <tr class="table-active">
                                    <th scope="row">
                                        Total
                                    </th>
                                    <td>
                                        @String.Format(budgetFormatter, @Model.CapitalExpenses.Sum(x => x.Hardware))
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
                                        <th>
                                            @Html.DisplayFor(modelItem => item.Year)
                                        </th>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.Hardware)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.HardwareIT)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.HardwareGencap)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.Software)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.SoftwareIT)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.SoftwareGencap)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.ProfessionalServices)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.ThirdParty)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.ExternalLabourGencap)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.InternalCapitalizedLabourNetwork)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.InternalCapitalizedLabourIT)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.InternalCapitalizedLabourGencap)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.Total)
                                        </td>
                                    </tr>
{{--                                    }--}}
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
                                        @Html.DisplayNameFor(modelItem => modelItem.OperationalExpenses.First().Year)
                                    </th>
                                    <th>
                                        @Html.DisplayNameFor(modelItem => modelItem.OperationalExpenses.First().Budget)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
{{--                                @foreach (var item in Model.OperationalExpenses)--}}
{{--                                    {--}}
                                    <tr>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.Year)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.Budget)
                                        </td>
                                    </tr>
{{--                                    }--}}
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.OpexComment)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.OpexComment)
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
                                @Html.DisplayNameFor(model => model.FunctionCable)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.FunctionCable)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.FunctionWireless)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.FunctionWireless)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.FunctionRogersForBusiness)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.FunctionRogersForBusiness)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.FunctionMedia)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.FunctionMedia)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.FunctionRogersSmartHomeMonitoring)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.FunctionRogersSmartHomeMonitoring)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.FunctionBank)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.FunctionBank)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.FunctionRogersCommunicationsIncorporated)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.FunctionRogersCommunicationsIncorporated)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.TotalAllocation)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.TotalAllocation)
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
                                @Html.DisplayNameFor(model => model.GreaterTorontoArea)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.GreaterTorontoArea)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.Ontario)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.Ontario)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.Quebec)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.Quebec)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.BritishColumbia)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.BritishColumbia)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.Alberta)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.Alberta)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.MidWest)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.MidWest)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.Atlantic)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.Atlantic)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.TotalRegionalAllocation)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.TotalRegionalAllocation)
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
                                    @Html.DisplayNameFor(modelItem => modelItem.VendorBudgets.First().Vendor)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.VendorBudgets.First().Hardware)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.VendorBudgets.First().Software)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.VendorBudgets.First().ExternalLabour)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.VendorBudgets.First().Total)
                                </th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach (var item in Model.VendorBudgets)--}}
{{--                                {--}}
                                <tr>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.Vendor.Name)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.Hardware)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.Software)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.ExternalLabour)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.Total)
                                    </td>
                                </tr>
{{--                                }--}}
                                <tr class="table-active">
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
                                    @Html.DisplayNameFor(modelItem => modelItem.Decommissions.First().InternalLabour)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.Decommissions.First().ExternalLabour)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.Decommissions.First().EstimatedSaving)
                                </th>
                                <th>
                                    @Html.DisplayNameFor(modelItem => modelItem.Decommissions.First().NumberOfPlatform)
                                </th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach (var item in Model.Decommissions)--}}
{{--                                {--}}
                                <tr>
                                    <th>
                                        @Html.DisplayFor(modelItem => item.YearAndQuarter)
                                    </th>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.InternalLabour)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.ExternalLabour)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.EstimatedSaving)
                                    </td>
                                    <td>
                                        @Html.DisplayFor(modelItem => item.NumberOfPlatform)
                                    </td>
                                </tr>
{{--                                }--}}
                                <tr>
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
{{--                                @foreach (var item in Model.FutureDecommissions)--}}
{{--                                    {--}}
                                    <tr>
                                        <th scope="row">
                                            @Html.DisplayFor(modelItem => item.Year)
                                        </th>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.InternalLabour)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.ExternalLabour)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.EstimatedSaving)
                                        </td>
                                        <td>
                                            @Html.DisplayFor(modelItem => item.NumberOfPlatform)
                                        </td>
                                    </tr>
{{--                                    }--}}
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.DecomInternalLabourNote)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.DecomInternalLabourNote)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.DecomExternalLabourNote)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.DecomExternalLabourNote)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.DecomEstimatedSavingNote)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.DecomEstimatedSavingNote)
                            </p>
                        </div>
                        <div class="col">
                            <label class="control-label font-weight-bold">
                                @Html.DisplayNameFor(model => model.DecomNumberOfPlatformNote)
                            </label>
                            <p>
                                @Html.DisplayFor(model => model.DecomNumberOfPlatformNote)
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
