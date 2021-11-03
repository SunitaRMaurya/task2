
@extends('layouts.app')

@section('content')


	<title>Registion_form</title>
<div class="container">
    <h2 style="margin-top: 12px;" class="alert alert-success">Registion_form  </h2><br>
    <div class="row">
        <div class="col-12">
             
       

<a href="{{ route('reg1create.create') }}">Add new</a>
<table border="2" class="table table-bordered">
	<tr>
		<td>id</td>
		<td>name</td>
		<td>email</td>
		<td>password</td>
		<td>address</td>
		<td>phone_number</td>
		<td>gender</td>
		<td>image</td>
		<td>Action</td>
	</tr>
 	
	@foreach($register  as $reg1)

	<tr>
	 	<td>{{$reg1['id']}}</td>
	 	<td>{{$reg1['name']}}</td>
	 	<td>{{$reg1['email']}}</td>
	 	<td>{{$reg1['address']}}</td>
	 	<td>{{$reg1['phonenumber']}}</td>
	 	<td>{{$reg1[ 'gender']}}</td>
	 	<td>{{$reg1['password']}}</td>
	 	<td><img src="{{ asset('image/'.$reg1['image'])}}" width="70px" height="70px" alt="image"></td>



 	   <td><a href="{{route('reg1edit.edit',$reg1['id'])}}">
                  <button class="btn btn-info">Edit</button></a>
 	  
 	  <!-- 	<form method="get" action="{{route('reg1des.destroy',$reg1['id'])}}" style="display: inline;"> -->
                                                    
		@csrf
		  <button type="button" data-toggle="modal" data-target="#deleteModel" id="delete" 
           class="btn btn-danger mb-2" >Delete
        </button>

<div id="successMessage" style="font-size:20px;color:green;font-weight:bold;"></div>
        </form>
		</td>
	</tr>
	
  @endforeach


		 <!-- <button class="btn btn-danger" onclick="('')"  id="delete" type="submit">Delete</button>  -->


</table>
{!! $register->links() !!}
</div>

</div>		
</div>

<div class="modal fade" id="deleteModel" tabindex="-1" aria-labelledby="ajax-crud-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ajaxcrud-modal">Delete_comfirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="get" action="{{route('reg1des.destroy',$reg1['id'])}}" style="display: inline;"> 
      	<p>Are You sure want to update</p>
      </div>
       
        
       <div class="modal-footer">

        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancel</button> -->
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<span id= 'deleteButton'></span>
        <button type="submit" class="btn btn-primary"  onclick="confirmDeleteModal('$id')" >Save</button>
      </div>
      </div>

    </div>
  </div>
</div>

@endsection


<script>

function confirmDeleteModal(id){
	// alert("hi");
	  var id = $(this).data("id");

}     
</script>




