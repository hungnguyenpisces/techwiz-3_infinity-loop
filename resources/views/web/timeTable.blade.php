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
                            <form action="#">
                            <select>
                                @for($countM = 1; $countM <= 12; $countM++)
                                    <option
                                        @if($countM == today()->month)
                                            selected
                                        @endif
                                        value="{{$countM}}">{{Carbon::createFromDate(2022,$countM,1)->getTransLatedMonthName()}}</option>
                                 @endfor
                            </select>
                            <input type="number" value="{{today()->year}}">
                                <input type="submit" value="submit">
                            </form>
                            <?php

                            //truyen tham so date duoc chon
                            $date = today();
                            $firstDay = Carbon::createFromDate($date->year, $date->month, 1);
                            //truyen tham so ngay cua thang vao day
                            $dayOfMonth = $date->daysInMonth;
                            $countDay = 2 - $firstDay->dayOfWeek;
                            ?>
                            <h2>{{$date->getTranslatedMonthName()}}</h2>
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
                                    @for($i = 0; $i<7;$i++)
                                    <td>
                                        <?php
                                        if($countDay <= $dayOfMonth && $countDay > 0){
                                            ?>
                                            <h1>{{$countDay}}</h1>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        $countDay++; ?>
{{--                                        <h1>{{$index+$i+$add+1}}</h1>--}}
{{--                                        <span>Dermatologists</span>--}}
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
