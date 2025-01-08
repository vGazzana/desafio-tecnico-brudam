<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Entregas</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Pesquisar
                    Entregas</h1>
                <form action="{{ route('buscar') }}" method="POST" class="space-y-4 md:space-y-6">
                    @csrf
                    <div>
                        <label for="cpf"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF</label>
                        <input type="text" name="cpf" id="cpf" placeholder="Digite o CPF"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Buscar
                    </button>
                </form>
                @if (session('error'))
                    <p class="mt-4 text-red-500 text-sm">{{ session('error') }}</p>
                @endif
            </div>
        </div>
    </div>
</body>

</html>