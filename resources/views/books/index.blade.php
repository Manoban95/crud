<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Libros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <table class="table" table-striped table-bordered>
				  <thead class="thread-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">First</th>
				      <th scope="col">Last</th>
				      <th scope="col">Handle</th>
				    </tr>
				  </thead>
				  <tbody>
				    @if (isset($books) && count($books)>0)
				    @foreach ($books as $book)

				    <tr>
				    	<th scope="row">
				    		{{$book->id}}
				    	</th>
				    	<td>
				    		{{$book->tittle}}
				    	</td>
				    	<td>
				    		{{$book->description}}
				    	</td>
				    	<td>
				    		{{$book->category_id}}
				    	</td>
				    </tr>
				    @endforeach
				    @endif
				  </tbody>
				</table>


            </div>
        </div>
    </div>
</x-app-layout>
