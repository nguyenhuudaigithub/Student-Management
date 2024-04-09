@component('mail::message')
{{ __('Bạn nhận được email này vì chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.', ['team' => $invitation->team->name]) }}

@if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::registration()))
{{ __('Nếu bạn chưa có tài khoản, bạn có thể tạo một tài khoản bằng cách nhấp vào nút bên dưới. Sau khi tạo tài khoản, bạn có thể nhấp vào nút chấp nhận lời mời trong email này để chấp nhận lời mời nhóm:') }}

@component('mail::button', ['url' => route('register')])
{{ __('Tạo tài khoản') }}
@endcomponent

{{ __('Nếu bạn đã có tài khoản, bạn có thể chấp nhận lời mời này bằng cách nhấp vào nút bên dưới:') }}

@else
{{ __('Bạn có thể chấp nhận lời mời này bằng cách nhấp vào nút bên dưới:') }}
@endif


@component('mail::button', ['url' => $acceptUrl])
{{ __('Chấp nhận lời mời') }}
@endcomponent

{{ __('Nếu bạn không mong đợi nhận được lời mời đến nhóm này, bạn có thể hủy email này.') }}
@endcomponent
