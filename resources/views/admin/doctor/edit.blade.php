@extends('admin.layouts.master')

@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctor</h5>
                    <span>Add Doctor</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-10">

        @if (Session::has('message'))
             <div class="alert alert-success">
                 {{Session::get('message')}}
             </div>
            
        @endif


         <div class="card">
             <div class="card-header">
                 <h3>Add doctor</h3>
             </div>   
                 <div class="card-body">
                     <form class="forms-sample" action="{{route('doctor.update',[$user->id])}}" method="POST" enctype="multipart/form-data">@csrf 
                         @method('PUT')
                        <div class="row">
                             <div class="col-lg-6">
                                 <label for="">Full Name</label>
                                 <input type="text" name="name" value=" {{$user->name}}" class="form-control @error('name') is-invalid @enderror   " placeholder="doctor name">
                                   
                                 @error('name')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                @enderror

                             
                                </div>
                             <div class="col-lg-6">
                                <label for="">Email</label>
                                <input type="email" value=" {{ $user->email }}" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="email">
                                  
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror
                            
                            
                            
                            </div>
                         </div>

                         <div class="row">
                            <div class="col-lg-6">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror " placeholder="password">
                                 
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror
                            
                            
                            </div>
                            <div class="col-lg-6">
                               <label for="">Gender</label>
                               <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                <option value="">Select gender...</option>
                                  @foreach (['male','female'] as $gender )

                                     <option value="{{$gender}}" @if ($user->gender == $gender) selected 
                                         
                                     @endif>{{ $gender }}</option>
                                      
                                  @endforeach
                               </select>
                              
                               @error('gender')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                              @enderror


                           </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Education</label>
                                 <input type="text" value=" {{$user->education}}" name="education" class="form-control @error('education') is-invalid @enderror " placeholder="education">
                                 
                                 @error('education')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                           
                            </div>
                            <div class="col-lg-6">
                               <label for="">Address</label>
                               <input type="text" name="address" value=" {{ $user->address }}" class="form-control @error('address') is-invalid @enderror " placeholder="address">
                           
                               @error('address')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                               @enderror
                           
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Specialist</label>
                                <select name="department" class="form-control">

                                    @foreach (['Cardiologist','Family-Physician','Ophthalmologist','Neurologist'] as $department )

                                    <option value="{{$department}}" @if ($user->department == $department) selected 
                                        
                                    @endif>{{ $department }}</option>
                                     
                                 @endforeach


                                </select>
                            
                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            
                            </div>
                            <div class="col-lg-6">
                               <label for="">Phone number</label>
                               <input type="text" name="phone_number" value=" {{ $user->phone_number }}" class="form-control @error('phone_number') is-invalid @enderror" placeholder="address">
                               @error('phone_number')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                               @enderror
                          
                            </div>
                        </div>

                        <div class="row">

                            
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                    <input type="file"  name="image" class="form-control file-upload-info @error('image') is-invalid @enderror"  placeholder="Upload Image">
                                    
                                      
                                    <span class="input-group-append">
                                   
                                    </span>

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                </div>

                                <div class="col-md-6">
                                    <label>Role</label>
                                    <select name="role_id" class="form-control @error('role_id') is-invalid @enderror ">
                                        <option value="">Please select role..</option>

                                         @foreach (App\Models\Role::where('name', '!=', 'patient')->get() as $role )
                                             <option value="{{ $role->id }}" @if ($user->role_id == $role->id) selected
                                                 
                                             @endif> {{$role->name}} </option>
                                         @endforeach

                                    </select>

                                    @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        

                        <div class="form-group">
                            <label for="exampleTextarea1">About</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="exampleTextarea1" rows="4">
                               {{$user->description}}
                            </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>

                     </form>
                 </div>
             </div>
         </div>
    </div>

</div>




@endsection

