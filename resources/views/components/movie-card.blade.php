<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->

    <div class="card">

        <h2>
            {{$title}}
        </h2>

        <h4>
            {{$original_title}}
        </h4>

        <span>
            {{$nationality}}
        </span>
        <span>
            {{$date}}
        </span>

        
        @php

            $float = (float) trim($vote);

        @endphp

        <span>
            @for ($i = 1; $i <= floor($float); $i++)
                <i class="bi bi-star-fill"></i>
            @endfor

            {{-- @php
                var_dump(floor($float))
            @endphp --}}
            
            @if (floor($float) != $float)
                <i class="bi bi-star-half"></i>
            @endif
            
            @if ($float == 9)
                @for ($i = 1; $i <= 10 - floor($float); $i++)
                    <i class="bi bi-star"></i>
                @endfor
            @else
                 @for ($i = 1; $i < 10 - floor($float); $i++)
                    <i class="bi bi-star"></i>
                @endfor
            @endif

           
            
            ({{$vote}})
        </span>
    </div>

</div>