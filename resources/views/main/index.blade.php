@extends('welcome')

@section('content')

{{-- <div class="container-fluid">
    <div class="row">
      <div href="" class="col" >
        <div class="d-grid">
            <a href="" class="btn btn-danger" type="button" style=" height:100ex">Motorcycle</a>
        </div>
      </div>
      <div class="col" >
        <div class="d-grid">
            <a href="" class="btn btn-primary" type="button" style=" height:100ex">
                <label for="" >Light Vehicle</label>
            </a>
        </div>
      </div>
    </div>
</div> --}}
<div class="container-fluid ">
    <div class="row align-self-center" >
      <div class="col-sm-12 d-grid justify-content-center">
          <div class="row">
      <h1><div id="txt"></div></h1>
            </div>
    <div class="row">
      <h4><div id="current_date"></div></h4>
            </div>
    </div>
  </div>
</div>




<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script>
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<script>
const d = new Date(MMM DD YYYY);
document.getElementById("demo").innerHTML = d;
</script>
<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
</script>


@endsection
