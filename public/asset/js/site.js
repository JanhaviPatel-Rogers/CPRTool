// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.
function addRowToCapex(element) {
    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length - 1;

    //if(row == 1){
    //    row = 0
    //}

    if (row < 12) {
        let newTr = `


            <tr>

                <td></td>

                <td><div style= "width:55px">
                    <input class="form-control input1" name="CapitalExpenses[${row}][Year]"  type="tel"/>
                    </div>
                </td>
                <td><div style= "width:40px">
                    <input class="form-control input1" name="CapitalExpenses[${row}][Month]"  type="tel"/>
                   </div>
                </td>
                <td><div>
                    <input
                        value="0"
                        class="form-control input1 capex capital-expenses-${row} capex-hw"
                        type="tel"

                        name="CapitalExpenses[${row}][Hardware]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-hw'), $('#total-capex-hw'));"/>
                </div>
                </td>
                <td>
                <div>
                    <input
                        value="0"
                        type="tel"
                        class="form-control input1 capex capital-expenses-${row} capex-hwit"
                        name="CapitalExpenses[${row}][HardwareIT]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-hwit'), $('#total-capex-hwit'));"/>
                </div>
                </td>
                <td>
                <div>
                    <input
                        value="0"
                        type="tel"
                        class="form-control input1 capex capital-expenses-${row} capex-hwgc"
                        name="CapitalExpenses[${row}][HardwareGencap]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-hwgc'), $('#total-capex-hwgc'));"/>
                </div>
                </td>
                <td>
                <div>
                    <input
                        value="0"
                        type="tel"
                        class="form-control input1 capex capital-expenses-${row} capex-sw"
                        name="CapitalExpenses[${row}][Software]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-sw'), $('#total-capex-sw'));"/>
                </div>
                </td>
                <td>
                <div>
                    <input
                        value="0"
                        type="tel"
                        class="form-control input1 capex capital-expenses-${row} capex-swit"
                        name="CapitalExpenses[${row}][SoftwareIT]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-swit'), $('#total-capex-swit'));"/>
                </div>
                </td>
                <td>
                <div>
                    <input
                        value="0"
                        type="tel"
                        class="form-control input1 capex capital-expenses-${row} capex-swgc"
                        name="CapitalExpenses[${row}][SoftwareGencap]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-swgc'), $('#total-capex-swgc'));"/>
                </div>
                </td>
                <td>
                <div>
                    <input
                        type="tel"
                        value="0"
                        class="form-control input1 capex capital-expenses-${row} capex-ps"
                        name="CapitalExpenses[${row}][ExternalLabourNetwork]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-ps'), $('#total-capex-ps'));"/>
                </div>
                </td>
                <td>
                  <div>
                    <input
                        type="tel"
                        value="0"
                        class="form-control input1 capex capital-expenses-${row} capex-tp"
                        name="CapitalExpenses[${row}][ExternalLabourIT]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-tp'), $('#total-capex-tp'));"/>
                </div>
                </td>
                <td>
                <div>
                    <input
                        value="0"
                        type="tel"
                        class="form-control input1 capex capital-expenses-${row} capex-elgc"
                        name="CapitalExpenses[${row}][ExternalLabourGencap]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-elgc'), $('#total-capex-elgc'));"/>
                </div>
                </td>
                <td>
                    <div>
                    <input
                        type="tel"
                        value="0"
                        class="form-control input1 capex capital-expenses-${row} capex-icln"
                        name="CapitalExpenses[${row}][InternalCapitalizedLabourNetwork]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-icln'), $('#total-capex-icln'));"/>
                      </div>
                </td>
                <td><div>
                    <input
                        type="tel"
                        value="0"
                        class="form-control input1 capex capital-expenses-${row} capex-iclit"
                        name="CapitalExpenses[${row}][InternalCapitalizedLabourIT]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-iclit'), $('#total-capex-iclit'));"/>
                </div></td>
                <td><div>
                    <input
                        value="0"
                        type="tel"
                        class="form-control input1 capex capital-expenses-${row} capex-iclg"
                        name="CapitalExpenses[${row}][InternalCapitalizedLabourGencap]"
                        onchange="updateTotal($('.capex'), $('#total-capex')); updateTotal($('.capital-expenses-${row}'), $('#total-capital-expenses-${row}')); updateTotal($('.capex-iclg'), $('#total-capex-iclg'));"/>
                </div>
                </td>
                <td>
                <div>
                    <input
                        type="tel"
                        class="form-control input1"
                        name="CapitalExpenses[${row}][total]"
                        id="total-capital-expenses-${row}" readonly="readonly"/>
                </div>
                </td>
                <td>
                    <span class="table-remove"><button type="button"
                         onclick="removeRow($(this))">
                        <span style="font-size: 1em; color: red;">
                                            <i class="fas fa-trash-alt"></i>
                                        </span></button></span>
                </td>
            </tr>
        `;
        table.find('tbody tr:last').before(newTr);

    } else {
        alert("You only can insert 12 month for Budget year.");
    }
}

