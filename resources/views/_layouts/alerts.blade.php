@if($success = session()->get('success'))
    <flash-alert text="{{ $success }}"></flash-alert>
@endif