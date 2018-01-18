@extends('layouts/default') 
{{-- Page title --}} 
@section('title') 
{{ $title }} 
@stop {{-- local styles --}} 
@section('header_styles') 
@stop 
{{-- Page Header--}} 
@section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>{{ $title }}</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('index')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li class="active">
            Member
        </li>
    </ol>
</section>
@stop {{-- Page content --}} 

@section('content') 

<div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul style="padding:0;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('message'))
    <div class="alert alert-danger">
        <ul style="padding:0;">
            <li>{{ session()->get('message') }}</li>
        </ul>
    </div>
@endif
</div>   

<div class="row">
    <div class="col-lg-12">
        <a href="{{ route('taskManagementMemberCreate') }}" class="btn btn-sm btn-primary">
            <i class="fa fa-fw fa-plus"></i>
            Add new member
        </a>
    </div>
</div>
<br><br>
<div class="row">    
    <div class="col-lg-12">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-list"></i> Member List
                </h3>
                <span class="pull-right">
                    <i class="fa fa-fw ti-angle-up clickable"></i>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Member name</th>
                                <th>Email</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($members->count() > 0)
                                @forelse($members as $key => $member)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $member->getUser->name }}</td>
                                    <td>{{ $member->getUser->email }}</td> 
                                    <td width="50px">
                                        <a class="btn btn-primary btn-xs" href="{{ route('taskManagementMemberShow',$member->id) }}" data-toggle="modal" data-placement="top"><span class="fa fa-fw ti-eye"></span></a>
                                    </td>
                                    <td width="50px">
                                        <a class="btn btn-success btn-xs" href="{{ route('taskManagementMemberEdit',$member->id) }}" data-toggle="modal" data-placement="top"><span class="fa fa-fw ti-pencil"></span></a>
                                    </td>
                                    <td width="50px">
                                        <a class="btn btn-danger btn-xs" href="{{ route('taskManagementMemberDestroy',$member->id) }}" data-toggle="modal" data-placement="top"><span class="fa fa-fw fa-times"></span></a>
                                    </td>            
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan='7' align="center">belum ada data</td>
                                    </tr>
                                @endforelse 
                            @else
                                <tr>
                                    <td colspan='7' align="center">belum ada data</td>
                                </tr> 
                            @endif                         
                        </tbody>
                    </table>
                </div>
                {{ $members->links() }}
            </div>
        </div>
    </div>
</div>

@stop {{-- local scripts --}} 


@section('footer_scripts') @stop
