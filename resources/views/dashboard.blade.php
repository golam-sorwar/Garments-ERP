@extends('home')

@section('dash')
  <div class="container-fluid dashboard-container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card card-stats mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h6 class="card-title text-uppercase mb-2 font-weight-bold text-muted">Usres</h6>
                <span class="h4 font-weight-bold mb-0">{{ $userinfo->count() }}</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                  <i class="fas fa-users"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 1%</span>
              <span class="text-nowrap">Since last month</span>
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card card-stats mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h6 class="card-title text-uppercase mb-2 font-weight-bold text-muted">Gate Entry</h6>
                <span class="h4 font-weight-bold mb-0">{{ $gateinfo->count() }}</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                  <i class="fas fa-torii-gate"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 1%</span>
              <span class="text-nowrap">Since last month</span>
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card card-stats mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h6 class="card-title text-uppercase mb-2 font-weight-bold text-muted">Yarn Store</h6>
                <span class="h4 font-weight-bold mb-0">{{ $yarninfo->count() }}</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                  <i class="fab fa-yarn"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 1%</span>
              <span class="text-nowrap">Since last month</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <div class="card card-stats mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h6 class="card-title text-uppercase mb-2 font-weight-bold text-muted">Gray Fabric Store</h6>
                <span class="h4 font-weight-bold mb-0">{{ $greyinfo->count() }}</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                  <i class="fas fa-store"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 1%</span>
              <span class="text-nowrap">Since last month</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card card-stats mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h6 class="card-title text-uppercase mb-2 font-weight-bold text-muted">Finish Fabric Store</h6>
                <span class="h4 font-weight-bold mb-0">{{ $finishinfo->count() }}</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                  <i class="fas fa-store-alt"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 1%</span>
              <span class="text-nowrap">Since last month</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card card-stats mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h6 class="card-title text-uppercase mb-2 font-weight-bold text-muted">Dyes and chemical Store</h6>
                <span class="h4 font-weight-bold mb-0">{{ $dyesinfo->count() }}</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                  <i class="far fa-object-group "></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 1%</span>
              <span class="text-nowrap">Since last month</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    @can ('isAdmin')
      <div class="card">
        <h4 class="card-header font-weight-bold"><i class="fas fa-file-alt"></i> Report</h4>
        <div class="card-body">
          @if (session()->has('Message'))
            <div class="alert alert-danger" role="alert">{{ session()->get('Message') }}</div>
          @endif
          {{-- <form action="{{ route('report.pdf') }}" method="post" target="_blank"> --}}
          <form action="{{ route('report.pdf') }}" method="post">
            {{ csrf_field() }}
            <div class="form-inline">
              <div class="form-group col-md-2">
                <label for="month">Select Month</label>
              </div>
              <select class="form-control col-md-3 {{ $errors->has('month') ? ' is-invalid' : '' }}" name="month" id="month">
                <option value="">
                  @if ($errors->has('month'))
                    <span class="invalid-feedback" role="alert">{{ $errors->first('month') }}</span>
                  @else
                    Choose...
                  @endif
                </option>
                <option value="01">January</option>
                <option value="02">February </option>
                <option value="03">March </option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September </option>
                <option value="10">October </option>
                <option value="11">November </option>
                <option value="12">December </option>
              </select>

              {{-- <div class="form-group col-md-2">
                <button type="submit" class="btn btn-outline-dark">Report Generate</button>
              </div> --}}
              <div class="form-group col-md-2">
                <button type="submit" class="btn btn-outline-success">Download</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    @endcan
  </div>

@endsection
