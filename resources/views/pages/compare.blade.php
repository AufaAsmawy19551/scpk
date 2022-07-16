@extends('layouts.main')
  
@section('pageTitle')
    <div class="row">
      <div class="col-md-4 col-sm-12 mb-4">
        <div class="col card shadow bg-body rounded p-0">
          <div class="card-header text-white fs-5" style="background-color: #0d6efd">PREFERENCE</div>
          <div class="card-body">

            <form method="head" action="/compare">
              <div class="row">
                <div class="col-8">
                  <h5 class="card-title">Filtering</h5>
                  <div class="row">
                    <div class="col">
                      <label>Lowest Price ($)</label>
                      <input type="number" min="0" step="1" value="{{ $filter['lowestPrice'] ? $filter['lowestPrice'] : $lowestPrice; }}" name="lowestPrice" placeholder="Lowest Price" class="form-control">
                    </div>
                    <div class="col">
                      <label>Higest Price ($)</label>
                      <input type="number" min="0" step="1" value="{{ $filter['higestPrice'] ? $filter['higestPrice'] : $higestPrice; }}" name="higestPrice" placeholder="Higest Price" class="form-control">
                    </div>
                  </div>
                  <label>Socket</label>
                  <select class="form-control" name="socket">
                    <option value="">-- All Sockets --</option>
                    <?php 
                      foreach($sockets as $socket){
                        if ($socket->socket == $filter['socket']) {
                          echo "<option value='$socket->socket' selected='selected'>$socket->socket</option>";
                        }else {
                          echo "<option value='$socket->socket'>$socket->socket</option>";
                        }
                      }
                    ?>
                  </select>
                  <label>Launch Year</label>
                  <select class="form-control" name="launchYear">
                    <option value="">-- All Launch Years --</option>
                    <?php 
                      foreach($launchs as $launch){
                        if ($launch->launch == $filter['launch']) {
                          echo "<option value='$launch->launch' selected='selected'>$launch->launch</option>";
                        }else {
                          echo "<option value='$launch->launch'>$launch->launch</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
                <div class="col-4">
                  <h5 class="card-title">Weighting</h5>
                  <label>Price (C)</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[0] }}" name="priceWeight" placeholder="Weight" class="form-control" required>
                  <label>Core (B)</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[1] }}" name="coreWeight" placeholder="Weight" class="form-control" required>
                  <label>Thread (B)</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[2] }}" name="threadWeight" placeholder="Weight" class="form-control" required>
                  <label>Boost Clock (B)</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[3] }}" name="boostClockWeight" placeholder="Weight" class="form-control" required>
                  <label>Cache (B)</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[4] }}" name="cacheWeight" placeholder="Weight" class="form-control" required>
                  <label>TDP (C)</label>
                  <input type="number" min="0" step=".1" value="{{ $weight[5] }}" name="tdpWeight" placeholder="Weight" class="form-control" required>
                </div>
              </div>

              <div class="d-flex justify-content-end mt-3">
                <a href="/compare" class="btn btn-danger text-white mx-2"><i class="fa fa-redo text-white mr-2"></i>
                  RESET</a>
                <button class="btn btn-primary text-white mr-1" type="submit"><i class="fa fa-search text-white mr-2"></i>
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
                  <th class="text-center pt-0"><p class="title px-0 py-0 mx-0 my-0">Rank</p></th>
                  <th class="text-center pt-0"><p class="title px-0 py-0 mx-0 my-0">Score</p></th>
                  <th class="text-left pt-0"><p class="title px-0 py-0 mx-0 my-0">Processor</p></th>
                  <th class="text-center pt-0"><p class="title px-0 py-0 mx-0 my-0">Price</p></th>
                  <th class="text-center pt-0"><p class="title px-0 py-0 mx-0 my-0">Cores</p></th>
                  <th class="text-center pt-0"><p class="title px-0 py-0 mx-0 my-0">Threads</p></th>
                  <th class="text-center pt-0"><p class="title px-0 py-0 mx-0 my-0">Boost Clock</p></th>
                  <th class="text-center pt-0"><p class="title px-0 py-0 mx-0 my-0">Cache</p></th>
                  <th class="text-center pt-0"><p class="title px-0 py-0 mx-0 my-0">TDP</p></th>
                  <th class="text-center pt-0"><p class="title px-0 py-0 mx-0 my-0">Socket</p></th>
                  <th class="text-center pt-0"><p class="title px-0 py-0 mx-0 my-0">Launch</p></th>
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
                    if ($counter > 10) {
                      break;
                    }
                  }
                
                ?>
               
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection