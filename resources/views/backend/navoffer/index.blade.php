@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">Nav Offers<hr/></h2><br/>
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L</th>
                                    <th>Photo</th>
                                    <th> Category</th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($navoffers as $navoffer)
                                    <tr class="text-center">
                                        <td>{{ ($navoffers->currentpage()-1) * $navoffers ->perpage() + $loop->index + 1 }}</td>
                                        <td><img src="{{asset('assets/images/navoffer/'.$navoffer->image)}}" alt=""></td>
                                        <td>{{$navoffer->category}} </td>
                                        <td>
                                            <div class="modal fade" id="delete_modal_{{$navoffer->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Nav Offer</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are You Want To Delete This Nav Offer.Once You Delete This Nav Offer</p>
                                                            <p>You Will Delete The Information Permanently</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            {!! Form::open(['route' => ['navoffer.destroy',$navoffer->id],'method' => 'DELETE']) !!}
                                                            <button type="submit" class="btn btn-success">submit</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$navoffer->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-info">{{'No Nav Offer Created Yet'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {!! $navoffers->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
