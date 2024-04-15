<div class="form-section">
    <h3>{{ __('Thông tin cá nhân') }}</h3>
    <p>{{ __('Cập nhật thông tin hồ sơ và địa chỉ email của tài khoản của bạn.') }}</p>

    <form wire:submit.prevent="updateProfileInformation">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div x-data="{photoName: null, photoPreview: null}" class="col-md-6 col-sm-4">
            <input type="file" id="photo" class="hidden" wire:model.live="photo" style=" display: none;" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />
            <!-- Current Profile Photo -->
            <div class="mt-2" x-show="! photoPreview">
                <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover" style="height: 150px;
    width: 150px;
    border-radius: 50%;">
            </div>

            <!-- New Profile Photo Preview -->
            <div class="mt-2" x-show="photoPreview" style="display: none;">
                <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center" x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                </span>
            </div>

            <button type="button" class="btn btn-secondary mt-2 me-2" x-on:click.prevent="$refs.photo.click()">
                {{ __('Chọn ảnh mới') }}
            </button>

            @if ($this->user->profile_photo_path)
            <button type="button" class="btn btn-secondary mt-2" wire:click="deleteProfilePhoto">
                {{ __('Xóa ảnh') }}
            </button>
            @endif

            <span class="text-danger">@error('photo') {{ $message }} @enderror</span>
        </div>
        @endif

        <!-- Name -->
        <div class="col-md-6 col-sm-4">
            <label for="name" class="form-label">{{ __('Họ và tên') }}</label>
            <input id="name" type="text" class="form-control" wire:model="state.name" required autocomplete="name" />
            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
        </div>

        <!-- Department Id -->
        <div class="col-md-6 col-sm-4">
            <label for="departmentId" class="form-label">{{ __('Mã phòng ban') }}</label>
            <input id="departmentId" type="text" class="form-control" wire:model="state.departmentId" required autocomplete="departmentId" />
            <span class="text-danger">@error('departmentId') {{ $message }} @enderror</span>
        </div>

        <!-- Address -->
        <div class="col-md-6 col-sm-4">
            <label for="address" class="form-label">{{ __('Địa chỉ') }}</label>
            <input id="address" type="text" class="form-control" wire:model="state.address" required autocomplete="address" />
            <span class="text-danger">@error('address') {{ $message }} @enderror</span>
        </div>


        <!-- Email -->
        <div class="col-md-6 col-sm-4">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" type="email" class="form-control" wire:model="state.email" required autocomplete="username" />
            <span class="text-danger">@error('email') {{ $message }} @enderror</span>

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
            <p class="text-sm mt-2">
                {{ __('Địa chỉ email của bạn chưa được xác minh.') }}

                <button type="button" class="btn btn-link text-sm text-gray-600" wire:click.prevent="sendEmailVerification">
                    {{ __('Nhấp vào đây để gửi lại email xác minh.') }}
                </button>
            </p>

            @if ($this->verificationLinkSent)
            <p class="mt-2 font-medium text-sm text-success">
                {{ __('Một liên kết xác minh mới đã được gửi đến địa chỉ email của bạn.') }}
            </p>
            @endif
            @endif
        </div>

        <div class="col-md-6 col-sm-4">
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="photo">
                {{ __('Lưu') }}
            </button>

            <span class="me-3" wire:loading wire:target="photo">{{ __('Đang lưu...') }}</span>
        </div>

        @if (session()->has('message'))
        <div class="col-md-6 col-sm-4">
            <div class="alert alert-success mt-2">{{ session('message') }}</div>
        </div>
        @endif
    </form>
</div>
