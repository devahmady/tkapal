<div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="bg-white shadow" style="padding: 35px;">
            <form action="{{ route('routes.search') }}" method="POST">
                @csrf
                <div class="row g-2">
                    <div class="col-md-2">
                        <input type="date" class="form-select" name="departure_time" id="departure_time">
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" name="origin">
                            <option selected>Pelabuhan Asal</option>
                            @foreach ($routes as $route)
                                <option value="{{ $route->origin }}">{{ $route->origin }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" name="destination">
                            <option selected>Pelabuhan Tujuan</option>
                            @foreach ($routes as $route)
                                <option value="{{ $route->destination }}">{{ $route->destination }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" name="jenis_pengguna">
                            <option selected>Jenis Pengguna</option>
                            @foreach ($routes as $route)
                                <option value="{{ $route->jasa->id }}">{{ $route->jasa->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" name="jenis_kapal">
                            <option selected>Jenis Kapal</option>
                            @foreach ($routes as $route)
                                @if ($route->transport)
                                    <option value="{{ $route->transport->id }}">{{ $route->transport->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100">Cari Tiket</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>