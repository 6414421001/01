@extends('layouts.app') 
    @section('kuy')
        h
    @endsection
@section('kuy.1')

    <canvas id="myChart" height="200px"></canvas> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
    var labels =  {{ Js::from($labels) }};
    var datas =  {{ Js::from($data) }};
  
    const data = {
        labels: labels,
        datasets: [{
            label: 'คนดู',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: datas,
        }]
    };
  
    const config = {
        type: 'bar',
        data: data,
        options: {}
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
  
</script>   
    @endsection
