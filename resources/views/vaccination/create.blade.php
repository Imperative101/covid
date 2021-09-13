@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">vakcinacijos sukurimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('student.store')}}">

 
                    <div class="form-group">
                        <label>first</label>
                        <input type="text" name="first"  class="form-control">
                        {{-- <small class="form-text text-muted">first</small> --}}
                    </div>
                    <div class="form-group">
                        <label>second</label>
                        <input type="text" name="second"  class="form-control">
                        {{-- <small class="form-text text-muted">second</small> --}}
                    </div>
                    <div class="form-group">
                        <label>third</label>
                        <input type="text" name="letter"  class="form-control">
                        {{-- <small class="form-text text-muted">third</small> --}}
                    </div>


                    @csrf
                    <button class="btn btn-primary" type="submit">ADD</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection