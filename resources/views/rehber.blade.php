<x-app-layout>
    <x-slot name="header">Rehber</x-slot>

    <div class="containter-fluid">


        <div class="row mb-3 me-auto">
            <div class="col-md-6">
                <a href="{{ route('rehber.create') }}">
                    <button type="button" class="btn btn-success">Yeni Kişi Ekle</button>
                </a>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <form class="d-flex" method="GET" action="{{ route('search') }}">

                    <input class="form-control me-2" type="text" name="query" placeholder="Ara" aria-label="Search">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-search"
                            style="color:white"></i></button>
                </form>
            </div>
            <div id="search_list"></div>



        </div>


        <div class="row">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>

                        <th scope="col">İsim</th>
                        <th scope="col">Soyisim</th>
                        <th scope="col">Numara</th>
                        <th scope="col">İşlemler</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($kisiler as $kisi)
                        <tr>
                            <td>{{ $kisi->name }}</td>
                            <td>{{ $kisi->surname }}</td>
                            <td>{{ $kisi->phone }}</td>
                            <td style="display: flex">
                                <a href="{{ route('rehber.edit', $kisi->id) }}"><i class="bi bi-pencil-square mr-2"
                                        style="font-size:170%"></i></a>
                                <form action="{{ route('rehber.destroy', $kisi->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit"><i class="bi bi-x-square-fill"
                                            style="font-size: 170%;color:red"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $kisiler->links() }}
        </div>

    </div>





</x-app-layout>
