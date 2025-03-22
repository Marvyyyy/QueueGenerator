@extends('welcome')

@section('content')
<div class="row mt-5 ">
    <div class="col text-center">
            <h1>Selected: Light Vehicle</h1>
    </div>
</div>
<form action="{{ url('queue-lv') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row ">
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Priority
                </label>
            </div>
        </div>
    </div>
<div class="row mt-5">
    <div class="col-6 mx-auto">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked value="Regular">
            <h2><label class="form-check-label" for="flexRadioDefault1">
            Regular
            </label></h2>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="For Hire">
            <h2><label class="form-check-label" for="flexRadioDefault2">
            For Hire
            </label></h2>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="Company">
            <h2><label class="form-check-label" for="flexRadioDefault4">
            Company
            </label></h2>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" value="Government">
            <h2><label class="form-check-label" for="flexRadioDefault5">
            Government
            </label></h2>
        </div>
    </div>
</div>
<div class="row mt-5 ">
    <div class="col d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-dark"><h1>PRINT</h1></button>
    </div>
</div>
</form>
@endsection
