@extends('layouts.main')

@section('title', 'My Properties')

@section('content')

<div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Account</a></li>
                <li class="active">My Properties</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
            <!-- sidebar -->
            <div class="col-md-3 col-sm-2">
                @include('layouts.partials.aside')
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
                <!-- My Properties -->
                <div class="col-md-9 col-sm-10">
                    <section id="my-properties">
                        <header><h1>My Properties</h1></header>
                        <div class="my-properties">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Property</th>
                                        <th></th>
                                        <th>Date Added</th>
                                        <th>Views</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									@foreach($properties as $property)
                                    <tr>
                                        <td class="image">
                                            <a href="{{route('showProperty', $property->id)}}">
                                                @if($property->images->count() == 0)
                                                <img alt="" src="{{url('assets/img/properties/property-04.jpg')}}">
                                                @else
                                                <img alt="" src="{{url('images/property/'. $property->images->first()['filename'])}}">
                                                @endif
                                            </a>
                                        </td>
                                        <td><div class="inner">
                                            <a href="{{route('showProperty', $property->id)}}"><h2>987 Cantebury Drive</h2></a>
                                            <figure>{{substr($property->address, 0, 30)}}..., {{$property->zip}}</figure>
                                            <div class="tag price">&pound; {{number_format($property->price)}}</div>
                                        </div>
                                        </td>
                                        <td>{{$property->created_at->format('d M Y')}}</td>
                                        <td>236</td>
                                        <td class="actions">
                                            <a href="{{route('admin.properties.edit', $property->id)}}" class="edit"><i class="fa fa-pencil"></i>Edit</a>
                                            <a href="{{route('admin.properties.editimages', $property->id)}}" class="edit"><i class="fa fa-picture-o"></i>Images</a>
                                            <a href="#"><i class="delete fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
									@endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                            <!-- Pagination -->
                            <div class="center">
							
									{{$properties->render()}}
                            </div><!-- /.center-->
                        </div><!-- /.my-properties -->
                    </section><!-- /#my-properties -->
                </div><!-- /.col-md-9 -->
                <!-- end My Properties -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->


@endsection