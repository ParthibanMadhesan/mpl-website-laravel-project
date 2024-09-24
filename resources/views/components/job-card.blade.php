@props(['job'])
<x-panel class=" flex flex-col text-center ">
   
    <div class="self-start text-xs font-bold text-yellow-100" >{{$job->employer->name}}</div>
    <div class="py-6 font-bold ">
        <h3 class="group-hover:text-blue-500 text-xl font-bold transition-color duration-300">
            <a href="{{$job->url}}" target= "_blank">
            {{$job->title}}
        </a>
        </h3> 
        <p class="text-xs mt-2">{{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
            <x-tag :$tag size="small">backend</x-tag>
            @endforeach

         </div>
      <x-employer-logo :employer="$job->employer" :width="42"></x-employer-logo>
    </div>
</x-panel>