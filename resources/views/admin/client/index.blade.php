<?php
/**
 * Created by PhpStorm.
 * User: farshad
 * Date: 5/23/2018
 * Time: 12:26 AM
 */
?>
@include('header');
@include('sidebar');
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">
        <!-- Horizontal borders -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">مخاطبین</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">

            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                    <tr class="border-double">
                        <th scope="col">ردیف</th>
                        <th scope="col">نام مشتری</th>
                        <th scope="col">توضیحات مشتری</th>
                        <th scope="col">ساخته شده در</th>
                        {{--<th scope="col">مسول فروش</th>--}}
                        <th scope="col">عملیات ها</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                        @if($client->client_type === 'بالقوه')
                            <tr>
                                <th scope="row">{{$client->id}}</th>
                                <td><a href="/admin/client/{{$client->id}}">{{$client->title}}</a></td>
                                <td>{{$client->description}}</td>
                                <td>
                                    {{new Verta($client->created_at)}}
                                </td>
                                {{--@php(--}}
                                {{--dd($client)--}}
                                {{--)--}}
                                {{--@foreach($sellman->sellmanlist as $sellmans)--}}
                                    {{--<td>--}}
                                        {{--{{$sellmans->name}}--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                    {{--{{$product->pivot->product_quantity}}--}}
                                    {{--</td>--}}
                                {{--@endforeach--}}
                                {{--@foreach($sellman as $sellmans)--}}
                                    {{--@foreach($sellmans->sellmanList as $key=>$user)--}}
                                        {{--<td>--}}
                                            {{--{{$user->name ?? 'asd'}}--}}
                                        {{--</td>--}}
                                    {{--@endforeach--}}
                                {{--@endforeach--}}
                                <td>
                                    <div class="btn-group inline-display" role="group" aria-label="Basic example">
                                        <a href="{{ URL::to('admin/client/' . $client->id . '/edit') }}">
                                            <button type="button" class="btn btn-info">ویراییش</button>
                                        </a>&nbsp;
                                        <a href="{{ URL::to('admin/client/assign/' . $client->id )}}">
                                            <button type="button" class="btn btn-info">ارجاع</button>
                                        </a>
                                        <form style="display:inline" action="{{url('admin/client', [$client->id])}}"
                                              method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="حذف"/>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    @include('footer');
</div>
@include('footer');