function addRowToFutureCapex(element) {
    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length;

    let newTr = `
        <tr>
            <td>
                <input class="form-control input1" name="FutureCaptitalExpenses[${row}].Year"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].Hardware" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].HardwareIT" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].HardwareGencap" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].Software" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].SoftwareIT" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].SoftwareGencap" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].ProfessionalServices" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].ThirdParty" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].ExternalLabourGencap" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].InternalCapitalizedLabourNetwork" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].InternalCapitalizedLabourIT" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input value="0" class="form-control input1 future-captital-expenses-${row}" name="FutureCaptitalExpenses[${row}].InternalCapitalizedLabourGencap" onchange="updateTotal($('.future-captital-expenses-${row}'), $('#total-future-captital-expenses-${row}'))"/>
            </td>
            <td>
                <input class="form-control input1" name="FutureCaptitalExpenses[${row}].Total" id="total-future-captital-expenses-${row}" readonly="readonly"/>
            </td>
            <td>
                <span class="table-remove"><button type="button"
                    class="btn btn-sm my-0" onclick="removeRow($(this))"><span style="font-size: 1em; color:red;"> <i class="fas fa-trash-alt"></i></span></button></span>
            </td>
        </tr>
    `;
    table.find('tbody').append(newTr);
}

function addRowToOpex(element) {
    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length;
    let newTr = `
        <tr>
            <td>
                <input value="0" class="form-control input1" name="OperationalExpenses[${row}].Year"/>
            </td>
            <td>
                <input value="0" class="form-control input1" name="OperationalExpenses[${row}].Budget"/>
            </td>
            <td>
                <span class="table-remove"><button type="button"
                    class="btn btn-sm my-0" onclick="removeRow($(this))"><span style="font-size: 1em; color:red;"> <i class="fas fa-trash-alt"></i></span></button></span>
            </td>
        </tr>
    `;
    table.find('tbody').append(newTr);
}

function addRowToVendor(element) {
    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length - 1;
    let options = '<option value="">-- Select Vendor --</option>';

    if (row == 0) {
        row = 0
    }

    $.ajax({
        url: $(element).data('url'),
        type: "GET",
        datatype: JSON,
        success: function (result) {
            let newTr = $("<tr></tr>");

            $(result).each(function () {
                options += `<option value="${this.value}">${this.text}</option>`
            });

            newTr.append(`
                        <td>
                            <select class="form-control input1" name="VendorBudgets[${row}].VendorID">
                                ${options}
                            </select>
                        </td>
                        <td>
                            <input value="0" class="form-control vendor-budget vendor-budgets-${row} vendor-budget-hw input1"
                                name="VendorBudgets[${row}].Hardware"
                                onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($(".vendor-budgets-${row}"), $("#total-vendor-budgets-${row}")); updateTotal($(".vendor-budget-hw"), $("#total-vendors-hw"));'/>
                        </td>
                        <td>
                            <input value="0" class="form-control vendor-budget vendor-budgets-${row} vendor-budget-sw input1"
                                name="VendorBudgets[${row}].Software"
                                onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($(".vendor-budgets-${row}"), $("#total-vendor-budgets-${row}")); updateTotal($(".vendor-budget-sw"), $("#total-vendors-sw"));'/>
                        </td>
                        <td>
                            <input value="0" class="form-control vendor-budget vendor-budgets-${row} vendor-budget-el input1"
                                name="VendorBudgets[${row}].ExternalLabour"
                                onchange='updateTotal($(".vendor-budget"), $("#total-vendors-budget")); updateTotal($(".vendor-budgets-${row}"), $("#total-vendor-budgets-${row}")); updateTotal($(".vendor-budget-el"), $("#total-vendors-el"));'/>
                        </td>

                        <td>
                            <input class="form-control input1" id="total-vendor-budgets-${row}" name="VendorBudgets[${row}].Total" readonly="readonly"/>
                        </td>
                        <td>
                            <span class="table-remove"><button type="button"
                    class="btn btn-sm my-0" onclick="removeRow($(this))"><span style="font-size: 1em; color:red;"> <i class="fas fa-trash-alt"></i></span></button></span>
                        </td>
                    `);
            table.find('tbody tr:last').before(newTr);
        },
        error: function (data) {
            console.log(data)
        }
    });
}

