<h1>Welcome {{$user_name ?? "Guest"}}</h1>
{!! $sample !!}
{{--@if($user_name == "" )--}}
{{--    {{ "name is empty" }}--}}
{{--@elseif($user_name == "ismail")--}}
{{--    {{"name is correct"}}--}}
{{--@else--}}
{{--    {{"name is not correct"}}--}}
{{--@endif--}}
@isset($user_name)
    Welcome {{$user_name}}
@endisset
