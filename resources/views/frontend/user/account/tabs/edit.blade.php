{{ html()->modelForm($user, 'POST', url('account/api/profile/update'))->id('edit_form')->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}

    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.avatar'))->for('avatar') }}

                <div>
                    <input type="radio" name="avatar_type" value="gravatar" {{ $user->avatar_type == 'gravatar' ? 'checked' : '' }} /> Gravatar
                    <input type="radio" name="avatar_type" value="storage" {{ $user->avatar_type == 'storage' ? 'checked' : '' }} /> Upload

                   
                </div>
            </div><!--form-group-->

            <div class="form-group hidden" id="avatar_location">
                {{ html()->file('avatar_location')->class('form-control-file') }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.first_name'))->for('first_name') }}

                {{ html()->text('first_name')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.first_name'))
                    ->attribute('maxlength', 191)
                    ->required()
                    ->autofocus() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.last_name'))->for('last_name') }}

                {{ html()->text('last_name')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.last_name'))
                    ->attribute('maxlength', 191)
                    ->required() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.father'))->for('father') }}

                {{ html()->text('father')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.father'))
                    ->attribute('maxlength', 191)
                    ->required()
                    ->value(is_null($user->details)?'': $user->details->father_name)
                    ->autofocus() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.mother'))->for('mother') }}

                {{ html()->text('mother')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.mother'))
                    ->attribute('maxlength', 191)
                    ->required()
                    ->value(is_null($user->details)?'': $user->details->mother_name)
                    ->autofocus() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.wife'))->for('wife') }}

                {{ html()->text('wife')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.wife'))
                    ->attribute('maxlength', 191)
                    ->value(is_null($user->details)?'': $user->details->wife)
                    ->required()
                    ->autofocus() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
    
    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.child'))->for('child') }}

                {{ html()->text('child')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.child'))
                    ->attribute('maxlength', 191)
                    ->value(is_null($user->details)?'': $user->details->child)
                    ->autofocus() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
    <div class="row">
        <div class="col">
            <div class="form-group">
            {{ html()->label(__('validation.attributes.frontend.address')) }}

            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.street'))->for('street') }}

                {{ html()->text('street')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.street'))
                    ->attribute('maxlength', 191)
                    ->value(is_null($user->address)?'': $user->address->street)
                    ->autofocus() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.city'))->for('city') }}

                {{ html()->text('city')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.city'))
                    ->attribute('maxlength', 191)
                    ->required()
                    ->value(is_null($user->address)?'': $user->address->city)

                    ->autofocus() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.state'))->for('state') }}

                {{ html()->text('state')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.state'))
                    ->attribute('maxlength', 191)
                    ->value(is_null($user->address)?'': $user->address->state)

                    ->required()
                    ->autofocus() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.country'))->for('country') }}

                {{ html()->text('country')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.country'))
                    ->attribute('maxlength', 191)
                    ->required()
                    ->value(is_null($user->address)?'': $user->address->country)

                    ->autofocus() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.zipcode'))->for('zipcode') }}

                {{ html()->number('zipcode')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.zipcode'))
                    ->attribute('maxlength', 191)
                    ->value(is_null($user->address)?'': $user->address->zip_code)

                    ->required()
                    ->autofocus() }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col">
            <div class="form-group mb-0 clearfix">
                {{ form_submit(__('labels.general.buttons.update')) }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
{{ html()->closeModelForm() }}

@push('after-scripts')
    <script>
        $(function() {
            var avatar_location = $("#avatar_location");

            if ($('input[name=avatar_type]:checked').val() === 'storage') {
                avatar_location.show();
            } else {
                avatar_location.hide();
            }

            $('input[name=avatar_type]').change(function() {
                if ($(this).val() === 'storage') {
                    avatar_location.show();
                } else {
                    avatar_location.hide();
                }
            });
        });
$('#edit_form').submit(function (e) { 
// console.log(this, $(this).serialize())
    e.preventDefault(); // avoid to execute the actual submit of the form.
    // var formData = new FormData($(this)[0]);
    var  form= $(this);
    // var url = form[0].attr('action');
    var form = $('#edit_form')[0];

    var data = new FormData(form);
    $.ajax({
           type: "POST",
           url: '/api/profile/update',
           enctype: 'multipart/form-data',
           processData: false,
           contentType: false,
            cache: false,
           headers: {"Authorization": "Bearer " + localStorage.getItem('acessToken')},
           data:data, // serializes the form's elements.
           success: function(data)
           { console.log(data);
               if(data.status == 200){
                localStorage.setItem("acessToken", data.acees_token);
                window.location.replace(link);
               }
               
            
           }
         });
    });
    </script>
@endpush
