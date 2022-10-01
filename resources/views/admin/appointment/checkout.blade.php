@extends('admin.layouts._master')

@section('title')
Custom title if need
@endsection

@section('extraCss')
<!-- extra css -->
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
<link rel="stylesheet" href="/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />
<link rel="stylesheet" href="/assets/plugins/waitme/waitMe.css" />
<link rel="stylesheet" href="/assets/plugins/bootstrap-select/css/bootstrap-select.css" />


@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Appointment Detail</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="header">
                    
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="#" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="#" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form id="checkoutForm" action="/admin/check-out/{{$appointment->id}}/store" method="POST">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Symptom: </label>
                                        <div class="form-line">
                                            <textarea rows="5" name="symptoms" class="form-control no-resize" ></textarea>
                                            <input style="display: none" type="text" name="appointment_id" value="{{$appointment->id}}">
                                            <input style="display: none" type="text" name="check_out_history_id[]" value="{{$appointment->id}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Conclusion: </label>
                                        <div class="form-line">
                                            <textarea rows="5" name="conclusion" class="form-control no-resize" ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Medicine pills:</label>
                                        <div class="form-line">
                                            <!-- input table -->
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="table">
                                            <thead>
                                                    <tr>
                                                        <th>Medicine</th>
                                                        <th>Quantity</th>
                                                        <th>Instruction</th>
                                                        <th>Price</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="medicine[]" placeholder="Medicine">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="number" class="form-control" name="quantity[]" placeholder="Quantity">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="instruction[]" placeholder="Instruction">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="number" class="form-control" name="price[]" placeholder="Price">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success action-btn waves-effect remove-btn" onclick="addRow()">Add</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <!-- sum total  -->
                                                    <tr>
                                                         <td>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <label for=""><strong>TOTAL MEDICINE FEE</strong></label>
                                                                    <input type="text" class="form-control" id ="total" name="total" placeholder="Total" readonly>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td colspan="3"></td>
                                                        <td></td>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable w-100" id="table2">
                                                <tr>
                                                    <th width=560>Fee</th>
                                                    <th width=560>Price</th>
                                                    <th width=10>Action</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <!-- select list -->
                                                                <select class="form-control show-tick" name="fee[]" id="fee">
                                                                    <option value="">-- Please select --</option>
                                                                    <option value="1">Consultant Fee</option>
                                                                    <option value="2">X-ray fee</option>
                                                                    <option value="3">Check-in fee</option>
                                                                    <option value="4">Lab fee</option>
                                                                    <option value="5">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number" class="form-control" name="fee_price[]" placeholder="Price">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" id="add-row-btn" class="btn btn-success action-btn add-row-btn waves-effect" onclick="addRow2()">Add</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <label for=""><strong>TOTAL TREATMENT FEE</strong></label>
                                                                <input type="text" class="form-control" id ="total_fee" name="total_fee" placeholder="Total Treatment Fee" readonly>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <!-- label for label-->
                                                                <label for="" class="btn btn-primary"><strong>TOTAL FEE</strong></label>
                                                                <input type="text" class="form-control" id ="payment" name="payment" placeholder="Total" readonly>
                                                                <!-- checkbox payment -->
                                                                <!-- label -->
                                                               
                                                            </div>
                                                        </div>
                                                        <!-- checkbox payment status -->
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="checkbox" id="payment_status" name="payment_status" class="filled-in">
                                                                <label for="payment_status">Paid</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                  
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <!-- admin.checkout.show -->
                                        <a href="{{route('all-appointment.index')}}" class="btn btn-primary waves-effect">Back to list</a>
                                        <button type="submit" id="update-btn" class="btn btn-success waves-effect" onclick="updateForm()">Check out</button>
                                        <button type="submit" class="btn btn-raised bg-red" onclick="cancelForm()">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section('extraJs')
