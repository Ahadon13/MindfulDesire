<div class="flex flex-col w-full justify-center sm:justify-end sm:flex-row"
     x-data="{ registerModal: false, loginModal: false }"
     x-init=
     "
        $watch('registerModal', function(value){
                if(value === true){
                    document.body.classList.add('overflow-hidden');
                }else{
                    document.body.classList.remove('overflow-hidden');
                }
        });
        $watch('loginModal', function(value){
            if(value === true){
                document.body.classList.add('overflow-hidden');
            }else{
                document.body.classList.remove('overflow-hidden');
            }
        });
     "
>
    <button @click="loginModal = true" class="px-6 py-2 mr-0 text-gray-700 md:px-3 md:mr-2 lg:mr-3 md:w-auto">Sign In</button>
    <button @click="registerModal = true" class="inline-flex items-center px-5 px-6 py-3 text-sm font-medium leading-4 text-white bg-gray-900 md:w-auto md:rounded-full hover:bg-gray-800 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-gray-800 justify-center">Sign Up</button>

    {{-- ------------------ Register Modal ------------------ --}}
    <template x-teleport="body">

        <div
            x-show="registerModal"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="flex fixed inset-0 z-[99] w-screen h-screen bg-white"
        >
            <button @click="registerModal=false" class="absolute top-0 right-0 z-30 flex items-center justify-center px-3 py-2 mt-3 mr-3 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                <span>Close</span>
            </button>
            <div class="relative top-0 bottom-0 right-0 flex-shrink-0 hidden w-1/3 overflow-hidden bg-cover lg:block">
                <a href="{{ route('welcome') }}" class="absolute bottom-0 left-0 z-30 inline-flex items-end mb-4 ml-3 font-sans text-2xl font-extrabold text-left text-white no-underline bg-transparent cursor-pointer group focus:no-underline">
                    <svg class="w-auto h-4 -translate-y-px lg:h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="320" zoomAndPan="magnify" viewBox="0 0 240 239.999995" height="320" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/><clipPath id="8566f47a52"><path d="M 69 147 L 220 147 L 220 229 L 69 229 Z M 69 147 " clip-rule="nonzero"/></clipPath><clipPath id="8d2ead5006"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="d4ad84e206"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="431b22fd48"><path d="M 15 15 L 222 15 L 222 229 L 15 229 Z M 15 15 " clip-rule="nonzero"/></clipPath><clipPath id="14effbeece"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="295d1ab175"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="ddf95cc435"><path d="M 17 158 L 42 158 L 42 172 L 17 172 Z M 17 158 " clip-rule="nonzero"/></clipPath><clipPath id="b59fd35831"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="1e4ab71501"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="1eff27ae0e"><path d="M 15 171 L 44 171 L 44 185 L 15 185 Z M 15 171 " clip-rule="nonzero"/></clipPath><clipPath id="c7d250fafc"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="56b6d3e5c6"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="28692e23b7"><path d="M 22 184 L 46 184 L 46 198 L 22 198 Z M 22 184 " clip-rule="nonzero"/></clipPath><clipPath id="075f0a9fb3"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="4718943b27"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="7fba567e68"><path d="M 28 198 L 51 198 L 51 212 L 28 212 Z M 28 198 " clip-rule="nonzero"/></clipPath><clipPath id="e50d55a5c0"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="8f4ac2e157"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#8566f47a52)"><g clip-path="url(#8d2ead5006)"><g clip-path="url(#d4ad84e206)"><path fill="#fbb03b" d="M 168.390625 202.425781 C 177.605469 192.796875 184.507812 180.707031 187.953125 166.847656 C 189.09375 162.269531 189.804688 157.683594 190.121094 153.132812 C 182.710938 169.648438 169.746094 182.542969 154.085938 190.078125 C 145.027344 194.441406 134.15625 190.398438 130.214844 181.144531 L 122.859375 163.878906 C 121.632812 161.007812 119.132812 158.875 116.101562 158.125 L 74.296875 147.730469 C 74.289062 147.726562 74.277344 147.726562 74.269531 147.726562 C 71.410156 147.035156 68.816406 149.582031 69.460938 152.457031 L 70.300781 156.183594 C 71.863281 163.117188 76.9375 168.726562 83.675781 170.976562 L 86.101562 171.785156 L 96.730469 175.335938 C 99.742188 176.339844 102.085938 178.726562 103.039062 181.753906 L 105.957031 191.015625 L 107.589844 196.203125 L 116.738281 225.261719 C 116.902344 225.78125 117.148438 226.261719 117.460938 226.6875 C 118.355469 227.914062 119.789062 228.6875 121.363281 228.691406 C 121.375 228.691406 121.386719 228.6875 121.398438 228.691406 C 163.855469 228.761719 202.925781 203.242188 219.578125 163.574219 C 208.699219 183.34375 189.90625 197.339844 168.390625 202.425781 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#431b22fd48)"><g clip-path="url(#14effbeece)"><g clip-path="url(#295d1ab175)"><path fill="#233dff" d="M 99.640625 182.824219 C 99.03125 180.890625 97.523438 179.355469 95.601562 178.714844 L 82.546875 174.355469 C 74.675781 171.726562 68.648438 165.066406 66.824219 156.96875 L 66.03125 153.441406 C 65.464844 150.929688 66.101562 148.253906 67.878906 146.390625 C 69.710938 144.46875 72.355469 143.664062 74.925781 144.21875 L 75.15625 144.273438 L 88.542969 147.597656 C 85.890625 139.625 78.992188 133.796875 70.660156 132.535156 L 56.429688 130.375 C 50.335938 129.453125 46 124.011719 46.367188 117.859375 C 46.636719 113.296875 47.332031 108.695312 48.472656 104.097656 C 54.265625 80.796875 70.339844 62.757812 90.65625 53.613281 C 71.066406 60.511719 53.910156 73.546875 42.066406 91 C 59.941406 46.304688 108.5 20.527344 156.53125 32.46875 C 186.261719 39.859375 209.402344 60.117188 221.503906 85.832031 C 209.808594 53.816406 182.972656 27.976562 147.449219 19.046875 C 90.585938 4.753906 32.496094 39.542969 18.261719 96.421875 C 13.253906 116.445312 14.285156 136.558594 20.1875 154.847656 C 20.3125 155.234375 20.433594 155.621094 20.5625 156.003906 L 34.929688 157.09375 C 41.347656 157.585938 44.933594 164.796875 41.378906 170.160156 C 41.28125 170.308594 41.222656 170.390625 41.222656 170.390625 C 49.292969 175.820312 45.648438 184.09375 45.648438 184.09375 C 52.597656 189.617188 47.535156 196.191406 47.535156 196.191406 C 50.023438 198.027344 50.4375 200.507812 50.503906 201.304688 C 50.539062 201.707031 50.589844 202.113281 50.640625 202.519531 L 52.582031 217.605469 C 52.917969 220.199219 55.265625 222.839844 57.804688 223.46875 C 61.007812 224.265625 64.019531 221.617188 63.636719 218.335938 L 62.789062 211.035156 L 61.65625 201.296875 C 61.578125 200.617188 62.171875 200.042969 62.863281 200.160156 C 63.3125 200.238281 63.648438 200.628906 63.714844 201.082031 L 65.480469 212.757812 L 66.785156 221.40625 C 67.234375 224.382812 69.808594 226.664062 72.816406 226.542969 C 76.421875 226.398438 79.03125 223.050781 78.296875 219.523438 C 78.296875 219.519531 78.292969 219.515625 78.292969 219.511719 L 74.378906 200.878906 C 74.210938 200.078125 74.890625 199.355469 75.699219 199.476562 C 76.164062 199.546875 76.546875 199.890625 76.664062 200.347656 L 81.921875 221.042969 L 82.574219 223.609375 C 83.214844 226.140625 85.550781 227.957031 88.152344 227.757812 C 90.179688 227.605469 91.8125 226.347656 92.582031 224.664062 C 93.050781 223.632812 93.199219 222.445312 92.914062 221.246094 L 88.941406 204.480469 C 88.769531 203.742188 89.222656 202.964844 89.976562 202.851562 C 90.640625 202.75 91.25 203.175781 91.40625 203.808594 L 96.003906 222.332031 C 96.375 223.828125 97.164062 225.113281 98.214844 226.09375 C 99.964844 227.722656 102.445312 228.511719 104.957031 228.007812 C 105.441406 227.914062 105.898438 227.765625 106.335938 227.585938 C 109.964844 226.121094 111.996094 222.066406 110.773438 218.179688 L 99.640625 182.824219 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#ddf95cc435)"><g clip-path="url(#b59fd35831)"><g clip-path="url(#1e4ab71501)"><path fill="#fbb03b" d="M 23.179688 170.40625 L 34.46875 171.300781 C 37.859375 171.570312 40.824219 169.042969 41.09375 165.65625 C 41.359375 162.265625 38.832031 159.300781 35.445312 159.03125 L 24.152344 158.136719 C 20.765625 157.863281 17.800781 160.394531 17.53125 163.78125 C 17.261719 167.171875 19.792969 170.136719 23.179688 170.40625 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#1eff27ae0e)"><g clip-path="url(#c7d250fafc)"><g clip-path="url(#56b6d3e5c6)"><path fill="#fbb03b" d="M 43.703125 178.785156 C 43.972656 175.398438 41.441406 172.433594 38.054688 172.164062 L 22.550781 171.3125 C 19.160156 171.046875 16.195312 173.570312 15.929688 176.960938 C 15.660156 180.347656 18.1875 183.316406 21.574219 183.582031 L 37.078125 184.433594 C 40.46875 184.703125 43.433594 182.171875 43.703125 178.785156 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#28692e23b7)"><g clip-path="url(#075f0a9fb3)"><g clip-path="url(#4718943b27)"><path fill="#fbb03b" d="M 45.640625 192.324219 C 45.910156 188.933594 43.382812 185.96875 39.992188 185.699219 L 28.703125 184.800781 C 25.3125 184.535156 22.347656 187.0625 22.078125 190.453125 C 21.808594 193.839844 24.339844 196.804688 27.726562 197.074219 L 39.015625 197.96875 C 42.40625 198.238281 45.371094 195.710938 45.640625 192.324219 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#7fba567e68)"><g clip-path="url(#e50d55a5c0)"><g clip-path="url(#8f4ac2e157)"><path fill="#fbb03b" d="M 44.65625 199.097656 L 35.398438 198.304688 C 32.011719 198.03125 29.046875 200.5625 28.777344 203.949219 C 28.507812 207.335938 31.039062 210.300781 34.425781 210.574219 L 43.683594 211.367188 C 47.070312 211.636719 50.035156 209.109375 50.304688 205.722656 C 50.574219 202.332031 48.046875 199.367188 44.65625 199.097656 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g fill="#ffa800" fill-opacity="1"><g transform="translate(89.864147, 141.085584)"><g><path d="M 70.574219 -65.714844 L 70.574219 -65.988281 L 58.65625 -65.988281 L 37.945312 -12.097656 L 16.957031 -65.898438 L 3.847656 -65.898438 L 3.847656 -65.625 C 4.492188 -63.699219 6.78125 -58.199219 6.78125 -52.699219 L 6.78125 -18.238281 C 6.78125 -10.632812 3.941406 -3.117188 3.117188 -0.367188 L 3.117188 0.0898438 L 14.207031 0.0898438 L 14.207031 -0.367188 C 13.382812 -3.117188 10.539062 -10.632812 10.539062 -18.238281 L 10.539062 -52.699219 C 10.539062 -53.617188 10.539062 -54.535156 10.632812 -55.449219 L 32.261719 0 L 33.363281 -0.0898438 L 33.363281 0 L 37.304688 0 L 58.65625 -55.726562 L 58.65625 -13.289062 C 58.65625 -7.789062 57.101562 -2.292969 56.734375 -0.273438 L 56.734375 0 L 70.574219 0 L 70.574219 -0.273438 C 70.113281 -2.292969 68.648438 -7.789062 68.648438 -13.289062 L 68.648438 -52.699219 C 68.648438 -58.199219 70.113281 -63.699219 70.574219 -65.714844 Z M 70.574219 -65.714844 "/></g></g></g><g fill="#233dff" fill-opacity="1"><g transform="translate(164.825803, 141.085584)"><g><path d="M 27.039062 -65.988281 L 4.03125 -65.988281 L 4.03125 -65.714844 C 4.492188 -63.699219 5.957031 -58.199219 5.957031 -52.699219 L 5.957031 -13.289062 C 5.957031 -7.789062 4.492188 -2.292969 4.03125 -0.273438 L 4.03125 0 L 27.039062 0 C 43.625 0 58.109375 -13.015625 58.109375 -33.363281 C 58.109375 -52.882812 43.625 -65.988281 27.039062 -65.988281 Z M 24.5625 -3.390625 L 16.039062 -3.390625 L 16.039062 -62.597656 L 24.5625 -62.597656 C 38.675781 -62.597656 46.652344 -49.675781 46.742188 -33.363281 C 46.835938 -16.496094 38.675781 -3.390625 24.5625 -3.390625 Z M 24.5625 -3.390625 "/></g></g></g></svg>
                    <span class="text-xs text-logo-orange">Mindful</span><span class="text-xs text-logo-blue">Desire</span>
                    <span class="flex opacity-90 group-hover:scale-150 group-hover:opacity-100 items-center h-full group-hover:-rotate-6 ease-out duration-500 px-0.5 py-px ml-2 -translate-x-px text-[0.6rem] font-bold leading-none border-[2px] rounded border-white -translate-y-px">Blog</span>
                </a>
                <div class="absolute inset-0 z-20 w-full h-full opacity-70 bg-gradient-to-t from-black"></div>
                <img src="{{ asset('storage/mindful-desire/bg-1.jpg') }}" alt="MindfulDesire" class="z-10 object-cover w-full h-full" />
            </div>
            <div class="relative flex flex-wrap items-center w-full h-full px-8">

                <div class="relative w-full max-w-sm mx-auto lg:mb-0">
                    <div class="relative text-center">

                        <div class="flex flex-col mb-6 space-y-2">
                            <h1 class="text-2xl font-semibold tracking-tight">Create an account</h1>
                            <p class="text-sm text-neutral-500">Enter your email below to create your account</p>
                        </div>
                        <div class="space-y-2">
                            <livewire:user.register />
                        </div>
                    </div>
                    <p class="mt-6 text-sm text-center text-neutral-500">Already have an account? <button @click="registerModal=false; loginModal=true" class="relative font-medium text-blue-600 group"><span>Login here</span><span class="absolute bottom-0 left-0 w-0 group-hover:w-full ease-out duration-300 h-0.5 bg-blue-600"></span></button></p>
                    <p class="px-8 mt-1 text-sm text-center text-neutral-500">By continuing, you agree to our <a class="underline underline-offset-4 hover:text-primary" href="#">Terms</a> and <a class="underline underline-offset-4 hover:text-primary" href="#">Policy</a>.</p>
                </div>
            </div>
        </div>

    </template>

    {{-- ------------------ Login Modal ------------------ --}}
    <template x-teleport="body">

        <div
            x-show="loginModal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-y-full"
            x-transition:enter-end="translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="translate-y-0"
            x-transition:leave-end="translate-y-full"
            class="flex fixed inset-0 z-[99] w-screen h-screen bg-white"
        >
            <button @click="loginModal=false" class="absolute top-0 right-0 z-30 flex items-center justify-center px-3 py-2 mt-3 mr-3 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 lg:border-white/20 lg:bg-black/10 hover:lg:bg-black/30 text-neutral-600 lg:text-white hover:bg-neutral-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                <span>Close</span>
            </button>

            <div class="relative flex flex-wrap items-center w-full h-full px-8">

                <div class="relative w-full max-w-sm mx-auto lg:mb-0">
                    <div class="relative text-center">

                        <div class="flex flex-col mb-6 space-y-2">
                            <h1 class="text-2xl font-semibold tracking-tight">Sign in to your Account</h1>
                            <p class="text-sm text-neutral-500">Enter your email below to sign in</p>
                        </div>
                        <div class="space-y-2">
                            <livewire:user.login />
                        </div>
                    </div>
                    <p class="mt-6 text-sm text-center text-neutral-500">Don't have an account? <button @click="registerModal=true; loginModal=false" class="relative font-medium text-blue-600 group"><span>Sign up here</span><span class="absolute bottom-0 left-0 w-0 group-hover:w-full ease-out duration-300 h-0.5 bg-blue-600"></span></button></p>
                </div>
            </div>
            <div class="relative top-0 bottom-0 right-0 flex-shrink-0 hidden w-1/3 overflow-hidden bg-cover lg:block">
                <a href="{{ route('welcome') }}" class="absolute bottom-0 right-0 z-30 inline-flex items-end mb-4 mr-3 font-sans text-2xl font-extrabold text-left text-white no-underline bg-transparent cursor-pointer group focus:no-underline">
                    <svg class="w-auto h-4 -translate-y-px lg:h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="320" zoomAndPan="magnify" viewBox="0 0 240 239.999995" height="320" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/><clipPath id="8566f47a52"><path d="M 69 147 L 220 147 L 220 229 L 69 229 Z M 69 147 " clip-rule="nonzero"/></clipPath><clipPath id="8d2ead5006"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="d4ad84e206"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="431b22fd48"><path d="M 15 15 L 222 15 L 222 229 L 15 229 Z M 15 15 " clip-rule="nonzero"/></clipPath><clipPath id="14effbeece"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="295d1ab175"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="ddf95cc435"><path d="M 17 158 L 42 158 L 42 172 L 17 172 Z M 17 158 " clip-rule="nonzero"/></clipPath><clipPath id="b59fd35831"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="1e4ab71501"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="1eff27ae0e"><path d="M 15 171 L 44 171 L 44 185 L 15 185 Z M 15 171 " clip-rule="nonzero"/></clipPath><clipPath id="c7d250fafc"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="56b6d3e5c6"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="28692e23b7"><path d="M 22 184 L 46 184 L 46 198 L 22 198 Z M 22 184 " clip-rule="nonzero"/></clipPath><clipPath id="075f0a9fb3"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="4718943b27"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="7fba567e68"><path d="M 28 198 L 51 198 L 51 212 L 28 212 Z M 28 198 " clip-rule="nonzero"/></clipPath><clipPath id="e50d55a5c0"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath><clipPath id="8f4ac2e157"><path d="M 43.914062 -6.875 L 249.167969 44.152344 L 195.96875 258.136719 L -9.285156 207.109375 Z M 43.914062 -6.875 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#8566f47a52)"><g clip-path="url(#8d2ead5006)"><g clip-path="url(#d4ad84e206)"><path fill="#fbb03b" d="M 168.390625 202.425781 C 177.605469 192.796875 184.507812 180.707031 187.953125 166.847656 C 189.09375 162.269531 189.804688 157.683594 190.121094 153.132812 C 182.710938 169.648438 169.746094 182.542969 154.085938 190.078125 C 145.027344 194.441406 134.15625 190.398438 130.214844 181.144531 L 122.859375 163.878906 C 121.632812 161.007812 119.132812 158.875 116.101562 158.125 L 74.296875 147.730469 C 74.289062 147.726562 74.277344 147.726562 74.269531 147.726562 C 71.410156 147.035156 68.816406 149.582031 69.460938 152.457031 L 70.300781 156.183594 C 71.863281 163.117188 76.9375 168.726562 83.675781 170.976562 L 86.101562 171.785156 L 96.730469 175.335938 C 99.742188 176.339844 102.085938 178.726562 103.039062 181.753906 L 105.957031 191.015625 L 107.589844 196.203125 L 116.738281 225.261719 C 116.902344 225.78125 117.148438 226.261719 117.460938 226.6875 C 118.355469 227.914062 119.789062 228.6875 121.363281 228.691406 C 121.375 228.691406 121.386719 228.6875 121.398438 228.691406 C 163.855469 228.761719 202.925781 203.242188 219.578125 163.574219 C 208.699219 183.34375 189.90625 197.339844 168.390625 202.425781 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#431b22fd48)"><g clip-path="url(#14effbeece)"><g clip-path="url(#295d1ab175)"><path fill="#233dff" d="M 99.640625 182.824219 C 99.03125 180.890625 97.523438 179.355469 95.601562 178.714844 L 82.546875 174.355469 C 74.675781 171.726562 68.648438 165.066406 66.824219 156.96875 L 66.03125 153.441406 C 65.464844 150.929688 66.101562 148.253906 67.878906 146.390625 C 69.710938 144.46875 72.355469 143.664062 74.925781 144.21875 L 75.15625 144.273438 L 88.542969 147.597656 C 85.890625 139.625 78.992188 133.796875 70.660156 132.535156 L 56.429688 130.375 C 50.335938 129.453125 46 124.011719 46.367188 117.859375 C 46.636719 113.296875 47.332031 108.695312 48.472656 104.097656 C 54.265625 80.796875 70.339844 62.757812 90.65625 53.613281 C 71.066406 60.511719 53.910156 73.546875 42.066406 91 C 59.941406 46.304688 108.5 20.527344 156.53125 32.46875 C 186.261719 39.859375 209.402344 60.117188 221.503906 85.832031 C 209.808594 53.816406 182.972656 27.976562 147.449219 19.046875 C 90.585938 4.753906 32.496094 39.542969 18.261719 96.421875 C 13.253906 116.445312 14.285156 136.558594 20.1875 154.847656 C 20.3125 155.234375 20.433594 155.621094 20.5625 156.003906 L 34.929688 157.09375 C 41.347656 157.585938 44.933594 164.796875 41.378906 170.160156 C 41.28125 170.308594 41.222656 170.390625 41.222656 170.390625 C 49.292969 175.820312 45.648438 184.09375 45.648438 184.09375 C 52.597656 189.617188 47.535156 196.191406 47.535156 196.191406 C 50.023438 198.027344 50.4375 200.507812 50.503906 201.304688 C 50.539062 201.707031 50.589844 202.113281 50.640625 202.519531 L 52.582031 217.605469 C 52.917969 220.199219 55.265625 222.839844 57.804688 223.46875 C 61.007812 224.265625 64.019531 221.617188 63.636719 218.335938 L 62.789062 211.035156 L 61.65625 201.296875 C 61.578125 200.617188 62.171875 200.042969 62.863281 200.160156 C 63.3125 200.238281 63.648438 200.628906 63.714844 201.082031 L 65.480469 212.757812 L 66.785156 221.40625 C 67.234375 224.382812 69.808594 226.664062 72.816406 226.542969 C 76.421875 226.398438 79.03125 223.050781 78.296875 219.523438 C 78.296875 219.519531 78.292969 219.515625 78.292969 219.511719 L 74.378906 200.878906 C 74.210938 200.078125 74.890625 199.355469 75.699219 199.476562 C 76.164062 199.546875 76.546875 199.890625 76.664062 200.347656 L 81.921875 221.042969 L 82.574219 223.609375 C 83.214844 226.140625 85.550781 227.957031 88.152344 227.757812 C 90.179688 227.605469 91.8125 226.347656 92.582031 224.664062 C 93.050781 223.632812 93.199219 222.445312 92.914062 221.246094 L 88.941406 204.480469 C 88.769531 203.742188 89.222656 202.964844 89.976562 202.851562 C 90.640625 202.75 91.25 203.175781 91.40625 203.808594 L 96.003906 222.332031 C 96.375 223.828125 97.164062 225.113281 98.214844 226.09375 C 99.964844 227.722656 102.445312 228.511719 104.957031 228.007812 C 105.441406 227.914062 105.898438 227.765625 106.335938 227.585938 C 109.964844 226.121094 111.996094 222.066406 110.773438 218.179688 L 99.640625 182.824219 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#ddf95cc435)"><g clip-path="url(#b59fd35831)"><g clip-path="url(#1e4ab71501)"><path fill="#fbb03b" d="M 23.179688 170.40625 L 34.46875 171.300781 C 37.859375 171.570312 40.824219 169.042969 41.09375 165.65625 C 41.359375 162.265625 38.832031 159.300781 35.445312 159.03125 L 24.152344 158.136719 C 20.765625 157.863281 17.800781 160.394531 17.53125 163.78125 C 17.261719 167.171875 19.792969 170.136719 23.179688 170.40625 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#1eff27ae0e)"><g clip-path="url(#c7d250fafc)"><g clip-path="url(#56b6d3e5c6)"><path fill="#fbb03b" d="M 43.703125 178.785156 C 43.972656 175.398438 41.441406 172.433594 38.054688 172.164062 L 22.550781 171.3125 C 19.160156 171.046875 16.195312 173.570312 15.929688 176.960938 C 15.660156 180.347656 18.1875 183.316406 21.574219 183.582031 L 37.078125 184.433594 C 40.46875 184.703125 43.433594 182.171875 43.703125 178.785156 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#28692e23b7)"><g clip-path="url(#075f0a9fb3)"><g clip-path="url(#4718943b27)"><path fill="#fbb03b" d="M 45.640625 192.324219 C 45.910156 188.933594 43.382812 185.96875 39.992188 185.699219 L 28.703125 184.800781 C 25.3125 184.535156 22.347656 187.0625 22.078125 190.453125 C 21.808594 193.839844 24.339844 196.804688 27.726562 197.074219 L 39.015625 197.96875 C 42.40625 198.238281 45.371094 195.710938 45.640625 192.324219 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g clip-path="url(#7fba567e68)"><g clip-path="url(#e50d55a5c0)"><g clip-path="url(#8f4ac2e157)"><path fill="#fbb03b" d="M 44.65625 199.097656 L 35.398438 198.304688 C 32.011719 198.03125 29.046875 200.5625 28.777344 203.949219 C 28.507812 207.335938 31.039062 210.300781 34.425781 210.574219 L 43.683594 211.367188 C 47.070312 211.636719 50.035156 209.109375 50.304688 205.722656 C 50.574219 202.332031 48.046875 199.367188 44.65625 199.097656 " fill-opacity="1" fill-rule="nonzero"/></g></g></g><g fill="#ffa800" fill-opacity="1"><g transform="translate(89.864147, 141.085584)"><g><path d="M 70.574219 -65.714844 L 70.574219 -65.988281 L 58.65625 -65.988281 L 37.945312 -12.097656 L 16.957031 -65.898438 L 3.847656 -65.898438 L 3.847656 -65.625 C 4.492188 -63.699219 6.78125 -58.199219 6.78125 -52.699219 L 6.78125 -18.238281 C 6.78125 -10.632812 3.941406 -3.117188 3.117188 -0.367188 L 3.117188 0.0898438 L 14.207031 0.0898438 L 14.207031 -0.367188 C 13.382812 -3.117188 10.539062 -10.632812 10.539062 -18.238281 L 10.539062 -52.699219 C 10.539062 -53.617188 10.539062 -54.535156 10.632812 -55.449219 L 32.261719 0 L 33.363281 -0.0898438 L 33.363281 0 L 37.304688 0 L 58.65625 -55.726562 L 58.65625 -13.289062 C 58.65625 -7.789062 57.101562 -2.292969 56.734375 -0.273438 L 56.734375 0 L 70.574219 0 L 70.574219 -0.273438 C 70.113281 -2.292969 68.648438 -7.789062 68.648438 -13.289062 L 68.648438 -52.699219 C 68.648438 -58.199219 70.113281 -63.699219 70.574219 -65.714844 Z M 70.574219 -65.714844 "/></g></g></g><g fill="#233dff" fill-opacity="1"><g transform="translate(164.825803, 141.085584)"><g><path d="M 27.039062 -65.988281 L 4.03125 -65.988281 L 4.03125 -65.714844 C 4.492188 -63.699219 5.957031 -58.199219 5.957031 -52.699219 L 5.957031 -13.289062 C 5.957031 -7.789062 4.492188 -2.292969 4.03125 -0.273438 L 4.03125 0 L 27.039062 0 C 43.625 0 58.109375 -13.015625 58.109375 -33.363281 C 58.109375 -52.882812 43.625 -65.988281 27.039062 -65.988281 Z M 24.5625 -3.390625 L 16.039062 -3.390625 L 16.039062 -62.597656 L 24.5625 -62.597656 C 38.675781 -62.597656 46.652344 -49.675781 46.742188 -33.363281 C 46.835938 -16.496094 38.675781 -3.390625 24.5625 -3.390625 Z M 24.5625 -3.390625 "/></g></g></g></svg>
                    <span class="text-xs text-logo-orange">Mindful</span><span class="text-xs text-logo-blue">Desire</span>
                    <span class="flex opacity-90 group-hover:scale-150 group-hover:opacity-100 items-center h-full group-hover:-rotate-6 ease-out duration-500 px-0.5 py-px ml-2 -translate-x-px text-[0.6rem] font-bold leading-none border-[2px] rounded border-white -translate-y-px">Blog</span>
                </a>
                <div class="absolute inset-0 z-20 w-full h-full opacity-70 bg-gradient-to-t from-black"></div>
                <img src="{{ asset('storage/mindful-desire/bg-2.jpg') }}" alt="MindfulDesire" class="z-10 object-cover w-full h-full" />
            </div>
        </div>

    </template>
</div>
