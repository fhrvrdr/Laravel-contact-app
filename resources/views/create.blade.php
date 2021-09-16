<x-app-layout>
    <x-slot name="header">Yeni Kişi Oluştur</x-slot>

    <div class="container-fluiid">

        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('rehber.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">İsim</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="surname" class="form-label">Soyisim</label>
                    <input type="text" class="form-control" name="surname">
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="form-label">Telefon Numarası</label>
                    <input type="text" class="form-control" name="phone"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');">
                </div>
                <button type="submit" class="btn btn-success">Kaydet</button>
            </form>
        </div>



    </div>

</x-app-layout>
