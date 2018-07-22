<div class="sidebar nobottommargin col_last clearfix">
	<div class="sidebar-widgets-wrap">
		@if($cttour)
			<div class="widget clearfix">		
				<div class="tabs nobottommargin clearfix" id="sidebar-tabs">
					<ul class="tab-nav clearfix">
						<li><a href="#tabs-1">Tour liên quan</a></li>
					</ul>
					<div class="tab-container">
						<div class="tab-content clearfix" id="tabs-1">
							<div id="popular-post-list-sidebar">
								<?php $i = 0; ?>
								@foreach($tourlq as $tlq)
									@if($cttour->id == $tlq->id)
										@continue
									@endif
									<?php
										$i++;
										if($i > 6){
											break;
										}
									?>
									<div class="spost clearfix">
										<div class="entry-image">
											<a class="nobg"><img class="rounded-circle" src="upload/{{$tlq->hinhanh}}" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="{{route('chi-tiet',$tlq->id)}}">{{$tlq->tentour}}</a></h4>
											</div>
											<ul class="entry-meta">
												<li>{{$tlq->giatour}} vnd</li>
											</ul>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		@endif

		<div class="widget clearfix">
			<div class="tabs nobottommargin clearfix" id="sidebar-tabs">
				<ul class="tab-nav clearfix">
					<li><a href="#tabs-2">Tour moi</a></li>
				</ul>
				<div class="tab-container">
					<div class="tab-content clearfix" id="tabs-2">
						<div id="popular-post-list-sidebar">
							@foreach($tourmoi as $tm)
							<div class="spost clearfix">
								<div class="entry-image">
									<a class="nobg"><img class="rounded-circle" src="upload/{{$tm->hinhanh}}" alt=""></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{route('chi-tiet', $tm->id)}}">{{$tm->tentour}}</a></h4>
									</div>
									<ul class="entry-meta">
										<li>{{$tm->giatour}}</li>
									</ul>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>