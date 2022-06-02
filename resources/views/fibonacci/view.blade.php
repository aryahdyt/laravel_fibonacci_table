Column = {{ $column }}
<br>
Row = {{ $row }}
<br>
<table border='1'>
  @for($i = 0; $i < $row; $i++)
    <tr>
      @for($j = 0; $j < $column; $j++)
        @if ($i == 0 && $j < 1)
          <td>{{ $nol }}</td>
          <td>{{ $satu }}</td>
          @php
          $j += 1;    
          @endphp
        @else
            @php
            $lanjut = $nol + $satu;
            @endphp
            <td>{{ $lanjut }}</td>
            @php
            $nol = $satu;
            $satu = $lanjut;
            @endphp
        @endif
      @endfor
    </tr>
  @endfor

</table>