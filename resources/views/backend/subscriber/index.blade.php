@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">Subscribers<hr/></h2><br/>
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L</th>
                                    <th> Date</th>
                                    <th>Emain</th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($subscribers as $subscriber)
                                    <tr class="text-center">
                                        <td>{{ ($subscribers->currentpage()-1) * $subscribers ->perpage() + $loop->index + 1 }}</td>
                                        <td>{{date('d-m-Y', strtotime($subscriber->created_at))}}</td>
                                        <td>{{$subscriber->email}} </td>
                                        <td>
                                            <div class="modal fade" id="delete_modal_{{$subscriber->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Subscriber</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are You Want To Delete This Subscriber.Once You Delete This Subscriber</p>
                                                            <p>You Will Delete The Information Permanently</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            {!! Form::open(['route' => ['subscriber.destroy',$subscriber->id],'method' => 'DELETE']) !!}
                                                            <button type="submit" class="btn btn-success">submit</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$subscriber->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-info">{{'No Subcriber Created Yet'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {!! $subscribers->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
