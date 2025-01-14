<?php

use EvolutionCMS\Facades\ManagerTheme;

?>
@extends('manager::template.page')
@section('content')
    @push('scripts.top')
        <script src="media/script/element-properties.js"></script>
        <script>
          var elementProperties = new ElementProperties({
            name: 'elementProperties',
            lang: {
              parameter: '{{ __('global.parameter') }}',
              value: '{{ __('global.value') }}',
              set_default: '{{ __('global.set_default') }}'
            },
            icon_refresh: '{{ ManagerTheme::getStyle('icon_refresh') }}',
            table: 'displayparams',
            tr: 'displayparamrow',
            td: 'displayparams'
          })

          var actions = {
            save: function () {
              documentDirty = false
              form_save = true
              document.mutate.save.click()
              saveWait('mutate')
            }, duplicate: function () {
              if (confirm(`{{ __('global.confirm_duplicate_record') }}`) === true) {
                documentDirty = false
                document.location.href = "index.php?id={{ $data->getKey() }}&a=98"
              }
            }, delete: function () {
              if (confirm(`{{ __('global.confirm_delete_snippet') }}`) === true) {
                documentDirty = false
                document.location.href = 'index.php?id={{ $data->getKey() }}&a=25'
              }
            }, cancel: function () {
              documentDirty = false
              document.location.href = 'index.php?a=76&tab=3'
            }
          }

          function setTextWrap (ctrl, b) {
            if (!ctrl) {
              return
            }
            ctrl.wrap = (b) ? 'soft' : 'off'
          }

          document.addEventListener('DOMContentLoaded', function () {
            var h1help = document.querySelector('h1 > .help')
            h1help.onclick = function () {
              document.querySelector('.element-edit-message').classList.toggle('show')
            }
          })

        </script>
    @endpush

    <form name="mutate" method="post" action="index.php">
        @csrf
        {!! get_by_key($events, 'OnSnipFormPrerender') !!}
        <input type="hidden" name="a" value="24">
        <input type="hidden" name="id" value="{{ $data->getKey() }}">
        <input type="hidden" name="mode" value="{{ $action }}">

        <h1>
            <i class="{{ ManagerTheme::getStyle('icon_code') }}"></i>
            @if($data->name)
                {{ $data->name }}
                <small>({{ $data->getKey() }})</small>
            @else
                {{ __('global.new_snippet') }}
            @endif
            <i class="{{ ManagerTheme::getStyle('icon_question_circle') }} help"></i>
        </h1>

        @include('manager::partials.actionButtons', $actionButtons)

        <div class="container element-edit-message">
            <div class="alert alert-info">{!! __('global.snippet_msg') !!}</div>
        </div>

        <div class="tab-pane" id="snipetPane">
            <script>
              var tpSnippet = new WebFXTabPane(document.getElementById('snipetPane'),
                      {{ get_by_key(evo()->config, 'remember_last_tab') ? 1 : 0 }})
            </script>

            <!-- General -->
            <div class="tab-page" id="tabSnippet">
                <h2 class="tab">{{ __('global.settings_general') }}</h2>
                <script>tpSnippet.addTabPage(document.getElementById('tabSnippet'))</script>

                <div class="container container-body">
                    @include('manager::form.row', [
                        'for' => 'name',
                        'label' => __('global.snippet_name'),
                        'element' => '<div class="form-control-name clearfix">' .
                            view('manager::form.inputElement', [
                                'name' => 'name',
                                'value' => $data->name,
                                'class' => 'form-control-lg',
                                'attributes' => 'onchange="documentDirty=true;" maxlength="100"'
                            ]) .
                            (evo()->hasPermission('save_role')
                            ? '<label class="custom-control" data-tooltip="' . __('global.lock_snippet') . "\n" . __('global.lock_snippet_msg') .'">' .
                             view('manager::form.inputElement', [
                                'type' => 'checkbox',
                                'name' => 'locked',
                                'checked' => $data->locked == 1
                             ]) .
                             '<i class="' . ManagerTheme::getStyle('icon_lock') . '"></i>
                             </label>
                             <small class="form-text text-danger hide" id="savingMessage"></small>
                             <script>if (!document.getElementsByName(\'name\')[0].value) document.getElementsByName(\'name\')[0].focus();</script>'
                            : '') .
                            '</div>'
                    ])

                    @include('manager::form.input', [
                        'name' => 'description',
                        'id' => 'description',
                        'label' => __('global.snippet_desc'),
                        'value' => $data->description,
                        'attributes' => 'onchange="documentDirty=true;" maxlength="255"'
                    ])

                    @include('manager::form.select', [
                        'name' => 'categoryid',
                        'id' => 'categoryid',
                        'label' => __('global.existing_category'),
                        'value' => $data->category,
                        'first' => [
                            'text' => ''
                        ],
                        'options' => $categories->pluck('category', 'id'),
                        'attributes' => 'onchange="documentDirty=true;"'
                    ])

                    @include('manager::form.input', [
                        'name' => 'newcategory',
                        'id' => 'newcategory',
                        'label' => __('global.new_category'),
                        'value' => $data->newcategory ?  : '',
                        'attributes' => 'onchange="documentDirty=true;" maxlength="45"'
                    ])

                    <div class="form-row">
                        <label for="disabled">
                            @include('manager::form.inputElement', [
                                'type' => 'checkbox',
                                'name' => 'disabled',
                                'value' => 'on',
                                'checked' => $data->disabled === 1
                            ])
                            @if($data->disabled == 1)
                                <span class="text-danger">{{ __('global.disabled') }}</span>
                            @else
                                {{ __('global.disabled') }}
                            @endif
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            @include('manager::form.inputElement', [
                                'type' => 'checkbox',
                                'name' => 'parse_docblock',
                                'value' => 1,
                                'checked' => ($action == 23)
                            ])
                            {{ __('global.parse_docblock') }}
                        </label>
                        <small class="form-text text-muted">{!! __('global.parse_docblock_msg') !!}</small>
                    </div>
                </div>

                <!-- PHP text editor start -->
                <div class="navbar navbar-editor">
                    <span>{{ __('global.snippet_code') }}</span>
                </div>
                <div class="section-editor clearfix">
                    @include('manager::form.textareaElement', [
                        'name' => 'post',
                        'value' => $data->post ?? $data->sourceCode,
                        'class' => 'phptextarea',
                        'rows' => 20,
                        'attributes' => 'onChange="documentDirty=true;" wrap="soft"'
                    ])
                </div>
                <!-- PHP text editor end -->
            </div>

            <!-- Config -->
            <div class="tab-page" id="tabConfig">
                <h2 class="tab">{{ __('global.settings_config') }}</h2>
                <script>tpSnippet.addTabPage(document.getElementById('tabConfig'))</script>

                <div class="container container-body">
                    <div class="form-group">
                        <a href="javascript:;" class="btn btn-primary"
                           onclick="elementProperties.setDefaults(this);return false;">
                            {{ __('global.set_default_all') }}
                        </a>
                    </div>
                    <div id="displayparamrow">
                        <div id="displayparams"></div>
                    </div>
                </div>
            </div>

            <!-- Properties -->
            <div class="tab-page" id="tabProps">
                <h2 class="tab">{{ __('global.settings_properties') }}</h2>
                <script>tpSnippet.addTabPage(document.getElementById('tabProps'))</script>

                <div class="container container-body">
                    <div class="form-group">
                        @include('manager::form.select', [
                            'name' => 'moduleguid',
                            'label' => __('global.import_params'),
                            'value' => $data->moduleguid,
                            'first' => [
                                'text' => ''
                            ],
                            'options' => $importParams,
                            'attributes' => 'onchange="documentDirty=true;"',
                            'comment' => __('global.import_params_msg')
                        ])
                    </div>
                    <div class="form-group">
                        <a href="javascript:;" class="btn btn-primary"
                           onclick='tpSnippet.pages[1].select();elementProperties.showParameters(this);return false;'>
                            {{ __('global.update_params') }}
                        </a>
                    </div>
                </div>

                <!-- HTML text editor start -->
                <div class="section-editor clearfix">
                    @include('manager::form.textareaElement', [
                        'name' => 'properties',
                        'value' => $data->properties,
                        'class' => 'phptextarea',
                        'rows' => 20,
                        'attributes' => 'onChange="documentDirty=true;elementProperties.showParameters(this);"'
                    ])
                </div>
                <!-- HTML text editor end -->
            </div>

            <!-- docBlock Info -->
            <div class="tab-page" id="tabDocBlock">
                <h2 class="tab">{{ __('global.information') }}</h2>
                <script>tpSnippet.addTabPage(document.getElementById('tabDocBlock'))</script>

                <div class="container container-body">
                    {!! $docBlockList  !!}
                </div>
            </div>

            <input type="submit" name="save" style="display:none">

            {!! get_by_key($events, 'OnSnipFormRender') !!}
        </div>
    </form>
    <script>setTimeout('elementProperties.showParameters();', 10)</script>
@endsection
