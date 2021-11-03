
@extends('layouts.app')

@section('content')


  <title>Registion_form</title>
      @if(session('success'))
      <h1>{{session('success')}}</h1>
   @endif
   
<form method="post" action="{{ route('reg_store') }}">
 @csrf  

   <div class="container" style="background-color:gray">
    <div class="row">

      <div class="col-sm-5">
          <div class="form-group">      
              <label for="first name">First Name:</label>
              <input type="text" class="form-control" name ="first_name"><br/>
          </div>  
  </div>
  <div class="col-sm-5">
          <div class="form-group">      
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name ="last_name"><br/>
          </div>  
  </div>
  <div class="col-sm-5">
          <div class="form-group">      
              <label for="email">Email:</label>
              <input type="email" class="form-control" name ="email"></br>
          </div>  
  </div>
     <div class="col-sm-5">
<div class="form-group">      
              <label for="password">password:</label>
              <input type="password" class="form-control" name="password" ></br>
          </div>  </div>
          <div class="col-sm-5">
          <div class="form-group">      
              <label for="date">Date of birth:</label>
              <input type="date" class="form-control" name ="date_of_birth"> </br>
          </div>  
  </div>
  <div class="col-sm-5">
          <div class="form-group">      
              <label for="name">Gender:</label></br>
               <input type="radio" name="gender"  class="radio" value="">Male
               <input type="radio" name="gender"  class="radio" value="">Female
               <input type="radio" name="gender"  class="radio" value="">Other

            </div>  
          </div>      
          <div class="col-sm-5">
                <div class="form-group">      
                    <label for="name">Annual_Income:</label>
                    <input type="text" class="form-control" name ="annual_income"></br>
                </div>  </div>

        </div>
      </br>
      <div class="col-sm-5">      
      <div class="dropdown">
          <button type="submit" class="btn btn-primary dropdown-toggle form-group" data-bs-toggle="dropdown" name="occupation">
         Occupation:
          </button>

          <ul class="dropdown-menu">
            
            <li><option class="dropdown-item" name="occupation" >Private job</option></li>
            <li><option class="dropdown-item" name="occupation">Government Job</option></li>
            <li><option class="dropdown-item" name="occupation">Business</option></li>
          </ul></div>
        </div>
        
         
       </br>
        <div class="col-sm-5">    
        <div class="dropdown">
          <button type="submit" class="btn btn-primary dropdown-toggle form-group" name="family_type" data-bs-toggle="dropdown">
          Family Type:
          </button>
          <ul class="dropdown-menu">

            <li><option class="dropdown-item" name="family_type">Joint family</option></li>
            <li><option class="dropdown-item" name="family_type">Nuclear family</option></li>
            
          </ul>
        </div>
        
         </div>    
         </br>
          <div class="col-sm-5">
           <div class="dropdown">
          <button type="submit" class="btn btn-primary dropdown-toggle form-group" name="manglik" data-bs-toggle="dropdown">
          Manglik:
          </button>
          <ul class="dropdown-menu">

            <li><option class="dropdown-item" name="manglik">Yes</option></li>
            <li><option class="dropdown-item" name="manglik">No</option></li>
            
          </ul>        
        </div> 
        
      </div></br>
        <div class="row">
          <div class="col-sm-6"></div>.

                 <div class="form-group">       
            <input type="submit" class="btn-btn-success"  name="submit" value="submit">  
      </div>
      
      </div>
@endsection('content')

  
