@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="innerContent">


	<div class="row">
		<div class="large-12 columns about-us">
			<div class="panel radius">
				<h1 class="welcome">Welcome to <br/>Remax 1st Class Realty</h1>
					<hr/>
					<p>We are a trustful Real Estate Company located in Skokie, IL. We offer a comprehensive service in real estate. We can help to buy, sell or manage residential property. We will also help to get the best mortgage conditions via our mortgage department as well as get all paper prepared by our staff attorneys. We have successful experience in short sales and always have a great investment opportunities. Our main price range is from 35k till 500k, though we also have experience and listing in luxury market.</p>
					<p>Our first line districts are Skokie, Morton Grove, Evanston, Niles, North Side Chicago, Ukrainian Village and neighboring areas.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<div class="orbit-container panel">
					<h4 class="selectedProperty">Our selected property</h4>
					<ul class="orbit-slides-container" data-orbit data-options="timer_speed:20000;">
						<li> <a href="{{URL::to('search/22')}}">
							<img src="{{url('comp/img/orbit/5.jpg')}}" alt="">
							<div class="orbit-caption">Glenview, IL 60025</div>
						</a>
						</li>
						<li> <a href="{{URL::to('search/1')}}">
							<img src="{{url('comp/img/orbit/1.jpg')}}" alt="">
							<div class="orbit-caption">Skokie, IL 60076   </div>
						</a>
						</li>
						<li>
						<a href="{{URL::to('search/16')}}">
							<img src="{{url('comp/img/orbit/4.jpg')}}" alt="">
							<div class="orbit-caption">Glenview, IL 60025</div>
						</a>
						</li>
						<li><a href="{{URL::to('search/4')}}">
							<img src="{{url('comp/img/orbit/2.jpg')}}" alt="">
							<div class="orbit-caption">Morton Grove, IL</div>
							</a>
						</li>
					</ul>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="large-12 columns">	
				<div class="panel radius">
					<h3>Why we are worth to work with:</h3>
					<hr/>
					<ul class="ulWorkWith">
						<li>
							<p>we offer one stop service for home purchase. We have long term partnerships with major banks and can negotiate the best possible deal. We can move you to your new home during one week with the lowest mortgage rate. Our clients always have all papers signed on time with all details covered.</p>
						</li>
						<li>
							<p>we have no hidden fees and as a Remax Representative, we are very flexible in commissions. We always prioritize the client interest and in some cases we work without commissions when they are obstacles to closing. Our main mission is client satisfaction and long term partnership.</p>
						</li>
						<li>
							<p>we offer a comprehensive service in real estate - we can help to change house, avoid foreclosure without any influence on your credit score.</p>
						</li>
						<li>
							<p>we also can sell your residential property in the shortest time as we have a wide network of real estate partnerships in the area and our commissions are never the problem. We have a great experience in pre-sell preparation when small investments could bring the highest return.</p>
						</li>
						<li>
							<p>we always have the best options for investment opportunities in the area and we also have management experience.</p>
						</li>
						<li>
							<p>in 2012 we sold more than 100 residential properties for middle-class families and 40 of them directly from banks.</p>
						</li>
					</ul>
				</div>
			</div>		
		</div>




		<div class="row">
			<div class="large-12 columns">

				<!-- =news start here -->

				<div class="section-container auto" data-section>
					<section>
						<h6 class="title" data-section-title><a class="newsHead" href="#panel1">NEWS FOR BUYERS</a></h6>
						<div class="content" data-section-content>
							<article >
								
								<a class="newsHeadHover" href="{{'news/'.$newsBuy->id;}}">
									<h5 class="newsHeadHover">{{$newsBuy->title}}</h5>
								</a>
								<p>{{$newsBuy->body}}</p>

								{{link_to('news/'.$newsBuy->id, 'Read more', array('class'=>'readMore'));}}
							</article>
						</div>
					</section>
					<section>
						<h6 class="title" data-section-title><a class="newsHead" href="#panel2">NEWS FOR SELLERS</a></h6>
						<div class="content" data-section-content>
							<article>
								

								<a class="newsHeadHover" href="{{'news/'.$newsSell->id;}}">
									<h5 class="newsHeadHover">{{$newsSell->title}}</h5>
								</a>
								<p>{{$newsSell->body}}</p>
								{{link_to('news/'.$newsSell->id, 'Read more', array('class'=>'readMore'));}}
							</article>
						</div>
					</section>
				</div>

			</div>
		</div>
	</div>
	@stop

