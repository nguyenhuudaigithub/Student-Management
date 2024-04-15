<div class="action-section">
    <div class="action-section-title">
        <h3>{{ __('Xác thực hai yếu tố') }}</h3>
    </div>

    <div class="action-section-description">
        <p>{{ __('Thêm bảo mật bổ sung cho tài khoản của bạn bằng xác thực hai yếu tố.') }}</p>
    </div>

    <div class="action-section-content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                @if ($showingConfirmation)
                    {{ __('Hoàn tất việc bật xác thực hai yếu tố.') }}
                @else
                    {{ __('Bạn chưa kích hoạt xác thực hai yếu tố.') }}
                @endif
            @else
                {{ __('Bạn chưa bật xác thực hai yếu tố.') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('Khi xác thực hai yếu tố được bật, bạn sẽ được nhắc nhập mã thông báo ngẫu nhiên, an toàn trong quá trình xác thực. Bạn có thể truy xuất mã thông báo này từ ứng dụng Google Authenticator trên điện thoại của mình') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        @if ($showingConfirmation)
                            {{ __('Để hoàn tất việc bật xác thực hai yếu tố, hãy quét mã QR sau bằng ứng dụng xác thực của điện thoại hoặc nhập khóa thiết lập và cung cấp mã OTP đã tạo.') }}
                        @else
                            {{ __('Xác thực hai yếu tố hiện đã được bật. Quét mã QR sau bằng ứng dụng xác thực của điện thoại hoặc nhập khóa thiết lập.') }}
                        @endif
                    </p>
                </div>

                <div class="mt-4 p-2 inline-block bg-white">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>

                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Khóa thiết lập') }}: {{ decrypt($this->user->two_factor_secret) }}
                    </p>
                </div>

                @if ($showingConfirmation)
                    <div class="mt-4">
                        <label for="code" class="block text-sm font-medium text-gray-700">{{ __('Code') }}</label>
                        <input id="code" type="text" name="code" class="mt-1 block w-1/2 form-control" inputmode="numeric" autofocus autocomplete="one-time-code"
                            wire:model="code"
                            wire:keydown.enter="confirmTwoFactorAuthentication" />
                        @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                @endif
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Lưu trữ các mã khôi phục này trong trình quản lý mật khẩu an toàn. Chúng có thể được sử dụng để khôi phục quyền truy cập vào tài khoản của bạn nếu thiết bị xác thực hai yếu tố của bạn bị mất.') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-confirms-password wire:then="enableTwoFactorAuthentication">
                    <button type="button" class="btn btn-primary" wire:loading.attr="disabled">
                        {{ __('Bật') }}
                    </button>
                </x-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-confirms-password wire:then="regenerateRecoveryCodes">
                        <button type="button" class="btn btn-secondary me-3">
                            {{ __('Tạo lại mã khôi phục') }}
                        </button>
                    </x-confirms-password>
                @elseif ($showingConfirmation)
                    <x-confirms-password wire:then="confirmTwoFactorAuthentication">
                        <button type="button" class="btn btn-primary me-3" wire:loading.attr="disabled">
                            {{ __('Xác nhận') }}
                        </button>
                    </x-confirms-password>
                @else
                    <x-confirms-password wire:then="showRecoveryCodes">
                        <button type="button" class="btn btn-secondary me-3">
                            {{ __('Hiển thị mã khôi phục') }}
                        </button>
                    </x-confirms-password>
                @endif

                @if ($showingConfirmation)
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <button type="button" class="btn btn-secondary" wire:loading.attr="disabled">
                            {{ __('Hủy') }}
                        </button>
                    </x-confirms-password>
                @else
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <button type="button" class="btn btn-danger" wire:loading.attr="disabled">
                            {{ __('Vô hiệu hóa') }}
                        </button>
                    </x-confirms-password>
                @endif

            @endif
        </div>
    </div>
</div>
