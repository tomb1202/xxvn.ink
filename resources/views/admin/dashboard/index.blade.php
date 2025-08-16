@extends('admin.layouts.master')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-film"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Tổng phim</span>
                        <span class="info-box-number">{{ $totalMovies }}</span>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-plus-circle"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Phim mới hôm nay</span>
                        <span class="info-box-number">{{ $totalNewMovies }}</span>
                    </div>
                </div>
            </div>


    </section>
@endsection
