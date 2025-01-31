@if(array_key_exists('measurements', $data))
    <div class="row">
        <div class="col-md-6">
            <h3 class="lead collection">Measurements and weight</h3>
            <p>
                @foreach($data['measurements']['dimensions'] as $dim)
                    @if(array_key_exists('dimension',$dim) && array_key_exists('units',$dim))
                        {{ $dim['dimension'] }}: {{ $dim['value'] }} {{ $dim['units'] }}<br/>

            @else
                @section('dims-message')
                    <p class="text-info">
                        At the moment, this record does not display units or type of
                        measurements. We will rectify this as soon as possible.
                    </p>
                @endsection
                {{ $dim['value'] }}
                @if(!$loop->last)
                    <br/>
                    @endif
                    @endif
                    @endforeach
                    </p>
        </div>


        @if(array_key_exists('dimension',$data['measurements']['dimensions'][0]))
            @php
                $dimensions = $data['measurements']['dimensions'];
                $dims = [];
                $width = [];
                $depth = [];
                foreach($dimensions as $dim){
                  if($dim['dimension'] == 'Height')
                  {
                    $dims['height'] = $dim['value'];
                  }
                  if($dim['dimension'] == 'Length'){
                    $width[] = $dim['value'];
                  }
                  if($dim['dimension'] == 'Width'){
                    $width[] = $dim['value'];
                  }
                  if($dim['dimension'] == 'Depth'){
                    $depth[] = $dim['value'];
                  }
                  if($dim['dimension'] == 'Thickness'){
                    $depth[] = $dim['value'];
                  }
                }
                if(!empty($width)){
                    $width = str_replace(' cm', '', $width);
                  $w = max($width);
                }
                if(count($depth) >= 1) {
                  $d = max($depth);
                } else {
                  $d = 0.001;
                }
            @endphp

            @if(array_key_exists('height', $dims) && !empty($w) && array_key_exists('units',$data['measurements']['dimensions'][0]))
                @if(is_numeric($dims['height']))
                    <x-dimension-drawer
                        :height="$dims['height']"
                        :width="$w"
                        :depth="$d"
                        :units="$data['measurements']['dimensions'][0]['units']"
                        :viewWidth="400"
                        :viewHeight="320"
                        :scale=1></x-dimension-drawer>
                @endif
            @endif
        @endif
        @endif
        @yield('dims-message')
    </div>
