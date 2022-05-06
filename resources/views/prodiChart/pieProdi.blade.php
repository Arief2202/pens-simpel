@extends('homeProdi')
@section('chartProdi')

<center><div class="col-4">

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
    <canvas id="myChart" width="250" height="100"></canvas>


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
            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
    </script>

@endsection