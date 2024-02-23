내용작성.

<p>{{ $name }} </p>
<p>{!! $name !!}</p>
<p>@{{ $name }}</p>


<p>지금은 {{now() }} 입니다.</p>

@for ($i = 0; $i < 10; $i++)
    숫자가 증가합니다. {{ $i }} <br>

@endfor   

@includeIf('sub.incx')


@php
    $a = 10;
    $a++;
    echo '<p>a의 값은?' . $a .'입니다</p>';
@endphp


{{-- 이것은 주석입니다.--}}