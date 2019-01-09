@extends('layout')

@section('header-content')

@endsection

@section('title')
<strong>Contact</strong> Us
@endsection

@section('content')
<div class="container contact-box">
    <hr>
    <div class='row'>
        <div class="col-sm">
            <h2>Contact us at:</h2>
        </div>
        <div class="col-sm right">
            <h2>Book an appointment with us</h2>
            <hr>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="inputName" aria-describedby="inputName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputMobileNo">Mobile No.</label>
                    <input type="tel" class="form-control" id="mobileNumber" placeholder="Mobile No.">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputservice">Choose Service Type
                    </label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputDate">Choose Your Preferred Date</label>
                    <div class="container">
                        <div class="row">
                            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputDropCar">Choose Time to Drop Your Car
                    </label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="09.00am">09.00am</option>
                        <option value="09.30am">09.30am</option>
                        <option value="10.00am">10.00am</option>
                        <option value="10.30am">10.30am</option>
                        <option value="11.00pm">11.00am</option>
                        <option value="11.30am">11.30am</option>
                        <option value="12.00pm">12.00pm</option>
                        <option value="01.00pm">01.00pm</option>
                        <option value="01.30pm">01.30pm</option>
                        <option value="02.00pm">02.00pm</option>
                        <option value="02.30pm">02.30pm</option>
                        <option value="03.00pm">03.00pm</option>
                        <option value="03.30pm">03.30pm</option>
                        <option value="04.00pm">04.00pm</option>
                        <option value="04.30pm">04.30pm</option>
                        <option value="05.00pm">05.00pm</option>
                    </select>
                </div>
            </form>
        </div>
    </div>

    @endsection
