
<x-layout>
  <x-mail></x-mail>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      
       @foreach ($posts as $post) 
       {{-- @forelse($posts as $post) --}}
        <div class="blog-post mb-3">
            <h2 class="blog-post title">
               <a href="/posts/{{ $post->id }}" >
              
          
                {{ $post->title }}
            </a>
            
            </h2>
       
           
            <p class="blog-post meta"> writting by <a href="#">{{$post->author}}   </a>
           {{(carbon\carbon::parse($post->created_at) ->diffForHumans())}}
            </p>
           {{-- @empty --}}

           {{-- @endforelse --}}
     @endforeach
           

        </div>
    
    


      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2014</a></li>
          <li><a href="#">February 2014</a></li>
          <li><a href="#">January 2014</a></li>
          <li><a href="#">December 2013</a></li>
          <li><a href="#">November 2013</a></li>
          <li><a href="#">October 2013</a></li>
          <li><a href="#">September 2013</a></li>
          <li><a href="#">August 2013</a></li>
          <li><a href="#">July 2013</a></li>
          <li><a href="#">June 2013</a></li>
          <li><a href="#">May 2013</a></li>
          <li><a href="#">April 2013</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->
</x-layout>

