<!-- //LOCATION: remax/public
<!-- //<!DOCTYPE html>
  <!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>RE/MAX FIRST CLASS Realty</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Numans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
    {{HTML::style("comp/stylesheets/normalize.css" )}} 
    {{HTML::style("comp/stylesheets/screen.css" )}} 
    {{HTML::script("//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js")}} 

    {{HTML::script("comp/javascripts/vendor/custom.modernizr.js")}} 
    {{HTML::script("comp/javascripts/foundation.min.js")}} 
    {{HTML::script("comp/javascripts/script.js")}} 


  </head>
  <body>
    <!-- navPanel starts here -->
    
    <div class="accountPanelWrapper">
      <div class="row">

        <div class="large-7 columns small-12 columns residentialCommercialContent">
         <p class="realEstateRC">RESIDENTIAL, COMMERCIAL & INVESTMENT REAL ESTATE
         </p>

       </div>
       <div class="large-5 columns small-12 columns right accountPanel">
        <ul class="inline-list ulAccountPanel">

         @if(!Auth::check())
         <li class="liSignIn right">
          {{link_to('#', 'Sign In', array('data-reveal-id'=>'adminAuth'))}}
        </li>
        <li class="liCreateAccount right">
          <em>{{link_to('#', 'Create Your Free Account', array('data-reveal-id'=>'createAccount'))}}</em>
        </li>
        @else
        <li class="liSignIn right">
          <a href="{{URL::route('panel')}}">
            <img class="userImg"src="{{url('comp/img/user.png')}}" alt="name">

            <em>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</em></a>
          </li>
          <li class="liSignIn right">
            {{link_to_route('logout', 'Logout');}}

          </li>
          @endif
        </ul>
      </div>
    </div>

  </div>

  <div class="navPanel">
    <div class="row">
      <div class="large-12 columns noPadding">

        <nav class="top-bar">
          <ul class="title-area">
            <!-- Title Area -->
            <li class="name">
              <h1 class="companyName">
                {{link_to_route('home', 'REMAX FIRST CLASS');}}
              </h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out  "Menu" to just have icon alone -->

            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>
          <section class="top-bar-section">
            <ul class="right">
              <li>{{link_to_route('home', 'Home');}}</li>
              <li>{{link_to_route('about', 'About');}}</li>
              <li class="has-dropdown">{{link_to('#', 'Buying');}}

                <ul class="dropdown">
                  <li>{{link_to_route('the_benefits_of_home_ownership', 'The Benefits of Home Ownership');}}</li>
                  <li>{{link_to_route('the_importance_of_buyers_agent', 'The Importance of a Buyer\'s Agent');}}</li>
                  <li>{{link_to_route('deciding_where_to_live', 'Deciding Where to Live');}}</li>
                  <li>{{link_to_route('anatomy_of_a_home_purchase', 'Anatomy of a Home Purchase');}}</li>
                  <li>{{link_to_route('five_tips_to_narrow_your_online_home_search', '5 Tips to Narrow Your Online Home Search');}}</li>
                </ul>
              </li>
              <li class="has-dropdown">{{link_to('#', 'Selling');}}
                <ul class="dropdown">
                  <li>{{link_to_route('the_right_listing_agent', 'The Right Listing Agent');}}</li>
                  <li>{{link_to_route('how_an_agent_markets_your_home', 'How an Agent Markets Your Home');}}</li>
                  <li>{{link_to_route('pricing_your_home_to_sell', 'Pricing Your Home to Sell');}}</li>
                  <li>{{link_to_route('preparing_your_house_for_sale', 'Preparing Your House for Sale');}}</li>
                  <li>{{link_to_route('consider_a_home_inspection_when_selling', 'Consider a Home Inspection When Selling');}}</li>
                </ul>
                <li/>
                <li class="has-dropdown">{{link_to('#', 'Mortgage');}}
                  <ul class="dropdown">
                    <li>{{link_to_route('finding_the_right_mortgage_professional', 'Finding the Right Mortgage Professional');}}</li>
                    <li>{{link_to_route('getting_preapproved', 'Getting Preapproved');}}</li>
                    <li>{{link_to_route('how_much_can_you_afford', 'How Much Can you afford?');}}</li>
                    <li>{{link_to_route('down_payments_how_much_do_you_need', 'Down Payments: How Much Do You Need?');}}</li>
                    <li>{{link_to_route('mortgages_101_basic_loan_types', 'Mortgages 101: Basic Loan Types');}}</li>
                    <li>{{link_to_route('renovating_a_home', 'Renovating a Home? Consider a 203(k) Loan');}}</li>
                  </ul>
                  <li/>
                  <li class="has-dropdown">{{link_to('#', 'News');}}
                    <ul class="dropdown">
                      <li>{{link_to_route('real_estate_news', 'Real Estate News');}}</li>
                      <li>{{link_to_route('news_for_buyers', 'News for Buyers');}}</li>
                      <li>{{link_to_route('news_for_sellers', 'News for Sellers');}}</li>
                    </ul>
                    <li/>
                    <li>{{link_to_route('contact', 'Contact');}}</li> 
                  </ul>
                </section>
              </nav>
            </div>
          </div>
        </div>

        <!-- =logoWrapper -->
        <div class="logoWrapper">
         <div class="row">
          <div class="large-10 columns ">
            <div class="row">
              <div class="large-2 columns logoContent">
               <a href="{{URL::route('home')}}" title="Home Page">
                 <img src="{{url('comp/img/REMAX1Logo.png')}}" alt="Remax First Class Logo">
               </a> 
             </div><!-- =logoContent -->

             <div class="large-10 columns">
               <div class="row">
                 <div class="small-12 columns residentialCommercialContent">
                 </div>
               </div>
               <div class="row">
                 <div class="large-6 columns  sloganText">
                  <p class="sloganTop">YOU NEED ONLY ONE COMPANY </p> <p> FOR ALL YOUR REAL ESTATE NEEDS</p>
                </div>
                <div class="large-6 columns oneStopService">
                  <img class="left" src="{{url('comp/img/one_stop_service/One-Stop-Service-Text.png')}}" alt="RE/MAX FIRST CLASS One Stop Service">

                </div>

              </div>
            </div>
          </div>
        </div>

        <aside class="large-2 left columns logoDiv">
         <div class="row left">
          <div class="large-12 small-12 columns left connectWithContent">

            <!-- <span class="contactTextStyle">CONNECT WITH US:</span> -->

            <a target="_blank" class="has-tip-left" title="Our Facebook Page" href="https://www.facebook.com/pages/Remax-1st-CLASS/177448822432081"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/facebook.png')}}" alt="Skokie Remax First Class Facebook Icon"><a/>
              <a target="_blank" class="has-tip-left" title="Our Twitter Page" href="https://twitter.com/RemaxFirstClass"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/twitter.png')}}" alt="Skokie Remax First Class Twitter Profile">
                <a/>
                <a target="_blank" class="has-tip-left" title="Our Linkedin Page" href="http://www.linkedin.com/profile/view?id=271875691&trk=nav_responsive_tab_profile"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/linkedin.png')}}" alt="Skokie Remax First Class Linkedin Profile">
                  <a/>

                  <a target="_blank" class="has-tip-left" title="Our Google Plus Page" href="https://plus.google.com"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/google.png')}}" alt="Skokie Remax First Class Google Profile">
                    <a/>
                    <a target="_blank" class="has-tip-left" title="Our Yelp Page" href="http://www.yelp.com/biz/remax-first-class-skokie"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/yelp.png')}}" alt="Skokie Remax First Class Feed Profile">
                      <a/>
                      <a target="_blank" class="has-tip-left" title="Our Page" href="https://www.youtube.com/"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/you_tube.png')}}" alt="Skokie Remax First Class Youtube Profile"><a/>

                      </div>
                    </div>

                    <div class="row">
                     <div class="large-12 small-12 columns callUsContent">
                       <img class="left"  src="{{url('comp/img/phone40.png')}}" alt="phone icon">
                       <div class="callUs left has-tip-left" title="Call Our Agents for a Free Consultation">(847) 674-9797</div>
                     </div>
                   </div>
                   <div class="row right">
                     <div class="large-12 columns left iconMailHome">

                      <a href="{{ URL::route('home')}}" class="homeIcon has-tip-left" title="Home Page">
                        <img src="{{url('comp/img/icons/home_remax1.png')}}" alt="REMAX FIRST CLASS Home Icon">
                      </a> 
                      <!-- =mailIcon -->
                      <a href="#" class="mailIcon has-tip-left" title="Send Us Email" data-reveal-id="myModal"> 
                        <img src="{{url('comp/img/icons/mail_remax1.png')}}" alt="REMAX FIRST CLASS Mail Icon" ></a>
                      </div>
                    </div>
                  </aside>          
                </div>
              </div><!-- =logoWrapper ends here -->
              <!-- =header ends here -->


              <div id="mainContent">
               <div class="row">
                <div class="large-8 columns">
               <!--   @if(Session::has('message'))
                 {{Session::get('message')}}
                 @endif --> 
                 @yield('content')
               </div>

               <!--  =aside starts here-->
               <adide class="large-4 columns">
                 <div class="row">
                  <div class="large-12 columns listingSection">

                    <div class="section-container tabs" data-section="tabs">
                      <section>
                        <h5 class="title" data-section-title><a class="sectionWidth find" href="#panel1"> PROPERTY FOR SALE</a></h5>
                        <div class="content" data-section-content>


                          <!-- Buy / SELL -->



                          <div class="row">
                            <div class="large-12 columns">


                             {{Form::open(array('url' => 'search', 'method'=>'GET'))}}

                             <div class="row">
                               <div class="large-12 columns">
                                 {{Form::label('location', 'Location')}}
                                 {{Form::text('location',Input::get('location'), array('placeholder'=>'City and State, Address or Zip Code', 'class'=>'findInput'))}}
                               </div>
                             </div>

                             <div class="row">
                               <div class="large-12 columns">
                                 {{Form::label('from', 'Price Range')}}
                               </div>
                             </div>

                             <div class="row">
                               <div class="large-6 columns">
                                 {{Form::text('from', Input::get('from'), array('placeholder'=>'$ From', 'class'=>'findInput'))}}
                               </div>
                               <div class="large-6 columns">
                                 {{Form::text('to',  Input::get('to'), array('placeholder'=>'$ To', 'class'=>'findInput'))}}
                               </div>
                             </div>
                             <div class="row">
                               <div class="large-6 columns">
                                 {{Form::label('beds', 'Bedrooms')}}
                                 {{Form::text('beds', Input::get('beds'), array('placeholder'=>'#', 'class'=>'findinput'))}}
                               </div>
                               <div class="large-6 columns">
                                 {{Form::label('baths', 'Bathrooms')}}
                                 {{Form::text('baths', Input::get('baths'), array('placeholder'=>'#', 'class'=>'findinput'))}}
                               </div>

                             </div>
                             <div class="row">
                               <div class="large-4 columns">

                                 {{ Form::submit('Search', array('class'=>'button small secondary radius submitSearch'))}}
                                 <br/>
                               </div>
                             </div>

                             {{Form::close()}}


                           </div>
                         </div>


                         <div class="row">
                           <div class="large-12 columns showAllListings ">
                            {{link_to('show-all-listings', 'BROWSE ALL LISTINGS FOR SALE', array('class'=>'browseAllListings button radius expand '));}} 
                          </div>
                        </div>
                        <div class="row">
                         <div class="large-6 columns listingsAlertBox">
                           {{link_to('browse/1', 'SINGLE FAMILY', array('class'=>'alert-box secondary expand radius propertiesAllert'));}}
                         </div>

                         <div class="large-6 columns listingsAlertBox">
                           {{link_to('browse/4', 'MULTI-FAMILY', array('class'=>'alert-box secondary expand radius propertiesAllert'));}}
                         </div>
                       </div>

                       <div class="row">
                         <div class="large-6 columns listingsAlertBox">
                           {{link_to('browse/3', 'CONDO', array('class'=>'alert-box secondary expand radius propertiesAllert'));}}
                         </div>

                         <div class="large-6 columns listingsAlertBox">
                           {{link_to('browse/2', 'VACANT LAND', array('class'=>'alert-box secondary expand radius propertiesAllert'));}}
                         </div>
                       </div>

                     </div>
                   </section>   <!-- =find your home section ends here -->
                   <!-- Buy / SELL -->

                   @if(isset($rentals))
                   <section class='active'>
                    @else
                    <section>
                      @endif

                      <h5 class="title" data-section-title><a class="sectionWidth find" href="#panel2">PROPERTY FOR RENT</a></h5>
                      <div class="content" data-section-content>
                        <div class="row">
                          <div class="large-12 columns">


                           {{Form::open(array('url' => 'rent', 'method'=>'GET'))}}

                           <div class="row">
                             <div class="large-12 columns">
                               {{Form::label('location_r', 'Location')}}
                               {{Form::text('location_r',Input::get('location_r'), array('placeholder'=>'City and State, Address or Zip Code', 'class'=>'findInput'))}}
                             </div>
                           </div>

                           <div class="row">
                             <div class="large-12 columns">
                               {{Form::label('from_r', 'Price Range')}}
                             </div>
                           </div>

                           <div class="row">
                             <div class="large-6 columns">
                               {{Form::text('from_r', Input::get('from_r'), array('placeholder'=>'$ From', 'class'=>'findInput'))}}
                             </div>
                             <div class="large-6 columns">
                               {{Form::text('to_r',  Input::get('to_r'), array('placeholder'=>'$ To', 'class'=>'findInput'))}}
                             </div>
                           </div>
                           <div class="row">
                             <div class="large-6 columns">
                               {{Form::label('beds_r', 'Bedrooms')}}
                               {{Form::text('beds_r', Input::get('beds_r'), array('placeholder'=>'#', 'class'=>'findinput'))}}
                             </div>
                             <div class="large-6 columns">
                               {{Form::label('baths_r', 'Bathrooms')}}
                               {{Form::text('baths_r', Input::get('baths'), array('placeholder'=>'#', 'class'=>'findinput'))}}
                             </div>

                           </div>
                           <div class="row">
                             <div class="large-4 columns">

                               {{ Form::submit('Search', array('class'=>'button small secondary radius submitSearch'))}}
                               <br/>
                             </div>
                           </div>

                           {{Form::close()}}


                         </div>
                       </div>
                       <!-- Buy / SELL -->

                       <div class="row">
                         <div class="large-12 columns showAllListings">
                          {{link_to('all-rent-listings', 'BROWSE ALL LISTINGS FOR RENT', array('class'=>'browseAllListings button radius expand '));}} 
                        </div>
                      </div>
                      <div class="row">
                       <div class="large-6 columns">
                         {{link_to('rent-apartments', 'APARTMENTS', array('class'=>'alert-box secondary expand radius propertiesAllert'));}}
                       </div>

                       <div class="large-6 columns">
                         {{link_to('rent-houses', 'HOUSES', array('class'=>'alert-box secondary expand radius propertiesAllert'));}}
                       </div>
                     </div>

                   </div>                        
                 </section>

               </div>

             </div><!-- aside  large-12 columns panel --> 
           </div>

           <div class="row">
             <div class="large-12 columns panel newListings"> 
               <div>
                <h4> <a class="newsHead" href="#">NEW LISTINGS FOR SALE</a> </h4>
              </div>
              <hr/>
              <ul class="large-block-grid-3 small-block-grid-2 ulagents">
                <li class="liNewListings"><a class="th radius" href="{{URL::to('search/7')}}"><img class="imgNewListings"src="{{url('comp/img/thumbs/7/1.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
                <li class="liNewListings"><a class="th radius" href="{{URL::to('search/15')}}"><img class="imgNewListings"src="{{url('comp/img/thumbs/15/1.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
                <li class="liNewListings"><a class="th radius" href="{{URL::to('search/14')}}"><img class="imgNewListings"src="{{url('comp/img/thumbs/14/1s.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
                <li class="liNewListings"><a class="th radius" href="{{URL::to('search/19')}}"><img class="imgNewListings"src="{{url('comp/img/thumbs/19/1.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
                <li class="liNewListings"><a class="th radius" href="{{URL::to('search/5')}}"><img class="imgNewListings"src="{{url('comp/img/thumbs/5/1.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
                <li class="liNewListings"><a class="th radius" href="{{URL::to('search/10')}}"><img class="imgNewListings"src="{{url('comp/img/thumbs/10/1.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
              </ul>
            </div>
          </div>

          @if(isset($agents)) 
          <div class="row">
           <div class="large-12 columns panel ourAgents">
             <div>
               <h4 class="newsHead">
                 <a class="newsHead"href="">OUR AGENTS
                 </a>
               </h4>
             </div>
             <hr/>

             <ul class="large-block-grid-3  small-block-grid-2 ulagents">
              @foreach($agents as $agent)
              <li  class="liAgents">
                <a class="th radius" data-reveal-id="{{$agent['id']}}" href="#">
                  <img src="{{url('comp/img/agents/'.$agent['id'].'.jpg')}}" alt="RE/MAX FIRST CLASS agent profile">
                  <a/>

                  <div class="row marginPadding">
                   <div class="large-12 columns marginPadding">
                     <a class="agentLink" data-reveal-id="{{$agent['id']}}" href="#">
                      {{$agent['firstname']}}
                      {{$agent['lastname']}}
                    </a>
                  </div>
                </div>

              </li> 
              @endforeach

            </ul>

            <div class="row">
             <div class="large-12 columns showAllListings allAgents"> 
              {{link_to('all-agents', 'SEE ALL OUR AGENTS', array('class'=>'browseAllListings button radius expand '));}}

            </div>
          </div>
        </div>
      </div>
      @endif
    </aside>
    <!-- =adide ands here -->

  </div>
