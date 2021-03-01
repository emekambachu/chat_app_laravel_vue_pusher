@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chats</div>

                    <div class="panel-body" v-chat-scroll>
                        <chat-messages-component :messages="messages"></chat-messages-component>
                    </div>
                    <div class="panel-footer">
                        <chat-form-component
                            v-on:messagesent="addMessage"
                            :user="{{ Auth::user() }}"
                        ></chat-form-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