<!-- extraJs -->
<script src="/assets/plugins/autosize/autosize.js"></script>
<script src="/assets/plugins/momentjs/moment.js"></script>
<script src="/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="/assets/js/pages/forms/basic-form-elements.js"></script>
<!-- <script src="/assets/bundles/libscripts.bundle.js"></script> -->
<!-- 
<script>
        const json = [{
            medicine: 'thuoc doc',
            quantity: 1,
            instruction: 'sang trua toi',
            price: 10000,
            application_id: 20

        },
        {
            medicine: 'thuoc doc 2',
            quantity: 2,
            instruction: 'sang chua chieu toi',
            price: 2000, 
            application_id: 10
        }
    ]
        const json_medicine = JSON.stringify(json);
        console.log(json_medicine);

        var addBtn = document.getElementById('add-row-btn');
        addBtn.addEventListener('click', function() {
            var table = document.getElementById('json_medicine');
            table.value = 10;
            xhr = new XMLHttpRequest();
            xhr.open('POST', 'check-out/{{$appointment->id}}/store', true);
            xhr.setRequestHeader('Content-type', 'application/json');
            xhr.onload = function() {
                console.log(this.responseText);

            }
            xhr.send(json_medicine);
        });      

      
</script> -->
<script>
    function addRow() {
        var table = document.getElementById("table");
        var row = table.insertRow(1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        cell1.innerHTML = '<div class="form-group"><div class="form-line"><input type="text" class="form-control" name="medicine[]" placeholder="Medicine"></div></div>';
        cell2.innerHTML = '<div class="form-group"><div class="form-line"><input type="text" class="form-control" name="quantity[]" placeholder="Quantity"></div></div>';
        cell3.innerHTML = '<div class="form-group"><div class="form-line"><input type="text" class="form-control" name="instruction[]" placeholder="Instruction"></div></div>';
        cell4.innerHTML = '<div class="form-group"><div class="form-line"><input type="number" class="form-control" name="price[]" placeholder="Price"></div></div>';
        cell5.innerHTML = '<button type="button" class="btn btn-danger waves-effect remove-btn" onclick="removeRow(this)">Remove</button>';     
       
        var firstRow = document.getElementById("table").rows[1].cells[4].innerHTML = '<button type="button" class="btn btn-success action-btn waves-effect remove-btn" onclick="addRow()">Add</button>';
        var restRow = document.getElementById("table").rows[2].cells[4].innerHTML = '<button type="button" class="btn btn-danger waves-effect remove-btn" onclick="removeRow(this)">Remove</button>';
        
        sumTotal();
        sumAllFee();

    }    
    
    
    function removeRow(btn) {
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
    

   function sumTotal() {
        var total = 0;
        // var prices = document.getElementsByName("[]]");
        // get all prices input as array
        // price[0].value
        var prices = document.getElementsByName("price[]");

        for (var i = 0; i < prices.length; i++) {
            console.log(prices[i].value);
            total += Number(prices[i].value);
        }
        console.log(total);
        document.getElementById("total").value = total;

    }

    function addRow2() {
        var table = document.getElementById("table2");
        var row = table.insertRow(1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = '<div class="form-group"><div class="form-line"><input type="text" class="form-control" name="fee" placeholder="Fee"></div></div>';
        cell2.innerHTML = '<div class="form-group"><div class="form-line"><input type="number" class="form-control" name="fee_price" placeholder="Price"></div></div>';
        cell3.innerHTML = '<button type="button" class="btn btn-danger waves-effect remove-btn" onclick="removeRow(this)">Remove</button>';     
       
        var firstRow = document.getElementById("table2").rows[1].cells[2].innerHTML = '<button type="button" class="btn btn-success action-btn waves-effect remove-btn" onclick="addRow2()">Add</button>';
        var restRow = document.getElementById("table2").rows[2].cells[2].innerHTML = '<button type="button" class="btn btn-danger waves-effect remove-btn" onclick="removeRow(this)">Remove</button>';
       
        sumTotal2();
        sumAllFee();

    }

    function sumTotal2() {
        var total = 0;
        var prices = document.getElementsByName("fee_price[]");
        for (var i = 0; i < prices.length; i++) {
            total += Number(prices[i].value);
        }

        document.getElementById("total_fee").value = total;
    }

    

    function sumAllFee() {
        var total = 0;
        var total_fee = document.getElementById("total_fee").value;
        var total = document.getElementById("total").value;
        var total = Number(total_fee) + Number(total);
        document.getElementById("payment").value = total;
    }


    function cancelForm() {
        document.getElementById('appointmentForm').action = "/admin/appointment/{{$appointment->id}}/reject";
        document.getElementById('appointmentForm').method = "POST";
    }

</script>



<!-- end extraJs -->
@endsection