</div>     <!-- /* =mainContent ends here */ -->


<!-- /* =footer starts here */ -->

<footer>
  <div class="row">
    <div class="large-4 columns">
      <div class="row">
        <div class="large-12 columns">
          <a class="th has-tip-left logoFooterPadding" title="Multiple Listing Service" href="#">
            <img src="{{url('comp/img/mls.png')}}" alt="Multiple Listing Service">
          </a>
          <a class="th has-tip-left logoFooterPadding" title="Coming Soon RE/MAX 1ST CLASS COMMERCIAL" href="#">
            <img src="{{url('comp/img/remax-commercial-logo.png')}}" alt="RE/MAX 1ST CLASS COMMERCIAL">
          </a>
          <a target="_blank" class="th has-tip-left logoFooterPadding"  title="Visit Our Remax Short Sale Chicago Website"  href="http://www.shortsalechicago.us/Short-Sale-Chicago">
            <img src="{{url('comp/img/Chicago-Short-Sale-Logo.png')}}" alt="Chicago Short Sale">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns logoRemaxFooter">
          <a href="{{ URL::route('home')}}">
            <img src="{{url('comp/img/logo-footer.png')}}" alt="Logo RE/MAX FIRST CLASS">
            <a/>
          </div>
        </div>
      </div>
      <div class="large-4 columns">

        <section class="large-6 small-6 columns social">
          <ul class="prop no-bullet">
            {{link_to('show-all-listings', 'PROPERTIES FOR SALE', array('class'=>'propertiesFooter'));}} 
            <hr/>
            <li class="locality properties">{{link_to('browse/1', 'SINGLE FAMILY');}}</li>
            <li class="locality properties">{{link_to('browse/4', 'MULTI-FAMILY');}}</li>
            <li class="locality properties">{{link_to('browse/3', 'CONDO');}}</li>
            <li class="locality properties">{{link_to('browse/2', 'VACANT LAND');}}</li>
          </ul>
        </section>
        <section class="large-6 small-6 columns propRent">
          <ul class="prop no-bullet">
            {{link_to('all-rent-listings', 'PROPERTIES FOR RENT', array('class'=>'propertiesFooter'));}} 
            <hr/>
            <li class="locality properties">{{link_to('rent-apartments', 'APARTMENTS');}}</li>
            <li class="locality properties">{{link_to('rent-houses', 'HOUSES');}}</li>
          </ul>
        </section>

      </div>

      <div class="large-4 columns">
        <div class="large-6 small-6 columns">
          <ul class="vcard">
            <span class="connectFooter">CONTACT INFORMATION:</span>
            <hr/>
            <li class="locality"> PHONE: (847) 674-9797</li>
            <li class="locality"> FAX: (847) 674-0411</li>
            <li class="street-address">4023 W. Church St.</li>
            <li class="locality">Skokie, IL 60076 </li>
            <li><span class="state">IL</span> <span class="zip">60076</span></li>
            <li class="email" data-reveal-id="myModal">{{link_to('#', 'remax1stclass@gmail.com');}}</li>
          </ul>
        </div>
        <section class="large-6 small-6 columns social right">
          <span class="contactFooter">CONNECT WITH US:</span>
          <hr/>
          <ul class="small-block-grid-3 ulFooterSocial">
            <li class="liFooterConnect"><a target="_blank" class="has-tip-left" title="Our Facebook Page" href="https://www.facebook.com/pages/Remax-1st-CLASS/177448822432081"><img src="{{url('comp/img/social_footer/facebook.png')}}" alt="RE/MAX FIRST CLASS Facebook Profile"><a/></li>
            <li class="liFooterConnect"><a target="_blank" class="has-tip-left" title="Our Twitter Page" href="https://twitter.com/RemaxFirstClass"><img src="{{url('comp/img/social_footer/twitter.png')}}" alt="Remax First Class Twitter Profile"><a/></li>
            <li class="liFooterConnectRight"><a target="_blank" class="has-tip-left" title="Our Linkedin Page" href="http://www.linkedin.com/profile/view?id=271875691&trk=nav_responsive_tab_profile"><img src="{{url('comp/img/social_footer/linkedin.png')}}" alt="Remax First Class Linkedin Profile"><a/></li>
            <li class="liFooterConnect"><a target="_blank" class="has-tip-left" title="Our Google Plus Page" href="#"><img src="{{url('comp/img/social_footer/google.png')}}" alt="Remax First Class Google Profile"><a/></li>
            <li class="liFooterConnect"><a target="_blank" class="has-tip-left" title="Our Yelp Page" href="http://www.yelp.com/biz/remax-first-class-skokie"><img src="{{url('comp/img/social_footer/yelp.png')}}" alt="Remax First Class Feed Profile"><a/></li>
            <li class="liFooterConnectRight"><a target="_blank" class="has-tip-left" title="Our Page" href="https://www.youtube.com/"><img src="{{url('comp/img/social_footer/you_tube.png')}}" alt="Remax First Class Youtube Profile"><a/></li>
          </ul>
        </section>
      </div>
    </div>
  </footer>

  <!-- /* =copyright starts here */ -->

  <div class="copyright">
    <div class="row">
      <div class="large-4 large-centered columns copy">
        <p>© 2013 RE/MAX FIRST CLASS</p> 
      </div>

      <!-- /* =copyright ends here */ -->
