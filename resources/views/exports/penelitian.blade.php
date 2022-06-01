<table border="6" cellpadding="7">
    <?php $nomer = 1;?>
    <thead>
        <tr>
            <th>Nomer</th>
            <th width="600px"><Strong> Judul</Strong></th>
            <th width="200px"><Strong> Skema</Strong></th>
            <th width="200px"><strong> Ketua Penelitian</strong></th>
            <th width="200px"><strong> Anggota</strong></th>
            <th><strong> Tahun</strong></th>
        </tr>
    </thead>
    <tbody>

        @foreach($penelitians as $penelitian)
        <tr>
            <td>{{ $nomer++ }}</td>
            <td>{{ $penelitian->judul }}</td>
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