function addRowToDecom(element) {
    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length - 1;



    let newTr = `
        <tr>
            <td>
                <input class="form-control input1" name="Decommissions[${row}].Year"/>
            </td>
            <td>
                <input class="form-control input1" name="Decommissions[${row}].Quarter"/>
            </td>
            <td>
                <input value="0" class="form-control decom-il input1" name="Decommissions[${row}].InternalLabour" onchange='updateTotal($(".decom-il"), $("#total-decom-il"));' />
            </td>
            <td>
                <input value="0" class="form-control decom-el input1" name="Decommissions[${row}].ExternalLabour" onchange='updateTotal($(".decom-el"), $("#total-decom-el"));' />
            </td>
            <td>
                <input value="0" class="form-control decom-saving input1" name="Decommissions[${row}].EstimatedSaving" onchange='updateTotal($(".decom-saving"), $("#total-decom-saving"));' />
            </td>
            <td>
                <input value="0" class="form-control decom-platform input1" name="Decommissions[${row}].NumberOfPlatform" onchange='updateTotal($(".decom-platform"), $("#total-decom-platform"));'/>
            </td>
            <td>
               <span class="table-remove"><button type="button"
                    class="btn btn-sm my-0" onclick="removeRow($(this))"><span style="font-size: 1em; color:red;"> <i class="fas fa-trash-alt"></i></span></button></span>
            </td>
        </tr>
    `;
    table.find('tbody tr:last').before(newTr);
}

// $(function () {
//     $("#datepicker").datepicker();
// });

function addRowToFundingApproval(element) {

    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length - 1;

    //$('.date-picker').datepicker();
    let newTr = `
        <tr>
            <td></td>
            <td>
                <input type="date" class="date input1 date-picker" id="datepicker" name="ApprovedDollars[${row}].Date"
                   />

            </td>

            <td>
                <input value="0" class="form-control input1 approveddollars approved-dollars-${row} approveddollars-scopingcaapproval" name="ApprovedDollars[${row}].ScopingCAApproval"
                   onchange="updateTotal($('.approveddollars'), $('#total-approved-dollars')); updateTotal($('.approved-dollars-${row}'), $('#total-approved-dollars-${row}')); updateTotal($('.approveddollars-scopingcaapproval'), $('#total-approveddollars-scopingcaapproval'));" />
            </td>

            <td>
                   <input value="0" class="form-control input1 approveddollars approved-dollars-${row} approveddollars-rollovers" name="ApprovedDollars[${row}].Rollovers2019"
                   onchange="updateTotal($('.approveddollars'), $('#total-approved-dollars')); updateTotal($('.approved-dollars-${row}'), $('#total-approved-dollars-${row}')); updateTotal($('.approveddollars-rollovers'), $('#total-approveddollars-rollovers'));" />

            </td>
            <td>
                   <input value="0" class="form-control input1 approveddollars approved-dollars-${row} approveddollars-totalapproved2020in2020" name="ApprovedDollars[${row}].TotalApproved2020in2020"
                   onchange="updateTotal($('.approveddollars'), $('#total-approved-dollars')); updateTotal($('.approved-dollars-${row}'), $('#total-approved-dollars-${row}')); updateTotal($('.approveddollars-totalapproved2020in2020'), $('#total-approveddollars-totalapproved2020in2020'));" />
            </td>

            <td>
                   <input value="0" class="form-control input1 approveddollars approved-dollars-${row} approveddollars-approved2021" name="ApprovedDollars[${row}].Approved2021"
                   onchange="updateTotal($('.approveddollars'), $('#total-approved-dollars')); updateTotal($('.approved-dollars-${row}'), $('#total-approved-dollars-${row}')); updateTotal($('.approveddollars-approved2021'), $('#total-approveddollars-approved2021'));" />
            </td>
            <td>
                <input value="0" class="form-control input1 approveddollars approved-dollars-${row} approveddollars-approved2022" name="ApprovedDollars[${row}].Approved2022"
                   onchange="updateTotal($('.approveddollars'), $('#total-approved-dollars')); updateTotal($('.approved-dollars-${row}'), $('#total-approved-dollars-${row}')); updateTotal($('.approveddollars-approved2022'), $('#total-approveddollars-approved2022'));" />
            </td>
            <td>
                <input value="0" class="form-control input1 approveddollars approved-dollars-${row} approveddollars-fundsnolongerrequired" name="ApprovedDollars[${row}].FundsNoLongerRequired"
                   onchange="updateTotal($('.approveddollars'), $('#total-approved-dollars')); updateTotal($('.approved-dollars-${row}'), $('#total-approved-dollars-${row}')); updateTotal($('.approveddollars-fundsnolongerrequired'), $('#total-approveddollars-fundsnolongerrequired'));" />
            </td>
            <td>
                <input class="form-control input1" name="ApprovedDollars[${row}].TotalFundingApproval" id="total-approved-dollars-${row}" readonly="readonly"/>
            </td>

            <td>
                <span class="table-remove"><button type="button"
                    class="btn btn-sm my-0" onclick="removeRow($(this))"><span style="font-size: 1em; color:red;"> <i class="fas fa-trash-alt"></i></span></button></span>
            </td>


        </tr>
    `;
    table.find('tbody tr:last').before(newTr);
}

