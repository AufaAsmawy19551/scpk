@extends('layouts.main')
  
@section('pageTitle')
    <div class="row row-cols-1">
      <div class="col-4 d-flex align-items-stretch">
        <div class="col card shadow bg-body rounded p-0">
          <div class="card-header text-white fs-5" style="background-color: #0d6efd">Preference</div>
          <div class="card-body">
            <form action="">
              <div class="row">
                <div class="col-8">
                  <h5 class="card-title">Filtering</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="col-4">
                  <h5 class="card-title">Weighting</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-8 d-flex align-items-stretch">
        <div class="col card shadow bg-body rounded p-0">
          <div class="card-header text-white fs-5" style="background-color: #0d6efd">Processors</div>
          <div class="card-body">
            <table class="table my-0">
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
                        <th class='text-center'><p class='px-0 py-0 mx-0 my-0'>".$counter."</p></th>
                        <th class='text-center'><p class='px-0 py-0 mx-0 my-0'>".$calculationResult['score']."</p></th>
                        <th class='text-left'><p class='px-0 py-0 mx-0 my-0'>".$calculationResult['title']."</p></th>
                        <th class='text-center'><p class='px-0 py-0 mx-0 my-0'>$".$calculationResult['price']."</p></th>
                        <th class='text-center'><p class='px-0 py-0 mx-0 my-0'>".$calculationResult['core']."</p></th>
                        <th class='text-center'><p class='px-0 py-0 mx-0 my-0'>".$calculationResult['thread']."</p></th>
                        <th class='text-center'><p class='px-0 py-0 mx-0 my-0'>".$calculationResult['boost_clock']."MHz</p></th>
                        <th class='text-center'><p class='px-0 py-0 mx-0 my-0'>".$calculationResult['cache']."MB</p></th>
                        <th class='text-center'><p class='px-0 py-0 mx-0 my-0'>".$calculationResult['tdp']."W</p></th>
                        <th class='text-center'><p class='px-0 py-0 mx-0 my-0'>".$calculationResult['socket']."</p></th>
                        <th class='text-center'><p class='px-0 py-0 mx-0 my-0'>".$calculationResult['launch']."</p></th>
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