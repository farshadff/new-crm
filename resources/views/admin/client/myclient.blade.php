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
        {{--@php(--}}
        {{--dd($client)--}}
        {{--)--}}
            @foreach($client->sellmanlist as $sellman )
                @php(
                $sell_id = $sellman->pivot->client_id
                )
                @if($user_id === $sell_id)
                    {{$client->name}}
                    @endif
                @endforeach
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
        </div>
    </div>
    @include('footer');
</div>
@include('footer');
