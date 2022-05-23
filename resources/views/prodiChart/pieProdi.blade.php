@extends('home')

@section('tema')
Prodi
@endsection

@section('buttonchart')
<a href="\barProdi" class="btn btn-light" role="button" style="border-color: grey; border-width: 2px;"><i class="fa fa-bar-chart me-2"></i>Bar Chart</a>
<a href="\pieProdi" class="btn btn-light" role="button" style="border-color: grey; border-width: 2px;"><i class="fa fa-pie-chart me-2"></i>Pie Chart</a>
@endsection

@section('chart')
<center><div class="col-md-6">
    <?php 
        $jml = array();
        $prodi = array();
        foreach ($dataProdi as $data ) {
            array_push($jml, $data->jumlah);
        }
        foreach ($prodis as $data ) {
            array_push($prodi, $data->nama);
        }

    ?>



{{-- Start buat Bar chart --}}

    {{-- import cdnjs chart --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- identifikasi chart --}}
    <canvas id="myChart"></canvas>


    {{-- proses --}}
    <script>
        const jumlah = <?php echo json_encode($jml); ?>;
        const labels = <?php echo json_encode($prodi); ?>;

        Chart.defaults.font.size = 15;
            
            // Mengatur data beserta Tampilannya
            const data = {
                labels: labels,
                datasets: [{
                    label: 'My First Dataset',
                    data: jumlah,
                    backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(220,20,60)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(34, 139, 35)',
                    'rgb(30, 144, 255)',
                    'rgb(60, 179, 113)',
                    ],
                    hoverOffset: 4
                }]
            };

            const config = {
                type: 'doughnut',
                data: data,
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    },
                    legend: {
                    display: false
                    },
                    cutoutPercentage: 80,
                },
            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
    </script>
    </div>
@endsection

@section('card')
@include('prodiChart.cardProdi')
@endsection