@extends('layouts.page')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border border-gray-200">
                <form  method="post" action="{{ route('articles.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="text-xl text-gray-600" id="title">
                            Title <span class="text-red-500">*</span>
                        </label>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" required></input>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600" for="body">
                            Body <span class="text-red-500">*</span>
                        </label>
                        <textarea name="body" id="body" class="border-2 border-gray-300 p-2 w-full" required></textarea>
                    </div>
                    <div class="mb-8">
                        <label class="text-xl text-gray-600" for="category">
                            Category <span class="text-red-500">*</span>
                        </label>
                        <select class="border-2 border-gray-300 p-2 w-full" name="category_id" id="category" required>
                            <option id="addCategory" value="">+ Add new</option>
                        </select>
                    </div>

                    <div class="flex p-1">
                        <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const addCategory = document.getElementById('addCategory');
        const csrf = document.querySelector('input[name="_token"]');
        const selectTagCategories = document.getElementById('category');

        addCategory.addEventListener('click', function(e) {
            let name = prompt('Enter name of new category');

            fetch('{{ route("categories.store") }}', {
                method: 'POST',
                body: JSON.stringify({name, '_token': csrf.value}),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(res => res.json())
            .then(res => {
                console.log('res', res);
                let options = renderCategory({id: '', name = '+ Add new'});
                res.categories.forEach(category => {
                    options += renderCategory(category)
                });
                selectTagCategories.innerHTML = options;
            })
            .catch(error => console.log('error', error));
            debugger;
        });

        const renderCategory = function(category) {
            return `<option value="${category.id}">${category.name}</option>`
        }
    </script>
@endsection
