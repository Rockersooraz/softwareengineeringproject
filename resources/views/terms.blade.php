@extends('layout.frontend')
@section('secondary-navigation')
     @if(Auth::guard('merchant')->check()) 
         @include('layout.authenticated')  
      @else
          @include('layout.unauthenticated')
        @endif
@endsection
@section('main-navigation')
<div class="main-navigation">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="{{route('home.index')}}">
                                <img src="{{ asset('/images/WebsiteLogo'.'/'.$web->logo) }}"  alt="#">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <!--Main navigation list-->
                                <ul class="navbar-nav">
                                    <li class="nav-item active ">
                                        <a class="nav-link" href="{{route('home.index')}}" style="color:#F2F2F2;">Home</a>
                                        <!-- <ul class="child"> -->
                                            <!-- <li class="nav-item">
                                                <a href="index.html" class="nav-link">Home 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-2.html" class="nav-link">Home 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-3.html" class="nav-link">Home 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-4.html" class="nav-link">Home 4</a>
                                            </li> -->
                                        <!-- </ul> -->
                                    </li>
                                    <li class="nav-item has-child">
                                        <a class="nav-link" href="#" style="color:#F2F2F2;">Category</a>
                                        <!-- 1st level -->
                                        <ul class="child">
                                        @foreach($categories as $category)
                                            <li class="nav-item">
                                                <a href="{{route('categoryfilter',$category->id)}}" class="nav-link" value="{{$category->title}}"
                                           {{--@if($category->id == $Post->category_id)--}}
                                            {{--selected--}}
                                              {{--@endif--}} >{{$category->title}}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    </li>
                                
                                    <li class="nav-item">
                                        <a href="{{route('post.store')}}" class="btn btn-primary text-caps btn-rounded btn-framed" style="color:#F2F2F2;">Submit Post</a>
                                    </li>
                                </ul>
                                <!--Main navigation list-->
                            </div>
                            <!--end navbar-collapse-->
                        </nav>
                        <!--end navbar-->
                    </div>
                    <!--end container-->
                </div>
@endsection
@section('hero-form')
        
@endsection
@section('background')
<div class="background">
    <div class="background-image original-size" style="background-color:#FFCC66" >
        {{--<img src="{{asset('/assets/img/gradient-1.jpg')}}" alt="">--}}
    </div>
  <!--end background-image-->
