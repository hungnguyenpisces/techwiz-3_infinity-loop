@extends('user.layouts._master')

@section('content')
<h3 style="max-width: 90%; margin: auto" class="mt-5 text-center">Your health line graph</h3>
<canvas id="myChart" style="min-width: 300px ;max-width: 90%; margin: auto"></canvas>
@endsection
@section('extraJs')
<script>
    var xyValues = <?php echo json_encode($chart); ?>;
    
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: xyValues.map(function(item) {
                return item.axes;
            }),
            datasets: [{
                label: 'X',
                data: xyValues.map(function(item) {
                    return item.x;
                }),
                borderColor: [
                    "red"
                ],
                borderWidth: 1
            }, {
                label: 'Y',
                data: xyValues.map(function(item) {
                    return item.y;
                }),
        
                borderColor: [
                    "black"
                ],
                borderWidth: 1 }, {
                label: 'Z',
                data: xyValues.map(function(item) {
                    return item.z;
                }),
                borderColor: [
                    "green",
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endsection

