<div class="container">
     <ul class="left">
         <li>
             <span>
                <i class="fa fa-phone"></i> {{$web->phone}}
            </span>
          </li>
  </ul>
    <!--end left-->
     <ul class="right">
                <li>
                    <a href="{{route('merchant.login')}}">
                       <i class="fa fa-sign-in"></i>Sign In
                    </a>
                </li>
                <li>
                  <a href="{{route('merchant.register')}}">
                     <i class="fa fa-pencil-square-o"></i>Register
                 </a>
                 </li>           
             </ul>
     <!--end right-->
</div>