@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">Wish Lists<hr/></h2><br/>
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L</th>
                                    <th>IP</th>
                                    <th> Product Id</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($wishlists as $wishlist)
                                    <tr class="text-center">
                                        <td>{{ ($wishlists->currentpage()-1) * $wishlists ->perpage() + $loop->index + 1 }}</td>
                                        <td>{{$wishlist->ip}}</td>
                                        <td>{{$wishlist->product_id}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-info">{{'No Wish List Created Yet'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {!! $wishlists->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