function addRowToYearOneBreakdown(element) {
    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length -1;

    let newTr = `
        <tr>
            <td></td>
            <td>
                <input type="date" class="date input1 date-picker" id="datepicker" name="YearOneBreakdown[${row}].Date"
                   />

            </td>
             <td>
                <input value="0" class="form-control input1 approveddollarsyearone approved-dollars-yearone-${row} approveddollarsyearone-labour2020" name="YearOneBreakdown[${row}].Labour2020"
                   onchange="updateTotal($('.approveddollarsyearone'), $('#total-approved-dollars-yearone')); updateTotal($('.approved-dollars-yearone-${row}'), $('#total-approved-dollars-yearone-${row}')); updateTotal($('.approveddollarsyearone-labour2020'), $('#total-approveddollarsyearone-labour2020'));" />
            </td>
            <td>
                 <input value="0" class="form-control input1 approveddollarsyearone approved-dollars-yearone-${row} approveddollarsyearone-hw2020" name="YearOneBreakdown[${row}].HW2020"
                   onchange="updateTotal($('.approveddollarsyearone'), $('#total-approved-dollars-yearone')); updateTotal($('.approved-dollars-yearone-${row}'), $('#total-approved-dollars-yearone-${row}')); updateTotal($('.approveddollarsyearone-hw2020'), $('#total-approveddollarsyearone-hw2020'));" />
            </td>
            <td>
                <input value="0" class="form-control input1 approveddollarsyearone approved-dollars-yearone-${row} approveddollarsyearone-sw2020" name="YearOneBreakdown[${row}].SW2020"
                   onchange="updateTotal($('.approveddollarsyearone'), $('#total-approved-dollars-yearone')); updateTotal($('.approved-dollars-yearone-${row}'), $('#total-approved-dollars-yearone-${row}')); updateTotal($('.approveddollarsyearone-sw2020'), $('#total-approveddollarsyearone-sw2020'));" />
            </td>
            <td>
                <input value="0" class="form-control input1 approveddollarsyearone approved-dollars-yearone-${row} approveddollarsyearone-profserv2020" name="YearOneBreakdown[${row}].ProfServ2020"
                   onchange="updateTotal($('.approveddollarsyearone'), $('#total-approved-dollars-yearone')); updateTotal($('.approved-dollars-yearone-${row}'), $('#total-approved-dollars-yearone-${row}')); updateTotal($('.approveddollarsyearone-profserv2020'), $('#total-approveddollarsyearone-profserv2020'));" />
            </td>
            <td>
                <input class="form-control input1" name="YearOneBreakdown[${row}].Total" id="total-approved-dollars-yearone-${row}" readonly="readonly"/>
            </td>


            <td>
                <span class="table-remove"><button type="button"
                    class="btn btn-sm my-0" onclick="removeRow($(this))"><span style="font-size: 1em; color:red;"> <i class="fas fa-trash-alt"></i></span></button></span>
            </td>
        </tr>
    `;
    table.find('tbody tr:last').before(newTr);
}

