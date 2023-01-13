@extends('../layout/' . $layout)

@section('subhead')
    <title>Branch Report</title>
@endsection
@section('subcontent')
@if($errors->any())
@endif

<img src="build/assets/images/logo.png" style="width:200px;height:200px;display:block;margin:auto;padding: auto;" alt=" logo">

<div class="space" style="padding-bottom: 2vh"></div>

<div class="container">

    <div class="space" style="padding-bottom: 4vh"></div>

   <div class="alert alert-primary" role="alert">
    <h1 style="text-align: center">Branches Report</h1></div>

    <div class="card">

        <div class="card-body">
          <h5 class="card-title"><b><strong>Month : {{$currentMoth}}</strong></b></h5>
          <h5 class="card-title"><b><strong>Total Branches : {{$totalBranches}} </strong></b></h5>


          <div class="space" style="padding-bottom: 5vh">
        </div>
<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

{{-- <div class="map_canvas">

    <canvas id="myChart" width="auto" height="100"></canvas>
</div> --}}

{{-- <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($labels) ?>,
            datasets: [{
                label: 'xxxa',
                data: <?php echo json_encode($Bid); ?>,
                backgroundColor: [
                    'rgba(31, 58, 147, 1)',
                    'rgba(37, 116, 169, 1)',
                    'rgba(92, 151, 191, 1)',
                    'rgb(200, 247, 197)',
                    'rgb(77, 175, 124)',
                    'rgb(30, 130, 76)'
                ],
                borderColor: [
                    'rgba(31, 58, 147, 1)',
                    'rgba(37, 116, 169, 1)',
                    'rgba(92, 151, 191, 1)',
                    'rgb(200, 247, 197)',
                    'rgb(77, 175, 124)',
                    'rgb(30, 130, 76)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    title: {
                  display: true,
                  text: ' '
              },
                    max: 5,
                    min: 0,
                    ticks: {
                   stepSize: 1
                    }
                }

            },
            plugins: {
                title: {
                    display: true,
                    text: 'Branch'

                },
                legend: {
                    display: false,
                }
            }
        }
    });
    </script> --}}
    {{-- <div class="space" style="padding-bottom: 5vh"></div> --}}


    <h3 class="card-header bg-primary" style="color: rgb(244, 245, 247)"> View All Subbmited Branches in this year </h3>

    <div class="space" style="padding-bottom: 3vh"></div>
         <table class="table table-bordered table-dark">
            <thead>
      <tr>
        <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">Branch Code</th>
        <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">Branch name</th>

      </tr>
    </thead>
    <tbody>



      <tr >
         @foreach ($monthlyAllBranchs as $setMonthly)
        <td style="color: rgb(255, 255, 255);text-align: center">{{ $setMonthly->BranchID}}</td>
        <td style="color: rgb(255, 255, 255);text-align: center">{{ $setMonthly->BranchName}}</td>
      </tr>
   @endforeach
    </tbody>

         </table>
      </div>

      </div>
      <div class="space" style="padding-bottom: 10vh"></div>
      <h3 class="card-header bg-primary" style="color: rgb(244, 245, 247)"> View All Subbmited Branches In this Month</h3>

<div class="space" style="padding-bottom: 3vh"></div>
     <table class="table table-bordered table-dark">
        <thead>
  <tr>
    <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">Branch Code</th>
    <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">Branch name</th>

  </tr>
</thead>
<tbody>



  <tr >
     @foreach ($monthlyAllBranchs as $setMonthly)
    <td style="color: rgb(255, 255, 255);text-align: center">{{ $setMonthly->BranchID}}</td>
    <td style="color: rgb(255, 255, 255);text-align: center">{{ $setMonthly->BranchName}}</td>
  </tr>
@endforeach
</tbody>

     </table>

      <div class="space" style="padding-bottom: 5vh"></div>
      <a href="{{ url('/Branch-Info') }}" class="btn btn-primary bg-info me-md-5 pl-5">Go Dashboard</a>
      <a href="{{ url('/BranchPDF') }}" class="btn btn btn-success">Generate PDF</a>

</div>


@endsection

@section('script')
    @vite('resources/js/ckeditor-classic.js')
@endsection
