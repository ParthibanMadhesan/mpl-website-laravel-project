<x-layout>
    <x-page-heading>login</x-page-heading>
    <form method="POST" action="/login">
       @csrf
        <x-forms.input label="email" name="email" type="email" />
        <x-forms.input label="password" name="password" type="password" />
      
        <x-forms.button >login</x-forms.button>
    </form>

    
</x-layout>
