<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.linkcss')
</head>

<body class="mt-0">

	<div class="main-wrapper">
		<div class="bg-img">
			<img src="/assets/img/bg/work-bg-03.png" alt="img" class="bgimg1">
			<img src="/assets/img/bg/work-bg-03.png" alt="img" class="bgimg2">
			<img src="/assets/img/bg/feature-bg-03.png" alt="img" class="bgimg3">
		</div>

		<div class="content">
			<div class="container">
				<div class="row">

					<!-- Booking -->
					<div class="col-md-12">

						<div class="login-back">
							<a href="{{ url()->previous() }}"><i class="text-dark feather-arrow-left"></i>&nbsp;&nbsp;<span class="ms-3 text-dark h4">Summary</span></a>
						</div>

						<div class="booking-service">
							<div class="row align-items-center">
								<div class="col-lg-8">
                                    <div class="service-book col-md-12">
                                        <div class="serv-profile">
                                            <span class="badge">{{ $cartArray[0]->category->name }}</span>
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                            <span class="badge">{{ $cartArray[0]->subCategory->name }}</span>
                                        </div>
                                    </div>

                                    @foreach($cartArray as $item)
									<div class="service-book col-md-6">
										<div class="service-book-img">
                                            @if($item->image)
											<img src="{{ asset('storage/uploads/products/' . $item->image) }}" alt="img">
                                            @else
                                            <img src="{{ asset('assets/img/services/service-01.jpg') }}" alt="img">
                                            @endif
										</div>
										<div class="serv-profile">
											<h2>{{ $item->title }}</h2>
                                            <p class="text-dark">Quantity x {{ $cartItemsArr[$item->id] }}</p>
											<p class="text-dark"><strong>₹ {{ $item->price }}</strong></p>
										</div>
									</div>
                                    @endforeach
								</div>

								<div class="col-lg-4">
									<div class="row align-items-center">
                                        <h4 class="my-4">Payment Summary</h4>
                                        <p class="text-dark">Item Total<strong style="float: right;">₹ {{ $total }}</strong></p>
                                        <p class="text-dark">Item Discount<strong style="float: right;">₹ 0</strong></p>
                                        <p class="text-dark">Taxes & Fee<strong style="float: right;">₹ 0</strong></p>
                                        <hr>
                                        <p class="text-dark">Total<strong style="float: right;">₹ {{ $total }}</strong></p>
                                        <div class="alert alert-success">
                                            <strong>You saved ₹{{ $totalSaving - $total }} on final bill</strong>
                                        </div>
									</div>
								</div>
							</div>
						</div>

                        <hr>

						<div class="row">
							<div class="col-lg-12">
								<div class="text-center">
									<a href="booking-payment.html" class="btn btn-primary"><i class="fa-solid fa-business-time"></i> Book Service Now</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Cursor -->
		<div class="mouse-cursor cursor-outer"></div>
		<div class="mouse-cursor cursor-inner"></div>
		<!-- /Cursor -->

	</div>

	@include('layouts.scripts')

</body>
</html>
