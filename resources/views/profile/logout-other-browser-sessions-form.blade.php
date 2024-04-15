<div class="action-section">
    <div class="action-section-title">
        <h3>{{ __('Phiên trình duyệt') }}</h3>
    </div>

    <div class="action-section-description">
        <p>{{ __('Quản lý và đăng xuất các phiên hoạt động của bạn trên các trình duyệt và thiết bị khác.') }}</p>
    </div>

    <div class="action-section-content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Nếu cần, bạn có thể đăng xuất khỏi tất cả các phiên trình duyệt khác trên tất cả các thiết bị của mình. Một số phiên gần đây của bạn được liệt kê dưới đây; tuy nhiên, danh sách này có thể không đầy đủ. Nếu bạn cảm thấy tài khoản của mình đã bị xâm phạm, bạn cũng nên cập nhật mật khẩu của mình') }}
        </div>

        @if (count($this->sessions) > 0)
            <div class="mt-5 space-y-6">
                <!-- Other Browser Sessions -->
                @foreach ($this->sessions as $session)
                    <div class="flex items-center">
                        <div>
                            @if ($session->agent->isDesktop())
                                <i class="fas fa-desktop fa-3x text-gray-500"></i>
                            @else
                                <i class="fas fa-mobile-alt fa-3x text-gray-500"></i>
                            @endif
                        </div>

                        <div class="ms-3">
                            <div class="text-sm text-gray-600">
                                {{ $session->agent->platform() ? $session->agent->platform() : __('Unknown') }} - {{ $session->agent->browser() ? $session->agent->browser() : __('Unknown') }}
                            </div>

                            <div>
                                <div class="text-xs text-gray-500">
                                    {{ $session->ip_address }},

                                    @if ($session->is_current_device)
                                        <span class="text-green-500 font-semibold">{{ __('Thiết bị này') }}</span>
                                    @else
                                        {{ __('Hoạt động lần cuối') }} {{ $session->last_active }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="flex items-center mt-5">
            <button class="btn btn-primary" wire:click="confirmLogout" wire:loading.attr="disabled">
                {{ __('Đăng xuất khỏi các phiên trình duyệt khác') }}
            </button>

            <span class="ms-3" wire:loading wire:target="confirmLogout">{{ __('Thực Hiện.') }}</span>
        </div>

        <!-- Log Out Other Devices Confirmation Modal -->
        <div class="modal fade" id="confirmLogoutModal" tabindex="-1" aria-labelledby="confirmLogoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmLogoutModalLabel">{{ __('Đăng xuất khỏi các phiên trình duyệt khác') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ __('Vui lòng nhập mật khẩu của bạn để xác nhận bạn muốn đăng xuất khỏi các phiên trình duyệt khác trên tất cả các thiết bị của mình.') }}

                        <div class="mt-4">
                            <input type="password" class="form-control" autocomplete="current-password" placeholder="{{ __('Password') }}" wire:model="password" wire:keydown.enter="logoutOtherBrowserSessions" />
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Hủy') }}</button>
                        <button type="button" class="btn btn-primary" wire:click="logoutOtherBrowserSessions" wire:loading.attr="disabled">{{ __('Đăng xuất khỏi các phiên trình duyệt khác') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
