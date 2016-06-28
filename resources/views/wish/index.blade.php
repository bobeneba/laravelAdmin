@extends('admin.layouts.jqgridbase')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')
    <div class="content">
        <div class="container">
            <table width="100%" class="table table-bordered table-striped">

                <tr>
                    <th width="5%">序号</th>
                    <th width="25%">产品图片</th>
                    <th width="25%">标题</th>
                    <th width="5%">售价</th>
                    <th width="5%">运费</th>
                    <th width="20%">上架时间</th>
                    <th width="5%">最近总销量</th>
                    <th>日均销量</th>
                    <th>评论数</th>

                </tr>

            @foreach ($products as $product)

                    <tbody>
                    <tr>
                        <td >{{ $product->id }}</td>
                        <td ><a href="" target="_blank"><img src="{{$product->small_picture}}" class="img-thumbnail" height="100" width="100"> </td>
                        <td >{{ $product->title }}</td>
                        <td >{{ $product->original_price }}</td>
                        <td data-title="IP">{{ $product->original_shipping }}</td>
                        <td data-title="IP">{{ $product->generation_time }}</td>
                        <td data-title="IP">{{ $product->sales }}</td>
                        <td data-title="IP">{{ $product->daySales }}</td>
                        <td data-title="IP">{{ $product->rating_num }}</td>
                    </tr>
                    </tbody>
            @endforeach
            </table>
        </div>
        {!! $products->render() !!}
    </div>
    {{--<iframe src="/admin/log-viewer" frameborder="0" style="width: 100%;min-height: 650px;"></iframe>--}}

@endsection


@section('js')

@endsection