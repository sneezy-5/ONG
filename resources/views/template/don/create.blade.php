@extends('template.app')


@section('content')

    <form action="{{ route('dons.store')}}" method="post">
        @csrf
        <div>
            <input type="text" name="" id="" placeholder="nom">
        </div>
        <div>
            <input type="text" name="" id="" placeholder="prenoms">
        </div>
        <input type="button" value="valider">
    </form>

@endsection