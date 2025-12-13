<div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
    <!-- Card Header -->
    <div class="px-6 py-3">
        <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            {{ $userId ? 'Update User' : 'Create User' }}
        </h3>
    </div>

    <!-- Card Body -->
    <div class="p-2 border-t border-gray-100 dark:border-gray-800 sm:px-6 sm:py-3">
        <form wire:submit.prevent="createNewUser" method="POST">
            <div class="space-y-5">
                <!-- Elements -->
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Name <span class="text-red-500">*</span>
                    </label>

                    <div class="relative">
                        <input type="text" wire:model.defer="name"
                            class="
                            w-full rounded-lg border px-4 py-2.5 pr-10 text-sm shadow-theme-xs bg-transparent 
                            text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden 
                            dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30

                            @error('name')
                                border-error-300 text-error-600 
                                focus:ring-error-500/20 dark:border-error-700 dark:text-error-400
                            @else
                                border-gray-300 dark:border-gray-700 focus:border-brand-500 focus:ring-brand-500/10
                            @enderror
                        ">

                        @error('name')
                            <span class="absolute right-3.5 top-1/2 -translate-y-1/2">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.58325 7.99967C2.58325 5.00813 5.00838 2.58301 7.99992 2.58301C10.9915 2.58301 13.4166 5.00813 13.4166 7.99967C13.4166 10.9912 10.9915 13.4163 7.99992 13.4163C5.00838 13.4163 2.58325 10.9912 2.58325 7.99967ZM7.99992 1.08301C4.17995 1.08301 1.08325 4.17971 1.08325 7.99967C1.08325 11.8196 4.17995 14.9163 7.99992 14.9163C11.8199 14.9163 14.9166 11.8196 14.9166 7.99967C14.9166 4.17971 11.8199 1.08301 7.99992 1.08301ZM7.09932 5.01639C7.09932 5.51345 7.50227 5.91639 7.99932 5.91639H7.99999C8.49705 5.91639 8.89999 5.51345 8.89999 5.01639C8.89999 4.51933 8.49705 4.11639 7.99999 4.11639H7.99932C7.50227 4.11639 7.09932 4.51933 7.09932 5.01639ZM7.99998 11.8306C7.58576 11.8306 7.24998 11.4948 7.24998 11.0806V7.29627C7.24998 6.88206 7.58576 6.54627 7.99998 6.54627C8.41419 6.54627 8.74998 6.88206 8.74998 7.29627V11.0806C8.74998 11.4948 8.41419 11.8306 7.99998 11.8306Z"
                                        fill="#F04438"></path>
                                </svg>
                            </span>
                        @enderror
                    </div>

                    @error('name')
                        <p class="mt-1.5 text-theme-xs text-error-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Elements -->
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Username <span class="text-red-500">*</span>
                    </label>

                    <div class="relative">
                        <input type="text" wire:model.defer="username"
                            class="
                            w-full rounded-lg border px-4 py-2.5 pr-10 text-sm shadow-theme-xs bg-transparent 
                            text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden 
                            dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30

                            @error('username')
                                border-error-300 text-error-600 
                                focus:ring-error-500/20 dark:border-error-700 dark:text-error-400
                            @else
                                border-gray-300 dark:border-gray-700 focus:border-brand-500 focus:ring-brand-500/10
                            @enderror
                        ">

                        @error('username')
                            <span class="absolute right-3.5 top-1/2 -translate-y-1/2">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.58325 7.99967C2.58325 5.00813 5.00838 2.58301 7.99992 2.58301C10.9915 2.58301 13.4166 5.00813 13.4166 7.99967C13.4166 10.9912 10.9915 13.4163 7.99992 13.4163C5.00838 13.4163 2.58325 10.9912 2.58325 7.99967ZM7.99992 1.08301C4.17995 1.08301 1.08325 4.17971 1.08325 7.99967C1.08325 11.8196 4.17995 14.9163 7.99992 14.9163C11.8199 14.9163 14.9166 11.8196 14.9166 7.99967C14.9166 4.17971 11.8199 1.08301 7.99992 1.08301ZM7.09932 5.01639C7.09932 5.51345 7.50227 5.91639 7.99932 5.91639H7.99999C8.49705 5.91639 8.89999 5.51345 8.89999 5.01639C8.89999 4.51933 8.49705 4.11639 7.99999 4.11639H7.99932C7.50227 4.11639 7.09932 4.51933 7.09932 5.01639ZM7.99998 11.8306C7.58576 11.8306 7.24998 11.4948 7.24998 11.0806V7.29627C7.24998 6.88206 7.58576 6.54627 7.99998 6.54627C8.41419 6.54627 8.74998 6.88206 8.74998 7.29627V11.0806C8.74998 11.4948 8.41419 11.8306 7.99998 11.8306Z"
                                        fill="#F04438"></path>
                                </svg>
                            </span>
                        @enderror
                    </div>

                    @error('username')
                        <p class="mt-1.5 text-theme-xs text-error-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>



                <!-- Elements -->
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Email <span class="text-red-500">*</span>
                    </label>

                    <div class="relative">

                        {{-- Left Icon --}}
                        <span
                            class="absolute top-1/2 left-0 -translate-y-1/2 border-r px-3.5 py-3 text-gray-500 
                                border-gray-200 dark:border-gray-800 dark:text-gray-400">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.04175 7.06206V14.375C3.04175 14.6511 3.26561 14.875 3.54175 14.875H16.4584C16.7346 14.875 16.9584 14.6511 16.9584 14.375V7.06245L11.1443 11.1168C10.457 11.5961 9.54373 11.5961 8.85638 11.1168L3.04175 7.06206ZM16.9584 5.19262C16.9584 5.19341 16.9584 5.1942 16.9584 5.19498V5.20026C16.9572 5.22216 16.946 5.24239 16.9279 5.25501L10.2864 9.88638C10.1145 10.0062 9.8862 10.0062 9.71437 9.88638L3.07255 5.25485C3.05342 5.24151 3.04202 5.21967 3.04202 5.19636C3.042 5.15695 3.07394 5.125 3.11335 5.125H16.8871C16.9253 5.125 16.9564 5.15494 16.9584 5.19262ZM18.4584 5.21428V14.375C18.4584 15.4796 17.563 16.375 16.4584 16.375H3.54175C2.43718 16.375 1.54175 15.4796 1.54175 14.375V5.19498C1.54175 5.1852 1.54194 5.17546 1.54231 5.16577C1.55858 4.31209 2.25571 3.625 3.11335 3.625H16.8871C17.7549 3.625 18.4584 4.32843 18.4585 5.19622C18.4585 5.20225 18.4585 5.20826 18.4584 5.21428Z"
                                    fill="#667085" />
                            </svg>
                        </span>

                        {{-- Input --}}
                        <input type="text" wire:model.defer="email" placeholder="info@gmail.com"
                            class="
                                h-11 w-full rounded-lg border bg-transparent px-4 py-2.5 pl-[62px] text-sm 
                                shadow-theme-xs text-gray-800 placeholder:text-gray-400 
                                focus:ring-3 focus:outline-hidden
                                dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30

                                @error('email')
                                    border-error-300 text-error-600 
                                    focus:ring-error-500/20 dark:border-error-700 dark:text-error-400
                                @else
                                    border-gray-300 dark:border-gray-700 
                                    focus:border-brand-300 dark:focus:border-brand-800 
                                    focus:ring-brand-500/10
                                @enderror
                            " />

                        {{-- Error Icon --}}
                        @error('email')
                            <span class="absolute right-3.5 top-1/2 -translate-y-1/2">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.58325 7.99967C2.58325 5.00813 5.00838 2.58301 7.99992 2.58301C10.9915 2.58301 13.4166 5.00813 13.4166 7.99967C13.4166 10.9912 10.9915 13.4163 7.99992 13.4163C5.00838 13.4163 2.58325 10.9912 2.58325 7.99967ZM7.99992 1.08301C4.17995 1.08301 1.08325 4.17971 1.08325 7.99967C1.08325 11.8196 4.17995 14.9163 7.99992 14.9163C11.8199 14.9163 14.9166 11.8196 14.9166 7.99967C14.9166 4.17971 11.8199 1.08301 7.99992 1.08301ZM7.09932 5.01639C7.09932 5.51345 7.50227 5.91639 7.99932 5.91639H7.99999C8.49705 5.91639 8.89999 5.51345 8.89999 5.01639C8.89999 4.51933 8.49705 4.11639 7.99999 4.11639H7.99932C7.50227 4.11639 7.09932 4.51933 7.09932 5.01639ZM7.99998 11.8306C7.58576 11.8306 7.24998 11.4948 7.24998 11.0806V7.29627C7.24998 6.88206 7.58576 6.54627 7.99998 6.54627C8.41419 6.54627 8.74998 6.88206 8.74998 7.29627V11.0806C8.74998 11.4948 8.41419 11.8306 7.99998 11.8306Z"
                                        fill="#F04438" />
                                </svg>
                            </span>
                        @enderror

                    </div>

                    {{-- Error Message --}}
                    @error('email')
                        <p class="mt-1.5 text-theme-xs text-error-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                <!-- Elements -->
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Role <span class="text-red-500">*</span>
                    </label>

                    <div class="relative z-20 bg-transparent">
                        <select wire:model.live="role" @class([
                            'dark:bg-dark-900 shadow-theme-xs h-11 w-full appearance-none rounded-lg border bg-transparent px-4 py-2.5 pr-11 text-sm focus:ring-3 focus:outline-hidden',
                            'border-gray-300 text-gray-800 placeholder:text-gray-400 focus:border-brand-300 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800' => !$errors->has(
                                'role'),
                            'border-red-500 focus:border-red-500 focus:ring-red-500/10' => $errors->has(
                                'role'),
                        ])>
                            <option value="">
                                ::.. Pilih Role ..::
                            </option>

                            @foreach ($roles as $item)
                                <option value="{{ $item->name }}">
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>

                        <span
                            class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2
                            {{ $errors->has('role') ? 'text-red-500' : 'text-gray-700 dark:text-gray-400' }}">
                            <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>

                    {{-- Error message --}}
                    @error('role')
                        <p class="mt-1 text-sm text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                @if ($role === 'admin-prodi')
                    <!-- Elements -->
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                            Program Studi <span class="text-red-500">*</span>
                        </label>

                        <div class="relative z-20 bg-transparent">
                            <select wire:model.defer="prodi_id" @class([
                                'dark:bg-dark-900 shadow-theme-xs h-11 w-full appearance-none rounded-lg border bg-transparent px-4 py-2.5 pr-11 text-sm focus:ring-3 focus:outline-hidden',
                                'border-gray-300 text-gray-800 placeholder:text-gray-400 focus:border-brand-300 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800' => !$errors->has(
                                    'prodi_id'),
                                'border-red-500 focus:border-red-500 focus:ring-red-500/10' => $errors->has(
                                    'prodi_id'),
                            ])>
                                <option value="">
                                    ::.. Pilih Program Studi ..::
                                </option>

                                @foreach ($program_studi as $prodi)
                                    <option value="{{ $prodi->id }}">
                                        {{ $prodi->nama }} - {{ $prodi->jenjang }}
                                    </option>
                                @endforeach
                            </select>

                            <span
                                class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2
                                    {{ $errors->has('prodi_id') ? 'text-red-500' : 'text-gray-700 dark:text-gray-400' }}">
                                <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>

                        {{-- Error message --}}
                        @error('prodi_id')
                            <p class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                @endif


                <!-- Elements -->
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Password
                        @if ($userId)
                            <span class="text-xs text-gray-400">(kosongkan jika tidak diubah)</span>
                        @endif
                    </label>

                    <input type="password" wire:model.defer="password" placeholder="********"
                        @class([
                            'dark:bg-dark-900 shadow-theme-xs h-11 w-full rounded-lg border bg-transparent px-4 py-2.5 text-sm focus:ring-3 focus:outline-hidden',
                            'border-gray-300 text-gray-800 placeholder:text-gray-400 focus:border-brand-300 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800' => !$errors->has(
                                'password'),
                            'border-red-500 focus:border-red-500 focus:ring-red-500/10' => $errors->has(
                                'password'),
                        ]) />

                    @error('password')
                        <p class="mt-1 text-sm text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                <!-- Elements -->
                @if (!$userId || $password)
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                            Confirm Password <span class="text-red-500">*</span>
                        </label>

                        <input type="password" wire:model.defer="password_confirmation" placeholder="********"
                            @class([
                                'dark:bg-dark-900 shadow-theme-xs h-11 w-full rounded-lg border bg-transparent px-4 py-2.5 text-sm focus:ring-3 focus:outline-hidden',
                                'border-gray-300 text-gray-800 placeholder:text-gray-400 focus:border-brand-300 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800' => !$errors->has(
                                    'password_confirmation'),
                                'border-red-500 focus:border-red-500 focus:ring-red-500/10' => $errors->has(
                                    'password_confirmation'),
                            ]) />

                        @error('password_confirmation')
                            <p class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                @endif


                <div class="flex items-center gap-3 px-2 mt-6 lg:justify-end">
                    <a wire:navigate href="{{ route('users.index') }}" type="button"
                        class="flex w-full justify-center rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] sm:w-auto">
                        Back
                    </a>

                    <button wire:target="createNewUser" type="submit"
                        class="flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto">
                        {{ $userId ? 'Update User' : 'Create User' }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
