@extends('welcome')

@section('content')
<div class="row mt-5 ">
    <div class="col text-center">
            <h1>Selected: Motorcycle</h1>
    </div>
</div>
<form action="{{ url('queue-mc') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row ">
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Priority
                </label>
            </div>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" placeholder="Coordinator" aria-label="default input example" name="coordinator">
        </div>
    </div>
<div class="row mt-5 ">
    <div class="col-6 mx-auto">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Regular" checked>
            <h2><label class="form-check-label" for="flexRadioDefault1">
            Regular
            </label></h2>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="TODA">
            <h2><label class="form-check-label" for="flexRadioDefault2">
            TODA
            </label></h2>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="Club Rider Member">
            <h2><label class="form-check-label" for="flexRadioDefault3">
            Club Rider Member
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
