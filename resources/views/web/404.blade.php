@extends('web.layouts._master')

@section('title')
@endsection

@section('extraCss')
    <!-- extra css -->

    <!-- end extra css -->
@endsection

@section('content')
    {{-----content-----}}
    <div class="error-area overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <h1>404</h1>
                        <h2>Oops! Page Not Found!</h2>
                        <p>The page you are looking for does not exist. It might have been moved or deleted.</p>
                        <div class="button">
                            <a href="#" class="btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-----end content-----}}
@endsection

@section('extraJs')
    <!-- extraJs -->

    <!-- end extraJs -->
@endsection