<!-- </div>
</div> -->


<!-- /* My slideDown mail form starts here */
--> 

<div id="myModal" class="reveal-modal small myModal2 panel">
  <div class="row">
    <div class="large-12 columns profileContent">
      <div class="navPanel">
        <nav class="top-bar min">
          <div class="large-2 columns">

            <a class="logoS" href="{{URL::route('home')}}" title="Home Page">
             <img src="{{url('comp/img/REMAX1LogoS.png')}}" alt="RE/MAX FIRST CLASS Logo">
           </a> 
         </div>

         <div class="large-10 columns"> <ul class="title-area right">
          <!-- Title Area -->
          <li class="name">
            <h1>
              {{link_to_route('home', 'REMAX FIRST CLASS');}}
            </h1>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <h3 class="subheader contactModal">Contact Us</h3>
  {{Form::open(array('url' => 'sendmail'))}}
  {{Form::label('email', 'Your E-mail')}}
  {{Form::text('email', '', array('placeholder'=>'@', 'class'=>'txt'))}}
  {{Form::label('subject', 'Subject')}}
  {{Form::text('subject', '', array('placeholder'=>'Your subject', 'class'=>'className'))}}

  {{Form::label('message', 'Enter a Message')}}
  {{Form::textarea('message', '', array('placeholder'=>'', 'class'=>'txtarea'))}}
  {{ Form::submit('Send', array('class'=>'button secondary small radius'))}}


  {{Form::close()}}
