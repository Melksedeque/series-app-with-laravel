<x-layout title="Login">
    <div class="row justify-content-center">
        <form action="{{ route('signin') }}" method="POST" class="col-6 card p-5 d-flex flex-column">
            @csrf
            <div class="form-group mb-4 d-flex flex-row flex-wrap justify-content-start align-items-center w-100">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" autofocus>
            </div>
            <div class="form-group mb-4 d-flex flex-row flex-wrap justify-content-start align-items-center w-100">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" placeholder="Senha" class="form-control">
            </div>
            <div class="form-group d-flex flex-row flex-wrap justify-content-between align-items-center w-100">
                <a href="{{ route('user.create') }}" class="btn btn-info px-5">Registrar</a>
                <a href="#" class="btn btn-link me-4">Esqueci minha senha</a>
                <button class="btn btn-primary px-5 me-4">Entrar</button>
            </div>
        </form>
    </div>
</x-layout>
