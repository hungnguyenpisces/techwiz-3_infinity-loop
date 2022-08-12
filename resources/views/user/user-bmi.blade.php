@extends('user.layouts._master')
@section('content')
<div class="doctor-calendar-table" style="width: 95%; margin: auto">
    <h1 class="text-center mb-3 mt-5">Calculate your BMI</h1>
    <div  class="yz-widget" data-calculator-type="bmi" data-language="en" data-unit-system="metric" data-background-color="#FFFFFF" data-text-color="#212121" data-primary-color=" #88c250" data-alternate-background-color="#FFFFFF" data-alternate-text-color="#FFFFFF" data-secondary-color=" #88c250"><span class="yz-copyright">Powered by <a href="https://www.yazio.com/en/bmi-calculator">YAZIO</a></span></div>
</div>
@endsection
@section('extraJs')
<script src="https://widget.yazio.com/calculator.js" async></script>
@endsection