</div>
</div>
<a class="close-reveal-modal">&#215;</a>
</div>
<!-- =myModal ends here -->


<!--
/* insert data-reveal-id to link with the same id */

<a href="#" class="mailIcon has-tip-left" title="Send Us Email" data-reveal-id="myModal"> <img src="{{url('comp/img/mail_remax.png')}}" alt="Remax First Class Mail Icon" ></a>
-->



<!-- /* My slideDown Create account Form Starts Here */ -->


<div id="createAccount" class="reveal-modal small createAccount panel">
  <div class="row">
    <div class="large-12 columns profileContent">
      <div class="navPanel">
        <nav class="top-bar min">
          <div class="large-2 columns">

            <a class="logoS" href="{{URL::route('home')}}" title="Home Page">
             <img src="{{url('comp/img/REMAX1LogoS.png')}}" alt="Remax First Class Logo">
           </a> 
         </div>

         <div class="large-10 columns"> <ul class="title-area right">
          <!-- Title Area -->
          <li class="name">
            <h1>
              {{link_to_route('home', 'REMAX FIRST CLASS');}}
            </h1>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- =create an account panel ends here -->

  <!-- =create an account form starts here -->
  {{Form::open(array('url' => 'sign-up'))}}
  <div class="row">

    <div class="large-12 columns createAccount">  
      <h3 class="subheader account">Create Your Account</h3>

      <div class="row">
        <div class="large-6 columns">
          {{Form::label('first_name', 'First Name')}}
          {{Form::text('first_name', Input::old('first_name'), array('placeholder'=>'Your Name', 'class'=>'className'))}}
        </div>

        <div class="large-6 columns">{{Form::label('last_name', 'Last Name')}}
          {{Form::text('last_name', Input::old('last_name'), array('placeholder'=>'Your last name', 'class'=>'className'))}}
        </div>
      </div>


      <div class="row">
        <div class="large-6 columns">
          {{Form::label('email', 'Email Address')}}
          <div class="row collapse">
            <div class="small-2 columns">
              <span class="prefix">@</span>
            </div>
            <div class="small-10 columns">
              {{Form::email('email', Input::old('email'), array('placeholder'=>'Your email', 'class'=>'emailCreate'))}}
            </div>
          </div>
        </div>

        <div class="large-6 columns">
          {{Form::label('phone', 'Phone (Optional)')}}
          {{Form::text('phone', Input::old('phone'), array('placeholder'=>'(***)***-****', 'class'=>'className'))}}
        </div>
      </div>      

      <div class="row">
        <div class="large-6 columns">
          {{Form::label('password', 'Password')}}
          {{Form::password('password', '', array('class'=>'className'))}}
        </div>
        <div class="large-6 columns">
          {{Form::label('password_confirmation', 'Confirm Password')}}
          {{Form::password('password_confirmation', '', array('class'=>'passwordCreate'))}}
        </div>
      </div>      

      <div class="row">
        <div class="small-2 columns">
          {{ Form::submit('Create Your Free Account', array('class'=>'button tiny radius'))}}
        </div>
      </div>
    </div>


    {{Form::close()}}
  </div>
