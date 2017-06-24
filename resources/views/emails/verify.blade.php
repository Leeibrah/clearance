@extends('emails.layouts.default')

@section('content')
<p>Hello, {{ $data['name'] }}</p>

<p>
	{{ $data['content'] }}
</p>

<p>Best regards,</p>

<p>Stawika Capital</p>
@stop