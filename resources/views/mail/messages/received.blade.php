<x-mail::message>
    # Introduction

    Hello, Techclouds new Message Received from user <strong>{{$data['name']}}</strong>. user email
    <strong>{{$data['email']}}</strong>.<br>Message says

    <x-mail::panel>
        {{$data['message']}}
    </x-mail::panel>

    <x-mail::button :url="{{config('comapny.link')}}" :color="success">
        View Website
    </x-mail::button>

    Thanks,<br>
    {{ config('company.name') }}
</x-mail::message>