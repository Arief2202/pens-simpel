@extends('home')
@section('chartTahun')
{{-- convert data ke array --}}

<center>
    <?php 
        $jml = array();
        $thn = array();
        foreach ($datas as $data ) {
            array_push($jml, $data->jumlah_penelitian);
            array_push($thn, $data->tahun);
        }
        array_push($jml,0);

    ?>

    {{-- Start buat Bar chart --}}

        {{-- import cdnjs chart --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        {{-- identifikasi chart --}}
        <canvas id="myChart" width="250" height="100"></canvas>


        {{-- proses --}}
        <script>
            const labels = <?php echo json_encode($thn); ?>;
            const jumlah = <?php echo json_encode($jml); ?>;
            Chart.defaults.font.size = 15;

            // Mengatur data beserta Tampilannya
            const data = {
                labels: labels,
                datasets: [{
                    label: 'Total Penelitian',
                    data: jumlah,
                    backgroundColor: [
                    '#05445E',
                    // 'rgb(40, 178, 170)',
                    ],

                    borderWidth: 1
                }]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y:{
                            beginAtZero: true
                        }
                    }
                }
            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>

@endsection