function addRowToDecomInfo(element) {
    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length - 1;

    let newTr = `
        <tr>

            <td></td>
            <td>
                <input type="date" class="date input1 date-picker" id="datepicker" name="Decoms[${row}].Date"
                   />

            </td>

            <td>
                <input value="0" class="form-control decoms input1 decoms-table-${row} decoms-decomflag" name="Decoms[${row}].Decom_Flag"
                onchange="updateTotal($('.decoms'), $('#total-decoms-table')); updateTotal($('.decoms-table-${row}'), $('#total-decoms-table-${row}')); updateTotal($('.decoms-decomflag'), $('#total-decoms-decomflag'));" />
            </td>
            <td>
                <input value="0" class="form-control decoms input1 decoms-table-${row} decoms-internallabour" name="Decoms[${row}].InternalLabour"
                onchange="updateTotal($('.decoms'), $('#total-decoms-table')); updateTotal($('.decoms-table-${row}'), $('#total-decoms-table-${row}')); updateTotal($('.decoms-internallabour'), $('#total-decoms-internallabour'));" />
            </td>
            <td>
                <input value="0" class="form-control decoms input1 decoms-table-${row} decoms-externallabour" name="Decoms[${row}].ExternalLabour"
                onchange="updateTotal($('.decoms'), $('#total-decoms-table')); updateTotal($('.decoms-table-${row}'), $('#total-decoms-table-${row}')); updateTotal($('.decoms-externallabour'), $('#total-decoms-externallabour'));" />
            </td>
            <td>
                <input value="0" class="form-control decoms input1 decoms-table-${row} decoms-grosssavings" name="Decoms[${row}].GrossSavings"
                onchange="updateTotal($('.decoms'), $('#total-decoms-table')); updateTotal($('.decoms-table-${row}'), $('#total-decoms-table-${row}')); updateTotal($('.decoms-grosssavings'), $('#total-decoms-grosssavings'));" />
            </td>
            <td>
                <input value="0" class="form-control decoms input1 decoms-table-${row} decoms-numberofplatformstodecom" name="Decoms[${row}].NumberofPlatformsToDecom"
                onchange="updateTotal($('.decoms'), $('#total-decoms-table')); updateTotal($('.decoms-table-${row}'), $('#total-decoms-table-${row}')); updateTotal($('.decoms-numberofplatformstodecom'), $('#total-decoms-numberofplatformstodecom'));" />
            </td>
            </td>
             <td>
                <input class="form-control input1" name="Decoms[${row}].Total" id="total-decoms-table-${row}" readonly="readonly"/>
            </td>

            <td>
                <span class="table-remove"><button type="button"
                    class="btn btn-sm my-0" onclick="removeRow($(this))"><span style="font-size: 1em; color:red;"> <i class="fas fa-trash-alt"></i></span></button></span>
            </td>
        </tr>
    `;
    table.find('tbody tr:last').before(newTr);
}


