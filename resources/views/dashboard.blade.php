@extends('layouts.app')
@section('content')
    {{--    @foreach($stepCountData as $stepCount)--}}
    {{--        <h1 data-step-count>{{$stepCount}}</h1>--}}
    {{--    @endforeach--}}

   <div class="dashboard__heading">
       <h1>Dashboard</h1>
       <img src="/images/profileimg.png" alt="">
   </div>

    <h2>Hello Bente</h2>
    <p>Ready to rock?</p>

   <div class="dashboard__tile-row">
       <div class="dashboard__tile dashboard__tile--orange">
           <i class="icon-fire dashboard__tile-background dashboard__tile-background--orange"></i>
          <div class="dashboard__tile-content">
              <i class="icon-fire dashboard__tile-icon"></i>
              <p class="dashboard__tile-text">100 days</p>
          </div>
       </div>

       <div class="dashboard__tile dashboard__tile--red">
           <i class="icon-diamond dashboard__tile-background dashboard__tile-background--red"></i>
           <div class="dashboard__tile-content">
               <i class="icon-diamond dashboard__tile-icon"></i>
               <p class="dashboard__tile-text">2680</p>
           </div>
       </div>

       <div class="dashboard__tile dashboard__tile--green">
           <i class="icon-ranking dashboard__tile-background dashboard__tile-background--green"></i>
          <div class="dashboard__tile-content">
              <i class="icon-ranking dashboard__tile-icon"></i>
              <p class="dashboard__tile-text">Ranking</p>
          </div>
       </div>

   </div>

    <div class="dashboard__tile-row">
        <div class="dashboard__tile dashboard__tile--light-blue">
            <i class="icon-pets dashboard__tile-background dashboard__tile-background--light-blue"></i>
            <div class="dashboard__tile-content">
                <p class="dashboard__tile-text">Lifted 50 raccoons</p>
            </div>
        </div>

        <div class="dashboard__tile dashboard__tile--dark-blue">
            <i class="icon-weight dashboard__tile-background dashboard__tile-background--dark-blue"></i>
           <div class="dashboard__tile-content">
               <i class="icon-weight dashboard__tile-icon"></i>
               <p class="dashboard__tile-text">2000 kg</p>
           </div>
        </div>

        <div class="dashboard__tile dashboard__tile--pink">
            <i class="icon-diamond dashboard__tile-background dashboard__tile-background--pink"></i>
           <div class="dashboard__tile-content">
               <i class="icon-diamond-plus dashboard__tile-icon"></i>
           </div>
        </div>
    </div>

    <canvas id="step-chart"></canvas>
@endsection
