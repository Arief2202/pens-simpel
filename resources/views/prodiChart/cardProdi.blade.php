<center><div class="list-x pt-4 pb-4">    
      @foreach ($dataProdi as $data)
        @foreach ($prodis as $prodi)
            @if ($prodi->id === $data->prodi->id)
            <div class="item item1">
                <div style="float:left">
                  <div class="card">
                      <div class="card-header">
                        <center><h2><i class="fa fa-folder-open me-2"></i>{{ $prodi->nama }}</h2></center>
                        </div>
                        <div class="card-body">
                        <p style="text-align: start">Total Penelitian:  {{ $data->jumlah }}</p>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="border-block-color: white; color: #05445E;">
                            <tbody>
                                <tr>
                                <td >Dasar : 
                                    @foreach ($dasar as $item)
                                    @if ($item->prodi_id == $data->prodi_id)
                                        {{ $item->total  }}
                                    @endif
                                    @endforeach
                                </td>
                                <td>Terapan: 
                                    @foreach ($terapan as $item)
                                    @if ($item->prodi_id == $data->prodi_id)
                                        {{ $item->total  }}
                                    @endif
                                    @endforeach
                                </td>
                                <td>Unggulan: 
                                    @foreach ($unggulan as $item)
                                    @if ($item->prodi_id == $data->prodi_id)
                                        {{ $item->total  }}
                                    @endif
                                    @endforeach
                                </td>
                                <td>PLP:
                                    @foreach ($plp as $item)
                                    @if ($item->prodi_id == $data->prodi_id)
                                        {{ $item->total  }}
                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    @endif
@endforeach
@endforeach
</div></center>
    