function addRowToBudgetUpdates(element) {
    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length - 1;

    let newTr = `
        <tr>
            <td></td>
            <td>
                <input type="date" class="date input1 date-picker" id="datepicker" name="TransfersUpdates[${row}].Date"
                   />

            </td>
            <td>
                <input value="0" class="form-control transfersupdates input1 transfersupdates-table-${row} transfersupdates-budgetmar23" name="TransfersUpdates[${row}].BudgetUpdateMar23"
                onchange="updateTotal($('.transfersupdates'), $('#total-transfersupdates-table')); updateTotal($('.transfersupdates-table-${row}'), $('#total-transfersupdates-table-${row}')); updateTotal($('.transfersupdates-budgetmar23'), $('#total-transfersupdates-budgetmar23'));" />
            </td>
            <td>
                <input value="0" class="form-control transfersupdates input1 transfersupdates-table-${row} transfersupdates-budgetapr1" name="TransfersUpdates[${row}].BudgetUpdateApr1"
                onchange="updateTotal($('.transfersupdates'), $('#total-transfersupdates-table')); updateTotal($('.transfersupdates-table-${row}'), $('#total-transfersupdates-table-${row}')); updateTotal($('.transfersupdates-budgetapr1'), $('#total-transfersupdates-budgetapr1'));" />
            </td>
            <td>
                <input value="0" class="form-control transfersupdates input1 transfersupdates-table-${row} transfersupdates-budgetle5" name="TransfersUpdates[${row}].BudgetUpdateLE5"
                onchange="updateTotal($('.transfersupdates'), $('#total-transfersupdates-table')); updateTotal($('.transfersupdates-table-${row}'), $('#total-transfersupdates-table-${row}')); updateTotal($('.transfersupdates-budgetle5'), $('#total-transfersupdates-budgetle5'));" />
            </td>
            <td>
                <input value="0" class="form-control transfersupdates input1 transfersupdates-table-${row} transfersupdates-deferredto2021" name="TransfersUpdates[${row}].Deferredto2021"
                onchange="updateTotal($('.transfersupdates'), $('#total-transfersupdates-table')); updateTotal($('.transfersupdates-table-${row}'), $('#total-transfersupdates-table-${row}')); updateTotal($('.transfersupdates-deferredto2021'), $('#total-transfersupdates-deferredto2021'));" />
            </td>
            <td>
                <input class="form-control input1" name="TransfersUpdates[${row}].Total" id="total-transfersupdates-table-${row}" readonly="readonly"/>
            </td>

            <td>
                <span class="table-remove"><button type="button"
                    class="btn btn-sm my-0" onclick="removeRow($(this))"><span style="font-size: 1em; color:red;"> <i class="fas fa-trash-alt"></i></span></button></span>
            </td>
        </tr>
    `;
    table.find('tbody tr:last').before(newTr);
}

function addRowToOpexInfo(element) {
    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length - 1;

    let newTr = `
        <tr>
            <td></td>
            <td>
                <input type="date" class="date input1 date-picker" id="datepicker" name="OpexInfo[${row}].Date"
                   />

            </td>

            <td>
                <input value="0" class="form-control input1 opex opex-table-${row} opex-curryear" name="OpexInfo[${row}].OpexDragCurrentYear"
                onchange="updateTotal($('.opex'), $('#total-opex-table')); updateTotal($('.opex-table-${row}'), $('#total-opex-table-${row}')); updateTotal($('.opex-curryear'), $('#total-opex-curryear'));" />
            </td>
             <td>
                <input value="0" class="form-control input1 opex opex-table-${row} opex-futyear" name="OpexInfo[${row}].OpexDragFutureYear"
                onchange="updateTotal($('.opex'), $('#total-opex-table')); updateTotal($('.opex-table-${row}'), $('#total-opex-table-${row}')); updateTotal($('.opex-futyear'), $('#total-opex-futyear'));" />
            </td>
            <td>
                <input value="0" class="form-control input1 opex opex-table-${row} opex-afterfutyear" name="OpexInfo[${row}].OpexDragAfterFutureYear"
                onchange="updateTotal($('.opex'), $('#total-opex-table')); updateTotal($('.opex-table-${row}'), $('#total-opex-table-${row}')); updateTotal($('.opex-afterfutyear'), $('#total-opex-afterfutyear'));" />
            </td>
            <td>
                <input class="form-control input1" name="OpexInfo[${row}].Total" id="total-opex-table-${row}" readonly="readonly"/>
            </td>

            <td>
                <span class="table-remove"><button type="button"
                    class="btn btn-sm my-0" onclick="removeRow($(this))"><span style="font-size: 1em; color:red;"> <i class="fas fa-trash-alt"></i></span></button></span>
            </td>
        </tr>
    `;
    table.find('tbody tr:last').before(newTr);
}

function addRowToFundingTransfersComments(element) {
    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length ;

    let newTr = `

        <tr>
<td></td>

           <td>
                <input type="date" class="date input1 date-picker" id="datepicker" name="TransfersUpdatesComments[${row}].Date"
                   />

            </td>
           <td>
                <input class="form-control input1" name="TransfersUpdatesComments[${row}].FundingTransfer"
                   />

            </td>
            <td>
                <textarea class="form-control input1" name="TransfersUpdatesComments[${row}].FundingTransferComment"/></textarea>
            </td>


            <td>
                <span class="table-remove"><button type="button"
                    class="btn btn-sm my-0" onclick="removeRow($(this))"><span style="font-size: 1em; color:red;"> <i class="fas fa-trash-alt"></i></span></button></span>
            </td>
        </tr>
    `;
    table.find('tbody').append(newTr);
}

