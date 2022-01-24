
@extends("layouts.app")
@section("content")
    

<div class="bg-gray-100 h-screen antialiased leading-none font-sans">
{{--  <div class="flex flex-col">  --}}
    <button type="button"
    x-data="{}" x-on:click="window.livewire.emitTo('welcome-modal', 'show')"
    class="">
  Sign up
</button>
<livewire:welcome-modal />
{{--  </div>  --}}
</div>
@endsection