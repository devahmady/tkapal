<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
            <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Luxury Room</span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                            src="{{ asset('home') }}/img/about-1.jpg"
                            style="margin-top: 25%; visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                            src="{{ asset('home') }}/img/about-2.jpg"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"
                            src="{{ asset('home') }}/img/about-3.jpg"
                            style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                            src="{{ asset('home') }}/img/about-4.jpg"
                            style="visibility: visible; animation-delay: 0.7s; animation-name: zoomIn;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name">
                                    <label for="name"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" name="route_id" id="route_id" required>
                                        @foreach ($routes as $route)
                                            <option value="{{ $route->id }}">{{ $route->origin }}</option>
                                        @endforeach
                                    </select>
                                    <label for="route_id">Tujuan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" name="transportation_id" id="transportation_id"
                                        required>
                                        @foreach ($transportations as $transportation)
                                            <option value="{{ $transportation->id }}">{{ $transportation->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="select2">Pilih Kapal</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="booking_date" id="booking_date" required
                                        placeholder="Booking">
                                    <label for="booking_date">Booking</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Booking Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
