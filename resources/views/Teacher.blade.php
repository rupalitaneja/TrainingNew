
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="{{asset('css/style3.css')}}">
    <style>
        input#fname{
            background-repeat:no-repeat;
            background-position:6px;
            border:1px solid #DADADA;
            margin-top: 3px;
            margin-bottom: 20px;   
            padding-left:10px;
            width:280px;
            height:30px;
            font-size:14px;
            box-shadow:0 0 10px;
            -webkit-box-shadow:0 0 10px;
            /* For I.E */
            -moz-box-shadow:0 0 10px;
            /* For Mozilla Web Browser */
            border-radius:5px;
            -webkit-border-radius:5px;
            /* For I.E */
            -moz-border-radius:5px
            /* For Mozilla Web Browser */
            }
            .label{
                width:30%;
            }

        </style> 
@if($layout=='index')
<div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("Teacherlist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout=='create')
<div id="first">
  
<h5 class="card-title">Enter Teacher's Information</h5>
<form action="{{ url('/storeT') }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="new">
        <label>Teacher's id</label><br>
        <input id="fname" name="Tid" type="text" class="form-control"  placeholder="Enter unique id for Teacher">
        </div>
        <div  class="new">
        <label>Name</label><br>
        <input id="fname" name="name" type="text" class="form-control"  placeholder="Enter name">
        </div>
        <div class="new">
        <label>Email</label><br>
        <input id="fname" name="email" type="text" class="form-control"  placeholder="Enter email">
        </div>
        <div class="new">
        <label>Number</label><br>
        <input id="fname" name="number" type="text" class="form-control"  placeholder="Enter number">
        </div>
        <div class="new">
        <label>Designation</label><br>
        <input id="fname" name="designation" type="text" class="form-control"  placeholder="Enter designation">
        </div>
        <div class="new">
        <label>Speciality</label><br>
        <input id="fname" name="speciality" type="text" class="form-control"  placeholder="Enter speciality">
        </div>
    
    <input class="btnfamily" type="submit" class="btn btn-info" value="Submit">
    <input class="btnfamily2" type="reset" class="btn btn-warning" value="Reset"></form>
     </div>

@elseif($layout=='edit')
<div class="container-fluid mt-4">
  <div class="col">
         
         <section class="col-md-5">
<div class="card mb-3">
    <div class="card-body">

  
 <form action="{{url('/updateT/'.$teacher->Tid)}}" method="post" >  
  
 <input name="_method" type="hidden" value="PATCH">
           <div class="form-group">      
               <label for="Name">Name</label><br/><br/>  
               <input type="text" class="form-control" name="name" value={{$teacher->name}}><br/><br/>  
           </div>  
           <div class="form-group">      
               <label for="number">contact number</label><br/><br/>  
               <input type="text" class="form-control" name="number" value={{$teacher->number}}><br/><br/>  
           </div>  
           <div class="form-group">      
               <label for="designation">Designation</label><br/><br/>  
               <input type="text" class="form-control" name="designation" value={{$teacher->designation}}><br/><br/>  
           </div>  
           <div class="form-group">      
               <label for="speciality">Speciality</label><br/><br/>  
               <input type="text" class="form-control" name="speciality" value={{$teacher->speciality}}><br/><br/>  
           </div>  
          
 <br/>  
   
 <button type="submit" class="btn-btn" >Update</button>  
 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
 </form>  
   
   
 @endif
<footer></footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>