@extends('layouts.app')

@section('content')

<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit perspiciatis itaque nihil laudantium aspernatur consectetur eaque! Laboriosam facilis architecto harum eligendi amet, impedit perspiciatis dolorem! Nostrum corporis blanditiis, placeat quas?</p>

@endsection

@section('sidebar')
  @parent
<p>this is appended to the sidebar</p>

@endsection