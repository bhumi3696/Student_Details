@extends('layouts.main')
@section('content')

<h1> Create Page </h1>

<div class="container" style="margin-bottom:20px;">

@if($errors->any())
    @foreach($errors->all() as $error)

        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>

    @endforeach
@endif


<!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Add Students Data</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="{{ route('store') }}" method="POST">

        {{ csrf_field() }}

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="firstname">
                        <label for="materialRegisterFormFirstName">First name</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="lastname"> 
                        <label for="materialRegisterFormLastName">Last name</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" id="materialRegisterFormEmail" class="form-control" name="email">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Phone number -->
            <div class="md-form">
                <input type="number" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="phone">
                <label for="materialRegisterFormPhone">Phone number</label>
            </div>


            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Submit Information</button>

            <!-- Social register -->
            
        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->

</div>

@endsection