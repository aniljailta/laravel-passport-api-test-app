<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>@lang('labels.frontend.user.profile.avatar')</th>
            @if(!is_null($user->avatar_location))

            <td><img width="100" height="150" src="{{ url('storage/'.$user->avatar_location) }}" class="user-profile-image" /></td>
            @else
            <td><span>Upload Profile Image</span></td>

            @endif

        </tr> 
        <tr>
            <th>@lang('labels.frontend.user.profile.name')</th>
            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
        </tr>
        <tr>
            <th>@lang('labels.frontend.user.profile.email')</th>
            <td>{{ $user->email }}</td>
        </tr>
        
    </table>
</div>
