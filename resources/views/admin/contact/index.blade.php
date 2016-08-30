@extends('layouts.app')

@section('content')

<table class="table">
    <tr>
        <th>Name</th><th>Email</th><th>Message</th><th>action</th>
    </tr>
    @foreach($contacts as $contact)
    <tr>
        <td>{{$contact->name}}</td><td>{{$contact->email}}</td><td>{{$contact->message}}</td><td><a href="{{route('admin.contact.delete',$contact->id)}}" onclick= " return confirm('Are you sure');">Delete</a></td>
    </tr>

    @endforeach
</table>


{{ $contacts->links() }}

@stop