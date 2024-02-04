@php
    $f = ['Apple','Banana','Grapes'];
    $b = false;
@endphp

@include('post',['names' => $f])

@includeWhen(true, 'new')
@includeUnless($b, 'welcome')
<h3>About page</h3>