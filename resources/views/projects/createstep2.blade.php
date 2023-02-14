<x-_AdminLayout>
    @section('content')
        <head>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"/>
            <script
                src="https://code.jquery.com/jquery-1.12.4.js">
            </script>
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"
                src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
                src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">

            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



            <style>
                .table {
                    table-layout:fixed;
                    margin:0;
                    padding:0;
                    width:100%;
                    border-collapse: collapse;
                    border-spacing: 0;
                    white-space: nowrap;
                }
                .input1 {
                    font-size: 9px;
                }


                .th, td {
                    border-spacing: 10px;
                    border: 1px;
                    text-align: center;
                }


                .card-1 {
                    background: #DA291C;
                    min-width: 1000px;
                    text-align: center;
                }

                td:first-child{
                    padding-left:10px;
                }



            </style>

            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        </head>


        <h1>Create Step 2</h1>
        <h4>Project</h4>
        <!-- Main wrapper  -->
        <div class="row">
            <div class="unix-login">
                <div class="container-fluid">
                    <div class="row justify-content-center">



{{--                        <form method="post" action="{{ route('projects.storeStep2', $projects) }}" enctype='multipart/form-data'>--}}
                        <form  method="post" action="{{ route('projects.storeStep2', $projects) }}" enctype='multipart/form-data'>
                        @csrf
                <div class="text-danger"></div>
                <input type="hidden" for="ProjectID" />
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Spend Profile</h3>
                    <div class="card-body" style="overflow-x: scroll">
                        <div id="printer-type" class="table-responsive">
                                <span class="float-right mb-3 mr-2">
                                    <button type="button" id=""
                                            class="btn btn-info btn-rounded btn-sm input1"
                                            onclick="addRowToCapex($(this))">
                                        Add New Row
                                        <i class="fas fa-plus-square ml-1"></i>
                                    </button>
                                </span>
                            <table class="table"  style="width:100%">
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
                                <tr>
                                    <td></td>
{{--                                                                            @*<td>--}}
{{--                                                                                <input for="@Model.CapitalExpenses[i].CapitalExpenseID" class="form-control input1" style="display:none" type="tel" />--}}
{{--                                                                                <span for="@Model.CapitalExpenses[i].CapitalExpenseID" class="text-danger"></span>--}}
{{--                                                                            </td>*@--}}
                                    <td>
                                        <div style="width:55px; font-size: 8px;" >
                                            <input class="form-control input1" name="CapitalExpenses[0][Year]" type="tel" />
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:40px">
                                            <input class="form-control input1" name="CapitalExpenses[0][Month]" type="tel" />
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][Hardware]" class="form-control capex capital-expenses-0 capex-hw sum1   input1 " value="0" type="tel"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-hw"), $("#total-capex-hw"));' />
                                            {{--                                                             {{--  onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal(("<?php echo $".capital-expenses-{0}" ?>"), $("<?php echo "#total-capital-expenses-{0}"?>")) ;updateTotal($(".capex-hw"), $("#total-capex-hw"));' />--}}
                                            {{--  updateTotal($(".capital-expenses-{0}"), $("($"#total-capital-expenses-{0}")"));--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][HardwareIT]" class="form-control capex capital-expenses-0 capex-hwit sum1   input1" value="0"  type="tel"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-hwit"), $("#total-capex-hwit"));' />
                                            {{--                                                   class="@($"form-control capex capital-expenses-{0} capex-hwit") input1" type="tel"--}}
                                            {{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{0}")"), $("@($"#total-capital-expenses-{0}")")); updateTotal($(".capex-hwit"), $("#total-capex-hwit"));' />--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][HardwareGencap]" class="form-control capex capital-expenses-0 capex-hwgc sum1   input1" value="0" type="tel"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-hwgc"), $("#total-capex-hwgc"));' />
                                            {{--                                                   class="@($"form-control capex capital-expenses-{0} capex-hwgc") input1" type="tel"--}}
                                            {{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{0}")"), $("@($"#total-capital-expenses-{0}")")); updateTotal($(".capex-hwgc"), $("#total-capex-hwgc"));' />--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][Software]" class="form-control capex capital-expenses-0 capex-sw sum1   input1" value="0" type="text"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-sw"), $("#total-capex-sw"));' />
                                            {{--                                                   class="@($"form-control capex capital-expenses-{0} capex-sw") input1" type="tel"--}}
                                            {{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{0}")"), $("@($"#total-capital-expenses-{0}")")); updateTotal($(".capex-sw"), $("#total-capex-sw"));' />--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][SoftwareIT]" class="form-control capex capital-expenses-0 capex-swit sum1   input1" value="0" type="text"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-swit"), $("#total-capex-swit"));' />
                                            {{--                                                   class="@($"form-control capex capital-expenses-{0} capex-swit") input1" type="tel"--}}
                                            {{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{0}")"), $("@($"#total-capital-expenses-{0}")")); updateTotal($(".capex-swit"), $("#total-capex-swit"));' />--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][SoftwareGencap]" class="form-control capex capital-expenses-0 capex-swgc sum1   input1" value="0" type="text"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-swgc"), $("#total-capex-swgc"));' />
                                            {{--                                                   class="@($"form-control capex capital-expenses-{0} capex-swgc") input1" type="tel"--}}
                                            {{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{0}")"), $("@($"#total-capital-expenses-{0}")")); updateTotal($(".capex-swgc"), $("#total-capex-swgc"));' />--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][ExternalLabourNetwork]" class="form-control capex capital-expenses-0 capex-ps sum1   input1" value="0" type="text"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-ps"), $("#total-capex-ps"));' />
                                            {{--                                                   class="@($"form-control capex capital-expenses-{0} capex-ps") input1" type="tel"--}}
                                            {{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{0}")"), $("@($"#total-capital-expenses-{0}")")); updateTotal($(".capex-ps"), $("#total-capex-ps"));' />--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][ExternalLabourIT]" class="form-control capex capital-expenses-0 capex-tp sum1   input1" value="0" type="text"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-tp"), $("#total-capex-tp"));' />
                                            {{--                                                   class="@($"form-control capex capital-expenses-{0} capex-tp") input1" type="tel"--}}
                                            {{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{0}")"), $("@($"#total-capital-expenses-{0}")")); updateTotal($(".capex-tp"), $("#total-capex-tp"));' />--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][ExternalLabourGencap]" class="form-control capex capital-expenses-0 capex-elgc sum1   input1" value="0" type="text"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-elgc"), $("#total-capex-elgc"));' />
                                            {{--                                                   class="@($"form-control capex capital-expenses-{0} capex-elgc") input1" type="tel"--}}
                                            {{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{0}")"), $("@($"#total-capital-expenses-{0}")")); updateTotal($(".capex-elgc"), $("#total-capex-elgc"));' />--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][InternalCapitalizedLabourNetwork]" class="form-control capex capital-expenses-0 capex-icln sum1   input1" value="0" type="text"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-icln"), $("#total-capex-icln"));' />
                                            {{--                                                   class="@($"form-control capex capital-expenses-{0} capex-icln") input1" type="tel"--}}
                                            {{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{0}")"), $("@($"#total-capital-expenses-{0}")")); updateTotal($(".capex-icln"), $("#total-capex-icln"));' />--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][InternalCapitalizedLabourIT]" class="form-control capex capital-expenses-0 capex-iclit sum1   input1" value="0" type="text"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-iclit"), $("#total-capex-iclit"));' />
                                            {{--                                                   class="@($"form-control capex capital-expenses-{0} capex-iclit") input1" type="tel"--}}
                                            {{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{0}")"), $("@($"#total-capital-expenses-{0}")")); updateTotal($(".capex-iclit"), $("#total-capex-iclit"));' />--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:35px; font-size: 8px;" >
                                            <input name="CapitalExpenses[0][InternalCapitalizedLabourGencap]" class="form-control capex capital-expenses-0 capex-iclg sum1   input1" value="0" type="text"
                                                   onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($(".capital-expenses-0"), $("#total-capital-expenses-0")); updateTotal($(".capex-iclg"), $("#total-capex-iclg"));' />
                                            {{--                                                   class="@($"form-control capex capital-expenses-{0} capex-iclg") input1" type="tel"--}}
                                            {{--                                            onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{0}")"), $("@($"#total-capital-expenses-{0}")")); updateTotal($(".capex-iclg"), $("#total-capex-iclg"));' />--}}
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div id="sum" style="width:55px; font-size: 8px;" >
                                            <input class="form-control input1" name="CapitalExpenses[0][total]" class="form-control input1 total1" type="text" readonly id="total-capital-expenses-0" type="tel"/>
                                            <span class="text-danger"></span>
                                        </div>
                                    </td>


                                </tr>
{{--                                --}}{{--                                    @for (var i = 1; i < Model.CapitalExpenses?.Count; i++)--}}
{{--                                {--}}
{{--                                <tr class="position-relative">--}}
{{--                                    <td></td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="Year" class="form-control input1" type="tel" />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 40px">--}}
{{--                                            <input for="Month" class="form-control input1" type="tel" />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="Hardware"  class="form-control input1" type="tel" />--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-hw") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-hw"), $("#total-capex-hw"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="HardwareIT"  class="form-control input1" type="tel"/>--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-hwit") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-hwit"), $("#total-capex-hwit"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="HardwareGencap" class="form-control input1" type="tel"/>--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-hwgc") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-hwgc"), $("#total-capex-hwgc"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="Software" class="form-control input1" type="tel"/>--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-sw") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-sw"), $("#total-capex-sw"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="SoftwareIT" class="form-control input1" type="tel"/>--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-swit") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-swit"), $("#total-capex-swit"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="SoftwareGencap" class="form-control input1" type="tel"/>--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-swgc") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-swgc"), $("#total-capex-swgc"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="ExternalLabourNetwork" class="form-control input1" type="tel"/>--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-ps") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-ps"), $("#total-capex-ps"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="ExternalLabourIT" class="form-control input1" type="tel"/>--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-tp") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-tp"), $("#total-capex-tp"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="ExternalLabourGencap" class="form-control input1" type="tel"/>--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-elgc") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-elgc"), $("#total-capex-elgc"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="InternalCapitalizedLabourNetwork" class="form-control input1" type="tel"/>--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-icln") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-icln"), $("#total-capex-icln"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="InternalCapitalizedLabourIT" class="form-control input1" type="tel"/>--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-iclit") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-iclit"), $("#total-capex-iclit"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="InternalCapitalizedLabourGencap" class="form-control input1" type="tel"/>--}}
{{--                                            --}}{{--                                                           class="@($"form-control capex capital-expenses-{i} capex-iclg") input1" type="tel"--}}
{{--                                            --}}{{--                                                    onchange='updateTotal($(".capex"), $("#total-capex")); updateTotal($("@($".capital-expenses-{i}")"), $("@($"#total-capital-expenses-{i}")")); updateTotal($(".capex-iclg"), $("#total-capex-iclg"));' />--}}
{{--                                            <span class="text-danger"></span>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="width: 55px">--}}
{{--                                            <input for="Total"--}}
{{--                                                   id="total"--}}
{{--                                                   class="form-control input1"--}}
{{--                                                   --}}{{--                                                           id="@($"total-capital-expenses-{i}")"--}}
{{--                                                   readonly="readonly" />--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                                    <span class="table-remove">--}}
{{--                                                        <button type="button"--}}
{{--                                                                class="btn btn-sm my-0"--}}
{{--                                                                onclick="removeRow($(this))">--}}
{{--                                                            <span style="font-size: 1em; color:red;">--}}
{{--                                                                <i class="fas fa-trash-alt"></i>--}}
{{--                                                            </span>--}}
{{--                                                        </button>--}}
{{--                                                    </span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                                --}}{{--                                        }--}}
                                <tfoot>
                                <tr>
                                    <th scope="row" colspan="3" class="input1 text-center align-self-center">
                                        Total
                                    </th>

                                    <td>
                                        <div id="sum2" style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.Hardware)"--}}

                                                   id="total-capex-hw"
                                                   readonly="readonly"
                                                   type="text"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.HardwareIT)"--}}
                                                   id="total-capex-hwit"
                                                   readonly="readonly"
                                                   type="text"/>
                                        </div>
                                    </td>
                                    <td class="totalCol">
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.HardwareGencap)"--}}
                                                   id="total-capex-hwgc"
                                                   readonly="readonly"
                                                   type="text"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.Software)"--}}
                                                   id="total-capex-sw"
                                                   readonly="readonly"
                                                   type="tel"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.SoftwareIT)"--}}
                                                   id="total-capex-swit"
                                                   readonly="readonly"
                                                   type="tel"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.SoftwareGencap)"--}}
                                                   id="total-capex-swgc"
                                                   readonly="readonly"
                                                   type="tel"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.ProfessionalServices)"--}}
                                                   id="total-capex-ps"
                                                   readonly="readonly"
                                                   type="tel"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.ThirdParty)"--}}
                                                   id="total-capex-tp"
                                                   readonly="readonly"
                                                   type="tel"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.ExternalLabourGencap)"--}}
                                                   id="total-capex-elgc"
                                                   readonly="readonly"
                                                   type="tel"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourNetwork)"--}}
                                                   id="total-capex-icln"
                                                   readonly="readonly"
                                                   type="tel"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourIT)"--}}
                                                   id="total-capex-iclit"
                                                   readonly="readonly"
                                                   type="tel"/>
                                        </div>

                                    </td>
                                    <td>
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.InternalCapitalizedLabourGencap)"--}}
                                                   id="total-capex-iclg"
                                                   readonly="readonly"
                                                   type="tel"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:50px">
                                            <input class="form-control input1"
{{--                                                   value="@Model.CapitalExpenses.Sum(x => x.Total)"--}}
                                                   id="total-capex"
                                                   readonly="readonly"
                                                   type="tel"/>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
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
                                <tr>
                                    <td>
                                        <div style="width: 55px">
                                        <input for="Year" type="text"
                                               class="form-control input1" />
                                        </div>
                                    </td>

                                    <td>
                                        <div style="width:55px; font-size: 8px;" >
                                            <input name="futureCapitalExpenses[0][HardwareFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                                   onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />
                                        <span class="text-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][HardwareITFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                               onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />                                        {{--                                                   class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][HardwareGencapFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                               onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />                                        {{--                                                   class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][SoftwareFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                               onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />                                        {{--                                                   class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][SoftwareITFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                               onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />                                        {{--                                                   class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][SoftwareGencapFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                               onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />                                        {{--                                                   class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][ExternalLabourNetworkFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                               onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][ExternalLabourITFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                               onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />                                        {{--                                                   class="@($"form-control future-captital-expenses-{0}") input1" type="text"--}}
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][ExternalLabourGencapFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                               onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][InternalCapitalizedLabourNetworkFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                               onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][InternalCapitalizedLabourITFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                               onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />                                        {{--                                                   class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][InternalCapitalizedLabourGencapFE]" class="form-control future-capital-expenses-0 input1" value="0" type="tel"
                                               onchange='updateTotal($(".future-capital-expenses-0"), $("#total-future-capital-expenses-0"));' />                                        {{--                                                   class="@($"form-control future-captital-expenses-{0}") input1"--}}
                                    </td>
                                    <td>
                                        <input name="futureCapitalExpenses[0][total]"
                                               class="form-control input1 inputbox" id="total-future-capital-expenses-0"
                                               readonly="readonly" />
                                    </td>

                                </tr>
{{--                                --}}{{--                                    @for (var i = 1; i < Model.FutureCaptitalExpenses?.Count; i++)--}}
{{--                                --}}{{--                                        {--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <input for="Year"--}}
{{--                                               class="form-control input1" />--}}
{{--                                    </td>--}}

{{--                                    <td>--}}
{{--                                        <input for="Hardware" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="HardwareIT" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="HardwareGencap" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="Software" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="SoftwareIT" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="SoftwareGencap" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="ProfessionalServices" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="ThirdParty" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="ExternalLabourGencap" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="InternalCapitalizedLabourNetwork" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="InternalCapitalizedLabourIT" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="InternalCapitalizedLabourGencap" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control future-captital-expenses-{i}") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($("@($".future-captital-expenses-{i}")"), $("@($"#total-future-captital-expenses-{i}")"))' />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="Total"--}}
{{--                                               class="form-control input1"--}}
{{--                                               --}}{{--                                                       id="@($"total-future-captital-expenses-{i}")"--}}
{{--                                               readonly="readonly" />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                                    <span class="table-remove">--}}

{{--                                                        <button type="button"--}}
{{--                                                                class="btn btn-sm my-0"--}}
{{--                                                                onclick="removeRow($(this))">--}}
{{--                                                            <span style="font-size: 1em; color:red;">--}}
{{--                                                                <i class="fas fa-trash-alt"></i>--}}
{{--                                                            </span>--}}
{{--                                                        </button>--}}
{{--                                                    </span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                --}}{{--                                        }--}}
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
                                    <tr>
                                        <td>
                                            <input name="OperationalExpenses[0][YearOE]" class="form-control input1" type="tel" />
                                        </td>
                                        <td>
                                            <input name="OperationalExpenses[0][Budget]" class="form-control input1" type="tel" />
                                        </td>

                                    </tr>
{{--                                    --}}{{--                                        @for (var i = 1; i < Model.OperationalExpenses?.Count; i++)--}}
{{--                                    --}}{{--                                            {--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <input for="@Model.OperationalExpenses[i].Year" class="form-control input1" />--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <input for="@Model.OperationalExpenses[i].Budget" class="form-control input1" />--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                                        <span class="table-remove">--}}
{{--                                                            <button type="button"--}}
{{--                                                                    class="btn btn-sm my-0"--}}
{{--                                                                    onclick="removeRow($(this))">--}}
{{--                                                                <span style="font-size: 1em; color:red;">--}}
{{--                                                                    <i class="fas fa-trash-alt"></i>--}}
{{--                                                                </span>--}}
{{--                                                            </button>--}}
{{--                                                        </span>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    --}}{{--                                            }--}}
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group col">
                                <label for="OpexComment" class="control-label input1 font-weight-bold"></label>
                                <textarea for="OpexComment" class="form-control input1" rows="6"></textarea>
                                <span for="OpexComment" class="text-danger"></span>
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
                                            class="btn btn-info btn-rounded btn-sm input1"
                                            onclick="addRowToVendor($(this))">
                                        {{--                                            class="btn btn-info btn-rounded btn-sm input1"--}}
                                        {{--                                            onclick="addRowToVendor($(this))">--}}
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
                                <tr>
                                    <td>
                                        <select class="form-control input1">
                                            <option value="">-- Select Vendor --</option>
                                            @foreach($vendors as $item)
                                                <option value="{{$item->id}}">{{$item->VendorID}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger"></span>
                                    </td>

                                    <td>
                                        <input name="VendorBudgets[0][HardwareVB]"
                                               class="form-control vendor-budget vendor-budgets-0 vendor-budget-hw input1" type="tel"
                                               onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($(".vendor-budgets-0"), $("#total-vendor-budgets-0")); updateTotal($(".vendor-budget-hw"), $("#total-vendors-hw"));' />
                                        <span for="Hardware" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="VendorBudgets[0][SoftwareVB]"
                                        class="form-control vendor-budget vendor-budgets-0 vendor-budget-sw input1" type="tel"
                                        onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($(".vendor-budgets-0"), $("#total-vendor-budgets-0")); updateTotal($(".vendor-budget-sw"), $("#total-vendors-sw"));' />
                                        <span for="Software" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="VendorBudgets[0][ExternalLabourVB]"
                                        class="form-control vendor-budget vendor-budgets-0 vendor-budget-el input1" type="tel"
                                        onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($(".vendor-budgets-0"), $("#total-vendor-budgets-0")); updateTotal($(".vendor-budget-el"), $("#total-vendors-el"));' />
                                        <span for="ExternalLabour" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="VendorBudgets[0][Total]" class="form-control input1"
                                               class="form-control input1" id="total-vendor-budgets-0"
                                               readonly="readonly" />
                                    </td>

                                </tr>
{{--                                --}}{{--                                    @for (var i = 1; i < Model.VendorBudgets?.Count; i++)--}}
{{--                                --}}{{--                                        {--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <select for="VendorID" class="form-control input1">--}}
{{--                                            <option value="">-- Select Vendor --</option>--}}
{{--                                        </select>--}}
{{--                                        <span for="VendorID" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="Hardware" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control vendor-budget vendor-budgets-{i} vendor-budget-hw") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($("@($".vendor-budgets-{i}")"), $("@($"#total-vendor-budgets-{i}")")); updateTotal($(".vendor-budget-hw"), $("#total-vendors-hw"));' />--}}
{{--                                        <span for="Hardware" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="Software" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control vendor-budget vendor-budgets-{i} vendor-budget-sw") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($("@($".vendor-budgets-{i}")"), $("@($"#total-vendor-budgets-{i}")")); updateTotal($(".vendor-budget-sw"), $("#total-vendors-sw"));' />--}}
{{--                                        <span for="Software" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="ExternalLabour" class="form-control input1"/>--}}
{{--                                        --}}{{--                                                       class="@($"form-control vendor-budget vendor-budgets-{i} vendor-budget-el") input1"--}}
{{--                                        --}}{{--                                                onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($("@($".vendor-budgets-{i}")"), $("@($"#total-vendor-budgets-{i}")")); updateTotal($(".vendor-budget-el"), $("#total-vendors-el"));' />--}}
{{--                                        <span for="ExternalLabour" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="Total" class="form-control input1"--}}
{{--                                               --}}{{--                                                       class="form-control input1" id="@($"total-vendor-budgets-{i}")"--}}
{{--                                               readonly="readonly" />--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                                    <span class="table-remove">--}}
{{--                                                        <button type="button"--}}
{{--                                                                class="btn btn-sm my-0"--}}
{{--                                                                onclick="removeRow($(this))">--}}
{{--                                                            <span style="font-size: 1em; color:red;">--}}
{{--                                                                <i class="fas fa-trash-alt"></i>--}}
{{--                                                            </span>--}}
{{--                                                        </button>--}}
{{--                                                    </span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                --}}{{--                                        }--}}
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
                                <tr>
                                    <td>
                                        <input name="Decomissions[0][YearDC]"
                                               class="form-control input1" type="tel" />
                                        <span for="@Model.Decommissions[0].Year" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="Decomissions[0][Quarter]"
                                               class="form-control input1" type="tel" />
                                        <span for="Quarter" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="Decomissions[0][InternalLabourDC]"
                                               class="form-control decom-il input1" type="tel"
                                               onchange='updateTotal($(".decom-il"), $("#total-decom-il"));' />
                                        <span for="InternalLabour" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="Decomissions[0][ExternalLabourDC]"
                                               class="form-control decom-el input1" type="tel"
                                               onchange='updateTotal($(".decom-el"), $("#total-decom-el"));' />
                                        <span for="ExternalLabour" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="Decomissions[0][EstimatedSavingDC]"
                                               class="form-control decom-saving input1" type="tel"
                                               onchange='updateTotal($(".decom-saving"), $("#total-decom-saving"));' />
                                        <span for="EstimatedSaving" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="Decomissions[0][NumberOfPlatformDC]"
                                               class="form-control decom-platform input1" type="tel"
                                               onchange='updateTotal($(".decom-platform"), $("#total-decom-platform"));' />
                                        <span for="NumberOfPlatform" class="text-danger"></span>
                                    </td>

                                </tr>
{{--                                --}}{{--                                    @for (var i = 1; i < Model.Decommissions?.Count; i++)--}}
{{--                                --}}{{--                                        {--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <input for="Year"--}}
{{--                                               class="form-control input1" />--}}
{{--                                        <span for="Year" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="Quarter"--}}
{{--                                               class="form-control input1" />--}}
{{--                                        <span for="Quarter" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="InternalLabour"--}}
{{--                                               class="form-control decom-il input1"--}}
{{--                                               onchange='updateTotal($(".decom-il"), $("#total-decom-il"));' />--}}
{{--                                        <span for="InternalLabour" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="@ExternalLabour"--}}
{{--                                               class="form-control decom-el input1"--}}
{{--                                               onchange='updateTotal($(".decom-el"), $("#total-decom-el"));' />--}}
{{--                                        <span for="ExternalLabour" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="EstimatedSaving"--}}
{{--                                               class="form-control decom-saving input1"--}}
{{--                                               onchange='updateTotal($(".decom-saving"), $("#total-decom-saving"));' />--}}
{{--                                        <span for="EstimatedSaving" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="NumberOfPlatform"--}}
{{--                                               class="form-control decom-platform input1"--}}
{{--                                               onchange='updateTotal($(".decom-platform"), $("#total-decom-platform"));' />--}}
{{--                                        <span for="NumberOfPlatform" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                                    <span class="table-remove">--}}
{{--                                                        <button type="button"--}}
{{--                                                                class="btn btn-sm my-0"--}}
{{--                                                                onclick="removeRow($(this))">--}}
{{--                                                            <span style="font-size: 1em; color:red;">--}}
{{--                                                                <i class="fas fa-trash-alt"></i>--}}
{{--                                                            </span>--}}
{{--                                                        </button>--}}
{{--                                                    </span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                --}}{{--                                        }--}}
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
                                <tr>
                                    <td>
                                        <input name="FutureDecomissions[0][YearFDC]" class="form-control input1" type="tel" />
                                        <span for="Year" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="FutureDecomissions[0][InternalLabourFDC]" class="form-control input1" type="tel" />
                                        <span for="InternalLabour" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="FutureDecomissions[0][ExternalLabourFDC]" class="form-control input1" type="tel" />
                                        <span for="ExternalLabour" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="FutureDecomissions[0][EstimatedSavingsFDC]" class="form-control input1" type="tel" />
                                        <span for="EstimatedSaving" class="text-danger"></span>
                                    </td>
                                    <td>
                                        <input name="FutureDecomissions[0][NumberOfPlatformFDC]" class="form-control input1" type="tel" />
                                        <span for="NumberOfPlatform" class="text-danger"></span>
                                    </td>

                                </tr>
{{--                                --}}{{--                                    @for (var i = 1; i < Model.FutureDecommissions?.Count; i++)--}}
{{--                                --}}{{--                                        {--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <input for="Year" class="form-control input1" />--}}
{{--                                        <span for="Year" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="InternalLabour" class="form-control input1" />--}}
{{--                                        <span for="InternalLabour" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="ExternalLabour" class="form-control input1" />--}}
{{--                                        <span for="ExternalLabour" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="EstimatedSaving" class="form-control input1" />--}}
{{--                                        <span for="EstimatedSaving" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <input for="NumberOfPlatform" class="form-control input1" />--}}
{{--                                        <span for="NumberOfPlatform" class="text-danger"></span>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                                    <span class="table-remove">--}}
{{--                                                        <button type="button"--}}
{{--                                                                class="btn btn-sm my-0"--}}
{{--                                                                onclick="removeRow($(this))">--}}
{{--                                                            <span style="font-size: 1em; color:red;">--}}
{{--                                                                <i class="fas fa-trash-alt"></i>--}}
{{--                                                            </span>--}}
{{--                                                        </button>--}}
{{--                                                    </span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                --}}{{--                                        }--}}
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="DecomExternalLabourNote" class="control-label font-weight-bold input1"></label>
                                <textarea for="DecomExternalLabourNote" class="form-control input1" rows="6"></textarea>
                                <span for="DecomExternalLabourNote" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="DecomInternalLabourNote" class="control-label font-weight-bold input1"></label>
                                <textarea for="DecomInternalLabourNote" class="form-control input1" rows="6"></textarea>
                                <span for="DecomInternalLabourNote" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="DecomEstimatedSavingNote" class="control-label font-weight-bold input1"></label>
                                <textarea for="DecomEstimatedSavingNote" class="form-control input1" rows="6"></textarea>
                                <span for="DecomEstimatedSavingNote" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="DecomNumberOfPlatformNote" class="control-label font-weight-bold input1"></label>
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
                            <th scope="col" class="input1 text-center align-self-center">2022</th>
                            <th scope="col" class="input1 text-center align-self-center">2023</th>
                            <th scope="col" class="input1 text-center align-self-center">2024</th>
                            <th scope="col" class="input1 text-center align-self-center">3 Year Total</th>


                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Revenue Increase</th>
                            <td>
                                <input name="RevenueIncrease2022"
                                class="form-control revenue revenue-table revenue-revinc2022 revenue2022 revenuetotal input1"
                                onchange='updateTotal($(".revenue"), $("#total-revenue-table")); updateTotal($(".revenue-table"), $("#total-revenue-table"));
                                updateTotal($(".revenue-revinc2022"), $("#total-revenue-revinc2022")); updateTotal($(".revenue2022"), $("#total-revenue2022")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />

                                <span for="RevenueIncrease2022" class="text-danger"></span>
                            </td>
                            <td>
                                <input name="RevenueIncrease2023"
                                class="form-control revenue revenue-table revenue-revinc2023 revenue2023 revenuetotal input1"
                                onchange='updateTotal($(".revenue"), $("#total-revenue-table")); updateTotal($(".revenue-table"), $("#total-revenue-table")); updateTotal($(".revenue-revinc2023"), $("#total-revenue-revinc2023")); updateTotal($(".revenue2023"), $("#total-revenue2023")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />
                                <span for="RevenueIncrease2023" class="text-danger"></span>
                            </td>
                            <td>
                                <input name="RevenueIncrease2024"
                                class="form-control revenue revenue-table revenue-revinc2024 revenue2024 revenuetotal input1"
                                onchange='updateTotal($(".revenue"), $("#total-revenue-table")); updateTotal($(".revenue-table"), $("#total-revenue-table")); updateTotal($(".revenue-revinc2024"), $("#total-revenue-revinc2024")); updateTotal($(".revenue2022"), $("#total-revenue2024")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />
                                <span for="RevenueIncrease2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="TotalRevenueInc"
                                       class="form-control  input1"
                                       id=total-revenue-table"
                                       readonly="readonly" />
                            </td>

                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Revenue Protection</th>
                            <td>
                                <input name="RevenueProtection2022"
                                class="form-control revenueprot revenue-prot-table revenueprot-revinc2022 revenue2022 revenuetotal input1 val2" onchange='updateTotal($(".revenue-prot"), $("#total-revenue-prot-table")); updateTotal($(".revenue-prot-table"), $("#total-revenue-prot-table")); updateTotal($(".revenueprot-revinc2022"), $("#total-revenueprot-revinc2022")); updateTotal($(".revenue2022"), $("#total-revenue2022")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />
                                <span for="RevenueProtection2022" class="text-danger"></span>
                            </td>
                            <td>
                                <input name="RevenueProtection2023"
                                class="form-control revenueprot revenue-prot-table revenueprot-revinc2023 revenue2023 revenuetotal input1" onchange='updateTotal($(".revenue-prot"), $("#total-revenue-prot-table")); updateTotal($(".revenue-prot-table"), $("#total-revenue-prot-table")); updateTotal($(".revenueprot-revinc2023"), $("#total-revenueprot-revinc2023")); updateTotal($(".revenue2023"), $("#total-revenue2023")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />
                                <span for="RevenueProtection2023" class="text-danger"></span>
                            </td>
                            <td>
                                <input name="RevenueProtection2024"
                                class="form-control revenueprot revenue-prot-table revenueprot-revinc2024 revenue2024 revenuetotal input1" onchange='updateTotal($(".revenue-prot"), $("#total-revenue-prot-table")); updateTotal($(".revenue-prot-table"), $("#total-revenue-prot-table")); updateTotal($(".revenueprot-revinc2024"), $("#total-revenueprot-revinc2024")); updateTotal($(".revenue2024"), $("#total-revenue2024")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />
                                <span for="RevenueProtection2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="TotalRevenueProt"
                                       class="form-control  input1"
                                       id="total-revenue-prot-table"
                                       readonly="readonly" />
                            </td>

                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Other Revenue</th>
                            <td class="rowDataSd">
                                <input name="OtherRevenue2022"
                                class="form-control revenueother revenue-other-table revenueother-otherrev2022 revenue2022 revenuetotal input1" onchange='updateTotal($(".revenue-other"), $("#total-revenue-other-table")); updateTotal($(".revenue-other-table"), $("#total-revenue-other-table")); updateTotal($(".revenueother-otherrev2022"), $("#total-revenueother-otherrev2022")); updateTotal($(".revenue2022"), $("#total-revenue2022")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />

                                <span for="OtherRevenue2022" class="text-danger"></span>
                            </td>
                            <td class="rowDataSd">
                                <input name="OtherRevenue2023"
                                class="form-control revenueother revenue-other-table revenueother-otherrev2023 revenue2023 revenuetotal input1" onchange='updateTotal($(".revenue-other"), $("#total-revenue-other-table")); updateTotal($(".revenue-other-table"), $("#total-revenue-other-table")); updateTotal($(".revenueother-otherrev2023"), $("#total-revenueother-otherrev2023")); updateTotal($(".revenue2023"), $("#total-revenue2023")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />

                                <span for="OtherRevenue2023" class="text-danger"></span>
                            </td>
                            <td class="rowDataSd">
                                <input name="OtherRevenue2024"
                                class="form-control revenueother revenue-other-table revenueother-otherrev2024 revenue2024 revenuetotal input1" onchange='updateTotal($(".revenue-other"), $("#total-revenue-other-table")); updateTotal($(".revenue-other-table"), $("#total-revenue-other-table")); updateTotal($(".revenueother-otherrev2024"), $("#total-revenueother-otherrev2024")); updateTotal($(".revenue2024"), $("#total-revenue2024")); updateTotal($(".revenuetotal"), $("#total-revenuetotal"));' />

                                <span for="OtherRevenue2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="TotalOtherRevenue"
                                       class="form-control  input1"
                                       id="total-revenue-other-table"
                                       readonly="readonly" />
                            </td>

                        </tr>

                        <tr>


                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">
                                Total
                            </th>


                            <td>
                                <input class="form-control  input1"
{{--                                       value="TotalRevenue2022"--}}
                                       id="total-revenue2022"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control  input1"
{{--                                       value="TotalRevenue2023"--}}
                                       id="total-revenue2023"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control  input1"
{{--                                       value="TotalRevenue2024"--}}
                                       id="total-revenue2024"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control  input1"
{{--                                       value="TotalRevenue"--}}
                                       id="total-revenuetotal"
                                       readonly="readonly" />
                            </td>

                        </tr>

                        </thead>
                    </table>


                </div>


                <h3 class="card-header text-center font-weight-bold text-uppercase py-4 card-1 text-white">Benefits:Cost</h3>
                <div class="card-body">
                    <table class="table" style="white-space: nowrap">
                        <thead>

                        <tr>
                            <td></td>
                            <th scope="col" class="input1 text-center align-self-center">2022</th>
                            <th scope="col" class="input1 text-center align-self-center">2023</th>
                            <th scope="col" class="input1 text-center align-self-center">2024</th>
                            <th scope="col" class="input1 text-center align-self-center">3 Year Total</th>


                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Opex Savings</th>

                            <td>
                                <input name="OpexSavings2022" class="form-control input1"
                                class="form-control cost cost-table cost-opexsavings2022 cost2022 opextotal input1" onchange='updateTotal($(".cost"), $("#total-cost-table")); updateTotal($(".cost-table"), $("#total-cost-table"));
                                updateTotal($(".cost-opexsavings2022"), $("#total-cost-opexsavings2022")); updateTotal($(".cost2022"), $("#total-cost2022")); updateTotal($(".opextotal"), $("#total-opextotal"));' />

                                <span for="OpexSavings2022" class="text-danger"></span>
                            </td>
                            <td>
                                <input name="OpexSavings2023" class="form-control input1"
                                class="form-control cost cost-table cost-opexsavings2023 cost2023 opextotal input1"
                                onchange='updateTotal($(".cost"), $("#total-cost-table")); updateTotal($(".cost-table"), $("#total-cost-table"));
                                updateTotal($(".cost-opexsavings2023"), $("#total-cost-opexsavings2023")); updateTotal($(".cost2023"), $("#total-cost2023")); updateTotal($(".opextotal"), $("#total-opextotal"));' />

                                <span for="OpexSavings2023" class="text-danger"></span>
                            </td>
                            <td>
                                <input name="OpexSavings2024" class="form-control input1"
                                class="form-control cost cost-table cost-opexsavings2024 cost2024 opextotal input1" onchange='updateTotal($(".cost"), $("#total-cost-table"));
                                updateTotal($(".cost-table"), $("#total-cost-table"));
                                updateTotal($(".cost-opexsavings2024"), $("#total-cost-opexsavings2024"));
                                updateTotal($(".cost2023"), $("#total-cost2023")); updateTotal($(".opextotal"), $("#total-opextotal"));' />

                                <span for="OpexSavings2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="TotalOpexSavings"
                                       class="form-control input1"
                                       id="total-cost-table"
                                       readonly="readonly" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Opex Avoidance</th>
                            <td>
                                <input name="OpexAvoidance2022" class="form-control input1"
                                class="form-control costav costav-table costav-opexavoidance2022 cost2022 opextotal input1" onchange='updateTotal($(".costav"), $("#total-costav-table"));
                                updateTotal($(".costav-table"), $("#total-costav-table"));
                                updateTotal($(".costav-opexavoidance2022"), $("#total-costav-opexavoidance2022"));
                                updateTotal($(".cost2022"), $("#total-cost2022")); updateTotal($(".opextotal"), $("#total-opextotal"));' />

                                <span for="OpexAvoidance2022" class="text-danger"></span>
                            </td>
                            <td>
                                <input name="OpexAvoidance2023" class="form-control input1"
                                class="form-control costav costav-table costav-opexavoidance2023 cost2023 opextotal input1"
                                onchange='updateTotal($(".costav"), $("#total-costav-table"));
                                updateTotal($(".costav-table"), $("#total-costav-table"));
                                updateTotal($(".costav-opexavoidance2023"), $("#total-costav-opexavoidance2023"));
                                updateTotal($(".cost2023"), $("#total-cost2023")); updateTotal($(".opextotal"), $("#total-opextotal"));' />

                                <span for="OpexAvoidance2023" class="text-danger"></span>
                            </td>
                            <td>
                                <input name="OpexAvoidance2024" class="form-control input1"
                                class="form-control costav costav-table costav-opexavoidance2024 cost2024 opextotal input1"
                                onchange='updateTotal($(".costav"), $("#total-costav-table")); updateTotal($(".costav-table"), $("#total-costav-table"));
                                updateTotal($(".costav-opexavoidance2024"), $("#total-costav-opexavoidance2024")); updateTotal($(".cost2024"), $("#total-cost2024")); updateTotal($(".opextotal"), $("#total-opextotal"));' />

                                <span for="OpexAvoidance2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="TotalOpexAvoidance"
                                       class="form-control input1"
                                       id="total-costav-table"
                                       readonly="readonly" />
                            </td>

                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">Other Cost Savings</th>
                            <td>
                                <input name="OtherOpexSavings2022" class="form-control input1"
                                class="form-control costot costot-table costot-opexother2022 cost2022 opextotal input1"
                                onchange='updateTotal($(".costot"), $("#total-costot-table"));
                                updateTotal($(".costot-table"), $("#total-costot-table"));
                                updateTotal($(".costot-opexother2022"), $("#total-costot-opexother2022")); updateTotal($(".cost2022"), $("#total-cost2022")); updateTotal($(".opextotal"), $("#total-opextotal"));' />

                                <span for="OtherOpexSavings2022" class="text-danger"></span>
                            </td>
                            <td>
                                <input name="OtherOpexSavings2023" class="form-control input1"
                                class="form-control costot costot-table costot-opexother2023 cost2023 opextotal input1"
                                onchange='updateTotal($(".costot"), $("#total-costot-table"));
                                updateTotal($(".costot-table"), $("#total-costot-table"));
                                updateTotal($(".costot-opexother2023"), $("#total-costot-opexother2023")); updateTotal($(".cost2023"), $("#total-cost2023")); updateTotal($(".opextotal"), $("#total-opextotal"));' />


                                <span for="OtherOpexSavings2023" class="text-danger"></span>
                            </td>
                            <td>
                                <input name="OtherOpexSavings2024" class="form-control input1"
                                class="form-control costot costot-table costot-opexother2024 cost2024 opextotal input1"
                                onchange='updateTotal($(".costot"), $("#total-costot-table")); updateTotal($(".costot-table"), $("#total-costot-table"));
                                updateTotal($(".costot-opexother2024"), $("#total-costot-opexother2024")); updateTotal($(".cost2024"), $("#total-cost2024")); updateTotal($(".opextotal"), $("#total-opextotal"));' />

                                <span for="OtherOpexSavings2024" class="text-danger"></span>
                            </td>
                            <td>
                                <input for="TotalOtherOpexSavings"
                                       class="form-control input1"
                                       id="total-costot-table"
                                       readonly="readonly" />
                            </td>

                        </tr>
                        <tr>
                            <th scope="row" class="d-flex justify-content-center input1 text-center align-self-center">
                                Total
                            </th>


                            <td>
                                <input class="form-control input1"
{{--                                       value="TotalOpex2022"--}}
                                       id="total-cost2022"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control input1"
{{--                                       value="TotalOpex2023"--}}
                                       id="total-cost2023"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control input1"
{{--                                       value="TotalOpex2024"--}}
                                       id="total-cost2024"
                                       readonly="readonly" />
                            </td>
                            <td>
                                <input class="form-control input1"
{{--                                       value="TotalOpex"--}}
                                       id="total-opextotal"
                                       readonly="readonly" />
                            </td>
                        </tr>



                        </thead>


                    </table>


                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save"
                           onclick="return checkSum()"
                    />

                </div>

            </form>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a asp-action="Index">Back to List</a>
        </div>


{{--        <script type="text/javascript">--}}
{{--            function sum(){--}}
{{--                const hw = document.getElementById("hw").value;--}}
{{--                const hwit = document.getElementById("hwit").value;--}}
{{--                const total = parseFloat(hw) + parseFloat(hwit);--}}
{{--                document.getElementById("total").value = total--}}
{{--            }--}}
{{--            // jQuery(document).ready(function ($) {--}}
{{--            //     let $total = $('#total'),--}}
{{--            //         $amount = $('.amount');--}}
{{--            //     $amount.on('input', function (e) {--}}
{{--            //         let total = 0;--}}
{{--            //         $amount.each(function (index, elem) {--}}
{{--            //             if (!Number.isNaN(parseInt(this.value, 10))) total = total + parseInt(this.value, 10);--}}
{{--            //         });--}}
{{--            //         $total.val(total);--}}
{{--            //     });--}}
{{--            // });--}}


{{--            // $(()=>{--}}
{{--            //     for(let i=0;i<3;i++){--}}
{{--            //         sumColumn(i);--}}
{{--            //     }--}}
{{--            // })--}}
{{--            //--}}
{{--            // function sumColumn(column_index){--}}
{{--            //     var total = 0--}}
{{--            //     $('table tbody tr').each(function(){--}}
{{--            //         const value = parseInt($('td', this).eq(column_index).text());--}}
{{--            //         if (!isNaN(value)){--}}
{{--            //             total += value;--}}
{{--            //         }--}}
{{--            //     });--}}
{{--            //     $('table tfoot td').eq(column_index).text(+ total);--}}
{{--            // }--}}


{{--        </script>--}}

        <script>
            let regionalAllocationList = $('.reginal-allocation');
            let totalRegionalAllocation = $('#TotalRegionalAllocation');
            let allocationList = $('.allocation');
            let totalaAllocation = $('#TotalAllocation');

            regionalAllocationList.each(function () {
                $(this).change(function () {
                    updateTotal(regionalAllocationList, totalRegionalAllocation)
                })
            });

            allocationList.each(function () {
                $(this).change(function () {
                    updateTotal(allocationList, totalaAllocation)
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
        </script>

    @endsection

</x-_AdminLayout>
