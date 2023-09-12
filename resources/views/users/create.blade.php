<x-layout title="Registrar Usuário">
    <div class="row justify-content-center">
        <form action="{{ route('user.store') }}" method="POST" class="col-6 card p-5 d-flex flex-column">
            @csrf
            <div class="form-group mb-4 d-flex flex-row flex-wrap justify-content-start align-items-center w-100">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" placeholder="Nome" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group mb-4 d-flex flex-row flex-wrap justify-content-start align-items-center w-100">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="form-group mb-4 d-flex flex-row flex-wrap justify-content-start align-items-center w-100">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" placeholder="Senha" class="form-control" value="{{ old('password') }}">
            </div>
            <div class="form-group mb-4 d-flex flex-row flex-wrap justify-content-start align-items-center w-100">
                <label for="password_confirmation" class="form-label">Confirmação de senha:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmação de senha" class="form-control" value="{{ old('password_confirmation') }}">
            </div>
            <div class="form-group d-flex flex-row flex-wrap justify-content-end align-items-center w-100">
                <button class="btn btn-primary px-5">Registrar</button>
            </div>
        </form>
    </div>

    <script>
        @if ($errors->any())
            document.addEventListener('DOMContentLoaded', function () {
                const firstErrorField = document.querySelector('.form-control.is-invalid');
                if (firstErrorField) {
                    firstErrorField.focus();
                }
            });
        @else {
            document.addEventListener('DOMContentLoaded', function () {
                const regularField = document.querySelector('[name="name"]');
                regularField.focus();
            });
        }
        @endif
    </script>
</x-layout>
