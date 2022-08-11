@extends('web.layouts._master')

    <!DOCTYPE html>
<html lang="en" xmlns="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hopital search</title>
    <link rel="icon" type="image/x-icon" href="{!! url('assets/img/favicon.png') !!}" />

    @include('web.layouts.style')

</head>
@section('content')
{{--    Route--}}
{{--    Route::get('/test',[App\Http\Controllers\test::class,'index']);--}}
{{--    Route::get("/show",[\App\Http\Controllers\test::class,'show'])->name('show');--}}

{{--Controlerr--}}
{{--public function index()--}}
{{--{--}}
{{--//--}}
{{--$date = Carbon::today();--}}
{{--$appointment = appointmentTest::all();--}}
{{--$slMonth = $date->month;--}}
{{--$slYear = $date->year;--}}
{{--return view('web.timeTable', compact('date','appointment','slMonth','slYear'));--}}
{{--}--}}
{{--public function show(Request $request)--}}
{{--{--}}
{{--//--}}
{{--$date = Carbon::createFromDate($request->input('year'),$request->input('month'),1);--}}
{{--$slMonth = $date->month;--}}
{{--$slYear = $date->year;--}}
{{--$appointment = appointmentTest::all();--}}
{{--return view('web.timeTable', compact('date','appointment','slMonth','slYear'));--}}
{{--}--}}



    <?php
    use Carbon\Carbon;
    ?>
    <br><br><br>
    <div class="container">
        <section class="doctor-calendar-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h3>Time Table</h3>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Determine Your Date to Come</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                                Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="doctor-calendar-table table-responsive">
                            <form method="GET" action="show">
                                @csrf
                                @method('get')
                                <select name="month">
                                    @for($countM = 1; $countM <= 12; $countM++)
                                        <option
                                            @if($countM == $slMonth)
                                                selected
                                            @endif
                                            value="{{$countM}}">{{Carbon::createFromDate(2022,$countM,1)->getTransLatedMonthName()}}</option>
                                     @endfor
                                </select>
                                <input type="number" name="year" value="{{old(today()->year,$slYear)}}">
                                    <input type="submit" value="submit">
                            </form>
                            <?php

                            //truyen tham so date duoc chon
//                            $date = today();
                            $firstDay = Carbon::createFromDate($date->year, $date->month, 1);
                            //truyen tham so ngay cua thang vao day
                            $dayOfMonth = $date->daysInMonth;
                            $countDay = 2 - $firstDay->dayOfWeek;
                            ?>
                            <h2>{{$date->getTranslatedMonthName()}}, {{$slYear}}</h2>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                                </thead>
                                <tbody>
                                @for($index = 0;$index <5;$index++, $add=$countDay+6)
                                <tr>
                                    @for($i = 0; $i<7;$i++,$countDay++)
                                    <td style="width: 14.285%; height: 80px; padding-top: 0;padding-left: 0">
                                        <?php
                                        if($countDay <= $dayOfMonth && $countDay > 0){
                                        $todaycheck = Carbon::createFromDate($date->year, $date->month, $countDay);
                                        ?>
                                            <span style="float: left">{{$countDay}}</span>
                                            @if(isset($appointment))
                                                @foreach($appointment as $ap)
                                                <?php
                                                    $datacheck = Carbon::createFromDate(date_parse($ap->date)['year'], date_parse($ap->date)['month'], date_parse($ap->date)['day']);
                                                ?>
                                                    @if($datacheck->diffInHours($todaycheck) < 23)
                                                        <h3 style="float: right">{{$ap->self_check_symptom}}</h3>
                                                    @endif
                                                @endforeach
                                            @endif

                                        <?php
                                        }
                                        ?>
                                    </td>
                                    @endfor
                                </tr>
                                @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
<script>
    var date = today();


</script>
@endsection
