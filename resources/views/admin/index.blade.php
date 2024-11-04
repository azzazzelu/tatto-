@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Лекции</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                {{-- <a href="{{ route('adminDashboard') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Заказы</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                {{-- <a href="{{ route('orders') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>
        
        <!-- ./col -->
    </div>
@endsection
