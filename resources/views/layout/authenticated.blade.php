<div class="container">
    <ul class="left">
        <li>
             <span>
                <i class="fa fa-phone"></i>{{$web->phone}}
            </span>
        </li>
    </ul>
    <!--end left-->
    <ul class="right">   
        <li>
            <a href="{{route('merchant.dashboard')}}">
                <i class="fa fa-user"></i> {{$merchantname}}
            </a>
        </li>
    </ul>
    <!--end right-->
</div>