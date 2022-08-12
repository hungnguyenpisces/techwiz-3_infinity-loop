@extends('user.layouts._master')

@section('content')
<section class="mt-5">
    <h1 class="text-center">MEDICAL HISTORY</h1>
    <div class="table-responsive history-calendar-table">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Hospital</th>
                    <th scope="col">Department</th>
                    <th scope="col">
                        View details
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".pill-details">View</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="modal fade pill-details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="border-radius: 0px;">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #88c250;">
                        <h4 class="modal-title text-center">Medical history details</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="text" class="form-control" id="" placeholder="Date" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Hospital</label>
                                    <input type="text" class="form-control" id="" placeholder="Hospital" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Department</label>
                                    <input type="text" class="form-control" id="" placeholder="Department" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Doctor</label>
                                    <input type="text" class="form-control" id="" placeholder="Doctor" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Symptom</label>
                                    <textarea class="form-control" id="" rows="5" readonly></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Conclusion</label>
                                    <textarea class="form-control" id="" rows="5" readonly></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group" style="padding: 0px 25px">
                            <table class="table">
                                <label for="">Medicine details</label>
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Medicine name</th>
                                        <th scope="col">Dosage</th>
                                        <th scope="col">Time to use</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Panadone</td>
                                        <td>2</td>
                                        <td>after meals</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>
@endsection