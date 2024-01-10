<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Welcome {{$name}} to this website. Current date & time = {{date('Y-m-d')}} {{time()}}</h1>
    <h1>Welcome {!! $name !!} to this website. Current date & time = {{date('Y-m-d')}} {{time()}}</h1> -->

    <!-- if -->
    <!-- @if($name == "Raj")
        {{"Name is $name"}}
        <br>
    @elseif($name != '')
        {{"Name is not empty and name is $name"}}
        <br>
    @else
        {{"Name is empty"}}
        <br>
    @endif -->

    <!-- Unless -->
    <!-- @unless($name == "Raj")
        {{"Name is not Raj"}}
        <br>
    @endunless -->

    <!-- Isset -->
    <!-- @isset($name)
        {{"ok"}}
        <br>
    @endisset -->

    <!-- for -->
    <!-- @for($i=0;$i<=10;$i++)
        {{$i}}
     @endfor -->
        
        <br>
    <!-- foreach & break & continue -->
    <?php
        // $array = [2,3,4,6,5,7,8,9,6,10];
    ?>
    <!-- @foreach($array as $data)
        @if(($data%2)==0)
            {{$data}}
            @continue
        @endif
        {{-- ok --}}
    @endforeach -->

    <!--  -->
</body>
</html>