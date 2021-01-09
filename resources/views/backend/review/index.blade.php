@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">Reviews<hr/></h2><br/>
                            <br>
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L</th>
                                    <th>Photo</th>
                                    <th> Name</th>
                                    <th> Email </th>
                                    <th> Message </th>
                                    <th> Status </th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($reviews as $review)
                                    <tr class="text-center">
                                        <td>{{ ($reviews->currentpage()-1) * $reviews ->perpage() + $loop->index + 1 }}</td>
                                        <td><img src="{{asset('assets/images/reviews/'.$review->image)}}" alt=""></td>
                                        <td>{{$review->name}} </td>
                                        <td>{{$review->email}} </td>
                                        <td>{{$review->message}} </td>
                                        <td>{{$review->status}} </td>
                                        <td>
                                            @if($review->status == 'pending')
                                            <button type="button" class="btn btn-inverse-success btn-icon" onclick="window.location='{{route('review.edit',$review->id)}}'" data-toggle="tooltip" title="Approve"><i class="mdi mdi-hand-okay"></i></button>
                                            @else
                                            <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('review.show',$review->id)}}'" data-toggle="tooltip" title="Pending"><i class="mdi mdi-account-question"></i></button>
                                            @endif
                                            <div class="modal fade" id="delete_modal_{{$review->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Review</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are You Want To Delete This Product.Once You Delete This Review</p>
                                                            <p>You Will Delete The Information Permanently</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            {!! Form::open(['route' => ['review.destroy',$review->id],'method' => 'DELETE']) !!}
                                                            <button type="submit" class="btn btn-success">submit</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$review->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-info">{{'No Reviews Created Yet'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {!! $reviews->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