function addRowToFutureDecom(element) {
    let table = $(element).closest('div').find('table');
    let row = table.find('tbody tr').length;
    let newTr = `
        <tr>
            <td>
                <input class="form-control input1" name="FutureDecommissions[${row}].Year"/>
            </td>
            <td>
                <input value="0" class="form-control input1" name="FutureDecommissions[${row}].InternalLabour"/>
            </td>
            <td>
                <input value="0" class="form-control input1" name="FutureDecommissions[${row}].ExternalLabour"/>
            </td>
            <td>
                <input value="0" class="form-control input1" name="FutureDecommissions[${row}].EstimatedSavings"/>
            </td>
            <td>
                <input value="0" class="form-control input1" name="FutureDecommissions[${row}].NumberOfPlatform"/>
            </td>
            <td>
                <span class="table-remove"><button type="button"
                    class="btn btn-sm my-0" onclick="removeRow($(this))"><span style="font-size: 1em; color:red;"> <i class="fas fa-trash-alt"></i></span></button></span>
            </td>
        </tr>
    `;
    table.find('tbody').append(newTr);
}

function removeRow(element) {

    var inputName = $(element).closest('tr');
    inputName = inputName.find('input').attr('name');
    var firstDigit = inputName.match(/\d/);
    var digitIndex = inputName.indexOf(firstDigit);
    var firstHalf = inputName.substring(0, digitIndex);
    var array1 = $('td input');
    //console.log('inputName: ' + inputName + ' firstDigit: ' + firstDigit + )
    $(element).closest('tr').remove();


    var found = array1.filter(ele => array1[ele].name?.substring(0, digitIndex) == firstHalf);

    Array.prototype.forEach.call(found,function(elem) {
        let newId = elem.name.replace(/\d+/, function (match) {
            if (parseInt(match) > firstDigit) {
                return parseInt(match) - 1;
            }
            return parseInt(match);
        });
        elem.name = newId;
    })





}

function checkSum() {
    let message = "";
    let totalCapexHardware = calculateTotal($(".capex-hw"));
    let totalCapexHardwareIT = calculateTotal($(".capex-hwit"));
    let totalCapexHardwareGencap = calculateTotal($(".capex-hwgc"));
    let totalCapexSoftware = calculateTotal($(".capex-sw"));
    let totalCapexSoftwareIT = calculateTotal($(".capex-swit"));
    let totalCapexSoftwareGencap = calculateTotal($(".capex-swgc"));
    let totalCapexProfessionalServices = calculateTotal($(".capex-ps"));
    let totalCapexThirdParty = calculateTotal($(".capex-tp"));
    let totalCapexExternalLabourGencap = calculateTotal($(".capex-elgc"));
    let totalVendorsHardware = calculateTotal($(".vendor-budget-hw"));
    let totalVendorsSoftware = calculateTotal($(".vendor-budget-sw"));
    let totalVendorsExternalLabour = calculateTotal($(".vendor-budget-el"));

    if (totalCapexHardware + totalCapexHardwareIT + totalCapexHardwareGencap != totalVendorsHardware) {


        message += "The Total Hardware cost in the Vendor Table and Monthly Spend Profile do not match.\n";
    }

    if (totalCapexSoftware + totalCapexSoftwareIT + totalCapexSoftwareGencap != totalVendorsSoftware) {
        console.log(totalCapexSoftware + totalCapexSoftwareIT + totalCapexSoftwareGencap);
        console.log(totalVendorsSoftware);
        message += "The Total Software cost in the Vendor Table and Monthly Spend Profile do not match.\n";
    }

    if (totalCapexProfessionalServices + totalCapexThirdParty + totalCapexExternalLabourGencap != totalVendorsExternalLabour) {
        message += "The Total External Labour cost in the Vendor Table and Monthly Spend Profile do not match.\n";
    }

    if (message.length > 0) {
        alert(message);
        return false;
    } else {
        return true;
    }
}

function calculateTotal(elementArray){
    let sum = 0;
    $(elementArray).each(function(){
        sum += parseInt(this.value);
    });
    return sum;
}


