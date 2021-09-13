@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Vaccination create</div>

               <div class="card-body">
                 <table class="table">
                   <tr>
                     <th>first</th>
                     <th>second</th>
                     <th>third</th>
                     <th>edit</th>
                     <th>delete</th>
                   </tr>
                  @foreach ($vaccinations as $vaccination)
                    <tr>
                      <td>{!!$vaccination->first!!}</td>
                      <td>{!!$vaccination->second!!}</td>
                      <td>{!!$vaccination->third!!}</td>
                      <td><a class="btn btn-success" href="{{route('vaccination$vaccination.show',[$vaccination])}}">užeiti</a></td>
                      <td><a class="btn btn-primary" href="{{route('vaccination$vaccination.edit',[$vaccination])}}">edit</a></td>
                      <td>
                        <form method="POST" action="{{route('vaccination$vaccination.destroy', $vaccination)}}">
                          @csrf
                          <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
              </table>
               </div>



           </div>
       </div>
   </div>
</div>
@endsection