</div>
@endsection
@section('items')
<section class="content">
            <section class="block">
                <div class="container">
                    <section>
                        <h2>Terms and Conditions </h2>
                        <p>
                                 
                        Welcome to synopticdiary.com. By using Synopticdiary through website or from any electronic devices (like but not limited to mobile phone application), you acknowledge, understand and agree to following Terms and conditions.
                       <br>
                       Synopticdiary may change or modify the Terms in the future and for any or no reason by posting revisions here. Your continued use of the Site constitutes your acceptance of the revised Terms. You should visit this page and review the Terms from time to time. 
                        <br><br>
                        ->Acceptance Through Use 
                        <br>
                        By posting or viewing a classified advertisement on the Site (an "Ad" or "Ads"), you agree to be bound by all of the terms, conditions and notices contained or referenced in these Terms. If you do not accept all of the Terms, you are not authorized to post or view any Ads and shall discontinue using this Site immediately. 
                      <br> 
                       ->Eligibility / Minimum Age
                       <br> 
                        Synopticdiary is not directed to, and is not authorized to post or view Ads, by anyone under the age of eighteen (18) and 
                        If you are using Synopticdiary on behalf of a legal entity, you shall be responsible to obtain necessary authority to post or retrieve any information on the Site and you agree to be accountable for that information. 
                        <br><br>
                        ->Understanding of Platform 
                       <br> 
                       You agree and understand that Synopticdiary is an internet classified platform that facilitates communication between users for the purpose of advertising and sharing information related to goods and/ or services. 
                       <br>
                       Synopticdiary do not endorse or promote any of the listings, or information posted by users. These users (including You) are third parties and are not related to Synopticdiary or its affiliates. You agree not to hold Synopticdiary responsible for information posted by these users or for their act in any circumstances. 
                      <br>
                      You further understand that Synopticdiary is not involved in transaction of any goods / services listed in the Site. You will be directly contacting users who have posted advertisement regarding their goods or services offering. 
                     <br>
                     If you are using information from Site, in order to communicate / sale / purchase any goods or services from other users, we strongly encourage you take necessary precaution to protect yourself.
                      <br><br>
                     ->User Submitted Content 
                     <br>
                     (1) you lawfully own or have rights including the copyright, to Your Content.
                     <br>
                     (2) none of the materials included in Your Content are unlawful, defamatory, libelous, obscene or pornographic, promotes racism or hatred based on age, gender, race, religion, caste, class.
                     <br>
                     (3) use of Your Content will not violate any legal rights (privacy, intellectual property, etc) of any third party
                     <br>
                     (4) you are solely responsible and accountable for Your Content
                     <br>
                     <br>
                     Moreover you agree not post or list any information: 
                     <br>
                     (1) that is related to the sale of any illegal, counterfeit, stolen goods and / or services.
                     <br>
                     (2) of goods / services of which you are not lawful owner or do not have authority to list for.
                     <br>
                     (3) containing virus, spam, pyramid schemes or any similar forms.
                     <br>
                     (4) related to goods / or services that is prohibited by laws & regulation of Federal Democratic Re of Nepal
                     <br>
                     (5) not allowed by Site's rules for posting Ads.
                     <br>
                     You hereby grant Synopticdiary a worldwide, royalty-free, perpetual, irrevocable, non- exclusive, transferable, sub-licensable right and license (the "License") to use, license, distribute, copy, reproduce, transmit, translate, ly display, ly perform, publish and prepare derivative works of Your Content in connection with the Site as well as on any of affiliates or partners websites, ations and mobile platform in any formats and through any media channels. We need these rights with respect to Your Content in order to host and display content. 
                     <br>
                     <br>
                     ->Violations by User 
                     <br>
                     Operator may monitor Your Content as it appears on the Site and may delete Your Content at any time and for any or no reason without your permission. 
                     <br>
                     You agree that in the event your listing, posting or your information violates any provision of these Terms or the Ad posting rules. we shall have the right to terminate and or suspend your membership of the Site and refuse to provide you or any person acting on your behalf, access to the Site. 
                     <br>
                     ->Community based Reporting 
                     <br>
                     You agree to inform Synopticdiary moderators if you come across any listing or posting that is unlawful, offensive or violates our Terms, Ad posting rules or infringes any intellectual property rights by clicking on 'Report Ad' link to enable us to keep the site working efficiently and in a safe manner. 
                      <br>
                      We reserve the right to take down any of such posting, listing or information and or limit or terminate our services and further take all reasonable technical and legal steps to prevent the misuse of the Site. 
                     <br>
                    ->Intellectual Property / Copyrights
                     <br>
                     The Site contains content which includes 
                     <br>
                     b) Synopticdiary’s information, 
                     <br>
                     c) and information from other users. 
                     <br>
                     You acknowledge that all content and materials available at the Site (other than Your Content) are owned by respective owner. You agree not to copy, modify, sell, rent or distribute content that is not owned by you. Such content is protected by Government of Nepal Copyright Laws. 
                     <br>
                     ->Site Usage / Your Responsibility 
                     <br>
                     Synopticdiary grants you a partial, non-transferable and revocable license to access and make personal use of this site. You may download, print or view individual pages of the Site for non-commercial use, provided you do not delete, change or otherwise modify any of the Content, including any copyright or trademark notices. 
                      <br>
                      You may not use the site for any commercial purpose, including but not limited to, sending unsolicited commercial email or making unsolicited commercial phone calls to users. 
                      <br>
                      Much of the information related to goods and /or services is provided by the respective users and may include errors or inaccuracies. This information provided is intended as only general guidelines and you shall make effort to verify this information. Synopticdiary do not guarantee the accuracy and disclaim liability for such inaccuracies related to product and service information. 
                      <br>
                      You are solely responsible for protecting and securing your password of Synopticdiary account and for restricting unauthorized access to your computer or electronic device. You are responsible for all activities that occur under your Synopticdiary account. In case you learn about unauthorized use of your account, you shall notify Synopticdiary to block account immediately. 
                     <br>
                     As a condition of your use of this Web site, you warrant that you will not use this Web site for any purpose that is unlawful or prohibited by Government of Nepal. 
                     <br><br>
                     ->Limitation of Liability  
                     <br>
                     The users providing product and services through advertisements are independent contractors and are NOT officers, employees, agents of Synopticdiary. Therefore, Synopticdiary is not liable for the errors, representation, breaches, acts, or carelessness of any such users for any personal injuries, damages, death or expenses resulting therefrom. 
                      
                      <br>
                      You agree not to hold Synopticdiary responsible or accountable for third party content, listing, or information and nor liable for any misuse, illegal activity as most postings or information are submitted by various users directly and Synopticdiary do not have any role in its creation. 
                      <br>
                      You further agree that Synopticdiary is not liable for any loss of money, goodwill, or reputation, or any special, indirect, or consequential damages arising out of your use of the site content or as a result of any sale, purchase of goods and services with other users of the site. 
                     
                     <br>
                     By visiting and using Synopticdiary you agree that the laws of Government of Nepal, without regard to principles of conflict of laws, will govern these Terms of Use and any dispute of any sort that might arise between you and Hamrobazar.com or its affiliates. 
                      <br><br>
                      ->Indemnification 
                      <br>
                      The User should agree to indemnify and hold Synopticdiary, its officers, subsidiaries, affiliates, successors, assigns, directors, agents, service providers, and employees, harmless from any claim or demand, including reasonable attorney fees and court costs, made by any third party due to or arising out of content submitted by the user, users use of the service, violation of the terms of use, breach by the user of any of the representations and warranties herein, or user's violation of any rights of another. 
                      <br><br>
                      ->Third Party Content and Services 
                       <br>
                       It is the user’s responsibility to take all protective measures to guard against viruses or other destructive elements they may encounter on these third party sites. Synopticdiary makes no warranty or representation regarding, and do not endorse any linked website or the information appearing thereon or any of the products or services described thereon. 
                     <br><br>
                     ->Delivery / Payments / Billing 
                     <br>
                     Synopticdiary does not deliver nor does accept payment from users for any product or services listed. Synopticdiary not involved in buying or selling activities nor does it act as agent or middleman of buyer/seller. 
                     <br>
                     All product/services are listed by Users (Sellers), who have posted information of their offerings. Sellers are themselves responsible to deliver, obtain payment and issue bill for their sales. Similarly, Users making purchases (Buyers) are self-responsible to verify goods / services before releasing any payments. 
                     <br>
                     Users (Buyer or Seller) should take necessary measures and obtain appropriate documents related to dealings as they would in traditional offline transactions. Any contractual obligation regarding payment, delivery, terms, conditions, warranties or representations associated are solely between Users (Buyer & Seller), and Synopticdiary is not part of such contract in any manner. 
                    <br>
                    
                      </p>
                    </section>
                   
                  
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
@endsection

@section('footer')
@include('layout.footer')
@endsection