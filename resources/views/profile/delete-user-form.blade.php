<div class="action-section">
    <div class="action-section-title">
        <h3>{{ __('Xóa tài khoản') }}</h3>
    </div>

    <div class="action-section-description">
        <p>{{ __('Xóa vĩnh viễn tài khoản của bạn.') }}</p>
    </div>

    <div class="action-section-content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Khi tài khoản của bạn bị xóa, tất cả tài nguyên và dữ liệu của nó sẽ bị xóa vĩnh viễn. Trước khi xóa tài khoản của bạn, vui lòng tải xuống bất kỳ dữ liệu hoặc thông tin nào bạn muốn giữ lại.') }}
        </div>

        <div class="mt-5">
            <button class="btn btn-danger" wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Xóa tài khoản') }}
            </button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel">{{ __('Xóa tài khoản') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ __('Bạn có chắc chắn muốn xóa tài khoản của mình không? Khi tài khoản của bạn bị xóa, tất cả tài nguyên và dữ liệu của nó sẽ bị xóa vĩnh viễn. Vui lòng nhập mật khẩu của bạn để xác nhận bạn muốn xóa vĩnh viễn tài khoản của mình.') }}

                        <div class="mt-4">
                            <input type="password" class="form-control" autocomplete="current-password" placeholder="{{ __('Password') }}" wire:model="password" wire:keydown.enter="deleteUser" />
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Hủy') }}</button>
                        <button type="button" class="btn btn-danger" wire:click="deleteUser" wire:loading.attr="disabled">{{ __('Xóa tài khoản') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
