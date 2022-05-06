<center><div class="list-x pt-4 pb-4">
  @foreach ($datas as $data)
  <div class="item item1">
    <div style="float:left">
      <div class="card">
          <div class="card-header" style="border-block-color: white">
            <center><h2><i class="fa fa-folder-open me-2"></i>Tahun {{ $data->tahun }}</h2></center>
          </div>
          <div class="card-body">
            <p style="text-align: start">Total Penelitian: {{ $data->jumlah_penelitian }} </p>
            <div class="table-responsive">
              <table class="table table-bordered" style="border-block-color: white; color: #05445E;">
                <tbody>
                  <tr>
                    <td >Dasar : 
                      @foreach ($dasar as $item)
                        @if ($item->tahun == $data->tahun)
                            {{ $item->total  }}
                        @endif
                      @endforeach
                    </td>
                    <td>Terapan: 
                      @foreach ($terapan as $item)
                        @if ($item->tahun == $data->tahun)
                            {{ $item->total  }}
                        @endif
                      @endforeach
                    </td>
                    <td>Unggulan: 
                      @foreach ($unggulan as $item)
                          @if ($item->tahun == $data->tahun)
                              {{ $item->total  }}
                          @endif
                      @endforeach
                    </td>
                    <td>PLP:
                      @foreach ($plp as $item)
                        @if ($item->tahun == $data->tahun)
                            {{ $item->total }}
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
    @endforeach
  </div>
</div></center>