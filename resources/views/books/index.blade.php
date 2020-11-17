<x-app-layout>
    <x-slot name="header">
    	<div class="row">
        <div class="col-md-8 col-12">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
          </h2>
        </div>
        <div class="col-md-4 col-12">
            <button class="btn btn-primary float-right"  data-toggle="modal" data-target="#addBookModal">
              Add Book
            </button>
        </div>
      </div>
        
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
	    <!-- Modal -->
	<div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Add new title
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form method="POST" action="{{ url('books') }}" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">

              <div class="form-group">
                <label for="exampleInputEmail1">
                  Title
                </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="A new adventure" id="input_title" name="title" aria-label="category" aria-describedby="basic-addon1">
                </div>  
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">
                  Description
                </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">@</span>
                  </div>
                  <textarea class="form-control" rows="5" name="description" id="input_description" placeholder="Description of de title"></textarea>
                </div>  
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">
                  Year
                </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">@</span>
                  </div>
                  <input type="number" class="form-control" placeholder="2010" id="input_title" name="year" aria-label="category" aria-describedby="basic-addon1">
                </div>  
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">
                  Pages
                </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon4">@</span>
                  </div>
                  <input type="number" class="form-control" placeholder="600" id="input_title" name="pages" aria-label="category" aria-describedby="basic-addon1">
                </div>  
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">
                  ISBN
                </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon5">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="ASD602SD" id="input_title" name="isbn" aria-label="category" aria-describedby="basic-addon1">
                </div>  
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">
                  Editorial
                </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon6">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="DeBolsillo" id="input_title" name="editorial" aria-label="category" aria-describedby="basic-addon1">
                </div>  
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">
                  Edition
                </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon7">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="1" id="input_title" name="edition" aria-label="category" aria-describedby="basic-addon1">
                </div>  
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">
                  Autor
                </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon8">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Manoban" id="input_title" name="autor" aria-label="category" aria-describedby="basic-addon1">
                </div>  
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">
                  Cover
                </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon9">@</span>
                  </div>
                  <input type="file" class="form-control"  id="input_title" name="title" aria-label="cover" aria-describedby="basic-addon1">
                </div>  
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">
                  Category
                </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon10">@</span>
                  </div>
                  <select class="form-control" name="category_id">
                  	@if (isset($categories) && count($categories)>0)
                  	@foreach ($categories as $category)
                  	<option value="{{ $category->id}}">
                  		{{ $category->name }}
                  	</option>

                  	@endforeach
                  	@endif
                  </select>
                </div>  
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                Cancel
              </button>
              <button type="submit" class="btn btn-primary">
                Save category
              </button>
            </div>

          </form>

        </div>
      </div>
    </div>
</x-app-layout>
