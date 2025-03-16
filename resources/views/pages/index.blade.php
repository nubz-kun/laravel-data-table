@extends('app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tabel</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Umur</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>25</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jane Smith</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Bob Johnson</td>
                                            <td>35</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Alice Brown</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Mike Wilson</td>
                                            <td>32</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@push('ajax')
    <script type="text/javascript">
        $(document).ready(function() {
            let table = $('#table').DataTable({
                responsive: true,
                lengthMenu: [5, 10, 20, 50, 100, 200, 500],
            });
        });
    </script>
@endpush
