<html>
<head>
    <title>testBladeDirective</title>
    <style>
        body { font-size:16pt; color:#999; }
        h1 { font-size:100pt; text-align:right; color:#f6f6f6; margin:-50px 0px -100px 0px }
    </style>
</head>
<body>
    <h1>testBladeDirective</h1>
    <p>{{$explain}}</p>
    <!-- Condition example -->
    @if ($msg)
    <p>Hello, {{$msg}}.</p>
    @else
    <p>please input your name.</p>
    <form method="POST" action="/bladeTemplate/directive">
        {{ csrf_field() }}
        <input type="text" name="msg">
        <input type="submit">
    </form>
    @endif
    @isset ($msg2)
    <p>Hello, {{$msg2}}.</p>
    @else
    <p>please input your name.</p>
    <form method="POST" action="/bladeTemplate/directive">
        {{ csrf_field() }}
        <input type="text" name="msg2">
        <input type="submit">
    </form>
    @endisset
    <br>
    <!-- loop example -->
    <p>item list example.</p>
    @foreach ($data as $item)
    @if ($loop->first)
    <p>all data</p><ul>
    @endif
        <li>No.{{$loop->iteration}}:{{$item}}</li>
    @if ($loop->last)
    </ul><p>this is end.</p>
    @endif
    @endforeach
    <br>
    <p>break and continue test</p>
    <ol>
    @for ($i = 1; $i < 100; $i++)
    @if ($i % 2 == 1)
        @continue
    @elseif ($i <= 10)
        <li>No.{{$i}}
    @else
        @break
    @endif
    @endfor
    </ol>
    <br>
    <p>php directive test.</p>
    <ol>
    @php
    $counter = 0;
    @endphp
    @while ($counter < count($data))
    <li>{{$data[$counter]}}</li>
    @php
    $counter++;
    @endphp
    @endwhile
    </ol>
</body>
</html>