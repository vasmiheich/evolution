<?php

use EvolutionCMS\Facades\ManagerTheme;

?>
@extends('manager::template.page')
@section('content')
    @push('scripts.top')
        <script>
          var actions = {
            save: function() {
              documentDirty = false;
              document.userform.save.click();
            },
            cancel: function() {
              documentDirty = false;
              document.location.href = 'index.php?a=2';
            }
          };
        </script>
    @endpush

    <h1>
        <i class="{{ ManagerTheme::getStyle('icon_lock') }}"></i>{{ __('global.change_password') }}
    </h1>

    @include('manager::partials.actionButtons', $actionButtons)

    <div class="tab-page">
        <div class="contaier container-body">
            <form name="userform" method="post" action="index.php">
                @csrf
                <input type="hidden" name="a" value="34">
                <p>{{ __('global.change_password_message') }}</p>
                @include('manager::form.input', [
                    'name' => 'password',
                    'type' => 'password',
                    'label' => __('global.change_password_new'),
                    'value' => ''
                ])
                @include('manager::form.input', [
                    'name' => 'password_confirmation',
                    'type' => 'password',
                    'label' => __('global.change_password_confirm'),
                    'value' => ''
                ])
                <input type="submit" name="save" style="display:none">
            </form>
        </div>
    </div>
@endsection