</div>
</div>
<a class="close-reveal-modal">&#215;</a>
</div>

<!-- =create an account form ends here -->

<!--
/* insert data-reveal-id to your button with the same id */
                   <input type="submit" class="button tiny right loginButton" data-reveal-id="adminAuth" value="LOGIN">
                 -->

                 <!-- /* My slideDown Authentification Form Starts Here */ -->


                 <div id="adminAuth" class="reveal-modal small adminAuth2 createAccount panel">
                  <div class="row">
                    <div class="large-12 columns profileContent">
                      {{Form::open(array('url'=>'login'))}} 
                      <div class="navPanel">
                        <nav class="top-bar min">
                          <div class="large-2 columns">

                            <a class="logoS" href="{{URL::route('home')}}" title="Home Page">
                             <img src="{{url('comp/img/REMAX1LogoS.png')}}" alt="RE/MAX FIRST CLASS Logo">
                           </a> 
                         </div>

                         <div class="large-10 columns"> <ul class="title-area right">
                          <!-- Title Area -->
                          <li class="name">
                            <h1>
                              {{link_to_route('home', 'REMAX FIRST CLASS');}}
                            </h1>
                          </li>
                        </ul>
                      </div>
                    </nav>
                  </div>
                  
                  <div class="row"> 
                   <div class="large-12 columns signInFormWrapper">
                     <h3 class="subheader account">Sign In to Your Account</h3>
                     <div class="row">
                      <div class="large-6 columns">
                        {{Form::label('email', 'Your Email')}}
                        {{ Form::email('email', Input::old('email'), $attributes = array())}}
                      </div>
                      <div class="large-6 columns">
                        {{Form::label('password', 'Your Password')}}
                        {{ Form::password('password', $value = null, $attributes = array())}}
                      </div>
                    </div>
                    {{ Form::submit('Login', $attributes = array('class'=>'button  tiny radius'))}}
                    {{Form::close()}} 
                  </div>
                </div>
              </div>
            </div>
            <a class="close-reveal-modal">&#215;</a>

          </div>
