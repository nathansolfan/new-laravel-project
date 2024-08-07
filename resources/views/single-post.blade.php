<x-layout>
    <div class="container py-md-5 container--narrow">
        <div class="d-flex justify-content-between">
          {{-- dinamic way to import the title using the $post from the PostController --}}
          <h2>{{$post->title}}</h2>
          <span class="pt-2">
            <a href="#" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
            <form class="delete-post-form d-inline" action="#" method="POST">
              <button class="delete-post-button text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button>
            </form>
          </span>
        </div>
  
        <p class="text-muted small mb-4">
          <a href="#"><img class="avatar-tiny" src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" /></a>
          {{-- on the {{}}  take the funct name after $post->...  --}}
          {{-- after user-> we get an object and user can also be like pizza--}} 
          Posted by <a href="#">{{$post->user->username}}</a> on {{$post->created_at->format('n/j/Y')}}
          {{-- to update the date $post-> name table -> then format() --}}
        </p>
  
        <div class="body-content">
          {{-- clear the previous placehnolder text --}}
          {{-- {{$post->body}} = this is normally done, but to display markdown --}}
          {!! $post->body !!}
        </div>
      </div>
</x-layout>

    

    