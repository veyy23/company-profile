@php
    $url = request()->url();
@endphp

@if (str_contains($url, '/admin/'))
    @php
        $where = 'errors::minimal';
    @endphp
@else
    @php
        $where = 'errors::frontpage';
    @endphp
@endif
@extends($where)

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
