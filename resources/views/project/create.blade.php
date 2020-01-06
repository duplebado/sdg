@extends('layouts.app')
@section('style')
<!--Form Wizard-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/jquery.steps.css')}}" />

@endsection
@section('content')

    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <!--progress bar start-->
                <section class="card">
                    <header class="card-header">
                        Create Project
                    </header>
                    <div class="card-body">
                    <div class="alert alert-{{ $status1 ?? ''}}" role="alert">
                        {{ $status ?? ''}}
                    </div>
                    <form id="wizard-validation-form" method="post" action="/projects">
                    @csrf
                            <div>
                                <h3>Project Details</h3>
                                <section>
                                    <div class="form-group clearfix">
                                        <label class="col-lg-2 control-label " for="name">Project Name *</label>
                                        <div class="col-lg-10">
                                            <input id="name" name="name" type="text" class="required form-control">

                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="col-lg-2 control-label" for="description">Project Description</label>
                                        <div class="col-lg-10">
                                            <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row clearfix col-lg-10">
                                    <div class="form-group col">
                                        <label for="amount">Total Sum (&#8358;)</label>
                                        <input type="number" name="amount" id="" step="any" min="1" class="form-control">
                                    </div>
                                    <div class="form-group col">
                                        <label for="date">Project Date</label>
                                        <input type="date" name="date" id="" class="form-control">
                                    </div>
                                    </div>
                                </section>
                                <h3>Project Status</h3>
                                <section>
                                <div class="form-group clear-fx">
                                    <label class="col-lg-2 control-label" for="status">Status</label>
                                    <div class="col-lg-10">
                                        <select name="status" id="" class="custom-select">
                                        <option value="completed">Completed</option>
                                        <option value="not completed">Not Completed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group clear-fix">
                                    <label class="col-lg-2 control-label" for="completion">Level of Completion %</label>
                                    <div class="col-lg-10">
                                        <input type="number" name="percentage" id="" class="form-control" max="100">
                                    </div>
                                </div>
                                <div class="form-group clear-fix">
                                    <label class="col-lg-2 control-label" for="exampleInputPassword1">Current Functionality</label>
                                    <div class="col-lg-10">
                                        <select name="function" id="" class="custom-select">
                                        <option value="in use">In Use</option>
                                        <option value="not in use">Not In Use</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group clear-fix">
                                    <label class="col-lg-2 control-label" for="abandoned">Amount Remaining (&#8358;)</label>
                                    <div class="col-lg-10">
                                        <input type="number" name="abandoned" min="1" step="any" id="" class="form-control">
                                    </div>
                                </div>

                                </section>
                                <h3>Location Details</h3>
                                <section>


                                <div class="form-row clear-fix">
                                <div class="form-group col">
                                    <label class="col-lg-2 control-label" for="lat">Lat.</label>
                                    <div class="col-lg-10">
                                        <input type="number" name="lat" step="any" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label class="col-lg-2 control-label" for="long">Long</label>
                                    <div class="col-lg-10">
                                        <input type="number" name="long" step="any" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row clear-fix">
                                <div class="form-group col clear-fix">
                                    <label class="col-lg-2 control-label" for="state">State</label>                                        
                                    <div class="col-lg-10">
                                        <select name="state" id="state" class="custom-select form-control">
                                            <option value="" selected="selected" >- Select -</option>
                                            <option value='Abia'>Abia</option>
                                            <option value='Adamawa'>Adamawa</option>
                                            <option value='AkwaIbom'>AkwaIbom</option>
                                            <option value='Anambra'>Anambra</option>
                                            <option value='Bauchi'>Bauchi</option>
                                            <option value='Bayelsa'>Bayelsa</option>
                                            <option value='Benue'>Benue</option>
                                            <option value='Borno'>Borno</option>
                                            <option value='Cross River'>Cross River</option>
                                            <option value='Delta'>Delta</option>
                                            <option value='Ebonyi'>Ebonyi</option>
                                            <option value='Edo'>Edo</option>
                                            <option value='Ekiti'>Ekiti</option>
                                            <option value='Enugu'>Enugu</option>
                                            <option value='FCT'>FCT</option>
                                            <option value='Gombe'>Gombe</option>
                                            <option value='Imo'>Imo</option>
                                            <option value='Jigawa'>Jigawa</option>
                                            <option value='Kaduna'>Kaduna</option>
                                            <option value='Kano'>Kano</option>
                                            <option value='Katsina'>Katsina</option>
                                            <option value='Kebbi'>Kebbi</option>
                                            <option value='Kogi'>Kogi</option>
                                            <option value='Kwara'>Kwara</option>
                                            <option value='Lagos'>Lagos</option>
                                            <option value='Nasarawa'>Nasarawa</option>
                                            <option value='Niger'>Niger</option>
                                            <option value='Ogun'>Ogun</option>
                                            <option value='Ondo'>Ondo</option>
                                            <option value='Osun'>Osun</option>
                                            <option value='Oyo'>Oyo</option>
                                            <option value='Plateau'>Plateau</option>
                                            <option value='Rivers'>Rivers</option>
                                            <option value='Sokoto'>Sokoto</option>
                                            <option value='Taraba'>Taraba</option>
                                            <option value='Yobe'>Yobe</option>
                                            <option value='Zamfara'>Zamafara</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col clear-fix">
                                    <label class="col-lg-2" for="lga">LGA</label>
                                        <div class="col-lg-10">
                                            <select name="lga" id="lga" class="custom-select form-control" class="required">
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="form-group clear-fix">
                                <label class="col-lg-2" for="community">Community</label>
                                <div class="col-lg-10">
                                    <input type="text" name="community" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                                </section>
                                <h3>Stakeholder</h3>
                                <section>
                                <div class="form-group clear-fix">
                                    <label class="col-lg-2" for="sponsor">Sponsor</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="sponsor" class="form-control" id="exampleInputEmail1" >
                                    </div>
                                </div>
                                <div class="form-group clear-fix">
                                    <label class="col-lg-2" for="contractor_name">Contractor's name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="contractor_name" class="form-control" id="exampleInputEmail1" >
                                    </div>
                                </div>
                                <div class="form-group clear-fix">
                                    <label class="col-lg-2" for="contractor_address">Contractor's Address</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="contractor_address" class="form-control" id="exampleInputEmail1" >
                                    </div>
                                </div>
                                <div class="form-group clear-fix">
                                    <label class="col-lg-2" for="contractor_phone">Contractor's Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="contractor_phone" class="form-control" id="exampleInputEmail1" >
                                    </div>
                                </div>

                                </section>
                            </div>
                    </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>

@endsection
@section('script')
<script src="{{asset('admin/js/lga.js')}}"></script>
<script>

//step wizard

$(function() {
    $('#default').stepy({
        backLabel: 'Previous',
        block: true,
        nextLabel: 'Next',
        titleClick: true,
        titleTarget: '.stepy-tab'
    });
});
</script>

<script type="text/javascript">
$(document).ready(function () {
    var form = $("#wizard-validation-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.after(error);
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            form.submit();
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) {
            element.after(error);
        }
    });
});


</script>
@endsection