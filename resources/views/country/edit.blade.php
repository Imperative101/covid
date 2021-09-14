@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Citizen edition</div>

               <div class="card-body">
                <form method="POST" action="{{route('country.update',$scountry)}}">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="country_name"  class="form-control" value="{{$country->name}}">
                        {{-- <small class="form-text text-muted">Name.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>Citizen</label>
                        <input type="text" name="country_citizens"  class="form-control" value="{{$country->citizen}}">
                        {{-- <small class="form-text text-muted">Citizen.</small> --}}
                    </div>
                    @csrf
                    <button class="btn btn-success" type="submit">update</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection