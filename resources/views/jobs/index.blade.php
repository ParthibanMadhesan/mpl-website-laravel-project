<x-layout>

    <div class="space-y-10">
    {{-- 1.section --}}
  <section class="text-center pt-6">
      <h1 class="font-bold text-4xl">Let's find your next job</h1>

      <x-forms.form  action="/search" class="mt-6">
        <x-forms.input :label="false" name="q" placeholder="web browswer"></x-forms.input>
      </x-forms.form>
       {{-- <form action="" class="mt-4">
        <input type="text" placeholder="web developer.." class="rounded-xl bg-white/10 border-blue-50 px-3 py-4 w-full max-w-xl">
       </form> --}}
    </section>
    <section class="pt-10">
       <x-section-heading>Feature Job</x-section-heading>
        
        <div class="grid lg:grid-cols-3 gap-8">
          
          @foreach ($featuredJobs as $job)
          <x-job-card :$job></x-job-card>
          @endforeach
     
        </div>
    </section>

  {{-- 2.section --}}
    <section>
        <x-section-heading>Tags</x-section-heading>
          <div class="space-x-2">

          @foreach ($tags as $tag)
            <x-tag :$tag />
          @endforeach
          </div>
       
     </section>

  {{-- 3.section --}}
     <section>
        <x-section-heading>Recent job</x-section-heading>
        <div class="mt-6 space-y-6">
             @foreach ($jobs as $job)
             <x-job-card-wide :$job></x-job-card-wide>
             @endforeach
        
        </div>
        
        
     </section>


    </div>
</x-layout>