<!--
/* insert data-reveal-id to your button with the same id */
                   <input type="submit" class="button tiny right loginButton" data-reveal-id="adminAuth" value="LOGIN">
                 -->
                 <!-- =agentInfo starts here -->
                 @if(isset($agents)) 

                 @foreach($agents as $agent)

                 <div id="{{$agent['id']}}" class="reveal-modal small adminAuth2 createAccount panel">
                   {{Form::open(array('url' => '#'))}}
                   <div class="row">
                    <div class="large-12 columns profileContent">
                      <div class="navPanel">
                        <nav class="top-bar min">
                          <div class="large-2 columns">

                            <a class="logoS" href="{{URL::route('home')}}" title="Home Page">
                             <img src="{{url('comp/img/REMAX1LogoS.png')}}" alt="RE/MAX FIRST CLASS Logo">
                           </a> 
                         </div>

                         <div class="large-10 columns"> <ul class="title-area right">
                          <!-- Title Area -->
                          <li class="name">
                            <h1>
                              {{link_to_route('home', 'REMAX FIRST CLASS');}}
                            </h1>
                          </li>
                        </ul>
                      </div>
                    </nav>
                  </div>



                  <div class="row">
                   <div class="large-4 columns">
                    <div class="row">
                     <div class="large-12 columns left">
                      <br/>
                      <ul class="ulAgentName">
                       <h3 class="subheader agentName">{{$agent['firstname']}} {{$agent['lastname']}}</h3>
                       <a class="label has-tip-left specialist" title="Accredited Buyers Representative">ABR</a> 
                       <a class="label has-tip-left specialist" title="Certified Residential Specialist">CRS</a>
                     </ul>
                   </div>                           
                 </div>

                 <div class="row">
                   <div class="large-12 columns">
                     <div class="th agentPic"><img src="{{url('comp/img/agentsL/'. $agent['id'].'.jpg')}}" alt="{{$agent['firstname']}} {{$agent['lastname']}}, RE/MAX FIRST CLASS Agent">
                     </div>
                   </div>
                 </div>  

                 <div class="row"> 
                   <div class="large-12 columns agentPropSale"> 
                     <em>{{link_to('agent/'.$agent['id'], 'AGENT LISTINGS FOR SALE', array('class'=>'agentP'));}}</em>

                   </div>
                 </div> 

                 <div class="row"> 
                  <div class="large-12 columns agentPropRent">
                    <em>{{link_to('agent-rentals/'.$agent['id'], 'AGENT LISTINGS FOR RENT', array('class'=>'agentP'));}}</em>
                  </div> 

                </div>
              </div>

              <div class="large-8 columns left">
                <div class="panel info">
                 <br/>
                 <ul class="vcard innerInfo">
                   <h5>Associate:</h5>
                   <li class="subheader">Year Joined: {{$agent['yearjoined']}}</li>
                   <li class="subheader">Year Licensed: {{$agent['yearlicenced']}}</li>
                   <hr/>
                   <h6>Contact Information:</h6>
                   <li class="subheader">Main: (847) 674-9797</li>
                   <li class="subheader">Fax: (847) 674-0411</li>
                   <li class="subheader">Direct:  {{$agent['directphone']}} </li>
                   <li class="subheader">Languages: {{$agent['languages']}} </li>
                 </ul>
               </div>
             </div>
           </div>



           <div class="row">
            <div class="large-12 columns agentInfoContent">
              <dl>                              
                <dt><h5>Specialties</h5></dt>
                <hr/>
                <dd class="specialties"><p>{{$agent['specialties']}}</p>
                </dd>  
                <dt><h5>Service Area Information</h5></dt>
                <hr/>
                <dd class="specialties">
                  <h6>Office Area:</h6>
                  <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
                  <h6>Agent Area:</h6>
                  <p>{{$agent['agentarea']}}</p>  
                </dd>
              </div>
            </div>

          </div>
        </div>
        <a class="close-reveal-modal">&#215;</a>
      </div>
      @endforeach
      @endif

      <!-- =agentInfo ends here -->

      <script>
        document.write('<script src=' +
          ('_proto_' in {} ? 'comp/javascripts/vendor/zepto' : 'comp/javascripts/vendor/jquery') +
          '.js><\/script>')
      </script>

      {{HTML::script("comp/javascripts/foundation/foundation.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.alerts.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.clearing.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.cookie.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.dropdown.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.forms.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.interchange.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.joyride.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.magellan.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.orbit.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.placeholder.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.reveal.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.section.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.tooltips.js")}}

      {{HTML::script("comp/javascripts/foundation/foundation.topbar.js")}}


      <script>
        $(document).foundation();
      </script>
      @yield('agent_thumb')
    </body>
    </html>
