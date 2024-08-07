<div class="container content py-6 mx-auto">
    <div class="mx-auto">
        <div id="create-form" class="shadow-md p-6 bg-white border-blue-500 border-t-2">
            <div class="flex ">
                <h2 class="font-semibold text-lg text-gray-800 mb-5">Add new car</h2>
            </div>
            <div>
                <!-- Modal -->
                <div x-data="{ isOpen: false }">
                    <div>
                        <div x-show="isOpen"
                            class=" flex fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition items-center justify-center">
                            <div aria-hidden="true" class="fixed inset-0 w-full h-full bg-black/80 cursor-pointer"
                                @click="isOpen = false">
                            </div>
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-gray-200 rounded-lg shadow dark:bg-gray-100 sm:p-5">
                                    <!-- Modal header -->
                                    <div
                                        class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-black">
                                            Add new car here
                                        </h3>
                                        <button type="button" @click="isOpen = false"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-100 dark:hover:text-black"
                                            data-modal-toggle="defaultModal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="grid gap-4 mt-0 mb-4 sm:grid-cols-2">
                                        <div class="sm:col-span-2">
                                            <label for="registration_number"
                                                class="block mb-2 mt-0 text-sm font-medium text-gray-900 dark:text-black">Registration Number</label>
                                            <input type="text" name="registration_number" id="registration_number" wire:model="registration_number"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type Car Registration number">
                                            @error('registration_number')
                                                <p class="text-red-600">{{ $message }}</p>
                                            @enderror
                                            <label for="model"
                                                class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-black">Model</label>
                                            <input type="text" name="model" id="model" wire:model="model"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type Car model">
                                            @error('model')
                                                <p class="text-red-600">{{ $message }}</p>
                                            @enderror
                                            <label for="fuel_type"
                                                class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-black">Fuel Type</label>
                                            <input type="fuel_type" name="fuel_type" id="fuel_type" wire:model="fuel_type"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type Car fuel type">
                                            @error('fuel_type')
                                                <p class="text-red-600">{{ $message }}</p>
                                            @enderror
                                            <label for="transmission"
                                                class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-black">Transmission</label>
                                            <input type="tel" name="transmission" id="transmission" wire:model="transmission"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type Car transmission">
                                            @error('transmission')
                                                <p class="text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <button wire:click="create" type="submit"
                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Submit
                                    </button>
                                    @if (session('success'))
                                        <span class="text-green-500 text-xs">{{ session('success') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center items-center">
                        <button {{-- wire:click="isOpen= true"  --}} x-on:click="isOpen = true"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add +
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
