@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Vaccination redagavimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('vaccination.update',$vaccination)}}">

                    <div class="form-group">
                        <label>First</label>
                        <input type="text" name="first"  class="form-control" value="{{$vaccination->First}}">
                        {{-- <small class="form-text text-muted">First.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>second</label>
                        <input type="text" name="second"  class="form-control" value="{{$vaccination->second}}">
                        {{-- <small class="form-text text-muted">second.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>third</label>
                        <input type="text" name="third"  class="form-control" value="{{$vaccination->third}}">
                        {{-- <small class="form-text text-muted">third.</small> --}}
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