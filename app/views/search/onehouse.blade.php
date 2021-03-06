@extends('layouts.master')

@section('set')
{{$imCounter = $house->images()->first()->maxid}}
@stop
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row callAgentRent">
			<div class="large-10 columns left">
				@if($house->agent)
				<ul class="vcard oneRentVcard">
					<li>					
						<div class="locality alert-box secondary radius callAgent">
							<a class="th radius aCallAgent" data-reveal-id="{{$house->agent['id']}}" href="#">Listing Agent:
								<span class="agentNameList" >{{$house->agent['firstname'] . ' '. $house->agent['lastname']}}
								</span >
							</a>
							<br/>
							<span class="agentPhoneList">
								Direct Phone: 
								<strong>
									{{$house->agent['directphone']}}
								</strong>
							</span>
						</div>
					</li>
				</ul>
				@endif

			</div> 
			
			<div class="large-2 columns">

				<a class="button secondary radius priceStyle right">${{number_format($house->price)}}
				</a>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="large-12 columns">
				<h5>{{$house->address}}</h5>
				&nbsp &nbsp
				
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="large-12 columns">
				<strong>Description:</strong>
				<br/><br/>
				<p>{{ucfirst(strtolower($house->details))}}</p>

				<strong>MLS: #</strong> {{$house->listing}}<br/><br/>

				<strong>Bedrooms:</strong> {{$house->bedrooms}} <br/><br/>

				<strong>Bathrooms:</strong> {{$house->bathrooms}} <br/><br/>

				<strong>Size:</strong> {{$house->size}} <br/><br/>

				<strong>Year:</strong> {{$house->year}} <br/><br/>

				<div class="row">
					<div class="large-12 large-centered columns receivePriceChangeButtonWrapper">
						@if(Auth::check())
						{{Form::open(array('url' => 'house-alert/'.$house->id, 'method'=>'POST'))}}
						{{ Form::submit('Save this Property to My Account', array('class'=>'button tiny secondary radius addPropertyButton'))}}
						{{Form::close()}}
						@else
						<div class="label radius pleaseSignIn">Please Sign-in to Receive Alerts for this Property
						</div>
						@endif
					</div>
				</div>

				@if($imCounter)
				<ul class="clearing-thumbs" data-clearing>
					@for ($i =1; $i <= $imCounter; $i++)
					<li><a class="th" href="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}">
						<img width="100px" height="50px" src="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}"></a></li>
						@endfor
					</ul>	
					@endif
				</div>
			</div>

		</div>
	</div>
	@stop


