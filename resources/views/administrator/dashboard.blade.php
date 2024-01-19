@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
   @role('Administrator')
      @include('components.admin-home')
      @include('components.announcement')
   @endrole
   @role('Instructor')
      @include('components.instructor-home')
   @endrole
   @role('Parent')
      @include('components.parent-home')
   @endrole

</div>
@endsection

