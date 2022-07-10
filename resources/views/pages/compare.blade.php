@extends('layouts.main')
  
@section('pageTitle')
    <div class="row">
      <div class="col-md-4 col-sm-12 mb-4">
        <div class="col card shadow bg-body rounded p-0">
          <div class="card-header text-white fs-5" style="background-color: #0d6efd">PREFERENCE</div>
          <div class="card-body">

            <form method="get" action="/compare">
              <div class="row">
                <div class="col-8">
                  <h5 class="card-title">Filtering</h5>
                </div>
                <div class="col-4">
                  <h5 class="card-title">Weighting</h5>
                  <label>Price</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[0] }}" name="priceWeight" placeholder="Weight" class="form-control" required>
                  <label>Core</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[1] }}" name="coreWeight" placeholder="Weight" class="form-control" required>
                  <label>Thread</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[2] }}" name="threadWeight" placeholder="Weight" class="form-control" required>
                  <label>Boost Clock</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[3] }}" name="boostClockWeight" placeholder="Weight" class="form-control" required>
                  <label>Cache</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[4] }}" name="cacheWeight" placeholder="Weight" class="form-control" required>
                  <label>TDP</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[5] }}" name="tdpWeight" placeholder="Weight" class="form-control" required>
                </div>
              </div>

              <div class="d-flex justify-content-end mt-3">
                <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane text-white mr-2"></i>
                  FIND</button>
              </div>
            </form>

          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-12 d-flex align-items-stretch mb-4">
        <div class="col card shadow bg-body rounded p-0">
          <div class="card-header text-white fs-5" style="background-color: #0d6efd">PROCESSOR</div>
          <div class="card-body">
            <table class="table table-responsive-lg my-0">
              <thead>
                <tr>
                  <th class="text-center"><p class="title px-0 py-0 mx-0 my-0">Rank</p></th>
                  <th class="text-center"><p class="title px-0 py-0 mx-0 my-0">Score</p></th>
                  <th class="text-left"><p class="title px-0 py-0 mx-0 my-0">Processor</p></th>
                  <th class="text-center"><p class="title px-0 py-0 mx-0 my-0">Price</p></th>
                  <th class="text-center"><p class="title px-0 py-0 mx-0 my-0">Cores</p></th>
                  <th class="text-center"><p class="title px-0 py-0 mx-0 my-0">Threads</p></th>
                  <th class="text-center"><p class="title px-0 py-0 mx-0 my-0">Boost Clock</p></th>
                  <th class="text-center"><p class="title px-0 py-0 mx-0 my-0">Cache</p></th>
                  <th class="text-center"><p class="title px-0 py-0 mx-0 my-0">TDP</p></th>
                  <th class="text-center"><p class="title px-0 py-0 mx-0 my-0">Socket</p></th>
                  <th class="text-center"><p class="title px-0 py-0 mx-0 my-0">Launch</p></th>
                </tr>
              </thead>
              <tbody>

                <?php
                  $counter = 1; 
                  foreach ($calculationResults as $calculationResult) {
                    echo "
                      <tr>
                        <th class='text-center'><p class='fw-light px-0 py-0 mx-0 my-0'>".$counter."</p></th>
                        <th class='text-center'><p class='fw-light px-0 py-0 mx-0 my-0'>".$calculationResult['score']."</p></th>
                        <th class='text-left'><p class='fw-light px-0 py-0 mx-0 my-0'>".$calculationResult['title']."</p></th>
                        <th class='text-center'><p class='fw-light px-0 py-0 mx-0 my-0'>$".$calculationResult['price']."</p></th>
                        <th class='text-center'><p class='fw-light px-0 py-0 mx-0 my-0'>".$calculationResult['core']."</p></th>
                        <th class='text-center'><p class='fw-light px-0 py-0 mx-0 my-0'>".$calculationResult['thread']."</p></th>
                        <th class='text-center'><p class='fw-light px-0 py-0 mx-0 my-0'>".$calculationResult['boost_clock']."MHz</p></th>
                        <th class='text-center'><p class='fw-light px-0 py-0 mx-0 my-0'>".$calculationResult['cache']."MB</p></th>
                        <th class='text-center'><p class='fw-light px-0 py-0 mx-0 my-0'>".$calculationResult['tdp']."W</p></th>
                        <th class='text-center'><p class='fw-light px-0 py-0 mx-0 my-0'>".$calculationResult['socket']."</p></th>
                        <th class='text-center'><p class='fw-light px-0 py-0 mx-0 my-0'>".$calculationResult['launch']."</p></th>
                      </tr>
                    ";
                    $counter += 1;
                  }
                
                ?>
               
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection