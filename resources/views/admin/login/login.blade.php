<!DOCTYPE html>
<html lang="en">



<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('assets/images/favicon-32x32.png')}}" type="image/png" />
	<!-- loader-->
	<link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />
	{{-- <script src="{{asset('assets/js/pace.min.js')}}"></script> --}}
	<!-- Bootstrap CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
	<title>Wedigr - Admin Panel</title>
</head>

<body class="bg-lock-screen">
	<!-- wrapper -->
	<div class="wrapper">
        @include ('admin.external.message')
		<div class="authentication-lock-screen d-flex align-items-center justify-content-center">
			<div class="card shadow-none bg-transparent">
				<div class="card-body p-md-5 text-center">
					<h2 class="text-white" id="current-time"></h2>
					{{-- <h2 class="text-white">{{ now()->setTimezone('Asia/Kolkata')->format('h:i A') }}</h2> --}}
					<h5 class="text-white">{{ now()->setTimezone('Asia/Kolkata')->format('l, F d, Y') }}</h5>
					<div class="">
						<img src="{{asset('assets/images/icons/user.png')}}" class="mt-5" width="120" alt="" />
					</div>
					<p class="mt-2 text-white">Wedigr Administrator</p>
                    <form action="{{route('admin.authenticate')}}" method="post">
                        @csrf
                        <div class="mb-3 mt-3">
                            <input type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{old('mobile')}}" placeholder="Enter Your Mobile Number" />
                            @error('mobile')
                            <p class="invalid-feedback">
                                {{($message)}}
                            </p>
						    @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" />
                            @error('password')
                            <p class="invalid-feedback">
                                {{($message)}}
                            </p>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-white">Login</button>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->

    <script>
        function updateCurrentTime() {
            // Get the current time
            var currentTime = new Date();

            // Format the time in AM/PM format
            var formattedTime = currentTime.toLocaleTimeString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });

            // Update the content of the element with id "current-time"
            document.getElementById('current-time').innerHTML =  formattedTime;
        }

        // Update the time initially
        updateCurrentTime();

        // Update the time every second
        setInterval(updateCurrentTime, 1000);
    </script>
</body>



</html>