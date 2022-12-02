@extends('base.espacedonateur')

@section('donateur')

<div class="col-sm-12">
               

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Pays</th>
                                            <th>Montant</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                            
                                @foreach($donner as $don )

                                    <tbody>
                                        <tr>
                                            <td>{{ $don->last_name }}</td>
                                            <td>System Architect</td>
                                            <td>$320,800</td>
                                            <td>Edinburgh</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>$320,800</td>
                                            <td>Tokyo</td>
                                            
                                        </tr>
                                
                                    </tbody>
                                @endforeach
                        
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection