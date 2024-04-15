<div class="form-section">
    <h3>{{ __('Cập nhật mật khẩu') }}</h3>
    <p>{{ __('Đảm bảo tài khoản của bạn đang sử dụng mật khẩu dài, ngẫu nhiên để giữ an toàn.') }}</p>

    <form wire:submit.prevent="updatePassword">
        <div class="col-md-6 col-sm-4">
            <label for="current_password" class="form-label">{{ __('Mật khẩu hiện tại') }}</label>
            <input id="current_password" type="password" class="form-control" wire:model="state.current_password" autocomplete="current-password" />
            <span class="text-danger">@error('current_password') {{ $message }} @enderror</span>
        </div>

        <div class="col-md-6 col-sm-4">
            <label for="password" class="form-label">{{ __('Mật khẩu mới') }}</label>
            <input id="password" type="password" class="form-control" wire:model="state.password" autocomplete="new-password" />
            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
        </div>

        <div class="col-md-6 col-sm-4">
            <label for="password_confirmation" class="form-label">{{ __('Xác nhận mật khẩu') }}</label>
            <input id="password_confirmation" type="password" class="form-control" wire:model="state.password_confirmation" autocomplete="new-password" />
            <span class="text-danger">@error('password_confirmation') {{ $message }} @enderror</span>
        </div>

        <div class="col-md-6 col-sm-4">
            <button type="submit" class="btn btn-primary">{{ __('Lưu') }}</button>
            <span class="me-3" wire:loading wire:target="updatePassword">{{ __('Đang lưu...') }}</span>
        </div>

        <div class="col-md-6 col-sm-4">
            @if (session()->has('message'))
                <div class="alert alert-success mt-2">{{ session('message') }}</div>
            @endif
        </div>
    </form>
</div>
