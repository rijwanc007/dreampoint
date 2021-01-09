@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">Hot Deals<hr/></h2><br/>
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L</th>
                                    <th>Photo</th>
                                    <th> Name</th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($hotdeals as $hotdeal)
                                    <tr class="text-center">
                                        <td>{{ ($hotdeals->currentpage()-1) * $hotdeals ->perpage() + $loop->index + 1 }}</td>
                                        <td><img src="{{asset('assets/images/hotdeals/'.$hotdeal->image)}}" alt=""></td>
                                        <td>{{$hotdeal->name}} </td>
                                        <td>
                                            <button type="button" class="btn btn-inverse-success btn-icon" onclick="window.location='{{route('hotdeal.edit',$hotdeal->id)}}'" data-toggle="tooltip" title="Edit"><i class="mdi mdi-pencil"></i></button>
                                            <div class="modal fade" id="delete_modal_{{$hotdeal->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Hotdeal</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are You Want To Delete This Hotdeal.Once You Delete This Hotdeal</p>
                                                            <p>You Will Delete The Information Permanently</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            {!! Form::open(['route' => ['hotdeal.destroy',$hotdeal->id],'method' => 'DELETE']) !!}
                                                            <button type="submit" class="btn btn-success">submit</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$hotdeal->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-info">{{'No Hotdeal Created Yet'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {!! $hotdeals->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
