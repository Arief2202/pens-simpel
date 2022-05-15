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
        @foreach ($dataProdi as $data)
          @foreach ($prodis as $prodi)
              @if ($prodi->id === $data->prodi->id)
              <div class="item item1">
                  <div style="float:left">
                    <div class="card" style="border-radius: 10px">
                        <div class="card-header">
                            <div class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-folder-open"></i>
                            </div>
                            <div class="text-end pt-1">
                                <h2 class="text-sm mb-0 text-capitalize">{{ $prodi->nama }}</h2>
                                <p >Total Penelitian:  {{ $data->jumlah }}</p>
                            </div>
                        </div>
                          <div class="card-body" style="background-color: #05445E">
                          <div class="table-responsive">
                              <table class="table table-bordered" style="border-block-color: white; color: white;">
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
      