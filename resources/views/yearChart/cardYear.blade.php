<style>
  .icon-shape {
width: 48px;
height: 48px;
background-position: center;
background-color: #05445E;
border-radius: 0.5rem;
}

.icon-shape i {
color: #fff;
opacity: 0.8;
top: 11px;
position: relative;
}

.icon-shape .ni {
top: 14px;
}
</style>
<center><div class="list-x pt-4 pb-4">
  @foreach ($datas as $data)
  <div class="item item1">
    <div style="float:left">
      <div class="card  shadow rounded" style="cursor: default">
        <div class="card-header" style="background-color: white">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute" style="background-color: #05445E;">
              <i class="fa fa-folder-open"></i>
          </div>
          <div class="text-end pt-1">
              <h2 class="text-sm mb-0 text-capitalize">Tahun {{ $data->tahun }}</h2>
              <p >Total Penelitian: {{ $data->jumlah_penelitian }}</p>
          </div>
        </div>
          <div class="card-body" style="background-color: white">
            <div class="table-responsive">
              <table class="table table-bordered" style="border-block-color:  #05445E; color:  #05445E;">
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
                    <td>Internasional:
                      @foreach ($internasional as $item)
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