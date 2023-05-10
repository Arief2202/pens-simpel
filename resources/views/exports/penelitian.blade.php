<table border="6" cellpadding="7">
    <?php $nomer = 1;?>
    <thead>
        <tr>
            <th colspan="6" style="text-align: center;" height="20">
                <center><strong> {{ $judul }} </strong></center>
            </th>
        </tr>
        <tr>
            <th width="10"><strong> Nomer </strong></th>
            <th>
                <center> <Strong> Judul</Strong> </center>
            </th>
            <th><Strong> Skema</Strong></th>
            <th><strong> Ketua Penelitian</strong></th>
            <th><strong> Anggota</strong></th>
            <th><strong> Tahun</strong></th>
        </tr>
    </thead>\
    <tbody>

        @foreach($penelitians as $penelitian)
        <tr>
            <td>{{ $nomer++ }}</td>
            <td>
                <center> {{ $penelitian->judul }} </center>
            </td>
            <td>{{ $penelitian->skema->nama }}</td>
            <td>
                <ul>
                    @foreach ($penelitian->dosen as $dosen)
                    @if ($dosen->id === $penelitian->dosen_id)
                    <li>{{ $dosen->nama }}</li>
                    @endif
                    @endforeach
                </ul>
            </td>
            <td>
                <ul>
                    @foreach ($penelitian->dosen as $dosen)
                    <li>- {{ $dosen->nama }}</li>
                    @endforeach
                </ul>
            </td>
            <td>{{ $penelitian->tahun }}</td>
        </tr>
        @endforeach
    </tbody>
</table>