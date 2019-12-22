@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Project</div>

                <div class="card-body">
                        <div class="alert alert-{{ $status1 ?? ''}}" role="alert">
                            {{ $status ?? ''}}
                        </div>
                    <form method="post" action="/create">
                    @csrf
                        <div class="form-group">
                            <label for="name">Project Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="description">Project Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <select name="status" id="" class="custom-select">
                            <option value="completed">Completed</option>
                            <option value="not completed">Not Completed</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="completion">Completion</label>
                            <input type="number" name="percentage" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Current Functionality</label>
                            <select name="function" id="" class="custom-select">
                            <option value="in use">In Use</option>
                            <option value="not in use">Not In Use</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="amount">Total Sum</label>
                            <input type="number" name="amount" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="date">Project Date</label>
                            <input type="date" name="date" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="abandoned">Amount for Completion</label>
                            <input type="number" name="abandoned" id="" class="form-control">
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="lat">Latitude</label>
                                <input type="number" name="lat" id="" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label for="long">Longitude</label>
                                <input type="number" name="long" id="" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="state">State</label>
                            <select name="state" id="" class="custom-select">
                                <option value="borno">Borno</option> 
                                <option value="abia">Abia</option> 
                                <option value="akwa-ibom">Akwa Ibom</option> 
                                <option value="imo">Imo</option> 
                                <option value="rivers">Rivers</option> 
                                <option value="bayelsa">Bayelsa</option> 
                                <option value="benue">Benue</option> 
                                <option value="cross-river">Cross River</option> 
                                <option value="taraba">Taraba</option> 
                                <option value="kwara">Kwara</option> 
                                <option value="lagos">Lagos</option> 
                                <option value="niger">Niger</option> 
                                <option value="ogun">Ogun</option> 
                                <option value="ondo">Ondo</option> 
                                <option value="ekiti">Ekiti</option> 
                                <option value="osun">Osun</option> 
                                <option value="oyo">Oyo</option> 
                                <option value="anambra">Anamabra</option> 
                                <option value="bauchi">Bauchi</option> 
                                <option value="gombe">Gombe</option> 
                                <option value="delta">Delta</option> 
                                <option value="edo">Edo</option> 
                                <option value="enugu">Enugu</option> 
                                <option value="ebonyi">Ebonyi</option> 
                                <option value="kaduna">Kaduna</option> 
                                <option value="kogi">Kogi</option> 
                                <option value="plateau">Plateau</option> 
                                <option value="nassarawa">Nassarawa</option> 
                                <option value="jigawa">Jigawa</option> 
                                <option value="kano">Kano</option> 
                                <option value="katsina">Katsina</option> 
                                <option value="sokoto">Sokoto</option> 
                                <option value="zamfara">Zamfara</option> 
                                <option value="yobe">Yobe</option> 
                                <option value="kebbi">Kebbi</option> 
                                <option value="adamawa">Adamawa</option> 
                                <option value="fct">Federal Capital Territory</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lga">Local Government/Area Council</label>
                            <input type="text" name="lga" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="community">Community</label>
                            <input type="text" name="community" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="sponsor">Sponsor</label>
                            <input type="text" name="sponsor" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="contractor_name">Contractor's name</label>
                            <input type="text" name="contractor_name" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="contractor_address">Contractor's Address</label>
                            <input type="text" name="contractor_address" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="contractor_phone">Contractor's Phone</label>
                            <input type="text" name="contractor_phone" class="form-control" id="exampleInputEmail1" >
                        </div>
<!-- change this to select -->
<!-- add the step to the floats -->
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1" required="required">Check if you are done</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
