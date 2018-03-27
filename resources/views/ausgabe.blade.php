@include('misc.header')

    <h1>{{  $eingabe or 'Eingabe' }}</h1>
    <h1>{{  $standartWert or 'Standartwert' }}</h1>

        @if($test == "Hallo")
        <h1>hallo</h1>
        @elseif($test == "Test")
        <b>test</b>
        @else
        <strong>passt nicht!</strong>
        @endif
        <br>
    <ul>
        @foreach($testArray as $item)
            <li>{{  $item['Datum']  }}</li>
        @endforeach
    </ul>
    <ul>
        @foreach($testArray as $item)
            <li>{{  $item['Name']  }}</li>
        @endforeach
    </ul>

@include('misc.footer')
