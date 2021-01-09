@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">Offers<hr/></h2><br/>
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L</th>
                                    <th>Photo</th>
                                    <th> Name</th>
                                    <th> Duration </th>
                                    <th> Display </th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($offers as $offer)
                                    <tr class="text-center">
                                        <td>{{ ($offers->currentpage()-1) * $offers ->perpage() + $loop->index + 1 }}</td>
                                        <td><img src="{{asset('assets/images/offers/'.$offer->image)}}" alt=""></td>
                                        <td>{{$offer->name}} </td>
                                        <td>{{$offer->duration}} </td>
                                        <td>{{$offer->display ? $offer->display : 'Not Set yet'}} </td>
                                        <td>
                                             <button type="button" class="btn btn-inverse-success btn-icon" onclick="window.location='{{route('offer.edit',$offer->id)}}'" data-toggle="tooltip" title="Edit"><i class="mdi mdi-pencil"></i></button>
                                             <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('offer.display',$offer->id)}}'" data-toggle="tooltip" title="Display"><i class="mdi mdi-eye"></i></button>
                                            <div class="modal fade" id="delete_modal_{{$offer->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Offer</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are You Want To Delete This Product.Once You Delete This Offer</p>
                                                            <p>You Will Delete The Information Permanently</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            {!! Form::open(['route' => ['offer.destroy',$offer->id],'method' => 'DELETE']) !!}
                                                            <button type="submit" class="btn btn-success">submit</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$offer->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-info">{{'No Offer Created Yet'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {!! $offers->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
