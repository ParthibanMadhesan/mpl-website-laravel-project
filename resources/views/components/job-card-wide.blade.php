@props(['job'])
<x-panel class="flex gap-x-6 ">
    <div>
    
      <x-employer-logo :employer="$job->employer"></x-employer-logo>
    </div>

   <div class="flex-1 flex flex-col">
    <a href="" class="self-start text-xs text-yellow-100" >{{$job->employer->name}}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-500 transition-color duration-300">
            
            <a href="{{$job->url}}">

                {{$job->title}}

            </a>
        
        </h3> 
        <p class="text-sm mt-auto ">{{$job->salary}}</p>
    </div>

        <div>
            @foreach ($job->tags as $tag)
            <x-tag :$tag ></x-tag>
            @endforeach
         </div>
  
 </x-panel>