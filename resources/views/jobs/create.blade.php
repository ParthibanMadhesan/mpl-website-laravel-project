<x-layout>

    <x-page-heading>  new job </x-page-heading>
 
         <x-forms.form method="POST" action="/jobs">
            <x-forms.input label="Title" name="title" placeholder="ceo"/>
            <x-forms.input label="Salary" name="salary" placeholder="$9000 usd"/>
            <x-forms.input label="Location" name="location" placeholder="ceo"/>
            <x-forms.select label="schedule" name="schedule">
                <option>part time</option>
                <option>full time</option>
            </x-forms.select>
            <x-forms.input label="URL" name="url" placeholder="https://www.dtechelectronics.com/"/>
            <x-forms.checkbox label="cost extra(featured)" name="featured"/>

            <x-forms.input label="Tags(comma seperated)" name="tags" placeholder="partiban,vedio,"/>
            <x-forms.button>submit</x-forms.button>
         </x-forms.form>    
 
</x-layout>