@extends('main')
@section('main-content')
@include('advisor-sidebar')




      <div class="content-wrapper">
           <div class="row">
            <div class="col-xs-12">
                <div class="box-body">
                   <div class="subContainer">
                        <img src="dist/img/logo.png" alt="Finsso Financial Services" title="Finsso Financial Services" />
                	</div>
                </div>
            </div>
        </div>
                                 
    
	    <div class="row">
            <div class="col-xs-12">
                <div class="box-body">
                  
                    
                    <div class="subContainer">
                      <div class="sectionContainer" style="font-size: 25px;margin: 20px 0px;font-weight: 600;">Manage</div>
                        <a href="{{route('view-lead')}}" class="btn btn-default btn-lg" style="margin-right:2px;width:200px;margin-bottom:10px;"><img src="dist/img/glyphicons/blog.png" style="margin: 10px;width: 40px;height: 40px;" /><br/> <span style="font-size:16px; font-weight: 600;color: #414242;">Lead </span></a>
                        <a href="{{route('view-renewal')}}" class="btn btn-default btn-lg" style="margin-right:2px;width:200px;margin-bottom:10px;"><img src="dist/img/glyphicons/blog.png" style="margin: 10px;width: 40px;height: 40px;" /><br/> <span style="font-size:16px; font-weight: 600;color: #414242;">Renewal </span></a>
                        <a href="change-password.php" class="btn btn-default btn-lg" style="margin-right:2px;width:200px;margin-bottom:10px;"><img src="dist/img/glyphicons/password.png" style="margin-bottom: 10px;" /><br/> <span style="font-size:16px; font-weight: 600;color: #414242;">Change Password</span></a>
                        <a href="logout.php" class="btn btn-default btn-lg" style="margin-right:2px;width:200px;margin-bottom:10px;"><img src="dist/img/glyphicons/signout.png" style="margin-bottom: 10px;" /><br/> <span style="font-size:16px; font-weight: 600;color: #414242;">Signout</span></a>
                      </div>
                      
                    
                </div>
            </div>
        </div>
  
</div>	
@endsection